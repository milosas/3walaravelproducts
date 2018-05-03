<?php

use App\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CompaniesTableSeeder extends Seeder
{
  protected $company;
  protected $faker;
  public function __construct(Company $company,Faker $faker){
    $this->company = $company;
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

      foreach (range(1,10) as $key) {
        $this->company->create([
       'name' => $faker->word(),
       'country' => $faker->country(),
       'phone' => $faker->buildingNumber()
     ]);
    }
  }
}
