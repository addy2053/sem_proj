@extends('layouts.app')

@section('slider')
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="images/1.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">

                    <h3>Taj Mahal</h3>
                    <p>Where you Enjoy your special day</p>
                </div>
            </div>

            <div class="item">
                <img src="images/2.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">

                    <h3>Grand Marque</h3>
                    <p>Best celebrations partners we are</p>
                </div>
            </div>

            <div class="item">
                <img src="images/3.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">

                    <h3>Casabalanca</h3>
                    <p>We focus on our services and deliver best</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('section')
    <div class="col-md-10 text-info col-lg-offset-1 jumbotron" id="section" style="text-align: center;margin-top: 100px;margin-bottom: 100px">
        <p>This is the best palce to book your marriage Halls.
            We provide you the wide range of marriage halls with their prices and their images.
            You don't have to visit marriage hall as you can book it from home.This is the best palce to book your marriage Halls.
            We provide you the wide range of marriage halls with their prices and their images.
            You don't have to visit marriage hall as you can book it from home.This is the best palce to book your marriage Halls.
            We provide you the wide range of marriage halls with their prices and their images.
            You don't have to visit marriage hall as you can book it from home.This is the best palce to book your marriage Halls.
            We provide you the wide range of marriage halls with their prices and their images.
            You don't have to visit marriage hall as you can book it from home.This is the best palce to book your marriage Halls.
            We provide you the wide range of marriage halls with their prices and their images.
            You don't have to visit marriage hall as you can book it from home</p>
    </div>
@endsection


@section('colums')

    <!--   Content================== -->

    <div class="container-fluid" >

        <div class="col-sm-row" >
            <div class="col-sm-4" style="border-right: solid black; border-left: solid black" >
                <div id="marriage">
                    <h1>Marriage Halls</h1>

                    <div id="back">
                        <p style="font-size: x-large ; font-family: Calibri">This is the best palce to book your marriage Halls.
                            We provide you the wide range of marriage halls with their prices and their images.
                            You don't have to visit marriage hall as you can book it from home
                            Just click on <a href="halls">Book Marriage Hall</a> and book your desired Hall</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="border-right: solid black">
                <div id="birthday">
                    <h1>Birthday Events</h1>
                    <div id="birthback" style="margin-left: 0px">
                        <p style="font-size: x-large ; font-family: Calibri">This is the best palce to book your Birthday Events.
                            We provide you the wide range of Birthday Event celebrating hotels with their prices and their images.
                            You don't have to visit Hotels as you can book it from home
                            Just click on <a href="BirthdayEventBooking">Birthday Hotel</a> and book your desired Hall</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"style="border-right: solid black" >
                <div id="meetings">
                    <h1>Meetings</h1>
                    <div id="meetback">
                        <p style="font-size: x-large ; font-family: Calibri">This is the best palce to book your Meetings hotels.
                            We provide you the wide range of Meeting halls   with their prices and their images.
                            You don't have to visit hotels  as you can book it from anywhere
                            Just click on <a href="OfficeMeetings">Book Meeting Hall</a> and book your desired beautiful  Hall</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection