<h1>Home Page</h1>
{{-- Only For Use Echo The Statement 
    We Have not use html tag in it   --}}
{{'Hello'}}
{{'<h1>Hello</h1>'}}

{{-- We Have Use Html Tag in this example show it to you --}}
{!!"<h1>Hello Man How Are You</h1>"!!}

{{-- How to call Varibles In Laravel and How to use Foreach Loop - varible  --}}

@php
    $name=['Mukesh Khandve','Akash Kohle', 'Harshit Deubey','Ram Shukla']
@endphp
<ul>
    @foreach ($name as $owner )
        @if ($loop->even)
            <li style="color:greenyellow">{{$owner}}</li>
            @elseif($loop->odd)
                <li style="color:rgba(160, 114, 16, 0.87)">{{$owner}}</li>
            @else
            <li>{{$owner}}</li>
        @endif
          @if ($loop->first)
            <li style="color:greenyellow">{{$owner}}</li>
            @elseif($loop->last)
                <li style="color:rgba(160, 114, 16, 0.87)">{{$owner}}</li>
            @else
            <li>{{$owner}}</li>
        @endif
    @endforeach
</ul>

