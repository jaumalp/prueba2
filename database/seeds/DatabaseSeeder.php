<?php

use App\Pedido;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            factory(User::class,10)->create();

            factory(Pedido::class,30)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
