@extends('layouts.app')
@section('section')
    <?php $count=0; ?>
    {{--//search bar--}}
    <form method="post" action="{{route('search_birthday')}}">
{{csrf_field()}}
            <div class="input-group col-md-12">
                <input  name="search" type="text" class="form-control input-lg" placeholder="Search..name/city"  style="height: 50px"/>
                <span class="input-group-btn" >
                        <button  class="btn btn-info btn-lg " type="submit" >
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
            </div>
    </form>

    <div class="col-md-12" style="padding-top: 20px;background-image: url(/images/Birthday.jpg);background-repeat:no-repeat;background-size:cover;min-height: 500px;">
        @foreach($birth as $h)
            @if($h->category_id ==1)
            <div class="jumbotron col-md-8" style="height: 300px;background-color: lightgoldenrodyellow">
                <div class=" img-responsive col-sm-4">
                    <?php $count++; ?>
                @foreach($h->image as $ha)

                    @if(($count  ==1 ))
                        <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="80%">
                                <?php $count=0; ?>
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
            @endif
        @endforeach

        <span class="col-sm-5"> {{$birth->render()}}</span>
    </div>
    @endsection