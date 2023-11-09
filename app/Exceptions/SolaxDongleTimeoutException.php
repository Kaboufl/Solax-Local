<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;

abstract class SolaxDongleTimeoutException extends Exception
{

    public static function render(): Response
    {
        $status = 408;
        $error = "Impossible de contacter le module WiFi de votre onduleur";
        $help = "Vérifiez que votre onduleur est bien allumé, ainsi que votre configuration réseau";

        return response(["error" => $error, "help" => $help], $status);
    }
}
