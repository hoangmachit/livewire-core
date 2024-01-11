<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = DB::table('products')->first();

        $optionId = DB::table('options')->insertGetId([
            'option_name' => 'Size',
            'product_id' => $product->id,
        ]);

        $dataOptionValue = [
            [
                'option_id' => $optionId,
                'option_value_name' => '38',
            ],
            [
                'option_id' => $optionId,
                'option_value_name' => '39',
            ],
            [
                'option_id' => $optionId,
                'option_value_name' => '40',
            ],
            [
                'option_id' => $optionId,
                'option_value_name' => '41',
            ],
        ];

        DB::table('option_values')->insert($dataOptionValue);

        $optionId = DB::table('options')->insertGetId([

            'option_name' => 'Color',
            'product_id' => $product->id,
        ]);

        $dataOptionValue = [
            [
                'option_id' => $optionId,
                'option_value_name' => 'Black',
            ],
            [
                'option_id' => $optionId,
                'option_value_name' => 'Blue',
            ],
            [
                'option_id' => $optionId,
                'option_value_name' => 'Green',
            ],
        ];

        DB::table('option_values')->insert($dataOptionValue);
    }
}
