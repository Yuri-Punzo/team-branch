<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->title = $faker->sentence(3);
            $product->slug = Str::slug($product->title, '-');
            $product->description = $faker->text(210);
            //$new_project->cover_image = $faker->image('storage/app/public/placeholders', 600, 300, 'Product', false, true);
            $product->save();
        }
    }
}
