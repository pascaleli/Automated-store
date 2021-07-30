<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Smart Opo mobile',
            'price'=>'700',
            'description'=>'A smartphone with 4gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/JDUC4e38GVMBJHsW8'
            ],
            [
            'name'=>'Iphone mobile',
            'price'=>'400',
            'description'=>'A smartphone called Iphone mobile 4gb ram more feature',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/VB8CHLPgCeXqC2e9A'
            ],
            [
            'name'=>'Samsung Phone mobile',
            'price'=>'200',
            'description'=>'This is a samsung phone  with 4gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/vrpdW43e9BA8bAV68'
            ],
            [
            'name'=>'Tchno tv',
            'price'=>'300',
            'description'=>'This is a techno phone with 4gb ram and much more features',
            'category'=>'tv',
            'gallery'=>'https://images.app.goo.gl/r2cUfpTPHScyGFaj7'
            ],
            [
            'name'=>'LG4 television',
            'price'=>'200',
            'description'=>'Lg5 with 4gb ram and much more features',
            'category'=>'tv',
            'gallery'=>'https://images.app.goo.gl/u9VJAXEAtEeUmhJF7'
            ],
            [
            'name'=>'LG4 Fridge',
            'price'=>'1000',
            'description'=>'Lg5 with 4gb ram and much more features',
            'category'=>'Fridge',
            'gallery'=>'https://images.app.goo.gl/fbATKbz3JC9emFhz8'
            ]
       
        ]);
    }
}
