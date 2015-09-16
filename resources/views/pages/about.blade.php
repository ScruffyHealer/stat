@extends('app')

@section('content')

@if ($first == 'John')
    <h1>Hi John</h1>
@else
<h1>Else</h1>
@endif

    <h1>About Me: {{$first}} {{$last}}</h1>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec ipsum felis. Pellentesque tempus lacus vitae diam suscipit, vel rutrum dui porta. Mauris ut lectus ac arcu auctor feugiat. Nam suscipit enim orci. Maecenas tincidunt est sed dolor dapibus tristique. Quisque nec turpis vitae augue fermentum dapibus quis vel sem. Proin luctus gravida ex, ut interdum nulla finibus at. Nulla tincidunt, nisl quis tincidunt ornare, ipsum arcu auctor enim, vel dictum ipsum leo eget risus. Etiam suscipit, mauris ac porttitor ornare, risus augue tincidunt odio, id sollicitudin enim sem pharetra ligula. Morbi id elit vitae nibh lobortis suscipit eget sit amet lorem. Cras dui dui, ultrices eget erat a, faucibus malesuada lorem. Sed imperdiet blandit facilisis. Morbi hendrerit scelerisque augue, in faucibus nisl accumsan in. 
    </p>
@stop