<div>
    <h1>update</h1>
    <form action="/update/{{$data->id}}" method="POST">
        <input type="hidden" name="_method" value="put"/>
        
        @csrf
        <input type="text" placeholder="enter user name" value ="{{$data->username}}"name="username">
        <br><br>
        <input type="text" placeholder="enter city name" value ="{{$data->cityname}}" name="cityname">
        <br><br>
        <input type="text" placeholder="enter email" value ="{{$data->useremail}}" name="useremail">
        <br><br>
        <input type="text" placeholder="enter skill" value ="{{$data->skill}}" name="skill">
        <br><br>
        <input type="text" placeholder="enter gender" value ="{{$data->gender}}" name="gender">
        <br><br>
        <input type="text" placeholder="enter age" value ="{{$data->age}}" name="age">
        <br><br>
        <input type="text" placeholder="enter city" value ="{{$data->city}}" name="city">
        <br><br>
        
        <button>update details</button>
        <a href="/listUser">cancel</a>
    </form>
</div>
