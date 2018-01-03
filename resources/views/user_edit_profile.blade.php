@extends('layouts.app')

@section('section')
<div class="col-md-12" style="padding: 120px;background-color:lightgoldenrodyellow; ">
    <form action="{{'save_edit_profile',auth()->id()}}" method="post" onsubmit="return  edit_user_profile_validat()">
        {{csrf_field()}}
        {{method_field("PATCH")}}

<div class="form-group col-md-12 col-md-offset-1 {{$errors ->has('name')? 'has-error' :'' }}" style="margin-bottom: 50px">
    <label for="name" style="margin-right: 30px">Name</label>
    <input type="text" value="{{$user[0]->name}}" name="name">

    @if($errors->has('name'))
        <div class="col-md-12 col-md-offset-1">
                        <span class="help-block">
                            <b style="color: black">Enter name  in alphabets</b>
                            </span>
        </div>
        @endif
    <b> <span class="col-md-12 col-md-offset-1" id="pname"style="color: black"></span></b>
</div>

    <div class="form-group col-md-10 col-md-offset-1 {{$errors ->has('contact')? 'has-error' :'' }}" style="margin-bottom: 100px">
        <label for="contact" style="margin-right: 15px">Contact</label>
        <input type="text" value="{{$user[0]->contact}}" name="contact">

        @if($errors->has('contact'))
            <div class="col-md-12 col-md-offset-1">
                        <span class="help-block">
                            <b style="color: black">Enter correct contact</b>
                            </span>
            </div>
        @endif
        <b> <span class="col-md-12 col-md-offset-1" id="pcontact"style="color: black"></span></b>
    </div>


    <div class="form-group col-md-8 col-md-offset-8">
        <button type="submit" class="btn btn-primary">Save</button>
        {{--<input type="submit" class="btn btn-info" value="ADD" >--}}
    </div>

    </form>

</div>


    @endsection