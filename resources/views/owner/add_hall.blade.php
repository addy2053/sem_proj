@extends('layouts.app')
@section('section')

    <div style="background-color:black;color: whitesmoke;height: 60px;padding-top: 0.3px;text-align: center">    <h1>Add new Hall</h1>
    </div>

<div class="col-md-12  bg-brown">

    <form action="{{route('save_list')}}" method="post" class="form-horizontal marginT20" onsubmit="return add_hall_validate();"
          enctype="multipart/form-data">
        @include('owner._form')
        {{csrf_field()}}
        <div class="form-group " >
            <div class="col-md-4 col-lg-offset-4"  >
                <input type="submit" id="submit" class="btn btn-info" value="ADD" style="width : 500px;">
            </div>
        </div>
    </form>
    </div>
@endsection