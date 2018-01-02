@extends('layouts.app')
@section('section')
    <h1>Edit Hall Information</h1>
    <div class="col-md-12  bg-brown">
        <form action="{{route('edit_list',$hall->id)}}" method="post" class="form-horizontal marginT20"
              enctype="multipart/form-data">
            @include('owner._form')
            {{csrf_field()}}
            {{method_field("PATCH")}}
            <div class="form-group " >
                <div class="col-md-4 col-lg-offset-4"  >
                    <input type="submit" class="btn btn-info" value="ADD" style="width : 500px;">
                </div>
            </div>
        </form>
    </div>
@endsection