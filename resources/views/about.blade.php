{{-- @if(5 > 10)
    <p> 5 is lower than 10 </p>
@elseif(5 == 10)
    <p> 5 is indeed lower than 10 </p>
@else
<h2> All conditions are wrong </h2>
@endif

@unless (empty($name))
    <h2> Name isn't empty! </h2>
@endunless

{{-- @if (!empty($name))
    <h2> Name isn't empty! </h2>
@endif --}}

{{-- @empty($name)
    <h2> Name is empty!</h2>
@endempty

@isset($name)
    <h2> Name has been set </h2>
@endisset --}}

<!--
    Comparing multiple possible conditions
    Multiple values that may require the same code
-->

{{-- @switch($name)
    @case('Danny')
        <h2> Name is {{ $name }} </h2>
        @break
    @case('John')
        <h2> Name is {{ $name }} </h2>
        @break
    @default
        
@endswitch --}}

<!--- 
For loop
Foreach loop
For else loop
While loop
-->
{{-- 
@for($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }} <h2>
@endfor --}}

{{-- @foreach ($names as $name)
    <h2> The name is {{$name }} </h2>
@endforeach --}}

@forelse ($names as $name)
    <h2> The name is {{$name }} </h2>
    @empty
    <h2> There are no names </h2>
@endforelse