<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncApiData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-api-data';

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
        $apiData = json_decode(file_get_contents('https://api.publicapis.org/entries'), true);

        foreach ($apiData['entries'] as $apiRecord) {
            \App\Models\Apirecord::updateOrCreate(
                ['api' => $apiRecord['API']],
                [
                    'description' => $apiRecord['Description'],
                    'auth' => $apiRecord['Auth'],
                    'https' => $apiRecord['HTTPS'],
                    'cors' => $apiRecord['Cors'],
                    'link' => $apiRecord['Link'],
                    'category' => $apiRecord['Category'],
                ]
            );
        }

        $this->info('API data synced successfully!');
    }
}
