<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{


    /*Middleware pour interdire l'accès à la liste des utilisateurs
      ici on interdit toutes les fonction qui sont à l'intérieur de cette classe de l'utiliser
      sans y avoir droit
    */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return "Liste des utilisateurs";

        //pour afficher la liste des utilisateurs
        $users = User ::all();
        return view('admin.users.index')->with('users',$users);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //si l utlisateur n'est pas admin, on arrete tout et on ele rediriger sur le page des utilisateur
        if(Gate::denies('edit-users')){
                //return redirect()->route('admin/users');

                return redirect('admin/users');
        }
            // The current user can't update the post...
        
        //pour modifier le role de l'utilisateur

         $roles = Role::all();
        return view('admin.users.edit',[
               'user' => $user,
               'roles' => $roles

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //pour la mise à jour

        //dd($request->roles); die and dump pour tester si on retourner bien un tableau

        $user->roles()->sync($request->roles);

        //on redirige vers la page des user et leurs roles après la modification de role d'un user
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if(Gate::denies('delete-users')){
            return redirect('admin/users');
    }
       
        //pour supprimer un utilisateur, il faudra aussi supprimer ses roles
        $user->roles()->detach();
        $user->delete();

        return redirect('admin/users');

    }
}
