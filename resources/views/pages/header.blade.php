<h1>Header Page</h1>
{{-- @foreach ($names as $f)
<p>{{ $f }}</p>
@endforeach --}}

@forelse ($names as $key => $value)
<p>{{ $key }} - {{$value}}</p>
    
@empty
<p>Value Not found!</p>
    
@endforelse