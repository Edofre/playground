<?php

namespace App\Console\Commands\Availability;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CheckCoffeeAvailability extends Command
{
    /**  */
    const NESPRESSO_ENDPOINT = 'https://live-nes-b2c-koffieplein.s3.eu-central-1.amazonaws.com/capsule-grid/static/data/highlight-2.json';

    /** @var string */
    protected $signature = 'availability:coffee {coffeeId?}';
    /** @var string  */
    protected $description = 'Check nespresso stock to see if the specified coffee is available';

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle()
    {
        // 7712.20 == 'India' -> not in stock :(
        // 7834.20 == 'Fortissio Lungo' -> in stock
        $coffeeId = $this->argument('coffeeId') ?? '7712.20';
        
        try {
            $response = Http::get(self::NESPRESSO_ENDPOINT);

            if ($response->successful()) {
                $responseData = json_decode($response->body(), true);

                $outOfStock = $responseData['soldOut']['SkU'] ?? [];
                
                if(in_array($coffeeId, $outOfStock)) {
                    $this->error("Coffee {$coffeeId} is not in stock :(");
                } else {
                    // TODO, send email
                    $this->info("Coffee {$coffeeId} is in stock :)");
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
