<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => "Shekel",
                'code' => "ILS",
            ],
            [
                'name' => "Dram",
                'code' => "AMD",
            ],
        ];

        DB::table('currencies')->insert($currencies);
    }
}
