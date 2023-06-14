<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
    <h1>{{__('messages.welcome')}}</h1>
    <h1>{{__('messages.hello gus')}}</h1><br>
        <p>{{$id}}</p>
        <p>{{$name}}</p>
    <br>
        <p>{{$obj -> id}}</p>
        <p>{{$obj -> name}}</p>

    @if($obj -> name == 'Abdullah zaid')
        <p>Yes I am Abdullah Zaid</p>
    @else
        <p>No I am't Abdullah Zaid</p>
    @endif

    @if($num==1)
        <p>Saturday</p>
    @elseif($num==2)
        <p>Sunday</p>
    @elseif($num==3)
        <p>Monday</p>
    @elseif($num==4)
        <p>Tuesday</p>
    @elseif($num==5)
        <p>Wednesday</p>
    @elseif($num==6)
        <p>Thursday</p>
    @else
        <p>Friday</p>
    @endif

    @switch($num)
        @case('1')
        
    @endswitch

    @foreach($arrd as $rr)
        <p>{{$rr}}</p>
    @endforeach

    <br>

    @forelse($arr as $_aer)
        <p>{{$_aer}}</p>
    @empty
        <p>Empty</p>
    @endforelse

    </body>
</html>
