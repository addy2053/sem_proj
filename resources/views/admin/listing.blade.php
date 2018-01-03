@extends('layouts.app')
@section('section')
    <div class="col-md-12" style="margin: 100px;margin-bottom: 250px; padding-top: 40px;">
   <div class="col-sm-2 col-lg-offset-2" >
    <a href="{{route('h_list')}}" target="_blank">
        <button type="submit" class="btn btn-primary" style="    background-color: #2ab27b;color: black;border: 2px solid #4CAF50;border-radius: 8px;" >
            List of Hall's</button>
    </a>
   </div>

   <div class="col-sm-3 col-lg-offset-1">
    <a href="{{route('b_list')}}" target="_blank">
        <button type="submit" class="btn btn-primary"class="btn btn-primary" style="    background-color: #2ab27b;color: black;border: 2px solid #4CAF50;border-radius: 8px;" >

        List of Booked's hall</button>
    </a>
   </div>
    </div>
    @endsection




{{--//read image--}}
{{--@foreach($h->image as $ha)--}}
    {{--<td> {{$ha->name}}--}}

        {{--<img src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="20%">--}}
    {{--</td>--}}
{{--@endforeach--}}