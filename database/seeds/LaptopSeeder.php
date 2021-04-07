<?php

use Illuminate\Database\Seeder;
use App\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'model' => "Thinkpad",
                'brand' => "Ibm",
                'description' => "Pc ibm molto forte",
                'price' => 1560.99
            ],
            [
                'model' => "M1",
                'brand' => "Apple",
                'description' => "Apple portatile nuovo",
                'price' => 3049.99
            ],
            [
                'model' => "Nitro 5",
                'brand' => "Acer",
                'description' => "Pc acer",
                'price' => 1099.99
            ]
        ];

        foreach($list as $laptop){
            $newLaptop = new Laptop();
            $newLaptop->fill($laptop);
            $newLaptop->save();
        }
    }
}
