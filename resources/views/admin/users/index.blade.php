


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('layouts/partials/_nav')
<div class="container">
  <h2>Liste des utilisateurs</h2>
 <!-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>-->            
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($users as $user)
               
                 
        <th scope="row">  {{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ implode(',',$user->roles()->pluck('name')->toArray())}}</td>
        @can('edit-users')
        <td>
            <a href="{{ route('admin.users.edit', $user->id)}}"><button class="btn btn-info">Editer</button></a>
            @endcan
            @can('delete-users')
           
            <form action="{{ route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>

            </form>
            @endcan
            
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>




<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <h3>Liste des utilisateurs<h3>
                  @foreach($users as $user)
                 <li> {{ $user->name}} - {{ $user->email}}</li>
                  @endforeach
                <div class="card-body">
                 

               </div>
            </div>
        </div>
    </div>
</div>-->


