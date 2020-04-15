<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //vider la table user et les roles des users pour éviter les conlits

        User::truncate();
        DB::table('role_user')->truncate();

        //création des utilisateurs

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('password')
        ]);

       $auteur =  User::create([
            'name'=>'auteur',
            'email'=>'auteur@auteur.com',
            'password'=> Hash::make('password')
        ]);


        $utilisateur = User::create([
            'name'=>'utilisateur',
            'email'=>'utilisateur@utilisateur.com',
            'password'=> Hash::make('password')
        ]);

          //on récupère les roles pour les attacher aux utilisateurs

          $adminRole = Role::where('name','admin')->first();
          $auteurRole = Role::where('name','auteur')->first();
          $utilisateurRole = Role::where('name','utilisateur')->first();

          //on attache chaque utilisateur à son role respectif

          $admin->roles()->attach($adminRole);
          $auteur->roles()->attach($auteurRole);
          $utilisateur->roles()->attach($utilisateurRole);


    }
}
