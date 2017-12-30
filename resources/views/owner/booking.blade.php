@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style=";border: dotted;margin-top: 25px;margin-bottom: 25px">
        <h1><u>Booking</u></h1>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Hall Name</th>
                <th>For</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>

            @foreach($booked as $art)
                <tr>
                    @foreach($hall as $hal)
                      @if($hal->id == $art ->hall_id)
                    <td> {{$art->user->name}}</td>
                    <td> {{$art->user->email}}</td>
                    <td> {{$art->on_date}}</td>
                    <td> {{$hal->hall_name}}</td>
                    <td> {{$hal->category->category_name}}</td>
                            <td>
                                <form action="{{route('c_booking',$art->id)}}" class="form-inline inline" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger btn-toolbar" type="submit">Cancel</button>
                                </form>
                            </td>
                    @endif
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$booked->render()}}
    </div>
@endsection