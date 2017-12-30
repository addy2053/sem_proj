@extends('layouts.app')

@section('section')
    <div class="col-md-12 " style="margin-top: 25px;margin-bottom: 25px">
        <table class="table table-responsive">
            <thead >
            <tr > <h3 style="text-align: center;"><b>Booking</b></h3></tr>
            <tr>
                <th>Hall_Name</th>
                <th>Hall_Location</th>
                <th>Hall_Contact</th>
                <th>Hall_Category</th>
                <th>Booked's_name</th>
                <th>Booked's_Contact</th>
                <th>On_date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booked as $bh)
                <tr>
                    <td>{{$bh->hall->hall_name}}</td>
                    <td>{{$bh->hall->hall_location}}</td>
                    <td>{{$bh->hall->hall_contact}}</td>
                    <td>{{$bh->hall->category->category_name }} </td>
                    <td>{{$bh->user->name }} </td>
                    <td>{{$bh->user->name }} </td>
                    <td>{{$bh->on_date }} </td>
                    <td>
                        <form action="{{route('bdelete', $bh->id)}}" class="" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        <hr>
    </div>
    @endsection