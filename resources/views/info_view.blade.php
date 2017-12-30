@extends('layouts.app')
@section('section')

    <div class="col-md-12" style="background-color: #133d55;border: dotted">

            <div class="jumbotron col-md-12">
                {{$hall->hall_name}}<br>
                <b> Address:</b >{{$hall->hall_location}}<br>
                <b>Phone # </b>{{$hall->hall_contact}}<br>
                <b>Owner: </b>{{$hall->user->name}}<br>
                <b>Phone # </b>{{$hall->category->category_name.' hall'}}<br>
                <span class="col-md-9  col-lg-offset-1">
                @foreach($hall->image as $ha)
                    <div class="img-thumbnail col-md-12" style="text-align: center;margin: 5%">
                        <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="80%" >
                    </div>
                    @endforeach
                    </span>

            </div>
    </div>

@endsection

