<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        if (!Storage::disk('local')->exists('file.txt')) {
            Storage::disk('local')->put('file.txt', 'YAY ! les cron marchent !');
        } else {
            Storage::disk('local')->append('file.txt', 'YAY ! les cron marchent encore + !');
        }
    }
}
