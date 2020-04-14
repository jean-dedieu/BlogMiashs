<?php
use App\User;
use App\Role;
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
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->create());
        }); 
        //les seeds pour les utilisateur crées et leurs roles
        $this->call(RolesTableSeeder::class);

        $this->call(UsersTableSeeder::class);
 
    }
}
