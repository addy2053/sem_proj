@extends('layouts.app')
@section('section')
    <div class="col-md-5  col-md-offset-3" style=";border: dotted;margin-top: 25px;margin-bottom: 25px">
        <table class="table table-responsive" border="1">
            <thead >
            <tr>
                <th >Dates Booked</th>
                <th >Hall Name</th>
                <th >Location</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booked_dates as $h)
                <tr>
                    <td >{{$h->on_date}}</td>
                    <td >{{$h->hall->hall_name}}</td>
                    <td >{{$h->hall->hall_location}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$booked_dates->render()}}</div>
@endsection