@extends('Home/layouts/app')

@section('title','About')
@section('content')

    <div class="about">
        <div class="container">
            <div class="about-top heading">
                <h2>Application</h2>
            </div>
            <div class="about-bottom">
                <div class="col-md-2 about-left">
                    <img src="{{ asset('assets/images/Membership.png') }}" alt="Become Our Mamber" />
                </div>
                <div class="col-md-10 about-right">
                    <h4>Become Member With Us.</h4>
                    <p>We are in long race you do you want to join Us, fill this form or download application form and fill and send in our postal address !! </p>
                    <p><a target="_blank" href="{{ url('assets/docs/Application_form.pdf') }}"> <span class="glyphicon glyphicon-download"></span> Download Form </a> </p>
                </div>
                <div class="col-md-12">
                    <h4 style="text-align: center; text-decoration: underline;"> Membership Registration Form </h4>
                    @if(session('message'))
                        <h4 style="text-align: center; color: green;">{{ session('message') }}</h4>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="{{ url('/application') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                       <label for="">
                                           Apply For: <span style="color: red"> * </span>
                                       </label>
                                       <label class="checkbox-inline">
                                           <input type="checkbox" id="inlineCheckbox1" {{ old('apply_for') == 'Dist. Co-ordinate' ? "checked" : '' }} name="apply_for[]" value="Dist. Co-ordinate"> Dist. Co-ordinate
                                       </label>
                                       <label class="checkbox-inline">
                                           <input type="checkbox" id="inlineCheckbox2" {{ old('apply_for') == 'Block Co-ordinate' ? "checked" : '' }} name="apply_for[]" value="Block Co-ordinate"> Block Co-ordinate
                                       </label>
                                       <label class="checkbox-inline">
                                           <input type="checkbox" id="inlineCheckbox3" {{ old('apply_for') == 'Team Co-ordinate' ? "checked" : '' }} name="apply_for[]" value="Team Co-ordinate"> Team Co-ordinate
                                       </label>
                                       <label class="checkbox-inline">
                                           <input type="checkbox" id="inlineCheckbox3" {{ old('apply_for') == 'Mahila Mitra' ? "checked" : '' }} name="apply_for[]" value="Mahila Mitra"> Mahila Mitra
                                       </label>
                                       <span class="error text-danger pull-left"> {{ $errors->first('apply_for') }} </span>
                                   </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Dist. Name :</label>
                                        <input type="text" name="dist_name" value="{{ old('dist_name') }}" class="form-control" id="" placeholder="Enter Dist Name">
                                        <span class="error text-danger pull-left"> {{ $errors->first('dist_name') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Block. Name : </label>
                                        <input type="text" name="block_name" class="form-control" value="{{ old('block_name') }}" id="" placeholder="Enter Block Name">
                                        <span class="error text-danger pull-left"> {{ $errors->first('block_name') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Name :</label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="" placeholder="Enter you full name">
                                        <span class="error text-danger pull-left"> {{ $errors->first('name') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Upload You Passport Size photo :</label>
                                        <input type="file" name="images" value="{{ old('images') }}" id="images" class="form-control">
                                        <span class="error text-danger pull-left"> {{ $errors->first('images') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group required">
                                        <label for="">Father /Husband Name : </label>
                                        <input type="text" name="father_husband_name" value="{{ old('father_husband_name') }}" class="form-control" id="" placeholder="Enter Father/Husband Name">
                                        <span class="error text-danger pull-left"> {{ $errors->first('father_husband_name') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group required">
                                        <label for="">Mother Name : </label>
                                        <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control" id="" placeholder="Enter Mother Name">
                                        <span class="error text-danger pull-left"> {{ $errors->first('mother_name') }} </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <label for="">Date Of Birth : </label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="date" id="day" required="" class="form-control">
                                                <option disabled="disabled" value="">Date</option>
                                                <option {{ old('date') == '01' ? "selected" : '' }} value="01">01</option>
                                                <option {{ old('date') == '02' ? "selected" : '' }} value="02">02</option>
                                                <option {{ old('date') == '03' ? "selected" : '' }} value="03">03</option>
                                                <option {{ old('date') == '04' ? "selected" : '' }} value="04">04</option>
                                                <option {{ old('date') == '05' ? "selected" : '' }} value="05">05</option>
                                                <option {{ old('date') == '06' ? "selected" : '' }} value="06">06</option>
                                                <option {{ old('date') == '07' ? "selected" : '' }} value="07">07</option>
                                                <option {{ old('date') == '08' ? "selected" : '' }} value="08">08</option>
                                                <option {{ old('date') == '09' ? "selected" : '' }} value="09">09</option>
                                                <option {{ old('date') == '10' ? "selected" : '' }} value="10">10</option>
                                                <option {{ old('date') == '11' ? "selected" : '' }} value="11">11</option>
                                                <option {{ old('date') == '12' ? "selected" : '' }} value="12">12</option>
                                                <option {{ old('date') == '13' ? "selected" : '' }} value="13">13</option>
                                                <option {{ old('date') == '14' ? "selected" : '' }} value="14">14</option>
                                                <option {{ old('date') == '15' ? "selected" : '' }} value="15">15</option>
                                                <option {{ old('date') == '16' ? "selected" : '' }} value="16">16</option>
                                                <option {{ old('date') == '17' ? "selected" : '' }} value="17">17</option>
                                                <option {{ old('date') == '18' ? "selected" : '' }} value="18">18</option>
                                                <option {{ old('date') == '19' ? "selected" : '' }} value="19">19</option>
                                                <option {{ old('date') == '20' ? "selected" : '' }} value="20">20</option>
                                                <option {{ old('date') == '21' ? "selected" : '' }} value="21">21</option>
                                                <option {{ old('date') == '22' ? "selected" : '' }} value="22">22</option>
                                                <option {{ old('date') == '23' ? "selected" : '' }} value="23">23</option>
                                                <option {{ old('date') == '24' ? "selected" : '' }} value="24">24</option>
                                                <option {{ old('date') == '25' ? "selected" : '' }} value="25">25</option>
                                                <option {{ old('date') == '26' ? "selected" : '' }} value="26">26</option>
                                                <option {{ old('date') == '27' ? "selected" : '' }} value="27">27</option>
                                                <option {{ old('date') == '28' ? "selected" : '' }} value="28">28</option>
                                                <option {{ old('date') == '29' ? "selected" : '' }} value="29">29</option>
                                                <option {{ old('date') == '30' ? "selected" : '' }} value="30">30</option>
                                                <option {{ old('date') == '31' ? "selected" : '' }} value="31">31</option>
                                            </select>
                                            <span class="error text-danger pull-left"> {{ $errors->first('date') }} </span>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="month" id="month" required="" class="form-control">
                                                <option value="" disabled="disabled"> Month</option>
                                                <option {{ old('month') == '01' ? "selected" : '' }} value="01">January</option>
                                                <option {{ old('month') == '02' ? "selected" : '' }} value="02">February</option>
                                                <option {{ old('month') == '03' ? "selected" : '' }} value="03">March</option>
                                                <option {{ old('month') == '04' ? "selected" : '' }} value="04">April</option>
                                                <option {{ old('month') == '05' ? "selected" : '' }} value="05">May</option>
                                                <option {{ old('month') == '06' ? "selected" : '' }} value="06">June</option>
                                                <option {{ old('month') == '07' ? "selected" : '' }} value="07">July</option>
                                                <option {{ old('month') == '08' ? "selected" : '' }} value="08">August</option>
                                                <option {{ old('month') == '09' ? "selected" : '' }} value="09">September</option>
                                                <option {{ old('month') == '10' ? "selected" : '' }} value="10">October</option>
                                                <option {{ old('month') == '11' ? "selected" : '' }} value="11">November</option>
                                                <option {{ old('month') == '12' ? "selected" : '' }} value="12">December</option>
                                            </select>
                                            <span class="error text-danger pull-left"> {{ $errors->first('month') }} </span>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="year" id="year" required="" class="form-control">
                                                <option disabled="disabled" value="">Year</option>
                                                @for ($i = 1900; $i <= date('Y')-14; $i++)
                                                    <option {{ old('year') == $i ? "selected": '' }} value="{{ $i }}"> {{ $i }} </option>
                                                @endfor
                                            </select>
                                            <span class="error text-danger pull-left"> {{ $errors->first('year') }} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Qualification : </label>
                                        <select id="education" name="education" required="" class="form-control">
                                             <option disabled="disabled" value="">Select your degree</option>
                                            @foreach($educations as $education)
                                             <option {{ old('education') == $education ? "selected" : '' }} value="{{ $education }}">{{  $education }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error text-danger pull-left"> {{ $errors->first('education') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group required">
                                        <label for="">Marital Status : </label>
                                        <select name="marital_status" id="maritalStatus" required="" class="form-control">
                                            <option disabled="disabled" value="">Select</option>
                                            <option {{ old('marital_status') == 'Single' ? "selected" : '' }} value="Single">Single</option>
                                            <option {{ old('marital_status') == 'Married' ? "selected" : '' }} value="Married">Married</option>
                                            <option {{ old('marital_status') == 'Divorced' ? "selected" : '' }} value="Divorced">Divorced</option>
                                            <option {{ old('marital_status') == 'Widow' ? "selected" : '' }} value="Widow">Widow</option>
                                            <option {{ old('marital_status') == 'Handicapped' ? "selected" : '' }} value="Handicapped">Handicapped</option>
                                        </select>
                                        <span class="error text-danger pull-left"> {{ $errors->first('marital_status') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 required">
                                    <label for="">Email : </label>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your Email Address.">
                                    <span class="error text-danger pull-left"> {{ $errors->first('email') }} </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group required">
                                        <label for="">Present Address :</label>
                                        <input type="text" class="form-control" name="present_address" value="{{ old('present_address')}}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_address') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group required">
                                        <label for="">Post :</label>
                                        <input type="text" class="form-control" value="{{ old('present_post') }}" name="present_post">
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_post') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group required">
                                        <label for="">Dist :</label>
                                        <input type="text" class="form-control"  value="{{ old('present_dist') }}" name="present_dist">
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_dist') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">PS :</label>
                                        <input type="text" class="form-control" value="{{ old('present_ps') }}" name="present_ps">
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_ps') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">Pin Code :</label>
                                        <input type="text" class="form-control" value="{{ old('present_pin') }}"  max="6" min="6" maxlength="6" minlength="6" name="present_pin">
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_pin') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">Phone :</label>
                                        <input type="text" class="form-control"  value="{{ old('present_phone') }}" name="present_phone"  max="10" min="10" maxlength="10" minlength="10" >
                                        <span class="error text-danger pull-left"> {{ $errors->first('present_phone') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group required">
                                        <label for="">Permanent Address :</label>
                                        <input type="text" class="form-control" name="perma_address" value="{{ old('perma_address') }}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_address') }} </span>
                                        <small style="color: green" class="help-block text-success">
                                            If both addresses are same put same address. , PS : Police Station.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group required">
                                        <label for="">Post :</label>
                                        <input type="text" class="form-control" name="perma_post" value="{{ old('perma_post') }}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_post') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group required">
                                        <label for="">Dist :</label>
                                        <input type="text" class="form-control" name="perma_dist" value="{{ old('perma_dist') }}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_dist') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">PS :</label>
                                        <input type="text" class="form-control" name="perma_ps" value="{{ old('perma_ps') }}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_ps') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">Pin Code :</label>
                                        <input type="text" class="form-control" name="perma_pin" max="6" min="6" maxlength="6" minlength="6" value="{{ old('perma_pin') }}">
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_pin') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="form-group required">
                                        <label for="">Phone :</label>
                                        <input type="text" class="form-control" name="perma_phone"  max="10" min="10" maxlength="10" minlength="10" value="{{ old('perma_phone') }}" />
                                        <span class="error text-danger pull-left"> {{ $errors->first('perma_phone') }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1 col-md-1">
                                    <div class="form-group required">
                                        <input type="checkbox" name="declaration" id="declaration" {{ old('declarations') == 'true' ? "checked" : ''}}>
                                        <span class="error text-danger pull-left"> {{ $errors->first('declaration') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-11 col-sm-11">
                                    DECLARATION: I herby acknowledge that i have read and agree with the relevant sales policies and regulations of the "SAMBODHI WELFARE
                                    AND DEVELOPMENT ORGANISATION" mentioned overleaf and otherwise. I will not plead ignorance to the NGO. Rules and Regulations.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1 col-md-1">
                                    <div class="form-group required">
                                        <input type="checkbox" name="clear_data" id="clear_data" {{ old('clear_data')}} />
                                        <span class="error text-danger pull-left"> {{ $errors->first('clear_data') }} </span>
                                    </div>
                                </div>
                                <div class="col-md-11 col-sm-11">
                                   <span style="font-weight: bold"> I clearly that all information given above is correct to the best of my knowledge.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="submit-btn">
                                        <input type="submit" value="SUBMIT">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="clearfix"> </div>
                        </form>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
