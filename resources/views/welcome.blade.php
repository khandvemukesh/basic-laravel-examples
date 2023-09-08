@php 
$furits = ['apple', 'banana', 'orange', 'dragonfly', 'green', 'honeydew', 'hot'];
$value="hello";
@endphp
{{-- When is conditon is True it will display data  --}}
@includeWhen(false,'pages.header', ['names'=>$furits])
{{-- When is conditon is False will display data  --}}
@includeUnless(empty($value),'pages.header', ['names'=>$furits])
<h1>Contant Data</h1>
{{-- Only For Use Echo The Statement 
    We Have not use html tag in it   --}}
{{-- {{'Hello'}}
{{'<h1>Hello</h1>'}} --}}

{{-- We Have Use Html Tag in this example show it to you --}}
{{-- {!!"<h1>Hello Man How Are You</h1>"!!} --}}

{{-- How to call Varibles In Laravel and How to use Foreach Loop - varible  --}}

                                {{-- Basic Directives --}}
{{-- @php
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
</ul> --}}

{{-- if content file included but not created it will not display on webpage --}}
@includeIf('pages.content') 

{{-- Please Show footer content on the page --}}
@include('pages.footer')

