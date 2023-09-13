@include('layout.theme-pages.header')



   <div class="container h-100" style="margin-top:130px;">
        
            <h1>Display All Data Users </h1>
   
   <table class="table table-striped">
     <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>View</th>
        <th>Delete</th>
    </tr>
     @foreach($data as $id=>$user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td> 
        <td><a href="{{route('view.user', $user->id)}}" class='btn btn-primary btn-sm text-white'>View</a></td>
         <td><a href="{{route('view.delete', $user->id)}}" class='btn btn-danger btn-sm text-white'>Delete</a></td>  

    </tr>
     @endforeach
   </table>
        </div>
   </div>



@include('layout.theme-pages.header')