@extends('layout.main')

@section("body")
    <!-- Job Post Section Start -->
    <section>
        <div class="container row m-auto">
            <div class="col-sm-8 m-auto">
                <h2>Edit Your New Profile</h2>

                <h3>Personal Detail</h3>
                <hr>
                <form action="{{ url("/user-profile/update") }}" method="post" class="m-auto" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <input type="hidden" value="{{ $user->id }}" name="user_id" id="user_id" />

                        {{-- Personal Details --}}
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Name *
                            </label>
                            <input type="text" class="form-control fs-4 py-3" name="name"
                                   value="{{ $user->name }}">
                            @error("name")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Mobile *</label>
                            <input type="number" class="form-control fs-4 py-3" name="mobile_no"
                                   value="{{ $user->mobile_no }}">
                            @error("min_salary")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label class="fw-semibold fs-4 mb-3">Email *</label>
                            <input type="text" class="form-control fs-4 py-3" name="email"
                                   value="{{ $user->email }}">
                            @error("email")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label class="fw-semibold fs-4 mb-3">Title *</label>
                            <input type="text" class="form-control fs-4 py-3" name="user_title"
                                   value="{{ $user->user_detail->user_title }}">
                            @error("user_title")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold fs-4 mb-3">About Yourself:</label>
                            <textarea class="form-control fs-4 py-3" name="user_description"
                                      rows="5"
                                      style="resize: none;">{{ $user->user_detail->user_description }}</textarea>
                            @error("user_description")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        {{-- End Personal Details --}}

                        {{-- Experience --}}
                        <div class="mb-5"></div>
                        <h3>Experience</h3>
                        <hr>

                        <div class="mb-5">
                            <input type="checkbox" name="is_experience" id="" class="form-check-input me-2 mt-0 mt-sm-1"
                                   {{ $user->user_detail->is_experience == 0 ? 'checked' : '' }} style="width: 2rem; height: 2rem;"
                                   value="1">
                            <label for="form-check-lable"
                                   class="fs-4 me-2 me-sm-4">None
                                Experience</label>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Job Title *
                            </label>
                            <input type="text" class="form-control fs-4 py-3" name="job_title"
                                   value="{{ $user->user_detail->job_title }}">
                            @error("job_title")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Job Company *</label>
                            <input type="text" class="form-control fs-4 py-3" name="job_company"
                                   value="{{ $user->user_detail->job_company }}">
                            @error("job_company")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Job Location:
                            </label>
                            <input type="text" class="form-control fs-4 py-3" name="job_location"
                                   value="{{ $user->user_detail->job_location }}">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Job Country:</label>
                            <input type="text" class="form-control fs-4 py-3" name="job_country"
                                   value="{{ $user->user_detail->job_country }}">
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold fs-4 mb-3">Job Description:</label>
                            <textarea class="form-control fs-4 py-3" name="job_description"
                                      rows="5"
                                      style="resize: none;">{{ $user->user_detail->job_description }}</textarea>
                        </div>
                        {{-- End Experience --}}

                        {{-- Education --}}
                        <div class="mb-5"></div>
                        <h3>Education</h3>
                        <hr>

                        <div class="mb-5">
                            <input type="checkbox" name="is_education" id="" class="form-check-input me-2 mt-0 mt-sm-1"
                                   {{ $user->user_detail->is_education == 0 ? 'checked' : '' }} style="width: 2rem; height: 2rem;"
                                   value="1">
                            <label for="form-check-lable"
                                   class="fs-4 me-2 me-sm-4">None
                                Education</label>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">School Name *
                            </label>
                            <input type="text" class="form-control fs-4 py-3" name="school_name"
                                   value="{{ $user->user_detail->school_name }}">
                            @error("school_name")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Degree *</label>
                            <input type="text" class="form-control fs-4 py-3" name="degree_title"
                                   value="{{ $user->user_detail->degree_title }}">
                            @error("degree_title")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label class="fw-semibold fs-4 mb-3">Field Of Study *</label>
                            <input type="text" class="form-control fs-4 py-3" name="field_of_study"
                                   value="{{ $user->user_detail->field_of_study }}">
                            @error("field_of_study")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold fs-4 mb-3">Education Description:</label>
                            <textarea class="form-control fs-4 py-3" name="education_description"
                                      rows="5"
                                      style="resize: none;">{{ $user->user_detail->education_description }}</textarea>
                        </div>
                        {{-- End Education --}}

                        {{-- Additional Details --}}

                        <div class="mb-5"></div>
                        <h3>Additional Details</h3>
                        <hr>

                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Skills *
                            </label>
                            <input type="text" class="form-control fs-4 py-3" name="skills"
                                   value="{{ $user->user_detail->skills }}">
                            @error("skills")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="fw-semibold fs-4 mb-3">Hourly Rate *</label>
                            <input type="number" class="form-control fs-4 py-3" name="hourly_rate"
                                   value="{{ $user->user_detail->hourly_rate }}">
                            @error("hourly_rate")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">Country *</label>
                            <input type="text" class="form-control fs-4 py-3" name="country"
                                   value="{{ $user->user_detail->country }}">
                            @error("country")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">State *</label>
                            <input type="text" class="form-control fs-4 py-3" name="state"
                                   value="{{ $user->user_detail->state }}">
                            @error("state")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">City *</label>
                            <input type="text" class="form-control fs-4 py-3" name="city"
                                   value="{{ $user->user_detail->city }}">
                            @error("city")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-5 col-8">
                            <label class="fw-semibold fs-4 mb-3">Street Address</label>
                            <input type="text" class="form-control fs-4 py-3" name="street_address"
                                   value="{{ $user->user_detail->street_address }}">
                        </div>
                        <div class="mb-5 col-4">
                            <label class="fw-semibold fs-4 mb-3">ZIP/Postal code</label>
                            <input type="text" class="form-control fs-4 py-3" name="postal_code"
                                   value="{{ $user->user_detail->postal_code }}">
                        </div>
                        <div class="mb-5">
                            <label class="fw-semibold fs-4 mb-3">Profile Photo:</label>
                            <input type="file" class="form-control fs-4" name="profile_photo_path" accept="image/*">
                        </div>
                    </div>
                    {{-- End Additional Details --}}

                    <div class="mb-3 mt-5">
                        <input type="submit" value="Update Detail" class="btn al-btn me-2">
                        <a href="{{ url("/user-profile") }}">
                            <button type="button" class="btn al-btn al-btn-danger">Cancel</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Job Post Section End -->

@endsection
