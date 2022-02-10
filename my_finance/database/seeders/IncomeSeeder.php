<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;
use App\Models\Month;
use Illuminate\Support\Facades\DB;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $years = Year::all();
        $months = Month::all();

        foreach($years as $year){
            foreach($months as $month) {

                DB::table("incomes")->insert([
                    'type' => 'Work',
                    'comment' => 'none',
                    'amount' => '900',
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
                DB::table("incomes")->insert([
                    'type' => 'Second Work',
                    'comment' => 'none',
                    'amount' => '600',
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
            }
        }
    }
}
