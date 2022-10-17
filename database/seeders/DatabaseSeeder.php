<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Profile;
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
        $user = \App\Models\User::factory()->create([

            'name'=>'Nord Coders',
            'email'=>'nord@coders.com',

        ]);

        $profile = Profile::factory()->create([
            
            'user_id'=>$user->id

        ]);

        Experience::factory(5)->create([
            
            'profile_id'=>$profile->id

        ]);
            
    }
}
