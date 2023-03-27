@extends('auth_layout.main')

@section("body")
    <!-- Login Navbar Start -->
    <header id="main-nav">
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset("images/logo-black-svg.svg") }}" alt="logo" class="">
                            </a>
                        </div>
                        <div class="nav-right order-2 order-lg-last position-absolute end-0 me-4 me-md-5">
                            <div class="text-lg-end">
                                <div class="login-user pe-lg-5">
                                    <button style="background-color: transparent; border: none;"
                                            onclick="toggleUserMenu()">
                                        <img src="{{ asset('images/user_icon.jpeg') }}"
                                             alt="user_img" class="login-user-img"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="user-menu-toggler shadow-lg" style="display: none;">
        <div class="login-user toggler-user">
            <img src="{{ asset('images/user_icon.jpeg') }}" alt="user_img" class="login-user-img"
                 style="width: 10rem; height: 10rem;">
            <div class="mt-4">
                <p class="mb-0 fs-3">{{ $user_name ?? ''}}</p>
                <span class="fs-4 text-muted">Freelancer</span>
            </div>
        </div>
        <div class="mt-5">
            <div>
                <a href="#" class="text-dark"><i class="fas fa-cog me-3"></i>Close Account</a>
            </div>
            <div class="mt-2">
                <a href="#" class="text-dark"><i class="fas fa-sign-out-alt me-3"></i>Logout</a>
            </div>
        </div>
    </div>
    <!-- Login Navbar Start -->

    <!-- Form Start -->
    <section class="container">
        <form action="{{ url('/user-detail/work_experience/store') }}" method="post" class="row">
            @csrf
            <div class="">
                <div class="my-5">
                    <p class="fs-5 text-muted mb-4">2/10</p>
                    <h2 class="mb-0">If you have relevant work experience, add it here.</h2>
                    <p>Freelancers who add their experience are twice as likely to win work. But if you're just starting
                        out, you can still create a great profile. Just head on to the next page.</p>
                </div>
                <div class="col-sm-8 row" style="margin-top: 5rem !important;">

                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Title *</label>
                        <input type="text" class="form-control fs-4 py-3" name="job_title"
                               value="{{ old("job_title") }}"
                               placeholder="Ex: Software Enginner">
                        @error('job_title')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Company *</label>
                        <input type="text" class="form-control fs-4 py-3" name="job_company"
                               value="{{ old("job_company") }}"
                               placeholder="Ex: Microsoft">
                        @error('job_company')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-5 col-6">
                        <label class="fw-semibold fs-4 mb-3">Location</label>
                        <input type="text" class="form-control fs-4 py-3" name="job_location"
                               value="{{ old("job_location") }}" placeholder="Ex: London">
                    </div>
                    <div class="mb-5 col-6">
                        <label class="fw-semibold fs-4 mb-3">Country</label>
                        <select name="job_country" id="" class="form-select fs-4 py-3">
                            <option value="India" selected>India</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
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
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Holy See">Holy See</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
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
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="North Korea">North Korea</option>
                            <option value="North Macedonia">North Macedonia</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine State">Palestine State</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Korea">South Korea</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="mb-5 col-sm-6">
                        <label class="fw-semibold fs-4 mb-3">Start Date *</label>
                        <div class="row">
                            <div class="col-6">
                                <select name="job_start_month" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="job_start_year" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>Year</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        @error('job_start_month')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                        @error('job_start_year')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5 col-sm-6">
                        <label class="fw-semibold fs-4 mb-3">End Date</label>
                        <div class="row">
                            <div class="col-6">
                                <select name="job_end_month" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="job_end_year" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>Year</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        @error('job_end_month')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                        @error('job_end_year')
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <input type="checkbox" name="is_working" id="" class="form-check-input me-2 mt-0 mt-sm-1"
                               style="width: 2rem; height: 2rem;" value="1">
                        <label for="form-check-lable" class="fs-4 me-2 me-sm-4">I am currently working in this
                            role</label>
                    </div>

                    


                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Description</label>
                        <textarea class="form-control fs-4 py-3" name="job_description" placeholder="" rows="5"
                                  style="resize: none;">{{ old("job_description") }}</textarea>
                    </div>
                    <div class="mb-5">
                        <input type="checkbox" name="is_experience" id="" class="form-check-input me-2 mt-0 mt-sm-1"
                               style="width: 2rem; height: 2rem;" value="1">
                        <label for="form-check-lable" class="fs-4 me-2 me-sm-4">Nothing to add? Check the box and keep
                            going</label>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url("/user-detail/title") }}" class="btn al-btn al-btn-light">Back</a>
                    </div>
                    <div>
                        <input type="submit"
                               value="Next, Add your education"
                               class="btn al-btn">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Form End -->
@endsection
