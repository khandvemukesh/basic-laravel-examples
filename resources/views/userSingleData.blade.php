@include('layout.theme-pages.header')

 <div class="container h-100" style="margin-top:130px;">
        
            <h1>User Details </h1>
   
   <table class="table table-striped">
     <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        
    </tr>
     @foreach($data as $id=>$user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td> 
        

    </tr>
     @endforeach
   </table>
        </div>
   </div>
@include('layout.theme-pages.header')