
<!-- import layout styles file from layouts folder -->
@extends ('layouts.layout')   

<!-- define a new section for all style content -->
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

    <!-- @for ($i = 0; $i < count($pizzas); $i++)
    <p> {{ $pizzas[$i]['type'] }} </p>
    @endfor -->

    @foreach($pizzas as $pizza)
    <!-- <div> {{ $pizza['type']}} - {{ $pizza['base']}}  </div> -->
    <div> {{$loop -> index }} {{ $pizza['type']}} - {{ $pizza['base']}}  </div>

    @if($loop -> first)
    <span> First in the Loop </span>
    @endif

    @if($loop -> last)
    <span> Last in the Loop </span>
    @endif

    @endforeach
    </div>
</div>
  
@endsection



