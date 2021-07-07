<html>
<head><title>show table</title>
</head>
<style>
#link{
margin-left: 90%;
color: #3061ae;
}
#search{
    width: 21%;
    font-size: 19px;
    margin-left: 71%;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
<a href="/" id="link" style="font-size: 20px;">Insert data</a>
<h2 style="text-align: center">Student Data</h2>

<form method="get" action="search" style="display: flex">
<input type="search" class="form-control" id="search" name="search" required placeholder="Search">
<button type="submit" class="btn-primary">search</button>
</form>
<table border="1" class="table" style="width: auto;margin: auto">
    <thead class="thead-dark">
    <tr style="background-color: #1a202c;color: white">

        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>roll.no</th>
        <th>mobile</th>
        <th>branch</th>
        <th>gender</th>
        <th>email</th>
        <th>address</th>
        <th>created</th>
        <th colspan="2">action</th>
    </tr>
    @foreach($crudArr as $crud)
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->name}}</td>
            <td>{{$crud->lastname}}</td>
            <td>{{$crud->rollno}}</td>
            <td>{{$crud->mobileno}}</td>
            <td>{{$crud->branch}}</td>
            <td>{{$crud->gender}}</td>
            <td>{{$crud->email}}</td>
            <td>{{$crud->address}}</td>

            <td>{{$crud->created_at->format('d-m-y h:i A')}}</td>

            <td><a href="delete/{{$crud->id}}" onclick="return confirm('Do you really want to Delete?');"><i class="glyphicon glyphicon-trash"></i></a> </td>
            <td><a href="edit/{{$crud->id}}"><i class="glyphicon glyphicon-pencil"></i></a> </td>

        </tr>
    @endforeach
</table>
</body>
</html>
