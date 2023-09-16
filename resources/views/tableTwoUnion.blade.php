@include('layout.theme-pages.header')
<div class="container h-100 mt-5">
           <h1>Add Tables Unions</h1>
               @foreach($data as $user)
                {{-- <h3>{{$user->id}} --}}
              <h3>  {{$user->name}}
                {{$user->email}} |
                {{-- {{$user->age}} | --}}
                {{$user->city_name}} </h3>
               @endforeach
         </div>
@include('layout.theme-pages.footer')
