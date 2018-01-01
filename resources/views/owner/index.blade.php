{{--in thios fiel show all halls--}}

@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style=";margin-top: 25px;margin-bottom: 25px">
        <h1><u>Halls</u></h1>
        <a href="{{route('add_list')}}" class="btn btn-success" target="_blank">Add New Hall</a>
        <table class="table table-responsive" border="1">
            <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hall as $art)
                <tr>
                    <td>{{$art->hall_name}}</td>
                    <td>{{$art->hall_location}}</td>
                    <td>{{$art->hall_contact}}</td>
                    <td>{{$art->category->category_name}}</td>
                    <td><a href="{{route('h_edit',$art->id)}}" class="btn btn-info btn-toolbar" target="_blank">Edit</a>
                     <form action="{{route('h_delete',$art->id)}}" class="form-inline inline" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger btn-toolbar" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$hall->render()}}</div>
    @endsection