<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::factory()->create([
            User::name=>'Test',
            User::email=>'test@wp.pl',
            User::password=>'test1234',
        ]);
        $user2 = User::factory()->create([
            User::name=>'Test2',
            User::email=>'test2@wp.pl',
            User::password=>'test1234',
        ]);
        $user3 = User::factory()->create([
            User::name=>'Test3',
            User::email=>'test3@wp.pl',
            User::password=>'test1234',
        ]);
        $user4 = User::factory()->create([
            User::name=>'Test4',
            User::email=>'test4@wp.pl',
            User::password=>'test1234',
        ]);
        $user5 = User::factory()->create([
            User::name=>'Test5',
            User::email=>'test5@wp.pl',
            User::password=>'test1234',
        ]);
        $user6 = User::factory()->create([
            User::name=>'Test6',
            User::email=>'test6@wp.pl',
            User::password=>'test1234',
        ]);
        $user7 = User::factory()->create([
            User::name=>'Test7',
            User::email=>'test7@wp.pl',
            User::password=>'test1234',
        ]);
        $user8 = User::factory()->create([
            User::name=>'Test8',
            User::email=>'test8@wp.pl',
            User::password=>'test1234',
        ]);
        $user9 = User::factory()->create([
            User::name=>'Test9',
            User::email=>'test9@wp.pl',
            User::password=>'test1234',
        ]);
        $user10 =User:: factory()->create([
            User::name=>'Test10',
            User::email=>'test10@wp.pl',
            User::password=>'test1234',
        ]);
    }
}
