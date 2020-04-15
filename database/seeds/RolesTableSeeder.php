<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //précise ce qui se passe quand on fait db:seed

      Role::truncate();

      //création des roles

      Role::create(['name'=>'admin']);
      Role::create(['name'=>'auteur']);
      Role::create(['name'=>'utilisateur']);
    }
}
