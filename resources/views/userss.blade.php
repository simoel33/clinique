<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>All Medecins</title>
</head>
<body>
<div class="container">

<div class="row">
    
<div class="card" style="width: 18rem;">
@if(Session::has('deleted'))
<span class="alert alert-success">
{{Session::get('deleted')}}
</span>
@endif

@if(Session::has('added'))
<span class="alert alert-success">
{{Session::get('added')}}
</span>
@endif
  <div class="card-header">
    All Medecins  <a href="addmedecin" class="btn btn-info">Add New</a>
  </div>
  <table class="table">
  <thead class="table-dark">
  <tr>
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    
  
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key => $user)
<tr>
    <td>{{$user->id }}</td>
    <td>{{$user->name }}</td>
    <td>{{$user->email }}</td>
    <td>{{$user->password }}</td>
  

</tr>
@endforeach
  </tbody>

</table>
{{$users->links()}}

</div>
</div>
</div>
</body>
</html>