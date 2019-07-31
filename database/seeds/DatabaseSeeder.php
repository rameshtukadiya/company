<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\User;
use App\Phone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class)->create([
            'name' => 'Apple',
        ]);

        factory(Company::class)->create([
            'name' => 'Testa',
        ]);

        factory(User::class)->create([
            'name' => 'Steve',
            'company_id' => 1,
        ]);

        factory(User::class)->create([
            'name' => 'Elon',
            'company_id' => 2,
        ]);

        factory(Phone::class)->create([
            'number' => '123456789',
            'user_id' => 1,
        ]);

        factory(Phone::class)->create([
            'number' => '987654321',
            'user_id' => 2,
        ]);



    }
}
