{{--in thios fiel show all halls--}}

@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style="min-height: 300px;margin-top: 25px;margin-bottom: 25px;background-color:lightgoldenrodyellow; ">
        <h1><u>Halls</u></h1>
        <a href="{{route('add_list')}}" class="btn btn-success glyphicon glyphicon-floppy-save" target="_blank" style="margin-bottom: 10px"> Add New Hall</a>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>City</th>
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
                    <td>{{$art->hall_city}}</td>
                    <td>{{$art->category->category_name}}</td>

                    <td>
                        <div class="col-sm-4">
                            <a href="{{route('h_edit',$art->id)}}" class="glyphicon glyphicon-edit" target="_blank">Edit</a>
                        </div>
                     <form action="{{route('h_delete',$art->id)}}" class="form-inline inline" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class=" fa fa-trash" type="submit" > </button>
                        </form>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$hall->render()}}</div>
    @endsection