<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\DB;

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

        $admin1 = User::create([
            'name'=>'admin1',
            'email'=>'admin@admin1.com',
            'password'=> Hash::make('password')
        ]);
        $admin2= User::create([
            'name'=>'admin2',
            'email'=>'admin@admin2.com',
            'password'=> Hash::make('password')
        ]);
        $admin3 = User::create([
            'name'=>'admin3',
            'email'=>'admin@admin3.com',
            'password'=> Hash::make('password')
        ]);

       $auteur1 =  User::create([
            'name'=>'auteur1',
            'email'=>'auteur@auteur1.com',
            'password'=> Hash::make('password')
        ]);
        $auteur2 =  User::create([
            'name'=>'auteur2',
            'email'=>'auteur@auteur2.com',
            'password'=> Hash::make('password')
        ]);
        $auteur3 =  User::create([
            'name'=>'auteur3',
            'email'=>'auteur@auteur3.com',
            'password'=> Hash::make('password')
        ]);
        $auteur4 =  User::create([
            'name'=>'auteur4',
            'email'=>'auteur@auteur4.com',
            'password'=> Hash::make('password')
        ]);
        $auteur5=  User::create([
            'name'=>'auteur5',
            'email'=>'auteur@auteur5.com',
            'password'=> Hash::make('password')
        ]);

        $auteur6 =  User::create([
            'name'=>'auteur6',
            'email'=>'auteur@auteur6.com',
            'password'=> Hash::make('password')
        ]);
        $auteur7=  User::create([
            'name'=>'auteur7',
            'email'=>'auteur@auteur7.com',
            'password'=> Hash::make('password')
        ]);


        $utilisateur1 = User::create([
            'name'=>'utilisateur1',
            'email'=>'utilisateur@utilisateur1.com',
            'password'=> Hash::make('password')
        ]);
        $utilisateur2= User::create([
            'name'=>'utilisateur2',
            'email'=>'utilisateur@utilisateur2.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur3 = User::create([
            'name'=>'utilisateur3',
            'email'=>'utilisateur@utilisateur3.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur4 = User::create([
            'name'=>'utilisateur5',
            'email'=>'utilisateur@utilisateur4.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur5 = User::create([
            'name'=>'utilisateur5',
            'email'=>'utilisateur@utilisateur5.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur6 = User::create([
            'name'=>'utilisateur6',
            'email'=>'utilisateur@utilisateur6.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur7 = User::create([
            'name'=>'utilisateur7',
            'email'=>'utilisateur@utilisateur7.com',
            'password'=> Hash::make('password')
        ]);

        $utilisateur8= User::create([
            'name'=>'utilisateur8',
            'email'=>'utilisateur@utilisateur8.com',
            'password'=> Hash::make('password')
        ]);

          //on récupère les roles pour les attacher aux utilisateurs

          $adminRole = Role::where('name','admin')->first();
          $auteurRole = Role::where('name','auteur')->first();
          $utilisateurRole = Role::where('name','utilisateur')->first();

          //on attache chaque utilisateur à son role respectif

          $admin1->roles()->attach($adminRole);
          $admin2->roles()->attach($adminRole);
          $admin3->roles()->attach($adminRole);
          $auteur1->roles()->attach($auteurRole);
          $auteur2->roles()->attach($auteurRole);
          $auteur3->roles()->attach($auteurRole);
          $auteur4->roles()->attach($auteurRole);
          $auteur5->roles()->attach($auteurRole);
          $auteur6->roles()->attach($auteurRole);
          $auteur7->roles()->attach($auteurRole);
          $utilisateur1->roles()->attach($utilisateurRole);
          $utilisateur2->roles()->attach($utilisateurRole);
          $utilisateur3->roles()->attach($utilisateurRole);
          $utilisateur4->roles()->attach($utilisateurRole);
          $utilisateur5->roles()->attach($utilisateurRole);
          $utilisateur6->roles()->attach($utilisateurRole);
          $utilisateur7->roles()->attach($utilisateurRole);
          $utilisateur8->roles()->attach($utilisateurRole);


    }
}
