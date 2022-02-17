@extends('master')
@section('title')
    BITM Page
@endsection

@section('body')
    <h1>{{$a}}</h1>
    <h1>{{$j}}</h1>


{{--    @foreach($b as $key => $value)--}}
{{--        @if($key >= 3 && $key <=5)--}}
{{--        <span> index no : {{$key}} and value : {{$value}}</span><br/>--}}
{{--        @else--}}
{{--            <h1>Out of range...</h1>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--    @foreach($b as $key => $value)--}}
{{--            <span>{{$value['name']}}</span><br/>--}}
{{--    @endforeach--}}
    @foreach($b as $key => $value)
        @foreach($value as $item)
        <span>{{$item}}</span><br/>
        @endforeach
        <br/>
    @endforeach



@endsection
