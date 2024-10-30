<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- <div> 
@if ($errors->any())
@foreach($errors->all() as $error)
<div style=color:red;>{{$error}}</div>
@endforeach
@endif

    </div> --}}
    <form action="addUser" method="POST">
        @csrf
        <div class="container" style="color: rgb(212, 84, 61)";border: 2px solid black>
        <div class="input-form">
            <input type="text" placeholder="enter user name" name="username">
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-form mt-3">
            <input type="text" placeholder="enter city name" name="cityname">
            <span>@error('cityname'){{$message}}@enderror</span>
        </div>
        <div class="input-form mt-3">
            <input type="text" placeholder="enter email" name="useremail">
            <span>@error('useremail'){{$message}}@enderror</span>
        </div>
        <div class="mt-3">
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="node">
            <label for="node">Node</label>
            {{-- <span>@error('skill'){{$message}}@enderror</span> --}}
        </div>
        <div>
            <h4>User Gender</h4>
            <input type="radio" name="Gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="Gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h4>User age</h4>
            <input type="range" name="age" id="age" max="100" min="18">
        </div>
        <div>
            <h4>User city</h4>
            <select name="city" id="">
                <option value="dhaka">Dhaka</option>
                <option value="ctg">Ctg</option>
                <option value="khulna">Khulna</option>
            </select>
        </div>
        <div class="input-form mt-3">
            <button>add new user</button>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
