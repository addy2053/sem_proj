@extends('layouts.app')
@section('section')
    <h1>Add new Hall</h1>
    <div class="col-md-12  bg-brown">
    <form action="{{route('save_list')}}" method="post" class="form-horizontal marginT20">
        @include('owner._form')
        {{csrf_field()}}
        <div class="form-group " >
            <div class="col-md-4 col-lg-offset-4"  >
                <input type="submit" class="btn btn-info" value="ADD" style="width : 500px;">
            </div>
        </div>


    </form>
    </div>
@endsection