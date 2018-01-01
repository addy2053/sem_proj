@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style="margin-top: 25px;margin-bottom: 25px">
        <table class="table table-responsive" border="1">
            <thead >
            <tr > <h3 style="text-align: center;"><b>Halls</b></h3></tr>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Category</th>
                <th>Owner_name</th>
                <th>Owner_Contact</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hall as $h)
                <tr>
                    <td>{{$h->hall_name}}</td>
                    <td>{{$h->hall_location}}</td>
                    <td>{{$h->hall_contact}}</td>
                    <td>{{$h->category->category_name }} </td>
                    <td>{{$h->user->name }} </td>
                    <td>{{$h->user->name }} </td>
                    <td>
                        {{--<a href="#" class="btn btn-info btn-sm" target="_blank">Edit</a>--}}
                        <form action="{{route('hdelete', $h->id)}}" class="" method="POST">
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