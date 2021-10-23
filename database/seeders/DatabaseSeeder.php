<?php

namespace Database\Seeders;

use App\Models\Advt;
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
        $users = \App\Models\User::factory(10)->create();
        $advts = \App\Models\Advt::factory()->count(100)->make(['user_id' => null]);

        $advts->each(function (Advt $advt) use ($users) {
            $advt->user()->associate($users->random());
            $advt->save();
        });
    }
}
