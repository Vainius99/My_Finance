<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(YearSeeder::class);
        $this->call(MonthSeeder::class);
        $this->call(IncomeSeeder::class);
        $this->call(ExpenseSeeder::class);
    }
}
