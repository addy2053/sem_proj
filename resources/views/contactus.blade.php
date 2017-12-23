@extends('layout.master')
@section('contactus')
    <section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>Share your all important Feedback with Us</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form method="post" action="{{route('feedback')}}">
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input type="text" class="form-control" name="name" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder=" Enter Email id">
                    </div>
                    <div class="form-group">
                        <label for="mobile no.">Contact No.</label>
                        <input type="tel" class="form-control" name="contact" placeholder=" Enter 11-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for ="description"> Feedback</label>
                        <textarea  class="form-control" name="feedback" placeholder="Enter Your Feedback"></textarea>
                    </div>
                    <div>

                        <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
                    </div>

                </div>
            </form>

        </div>

    </div>

    </section>
@endsection