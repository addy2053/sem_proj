@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style="margin-top: 25px;margin-bottom: 25px">
        <table class="table table-responsive" border="1">
            <thead >
            <tr > <h3 style="text-align: center;"><b>User's Information</b></h3></tr>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $h)
                <tr>
                    <td>{{$h->name}}</td>
                    <td>{{$h->email}}</td>
                    <td>{{$h->contact}}</td>
                    <td>{{$h->roles[0]->name}} </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$users->render()}}</div>
@endsection