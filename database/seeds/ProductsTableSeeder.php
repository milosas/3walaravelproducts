<?php

use App\Product;
use App\Category;
use App\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class ProductsTableSeeder extends Seeder
{
    protected $product;
    protected $fakes;
    protected $categ_id;
    protected $comp_id;

    public function __construct(Product $product,Category $categ_id,Company $comp_id,Faker $faker){
      $this->product = $product;
      $this->categ_id = $categ_id;
      $this->comp_id = $comp_id;
      $this->faker = $faker;

    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = $this->faker->create();

      $comp_id = $this->comp_id->pluck('id');
      $categ_id = $this->categ_id->pluck('id');
      for ($i=1; $i < 51; $i++) {
      $this->product->create([
       'name' => $faker->word(),
       'description' => $faker->word(),
       'photo' => $faker->word(),
       'price' => $faker->buildingNumber(),
       'quantity' => $faker->buildingNumber(),
       'company_id' => $comp_id->Random(),
       'category_id' => $categ_id->Random(),

     ]);
    }
  }
}
