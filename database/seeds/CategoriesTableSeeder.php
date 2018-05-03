<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    protected $category;
    protected $faker;
    public function __construct(Category $category,Faker $faker){
      $this->category = $category;
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

      foreach (range(1,5) as $key) {
        $this->category->create([
          'name' => $faker->word(),
          'description' => $faker->word()
        ]);
        }
     }
    }
