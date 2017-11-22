@extends('layouts.app')
@section('title', 'Profile')

@section('head')
<script>
    jQuery(document).ready(function($) {
        $('.datepicker').datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
			changeYear: true,
            yearRange: "-100:+50"
        });
    });
</script>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error: </strong> There were some problems with your input.<br /><br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Profile</h3>
            </div>
            <div class="panel-body">
                {!! Form::model($profile, ['method' => 'PATCH','route' => ['profile.update', $profile->id], 'files' => true]) !!}
                {{ csrf_field() }}        
                <div class="form-horizontal">
                    
                        <div class="well">
                            <div class="form-group">
                                {!! Form::label('first_name', 'First Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('middle_name', 'Middle Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('middle_name', null, array('placeholder' => 'Middle Name','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('last_name', 'Last Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="email">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" id="email" name="email" type="text" value="{{ Auth::user()->email }}">
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('birthday', 'Birthday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('birthday', date('Y-m-d', strtotime($profile->birthday)), ['class' => 'form-control datepicker', 'readonly' => 'true']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('birthday_visible', 'Show Birthday', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {{ Form::checkbox('birthday_visible') }}
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="form-group">
                                {!! Form::label('address', 'Address', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('address2', 'Last Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('address2', null, array('placeholder' => 'Address 2','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('city', 'Last Name', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('state', 'State', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('state', null, array('placeholder' => 'State','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('zip', 'Zip', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('zip', null, array('placeholder' => 'Zip','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('country', 'Country', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    <select class="form-control" id="country" name="country">
                                        <option value=""></option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burma">Burma</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Democratic Republic of Congo">Democratic Republic of Congo</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Howland Island">Howland Island</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea">Korea</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Navassa Island">Navassa Island</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Virgin Islands">United States Virgin Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands">Virgin Islands</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="form-group">
                                {!! Form::label('signature', 'Signature', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('signature', null, array('placeholder' => 'Signature','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2" for="usegravatar">Use Gravatar</label>
                                <div class="col-md-10">
                                    <input data-val="true" data-val-required="The UseGravatar field is required." id="usegravatar" name="usegravatar" type="checkbox" value="true"><input name="UseGravatar" type="hidden" value="false">
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('avatar', 'Avatar', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    @if ($profile->avatar == null)
                                        <a href="{{ asset('images/avatar/full/default.png') }}">
                                            <img class="img-thumbnail" src="{{ asset('images/avatar/thumb/default.png') }}">
                                        </a><br>
                                    @else
                                        <a href="{{ asset('images/avatar/full/'.$profile->avatar )}}" target="_blank">
                                            <img class="img-thumbnail" src="{{ asset('images/avatar/thumb/'.$profile->avatar )}}">
                                        </a><br>
                                    @endif
                                    <br>
                                    For best results, use an image with euqal width and height.
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                    <a class="btn btn-danger" href="{{ route('home') }}">Cancel</a>
                                    <a class="btn btn-warning" href="{{ route('changepassword') }}">Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection