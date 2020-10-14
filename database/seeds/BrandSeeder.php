<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'name' => "Ford",
            ],
            [
                'name' => "Iveco",
            ] ,
            [
                'name' => "Mercedes-Benz"
            ],
        ]);
    }
}
