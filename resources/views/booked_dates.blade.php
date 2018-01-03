@extends('layouts.app')
@section('section')
    <div class="col-md-12">
    <div class="col-md-8  col-md-offset-2" style="height: 300px;background-color: lightgoldenrodyellow;margin-top: 25px;margin-bottom: 25px;padding-top: 10px">
        <table class="table table-responsive" >
            <thead >
            <tr>
                <th >Dates Booked</th>
                <th >Hall Name</th>
                <th >Location</th>
                <th >City</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booked_dates as $h)
                <tr>
                    <td >{{$h->on_date}}</td>
                    <td >{{$h->hall->hall_name}}</td>
                    <td >{{$h->hall->hall_location}}</td>
                    <td >{{$h->hall->hall_city}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$booked_dates->render()}}</div>

    </div>
@endsection