


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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </strong></div>
                
                
                <div class="card-header"> Modifier <strong>{{ $user->name}}</strong></div>
                <div class="card-body">

                 <form action="{{ route('admin.users.update', $user)}}" method="POST">
                 @csrf
                 @method('PATCH')

                 @foreach($roles as $role)

                <div class="form-group form-check">
                <input type ="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{ $role->id}}" @foreach($user->roles as $userRole) @if($userRole->id == $role->id) checked @endif @endforeach>

                <label for="{{ $role->id}}" class="form-check-label">{{ $role->name}}</label>

               </div>

               @endforeach

               <button type="submit" class="btn btn-primary">Modifier les roles</button>
                 </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>




