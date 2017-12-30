<div class ="col-md-12 container paddingTB40   ">
    {{--<div class="9 ">--}}
            <fieldset>

                <!-- Form Name -->
                <legend>Add Listing</legend>

                <!-- Name of business input-->
                <div class="form-group">
                    <div class="col-md-8">
                        <input id="name" name="hall_name" placeholder="Hall Name" class="form-control" required="required" type="text"
                               @if(isset($hall))
                               value="{{$hall->hall_name}}"
                               @endif>

                    </div>
                </div>


                <!-- Address  input-->
                <div class="form-group">

                    <div class="col-md-10">
                        <input id="" name="hall_location" placeholder="Hall Address" class="form-control" required="" type="text"
                               @if(isset($hall))
                               value="{{$hall->hall_location}}"
                                @endif
                        >

                    </div>


                </div>






                <!-- city input-->
                <div class="form-group">


                    <div class="col-md-6">
                        <input id="City" name="hall_city" placeholder="City" class="form-control" required="" type="text"
                               {{--@if(isset($hall))--}}
                               {{--value="{{$hall->hall_city}}"--}}
                                {{--@endif--}}
                        >

                    </div>

                </div>

                <!-- Text input-->
                <div class="form-group">


                    <div class="col-md-6">
                        <input id="" name="hall_contact" placeholder="Phone No." class="form-control" required="" type="text"
                        @if(isset($hall))
                            value="{{$hall->hall_contact}}"
                        @endif
                        >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label style="color:#666666"><b>Select Category :</b></label>
                    <select  name="category" required="required">
                        <option value="1">Birthday</option>
                        <option value="2">Marry</option>
                        <option value="3">Meeting</option>
                    </select>
                    </div>
                </div>

                <!-- File Button -->

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="upload-box">
                            <div class="hold" style="color:#666666"><b>Maximum file size 20 MB </b><span class="btn btn-file"> Upload Photos
                            <input type="file" multiple name="images[]">
</span> </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->


            </fieldset>
    {{--</div>--}}
</div>