@extends('layouts.app')
@section('section')
    <form method="post" action="{{route ('search_meeting')}}">
        {{csrf_field()}}
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input  name='search' type="text" class="form-control input-lg" placeholder="Search..name/city"  style="height: 50px"/>
                <span class="input-group-btn">
                        <button  class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
            </div>
        </div>
    </form>
    <?php $count = 0; ?>
    <div class="col-md-12" style=" padding-top: 20px;background-image: url(/images/office.jpg);background-repeat:no-repeat;background-size:cover;height: 500px;">

        @foreach($office as $h)
            @if($h->category_id ==3)
            <div class="jumbotron col-md-8" style="height: 300px;background-color: lightgoldenrodyellow">
                <span class="col-sm-4">
                @foreach($h->image as $ha)
                        @if($count <4)
                            <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="40%">
                        @endif
                            <?php $count++; ?>
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
            @endif
        @endforeach

        <span class="col-sm-5"> {{$office->render()}}</span>
    </div>
@endsection