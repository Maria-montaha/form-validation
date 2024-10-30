<div>
    <h1>User List</h1>
   <table border="1">
 <tr>
    <td>username</td>
    <td>cityname</td>
    <td>useremail</td>
    <td>skill</td>
    <td>gender</td>
    <td>age</td>
    <td>city</td>
    <td>operations</td>

 </tr>
 @foreach($forms as $form)
 <tr>
    <td>{{$form->username}}</td>
    <td>{{$form->cityname}}</td>
    <td>{{$form->useremail}}</td>
    <td>{{$form->skill}}</td>
    <td>{{$form->gender}}</td>
    <td>{{$form->age}}</td>
    <td>{{$form->city}}</td>
    <td>
        <a href="{{'delete/'.$form->id}}">Delete</a>
        <a href="{{'edit/'.$form->id}}">edit</a>
    </td>
 </tr>
 @endforeach
   </table>
