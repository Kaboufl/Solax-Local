<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use App\Models\ProductionData;

class SolaxService
{
    protected $apiURL;
    public function __construct($apiURL)
    {
        $this->apiURL = $apiURL;
    }

    
    public
    $yieldToday, $yieldTotal,
    $totalPower,$feedInPower,$gridPower,$gridVoltage,$gridCurrent,$gridFreq,
    $feedInEnergy,$consumeEnergy,
    $pv1, 
    $pv2;

    public $statusCode;

    private function read8BitUnsigned($n)
    {
        return $n % 256;
    }

    private function read16BitSigned($n)
    {
        if ($n > 32767) {
            $n = $n - 65536;
        }

        return $n;
    }

    private function read32BitUnsigned($a, $b)
    {
        return $b + $a * 65536;
    }

    private function read32BitSigned($a, $b)
    {
        if ($a < 32768) {
            return $b + $a * 65536;
        } else {
            return $b + 65536 * $a - 4294967296;
        }
    }

    

    /**
     * This function parses the response from the inverter to get the data we need.
     * 
     * Yield_Today: Data[13] / 10,
     * Yield_Total: read32BitUnsigned(Data[11], Data[12]) / 10,
     * PowerDc1: Data[7],
     * PowerDc2: Data[8],
     * feedInPower: read32BitSigned(Data[48], Data[49]),
     * GridAPower: read16BitSigned(Data[2]),
     * FeedInEnergy: read32BitUnsigned(Data[50], Data[51]) / 100,
     * ConsumeEnergy: read32BitUnsigned(Data[52], Data[53]) / 100,
     * RunMode: Data[10],
     * Vdc1: Data[3] / 10,
     * Vdc2: Data[4] / 10,
     * Idc1: Data[5] / 10,
     * Idc2: Data[6] / 10,
     * GridAVoltage: Data[0] / 10,
     * GridACurrent: read16BitSigned(Data[1]) / 10,
     * FreqacA: Data[9] / 100,
     * 
     * Source : https://github.com/nazar-pc/solax-local-api-docs/blob/master/Data2.txt
     *
     * @param [type] $response
     * @return void
     */
    public function parse($debug = false): ProductionData
    {
        if ($debug) {
            $file = Storage::disk('local')->get('example-response.json');
            $response = json_decode($file, true);
            $this->statusCode = 200;
        } else {
            $response = $this->get();
        }

        if (!$response) {
            throw new \Exception("No response from inverter");
        }
        $data = $response['Data'];
        $this->yieldTotal = $this->read32BitUnsigned($data[11], $data[12]) / 10;
        $this->totalPower = $data[7] + $data[8];
        $this->feedInPower = $this->read32BitSigned($data[48], $data[49]);
        /**
         * The data belows waits to be implemented
         */
        $this->feedInEnergy = $this->read32BitUnsigned($data[50], $data[51]) / 100;
        $this->consumeEnergy = $this->read32BitUnsigned($data[52], $data[53]) / 100;
        /* ------------------------------ */

        $productionData = new ProductionData();

        $productionData->yield_today = $data[13] / 10;

        $productionData->grid_power = $this->read16BitSigned($data[2]);
        $productionData->grid_voltage = $data[0] / 10;
        $productionData->grid_current = $this->read16BitSigned($data[1]) / 10;
        $productionData->grid_freq = $data[9] / 100;

        $productionData->pv1_power = $data[7];
        $productionData->pv1_voltage = $data[3] / 10;
        $productionData->pv1_current = $data[5] / 10;

        $productionData->pv2_power = $data[8];
        $productionData->pv2_voltage = $data[4] / 10;
        $productionData->pv2_current = $data[6] / 10;

        $productionData->measured_at = \Carbon\Carbon::now();

        return $productionData;
    }

    public function get()
    {
        $apiURL = "http://" . $this->apiURL;

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => '*/*'
        ];

        $body = [
            'optType' => 'ReadRealTimeData',
            'pwd' => env('ONDULEUR_PWD')
        ];

        try {
            $response = Http::timeout(3)->asForm()
                            ->withHeaders($headers)
                            ->post($apiURL, $body);

            $this->statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
        } catch (\Throwable $th) {
            return false;
        }

        return $responseBody;
    }
}
