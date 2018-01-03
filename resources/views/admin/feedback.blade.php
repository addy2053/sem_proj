@extends('layouts.app')
@section('section')
    <div class="col-md-12 " style="margin-top: 25px;margin-bottom: 25px;background-color:lightgoldenrodyellow;">
        <table class="table table-responsive">
            <thead >
            <tr > <h3 style="text-align: center;"><b>Feed Back's</b></h3></tr>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Feed_Back</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cont as $h)
                <tr>
                    <td>{{$h->name}}</td>
                    <td>{{$h->email}}</td>
                    <td>{{$h->contact}}</td>
                    <td>{{$h->feedback}} </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
    <div class="col-md-12 col-md-offset-3">{{$cont->render()}}</div>
@endsection