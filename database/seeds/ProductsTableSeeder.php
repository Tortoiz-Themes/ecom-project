<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class, 15)->create()
            ->each(function ($product){
                $product->metas()->createMany(
                    factory(App\Models\ProductMeta::class, 3)->make()->toArray()
                );;
            });
    }
}
