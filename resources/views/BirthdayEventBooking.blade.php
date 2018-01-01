@extends('layouts.app')
@section('section')


    <div class="col-md-12" style="border: dotted">
        @foreach($birth as $h)
            <div class="jumbotron col-md-8" style="height: 300px">
                <div class="col-sm-4">
                    <?php $count = 0; ?>
                @foreach($h->image as $ha)
                        <?php $count++; ?>
                    @if(($count  <= 4))
                        <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="40%">
                        @endif
                    @endforeach
                    </div>
                <a href="{{route ('list_view',$h->id)}}" target="_blank">{{$h->hall_name}}</a><br>
                <b> Address:</b >{{$h->hall_location}}<br>
                <b>Phone # </b>{{$h->hall_contact}}
                <div class="col-md-12 col-md-offset-9">
                <a href="{{route ('list_view',$h->id)}}" class="btn btn-info btn-toolbar " target="_blank"
                   style="width: 150px">Booking</a>
                </div>
            </div>
        @endforeach

        <span class="col-sm-5"> {{$birth->render()}}</span>
    </div>
    @endsection