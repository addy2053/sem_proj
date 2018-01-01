@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style=";border: dotted;margin-top: 25px;margin-bottom: 25px">
        <h1><u>Booking</u></h1>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Date</th>
                <th>For</th>
            </tr>
            </thead>

            <tbody>

            @foreach($booked as $art)
                <tr>
                    <td> {{$art->hall->hall_name}}</td>
                    <td> {{$art->hall->hall_location}}</td>
                    <td> {{$art->hall->hall_contact}}</td>
                    <td> {{$art->on_date}}</td>
                    <td> {{$art->hall->category->category_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$booked->render()}}
    </div>
@endsection