@extends('layouts.app')
@section('section')

    <div class="col-md-12" style="background-color: #133d55;border: dotted">

        @foreach($office as $h)
            <div class="jumbotron col-md-8">
                {{--<span class="col-sm-4">--}}
                {{--@foreach($h->image as $ha)--}}
                {{--<img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="55%">--}}
                {{--@endforeach--}}
                {{--</span>--}}
                <a href="{{route ('list_view',$h->id)}}" target="_blank">{{$h->hall_name}}</a><br>
                <b> Address:</b >{{$h->hall_location}}<br>
                <b>Phone # </b>{{$h->hall_contact}}
            </div>
        @endforeach

        <span class="col-sm-5"> {{$office->render()}}</span>
    </div>
@endsection