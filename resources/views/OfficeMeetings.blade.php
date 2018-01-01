@extends('layouts.app')
@section('section')
    <?php $count = 0; ?>
    <div class="col-md-12" style="background-color: #133d55;border: dotted">

        @foreach($office as $h)
            <div class="jumbotron col-md-8">
                <span class="col-sm-4">
                @foreach($h->image as $ha)
                        @if(!($count > 4))
                            <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="40%">
                        @endif
                @endforeach
                </span>
                <a href="{{route ('list_view',$h->id)}}" target="_blank">{{$h->hall_name}}</a><br>
                <b> Address:</b >{{$h->hall_location}}<br>
                <b>Phone # </b>{{$h->hall_contact}}
                <div class="col-md-12 col-md-offset-9">
                    <a href="{{route ('list_view',$h->id)}}" class="btn btn-info btn-toolbar " target="_blank"
                       style="width: 150px">Booking</a>
                </div>
            </div>
        @endforeach

        <span class="col-sm-5"> {{$office->render()}}</span>
    </div>
@endsection