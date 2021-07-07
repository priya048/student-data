
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
            background-color: #5f9ea0;
        }
        #sh{
            background-color: #1a202c;
            padding: 10px;
        }
        a{
            margin-left: 90%;
            color: #e2ecfc;
        }
        img{
            margin-left: 40%;
            width: 75px;
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
            function phonenumber() {
                var phoneNo = document.getElementById('number');
                if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
                    alert("Mobile no. is not valid Enter 10 Digit Mobile No.");
                    return false;
                }
            }


    </script>
<div id="sh">
<a href="show">show data</a></div>
<div class="form">
<h3 style="text-align: center">Student Form</h3>
    <form class="form-control" method="post" action="/studentform_submit" enctype="multipart/form-data">
        @csrf
        <img id="img" src="#"/><br><br>
        <input type="file" name="file" class="form-control" id="files" required onchange="readURL(this);"><br>


        <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" required placeholder="student first name"><br>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="lname" required placeholder="student Last name"><br>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="rollno" required placeholder="Roll no."><br>

        <select name="branch" class="custom-select" id="branch">

            <option value="CE">CE</option>
            <option value="IT">IT</option>
            <option value="civil">civil</option>
            <option value="ME">ME</option>
        </select>

        <input type="radio" id="male" class="form-check-input" name="gender" value="male" checked style="margin-left: 50px;">
        <label for="male">male</label>
        <input type="radio" id="female" class="form-check-input" name="gender" value="female">
        <label for="female">female</label>

         </br><br>
        <input type="number" class="form-control" id="number" name="mobileno" required placeholder="mobile no."><br>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required placeholder="email address "><br>
        <textarea type="text" class="form-control" id="exampleFormControlInput1" name="address" required placeholder="address"></textarea><br>




        <input type="submit" name="submit" class="btn btn-success" onclick="phonenumber()" style="margin-left: 40%">
    </form>
</div>

