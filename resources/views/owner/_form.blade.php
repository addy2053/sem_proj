{{--<div class ="col-md-12 container paddingTB40   ">--}}
            {{--<fieldset>--}}

                {{--<legend>Listing</legend>--}}
                {{--<!-- Name of business input-->--}}
                {{--<div class="form-group {{$errors ->has('hall_name')? 'has-error':'' }}">--}}
                    {{--<div class="col-md-8">--}}
                        {{--<input id="name" name="hall_name" placeholder="Hall Name" class="form-control"  type="text"--}}
                               {{--@if(isset($hall))--}}
                               {{--value="{{$hall->hall_name}}"--}}
                               {{--@endif >--}}

                    {{--</div>--}}
                    {{--@if($errors->has('hall_name'))--}}
                        {{--<div class="col-md-12">--}}
                        {{--<span class="help-block">--}}
                           {{--{{ $errors->first('hall_name')}}--}}
                            {{--<b style="color: black">Enter Valid Hall Name</b>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</div>--}}

                {{--<!-- Address  input-->--}}
                {{--<div class="form-group {{$errors ->has('hall_location')? 'has-error' :'' }}">--}}

                    {{--<div class="col-md-10">--}}
                        {{--<input id="" name="hall_location" placeholder="Hall Address" class="form-control"  type="text"--}}
                               {{--@if(isset($hall))--}}
                               {{--value="{{$hall->hall_location}}"--}}
                                {{--@endif>--}}
                    {{--</div>--}}

                    {{--@if($errors->has('hall_location'))--}}
                        {{--<div class="col-md-12">--}}
                        {{--<span class="help-block">--}}
                            {{--<b style="color: black">Enter Valid Hall Location</b>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</div>--}}






                {{--<!-- city input-->--}}
                {{--<div class="form-group {{$errors->has('hall_city') ? 'has-error':''}}">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<input id="City" name="hall_city" placeholder="City" class="form-control"  type="text"--}}
                               {{--@if(isset($hall))--}}
                               {{--value="{{$hall->hall_city}}"--}}
                                {{--@endif--}}
                        {{-->--}}

                    {{--</div>--}}
                    {{--@if($errors->has('hall_city'))--}}
                        {{--<div class="col-md-12">--}}
                        {{--<span class="help-block">--}}
                            {{--<b style="color: black">Enter Valid City</b>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                    {{--@endif--}}

                {{--</div>--}}

                {{--<!-- Text input-->--}}
                {{--<div class="form-group  {{$errors->has('hall_contact') ? 'has-error':''}}">--}}


                    {{--<div class="col-md-6">--}}
                        {{--<input id="" name="hall_contact" placeholder="Phone No." class="form-control"  type="text"--}}
                        {{--@if(isset($hall))--}}
                            {{--value="{{$hall->hall_contact}}"--}}
                        {{--@endif--}}
                        {{-->--}}
                    {{--</div>--}}
                    {{--@if($errors->has('hall_contact'))--}}
                    {{--<div class="col-md-12">--}}
                    {{--<span class="help-block">--}}
                    {{--<b style="color: black">Enter Valid contact #</b>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--@endif--}}

                {{--</div>--}}


                {{--<div class="form-group">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<label style="color:#666666"><b>Category :</b></label>--}}
                    {{--<select  name="category" required="required">--}}
                        {{--<option selected  hidden>select...</option>--}}
                        {{--<option value="1"--}}
                                {{--@if(isset($hall) and  $hall->category_id==1)--}}
                               {{--selected--}}

                                {{--@endif--}}
                        {{-->Birthday</option>--}}
                        {{--<option value="2"--}}
                                {{--@if(isset($hall) and  $hall->category_id==2 )--}}
                                {{--selected--}}
                                {{--@endif--}}
                        {{-->Marry</option>--}}
                        {{--<option value="3"--}}
                                {{--@if(isset($hall)and  $hall->category_id==3)--}}
                                {{--selected--}}
                                {{--@endif--}}
                        {{-->Meeting</option>--}}
                    {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<!-- File Button -->--}}

                {{--<div class="form-group">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="upload-box">--}}
                            {{--<div class="hold" style="color:#666666"><b>Maximum file size 20 MB </b><span class="btn btn-file"> Upload Photos--}}
                            {{--<input type="file" name="images[]" multiple>--}}
{{--</span> </div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</fieldset>--}}
{{--</div>--}}


<div class ="col-md-12 container paddingTB40   ">
    <fieldset>

        {{--<legend>Listing</legend>--}}
        <!-- Name of business input-->
        <div class="form-group {{$errors ->has('hall_name')? 'has-error':'' }}">
            <div class="col-md-8">

                <input id="name" name="hall_name" placeholder="Hall Name" class="form-control"  type="text"
                       @if(isset($hall))
                       value="{{$hall->hall_name}}"
                @else
                       value="{{old('hall_name')}}"
                        @endif >

            </div>
            @if($errors->has('hall_name'))
                <div class="col-md-12">
                        <span class="help-block">
                            <b style="color: black">Enter Valid Hall Name</b>
                            </span>

                </div>
            @endif
            {{--//js--}}
           <b> <span class="col-md-12" id="hall_name"style="color: black"></span></b>
        </div>

        <!-- Address  input-->
        <div class="form-group {{$errors ->has('hall_location')? 'has-error' :'' }}">

            <div class="col-md-10">
                <input id="" name="hall_location" placeholder="Hall Address" class="form-control"  type="text"
                       @if(isset($hall))
                       value="{{$hall->hall_location}}"
                       @else
                       value="{{old('hall_location')}}"
                        @endif
                >
            </div>
            @if($errors->has('hall_location'))
                <div class="col-md-12">
                        <span class="help-block">
                            <b style="color: black">Enter Valid Hall Location</b>
                            </span>
                </div>

            @endif
                <b> <span class="col-md-12" id="hall_location"style="color: black"></span></b>
        </div>






        <!-- city input-->
        <div class="form-group {{$errors->has('hall_city') ? 'has-error':''}}">
            <div class="col-md-6">
                <input id="City" name="hall_city" placeholder="City" class="form-control"  type="text"
                       @if(isset($hall))
                       value="{{$hall->hall_city}}"
                       @else
                       value="{{old('hall_city')}}"
                        @endif
                >

            </div>
            @if($errors->has('hall_city'))
                <div class="col-md-12">
                        <span class="help-block">
                            <b style="color: black">Enter Valid City</b>
                            </span>
                </div>
            @endif
            <b> <span class="col-md-12" id="hall_city"style="color: black"></span></b>
        </div>

        <!-- Text input-->
        <div class="form-group  {{$errors->has('hall_contact') ? 'has-error':''}}">


            <div class="col-md-6">
                <input id="" name="hall_contact" placeholder="11 digits phone number i.e 03XXXXXXXXXX" class="form-control"  type="text"
                       @if(isset($hall))
                       value="{{$hall->hall_contact}}"
                @else
                       value="{{old('hall_contact')}}"
                        @endif
                >
            </div>
            @if($errors->has('hall_contact'))
                <div class="col-md-12">
                    <span class="help-block">
                    <b style="color: black">Enter Valid contact #</b>
                    </span>
                </div>
            @endif
            <b> <span class="col-md-12" id="hall_contact"style="color: black"></span></b>
        </div>


        <div class="form-group">
            <div class="col-md-6">
                <label style="color:#666666"><b>Category :</b></label>
                <select  name="category" >
                    <option value="" selected  hidden>select...</option>
                    <option value="1"
                            @if(isset($hall) and  $hall->category_id==1)
                            selected

                            @endif
                    >Birthday</option>
                    <option value="2"
                            @if(isset($hall) and  $hall->category_id==2 )
                            selected
                            @endif
                    >Marriage</option>
                    <option value="3"
                            @if(isset($hall)and  $hall->category_id==3)
                            selected
                            @endif
                    >Meeting</option>
                </select>
            </div>
            <b> <span class="col-md-12" id="hall_category"style="color: black"></span></b>
        </div>

        <!-- File Button -->

        <div class="form-group">
            <div class="col-md-12">
                <div class="upload-box">
                    <div class="hold" style="color:#666666"><b>Maximum file size 20 MB </b><span class="btn btn-file"> Upload Photos
                            <input type="file" name="images[]" multiple>
</span> </div>
                </div>
            </div>
        </div>


    </fieldset>
</div>