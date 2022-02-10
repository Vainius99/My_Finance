<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;
use App\Models\Month;
use Illuminate\Support\Facades\DB;

class ExpenseSeeder extends Seeder
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

                DB::table("expenses")->insert([
                    'type' => 'Food',
                    'comment' => 'none',
                    'amount' => rand(150,200),
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);

                DB::table("expenses")->insert([
                    'type' => 'Taxes',
                    'comment' => 'none',
                    'amount' => rand(60,90),
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
                DB::table("expenses")->insert([
                    'type' => 'Other',
                    'comment' => 'none',
                    'amount' => rand(200,300),
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
                DB::table("expenses")->insert([
                    'type' => 'Loan',
                    'comment' => 'none',
                    'amount' => "73",
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
                DB::table("expenses")->insert([
                    'type' => 'Rent',
                    'comment' => 'none',
                    'amount' => "280",
                    'year_id' => $year->id,
                    'month_id' => $month->id
                ]);
            }
        }
    }
}
