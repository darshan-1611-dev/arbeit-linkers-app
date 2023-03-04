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
        <form action="{{ url('/user-detail/languages/store') }}" method="post" class="row">
            @csrf
            <div class="">
                <div class="my-5">
                    <p class="fs-5 text-muted mb-4">4/10</p>
                    <h2 class="mb-0">Looking good. Next, tell us which languages you speak.</h2>
                    <p>Upwork is global, so clients are often interested to know what languages you speak.
                        <b>English</b> is a
                        must, but do you speak any other languages?
                    </p>
                </div>
                <div class="col-sm-8" style="margin-top: 5rem !important;">

                    <div class="mb-5">
                        <div class="row">
                            <label class="fw-semibold fs-4 mb-3 col-6">Language</label>
                            <label class="fw-semibold fs-4 mb-3 col-6">Proficiency</label>
                        </div>
                        <hr>
                    </div>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6">
                                <select name="language" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>I know</option>
                                    <option value="Afrikaans">Afrikaans</option>
                                    <option value="Amharic">Amharic</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Assamese">Assamese</option>
                                    <option value="Azerbaijani">Azerbaijani</option>
                                    <option value="Belarusian">Belarusian</option>
                                    <option value="Bulgarian">Bulgarian</option>
                                    <option value="Bhojpuri">Bhojpuri</option>
                                    <option value="Bengali">Bengali</option>
                                    <option value="Bosnian">Bosnian</option>
                                    <option value="Catalan, Valencian">Catalan, Valencian</option>
                                    <option value="Cebuano">Cebuano</option>
                                    <option value="Czech">Czech</option>
                                    <option value="Danish">Danish</option>
                                    <option value="German">German</option>
                                    <option value="Ewe">Ewe</option>
                                    <option value="Greek, Modern">Greek, Modern</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Estonian">Estonian</option>
                                    <option value="Basque">Basque</option>
                                    <option value="Persian">Persian</option>
                                    <option value="Fula">Fula</option>
                                    <option value="Finnish">Finnish</option>
                                    <option value="French">French</option>
                                    <option value="Irish">Irish</option>
                                    <option value="Galician">Galician</option>
                                    <option value="Guarani">Guarani</option>
                                    <option value="Gujarati">Gujarati</option>
                                    <option value="Hausa">Hausa</option>
                                    <option value="Haitian Creole">Haitian Creole</option>
                                    <option value="Hebrew (modern)">Hebrew (modern)</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Chhattisgarhi">Chhattisgarhi</option>
                                    <option value="Croatian">Croatian</option>
                                    <option value="Hungarian">Hungarian</option>
                                    <option value="Armenian">Armenian</option>
                                    <option value="Indonesian">Indonesian</option>
                                    <option value="Igbo">Igbo</option>
                                    <option value="Icelandic">Icelandic</option>
                                    <option value="Italian">Italian</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Syro-Palestinian Sign Language">Syro-Palestinian Sign Language
                                    </option>
                                    <option value="Javanese">Javanese</option>
                                    <option value="Georgian">Georgian</option>
                                    <option value="Kikuyu">Kikuyu</option>
                                    <option value="Kyrgyz">Kyrgyz</option>
                                    <option value="Kuanyama">Kuanyama</option>
                                    <option value="Kazakh">Kazakh</option>
                                    <option value="Khmer">Khmer</option>
                                    <option value="Kannada">Kannada</option>
                                    <option value="Korean">Korean</option>
                                    <option value="Krio">Krio</option>
                                    <option value="Kashmiri">Kashmiri</option>
                                    <option value="Kurdish">Kurdish</option>
                                    <option value="Latin">Latin</option>
                                    <option value="Lithuanian">Lithuanian</option>
                                    <option value="Luxembourgish">Luxembourgish</option>
                                    <option value="Latvian">Latvian</option>
                                    <option value="Magahi">Magahi</option>
                                    <option value="Maithili">Maithili</option>
                                    <option value="Malagasy">Malagasy</option>
                                    <option value="Macedonian">Macedonian</option>
                                    <option value="Malayalam">Malayalam</option>
                                    <option value="Mongolian">Mongolian</option>
                                    <option value="Marathi (Marāṭhī)">Marathi (Marāṭhī)</option>
                                    <option value="Malay">Malay</option>
                                    <option value="Maltese">Maltese</option>
                                    <option value="Burmese">Burmese</option>
                                    <option value="Nepali">Nepali</option>
                                    <option value="Dutch">Dutch</option>
                                    <option value="Norwegian">Norwegian</option>
                                    <option value="Oromo">Oromo</option>
                                    <option value="Odia">Odia</option>
                                    <option value="Oromo">Oromo</option>
                                    <option value="Panjabi, Punjabi">Panjabi, Punjabi</option>
                                    <option value="Polish">Polish</option>
                                    <option value="Pashto">Pashto</option>
                                    <option value="Portuguese">Portuguese</option>
                                    <option value="Rundi">Rundi</option>
                                    <option value="Romanian, Moldavian, Moldovan">Romanian, Moldavian, Moldovan</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Kinyarwanda">Kinyarwanda</option>
                                    <option value="Sindhi">Sindhi</option>
                                    <option value="Argentine Sign Language">Argentine Sign Language</option>
                                    <option value="Brazilian Sign Language">Brazilian Sign Language</option>
                                    <option value="Chinese Sign Language">Chinese Sign Language</option>
                                    <option value="Colombian Sign Language">Colombian Sign Language</option>
                                    <option value="German Sign Language">German Sign Language</option>
                                    <option value="Algerian Sign Language">Algerian Sign Language</option>
                                    <option value="Ecuadorian Sign Language">Ecuadorian Sign Language</option>
                                    <option value="Spanish Sign Language">Spanish Sign Language</option>
                                    <option value="Ethiopian Sign Language">Ethiopian Sign Language</option>
                                    <option value="French Sign Language">French Sign Language</option>
                                    <option value="British Sign Language">British Sign Language</option>
                                    <option value="Ghanaian Sign Language">Ghanaian Sign Language</option>
                                    <option value="Irish Sign Language">Irish Sign Language</option>
                                    <option value="Indopakistani Sign Language">Indopakistani Sign Language</option>
                                    <option value="Persian Sign Language">Persian Sign Language</option>
                                    <option value="Italian Sign Language">Italian Sign Language</option>
                                    <option value="Japanese Sign Language">Japanese Sign Language</option>
                                    <option value="Kenyan Sign Language">Kenyan Sign Language</option>
                                    <option value="Korean Sign Language">Korean Sign Language</option>
                                    <option value="Moroccan Sign Language">Moroccan Sign Language</option>
                                    <option value="Mexican Sign Language">Mexican Sign Language</option>
                                    <option value="Malaysian Sign Language">Malaysian Sign Language</option>
                                    <option value="Philippine Sign Language">Philippine Sign Language</option>
                                    <option value="Polish Sign Language">Polish Sign Language</option>
                                    <option value="Portuguese Sign Language">Portuguese Sign Language</option>
                                    <option value="Russian Sign Language">Russian Sign Language</option>
                                    <option value="Saudi Arabian Sign Language">Saudi Arabian Sign Language</option>
                                    <option value="El Salvadoran Sign Language">El Salvadoran Sign Language</option>
                                    <option value="Turkish Sign Language">Turkish Sign Language</option>
                                    <option value="Tanzanian Sign Language">Tanzanian Sign Language</option>
                                    <option value="Ukrainian Sign Language">Ukrainian Sign Language</option>
                                    <option value="American Sign Language">American Sign Language</option>
                                    <option value="South African Sign Language">South African Sign Language</option>
                                    <option value="Zimbabwe Sign Language">Zimbabwe Sign Language</option>
                                    <option value="Sinhala, Sinhalese">Sinhala, Sinhalese</option>
                                    <option value="Slovak">Slovak</option>
                                    <option value="Saraiki">Saraiki</option>
                                    <option value="Slovene">Slovene</option>
                                    <option value="Shona">Shona</option>
                                    <option value="Somali">Somali</option>
                                    <option value="Albanian">Albanian</option>
                                    <option value="Serbian">Serbian</option>
                                    <option value="Swati">Swati</option>
                                    <option value="Sunda">Sunda</option>
                                    <option value="Swedish">Swedish</option>
                                    <option value="Swahili">Swahili</option>
                                    <option value="Sylheti">Sylheti</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Tagalog">Tagalog</option>
                                    <option value="Thai">Thai</option>
                                    <option value="Tibetan">Tibetan</option>
                                    <option value="Tigrinya">Tigrinya</option>
                                    <option value="Turkmen">Turkmen</option>
                                    <option value="Tswana">Tswana</option>
                                    <option value="Turkish">Turkish</option>
                                    <option value="Uyghur">Uyghur</option>
                                    <option value="Ukrainian">Ukrainian</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Uzbek">Uzbek</option>
                                    <option value="Vietnamese">Vietnamese</option>
                                    <option value="Xhosaselected">Xhosaselected</option>
                                    <option value="Yiddish">Yiddish</option>
                                    <option value="Yoruba">Yoruba</option>
                                    <option value="Cantonese">Cantonese</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Zulu">Zulu</option>
                                </select>
                                @error('language')
                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <select name="language_proficiency" id="" class="form-select fs-4 py-3">
                                    <option value="Basic">Basic</option>
                                    <option value="Conversational">Conversational</option>
                                    <option value="Fluent">Fluent</option>
                                    <option value="Native or Bilingual">Native or Bilingual</option>
                                </select>
                                @error('language_proficiency')
                                <span class="text-danger fs-5"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Dynamic Add and Remove Field here -->

                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url("/user-detail/education") }}" class="btn al-btn al-btn-light">Back</a>
                    </div>
                    <div>
                        <input type="submit" value="Next, add your skills"
                               class="btn al-btn">
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Form End -->
@endsection
