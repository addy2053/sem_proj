@extends('layouts.app')

@section('section')
    <div class="col-md-12" style="margin: 100px;margin-bottom: 250px; padding-top: 40px">
        <div class="col-sm-3 col-lg-offset-1" >
            <a href="{{route('BirthdayEventBooking')}}" target="_blank">
                <button type="submit" class="btn btn-primary" style="   width: 150px; background-color: #2ab27b;color: black;border: 2px solid #4CAF50;border-radius: 8px; height: 200px" >
                    <b style="color: indigo"><i> BirthdayEvent</i></b></button>
            </a>
        </div>

        <div class="col-sm-3">
            <a href="{{route('OfficeMeetings')}}" target="_blank">
                <button type="submit" class="btn btn-primary"class="btn btn-primary" style=" width: 150px;   background-color: #2ab27b;color: black;height: 200px;border: 2px solid #4CAF50;border-radius: 8px;" >
                    <b style="color: indigo"><i>OfficeMeetings</i></b></button>
            </a>
        </div>

        <div class="col-sm-3 ">
            <a href="{{route('halls')}}" target="_blank">
                <button type="submit" class="btn btn-primary"class="btn btn-primary" style="height: 200px;width: 150px;    background-color: #2ab27b;color: black;border: 2px solid #4CAF50;border-radius: 8px;" >
                    <b style="color: indigo"><i>Hall's</i></b></button>
            </a>
        </div>
    </div>
@endsection