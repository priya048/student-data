
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<style>
    .form{
        width: 500px;
        height: 300px;
        margin: auto;
    }
    body{
        background-color: cadetblue;
    }
    img{
        width: 75px;
        margin-left: 40%;
    }
</style>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<h2 style="text-align: center">Edit Data</h2>
<div class="form">
<form class="form-control" method="post" enctype="multipart/form-data" action="../update/{{$crudArr->id}}" onsubmit="return confirm('Do you really want to submit the form?');">
    @csrf

    <img id="img" src="{{asset('storage/image/'.$crudArr->image)}}"/><br><br>
    <input type="file" name="image" class="form-control" id="files" value="{{URL::asset('views/image/'.$crudArr->image)}}" onchange="readURL(this);"><br>

    <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" required value="{{$crudArr->name}}"><br>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="lname" required value="{{$crudArr->lastname}}"><br>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="rollno" required value="{{$crudArr->rollno}}"><br>

    <input type="radio" id="male" class="form-check-input" name="gender" value="male" {{($crudArr->gender=="male")? "checked": ""}}>
    <label for="male">male</label>
    <input type="radio" id="female" class="form-check-input" name="gender" value="female" {{($crudArr->gender=="female")? "checked": ""}}>
    <label for="female">female</label>

    <select name="branch" class="custom-select" id="branch">
        <option selected>{{$crudArr->branch}}</option>
        <option value="CE">CE</option>
        <option value="IT">IT</option>
        <option value="civil">civil</option>
        <option value="ME">ME</option>
    </select> </br><br>

    <input type="number" class="form-control" id="exampleFormControlInput1" name="mobileno" required value="{{$crudArr->mobileno}}"><br>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required value="{{$crudArr->email}}"><br>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" required value="{{$crudArr->address}}"><br>

    <input type="submit" name="submit" class="btn btn-success" style="margin-left: 40%">
</form>
</div>
