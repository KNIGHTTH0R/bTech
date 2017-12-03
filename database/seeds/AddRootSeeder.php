<?php

use Illuminate\Database\Seeder;
use App\User;

class AddRootSeeder extends Seeder
{
    /**
     * Add root user
     *
     * @return void
     */
    public function run()
    {
        $root = new User();

        $root->name = 'root';
        $root->email = 'root@root.dev';
        $root->password = bcrypt('example');

        $root->save();
    }
}
