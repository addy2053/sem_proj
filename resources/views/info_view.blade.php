@extends('layouts.app')
@section('section')

    <div class="col-md-12" style="background-color: #133d55;border: dotted">

            <div class="jumbotron col-md-12 ">
                <div class="form-group col-md-12">
                    <div style="margin-left: 17px;">
                        <label for="name" style="margin-right: 48px"><b>Name</b ></label> {{$hall->hall_name}}<br>
                        <label for="address" style="margin-right: 30px"><b>Address</b ></label> {{$hall->hall_location}}<br>
                        <label for="phone#" style="margin-right: 33px"><b>Phone # </b></label>{{$hall->hall_contact}}<br>
                        <label for="owner_name" style="margin-right: 48px"><b>Owner </b></label>{{$hall->user->name}}<br>
                        <label for="contact" style="margin-right: 34px"><b>Phone # </b></label>{{$hall->category->category_name.' hall'}}<br>
                        <label for="category" style="margin-right: 28px"><b>Category </b></label>{{$hall->category->category_name.' hall'}}<br>

                    </div>
                    <div class="col-md-12 col-md-offset-5" style="margin-bottom: 15px">
                        <a href="{{route('booked_date')}}" target="_blank"><button class="btn btn-success" style="width: 300px">Check Dates Already Booked</button></a>
                    </div>

                    <form action="{{route('uh_booking',$hall->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('POST')}}
                     <div class="col-sm-1" style="margin-left: 2px">
                         <label for="date"> <b>Date :</b></label>
                     </div>
                    <div class="col-md-6">
                        <input id="" name="on_date" placeholder="date" class="form-control" required="required" type="date">
                    </div>

                        <br><br>
                        <div class="col-md-12 col-lg-offset-2" style="margin-top: 15px">
                            <input type="submit" class="btn btn-info btn-toolbar" target="_blank"  style="width: 650px" value="Book Now!">
                        </div>
                    </form>
                </div>

                <span class="col-md-9  col-lg-offset-1">
                @foreach($hall->image as $ha)
                    <div class="img-thumbnail col-md-12" style="text-align: center;margin: 5%">
                        <img  src="/images/{{$ha->name}} " alt=" {{$ha->name}}" width="80%" >
                    </div>
                    @endforeach
                    </span>

            </div>
        </form>
    </div>
@endsection

