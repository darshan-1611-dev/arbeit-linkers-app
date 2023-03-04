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
        <div class="">
            <div class="my-5">
                <p class="fs-5 text-muted mb-4">3/10</p>
                <h2 class="mb-0">Clients like to know what you know - add your education here.</h2>
                <p>You don't have to have a degree. Adding any relevant education helps make your profile more visible.
                </p>
            </div>
            <div class="col-sm-8" style="margin-top: 5rem !important;">
                <form action="" method="post" class="row">
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">School *</label>
                        <input type="text" class="form-control fs-4 py-3" name="name"
                               placeholder="Ex: Boston Universityr">
                        <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> Add your school</span>
                    </div>
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Degree</label>
                        <select name="" id="" class="form-select fs-4 py-3">
                            <option value="" selected>Ex: Bachelors</option>
                            <option value="Doctor of Engineering (DEng)">Doctor of Engineering (DEng)</option>
                            <option value="Doctor of Musical Arts (DMA)selected">Doctor of Musical Arts (DMA)selected
                            </option>
                            <option value="Bachelor of Industrial Design">Bachelor of Industrial Design</option>
                            <option value="Doctor of Healthcare Administration (DHA)">Doctor of Healthcare
                                Administration
                            </option>
                            (DHA)
                            <option value="Associate's degree">Associate's degree</option>
                            <option value="Associate of Arts (AA)">Associate of Arts (AA)</option>
                            <option value="Associate of Arts and Sciences (AAS)">Associate of Arts and Sciences (AAS)
                            </option>
                            <option value="Associate of Science (AS)">Associate of Science (AS)</option>
                            <option value="Bachelor's degree">Bachelor's degree</option>
                            <option value="Bachelor of Applied Science (BASc)">Bachelor of Applied Science (BASc)
                            </option>
                            <option value="Bachelor of Architecture (BArch)">Bachelor of Architecture (BArch)</option>
                            <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
                            <option value="Bachelor of Business Administration (BBA)">Bachelor of Business
                                Administration
                            </option>
                            (BBA)
                            <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
                            <option value="Bachelor of Education (BEd)">Bachelor of Education (BEd)</option>
                            <option value="Bachelor of Engineering (BEng)">Bachelor of Engineering (BEng)</option>
                            <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
                            <option value="Bachelor of Laws (LLB)">Bachelor of Laws (LLB)</option>
                            <option value="Bachelor of Medicine, Bachelor of Surgery (MBBS)">Bachelor of Medicine,
                                Bachelor
                            </option>
                            of Surgery (MBBS)
                            <option value="Bachelor of Pharmacy (BPharm)">Bachelor of Pharmacy (BPharm)</option>
                            <option value="Bachelor of Science (BS)">Bachelor of Science (BS)</option>
                            <option value="Bachelor of Technology (BTech)">Bachelor of Technology (BTech)</option>
                            <option value="Master's degree">Master's degree</option>
                            <option value="Master of Architecture (MArch)">Master of Architecture (MArch)</option>
                            <option value="Master of Arts (MA)">Master of Arts (MA)</option>
                            <option value="Master of Business Administration (MBA)">Master of Business Administration
                                (MBA)
                            </option>
                            <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)
                            </option>
                            <option value="Master of Divinity (MDiv)">Master of Divinity (MDiv)</option>
                            <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                            <option value="Master of Education (MEd)">Master of Education (MEd)</option>
                            <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
                            <option value="Master of Library & Information Science (MLIS)">Master of Library &
                                Information
                            </option>
                            Science (MLIS)
                            <option value="Master of Philosophy (MPhil)">Master of Philosophy (MPhil)</option>
                            <option value="Master of Commerce (MCom)">Master of Commerce (MCom)</option>
                            <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
                            <option value="Master of Science (MS)">Master of Science (MS)</option>
                            <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
                            <option value="Master of Technology (MTech)">Master of Technology (MTech)</option>
                            <option value="Doctor of Education (EdD)">Doctor of Education (EdD)</option>
                            <option value="Doctor of Law (JD)">Doctor of Law (JD)</option>
                            <option value="Doctor of Medicine (MD)">Doctor of Medicine (MD)</option>
                            <option value="Doctor of Pharmacy (PharmD)">Doctor of Pharmacy (PharmD)</option>
                            <option value="Doctor of Philosophy (PhD)">Doctor of Philosophy (PhD)</option>
                            <option value="Engineer's degree">Engineer's degree</option>
                            <option value="Foundation degree">Foundation degree</option>
                            <option value="Licentiate degree">Licentiate degree</option>
                            <option value="High school degree">High school degree</option>
                            <option value="Doctor of Business Administration (DBA)">Doctor of Business Administration
                                (DBA)
                            </option>
                            <option value="Master of Public Administration (MPA)">Master of Public Administration (MPA)
                            </option>
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in
                                Information
                            </option>
                            Technology
                            <option value="Master of Design (MDes)">Master of Design (MDes)</option>
                            <option value="Master of Industrial Design">Master of Industrial Design</option>
                            <option value="Master of Engineering (MEng)">Master of Engineering (MEng)</option>
                            <option value="Master of Science in Project Management (MSPM)">Master of Science in Project
                            </option>
                            Management (MSPM)
                            <option value="Master of Science in Information Technology (MSc(IT))">Master of Science in
                            </option>
                            Information Technology (MSc(IT))
                            <option value="Master of Information Technology (MIT)">Master of Information Technology
                                (MIT)
                            </option>
                            <option value="Master of Computer Science (MSCS)">Master of Computer Science (MSCS)</option>
                            <option value="Bachelor of Computer Science (BCompSc)">Bachelor of Computer Science
                                (BCompSc)
                            </option>
                            <option value="Bachelor of Computer Applications">Bachelor of Computer Applications</option>
                            <option value="Bachelor of Music (BM)">Bachelor of Music (BM)</option>
                            <option value="Bachelor of Science in Journalism">Bachelor of Science in Journalism</option>
                            <option value="Master of Mass Communication and Journalism">Master of Mass Communication and
                            </option>
                            Journalism
                            <option value="Master of Educational Technology">Master of Educational Technology</option>
                            <option value="Master of Accountancy (MAcc)">Master of Accountancy (MAcc)</option>
                            <option value="Bachelor of Accountancy (BAcc)">Bachelor of Accountancy (BAcc)</option>
                            <option value="Bachelor of Science in Nursing (BSN)">Bachelor of Science in Nursing (BSN)
                            </option>
                            <option value="Bachelor of Visual Communication Design">Bachelor of Visual Communication
                                Design
                            </option>
                            <option value="Master of Music (MM)">Master of Music (MM)</option>
                            <option value="Doctor of Ministry (DMin)">Doctor of Ministry (DMin)</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Field of Study</label>
                        <input type="text" class="form-control fs-4 py-3" name="name" placeholder="Ex: Business">
                    </div>
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Dates Attended</label>
                        <div class="row">
                            <div class="col-6">
                                <select name="" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>From</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>

                                </select>
                            </div>
                            <div class="col-6">
                                <select name="" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>To (or expected graduation year)</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="fw-semibold fs-4 mb-3">Description</label>
                        <textarea class="form-control fs-4 py-3" name=""
                                  placeholder="Describe your studies, awards, etc." rows="5"
                                  style="resize: none;"></textarea>
                    </div>
                    <div class="mb-5">
                        <input type="checkbox" name="user-type" id="" class="form-check-input me-2 mt-0 mt-sm-1"
                               style="width: 2rem; height: 2rem;">
                        <label for="form-check-lable" class="fs-4 me-2 me-sm-4">Nothing to add? Check the box and keep
                            going</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ url("/user-detail/work_experience") }}" class="btn al-btn al-btn-light">Back</a>
                </div>
                <div>
                    <a href="{{ url("/user-detail/languages") }}"><input type="submit" value="Next, Add Languages"
                                                                         class="btn al-btn"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form End -->
@endsection
