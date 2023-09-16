@include('layout.theme-pages.header')
<div class="container h-100 mt-5">
           <h1>Add Tables Relationship</h1>
               @foreach($data as $user)
                <p>{{$user->id}}</p>|
                <p>{{$user->name}}</p>|
                <p>{{$user->email}}</p>|
                <p>{{$user->age}}</p>|
                <p>{{$user->city}}</p>|
               @endforeach
         </div>
@include('layout.theme-pages.footer')
