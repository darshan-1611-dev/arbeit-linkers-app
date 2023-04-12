@extends('layout.main')

@section("body")
    <!-- Job Post Section Start -->
    <section>
        <div class="container row m-auto">
            <div class="col-sm-8 m-auto">
                <h2>Post Your New Job</h2>
                <form action="{{ url("/update-job") }}" method="post" class="m-auto">
                    @csrf

                    <input type="hidden" value="{{ $job->id }}" name="job_id" id="job_id" />

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <h6 class="pt-2">Project Title:</h6>
                            <input type="text" class="form-control fs-4 py-3" name="project_title"
                                   value="{{ $job->project_title }}" placeholder="Project Title">
                            @error("project_title")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <h6 class="pt-2">Job Discription:</h6>
                            <textarea class="form-control fs-4 py-3" name="project_description"
                                      placeholder=" job discription"
                                      rows="5" style="resize: none;">{{ $job->project_description }}</textarea>
                            @error("project_description")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Job Type:</h6>
                            <select class="form-select fs-4 py-3" name="job_type" aria-label="Default select example">
                                <option value="">Job Type</option>
                                <option value="1" {{ $job->job_type == 1 ? 'selected' : '' }}>Full Time</option>
                                <option value="2" {{ $job->job_type == 2 ? 'selected' : '' }}>Part Time</option>
                                <option value="3" {{ $job->job_type == 3 ? 'selected' : '' }}>Contract Base</option>
                            </select>
                            @error("job_type")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Skills and Expertise:
                            </h6>
                            <input type="text" class="form-control fs-4 py-3" name="skills" value="{{ $job->skills }}"
                                   placeholder="Skills and Expertise">
                            @error("skills")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Min Salary:</h6>
                            <input type="number" class="form-control fs-4 py-3" name="min_salary"
                                   value="{{ $job->min_salary }}" placeholder="0.00 ₹/hr">
                            @error("min_salary")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Max Salary:</h6>
                            <input type="number" class="form-control fs-4 py-3" name="max_salary"
                                   value="{{ $job->max_salary }}" placeholder="0.00 ₹/hr">
                            @error("max_salary")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Job Duration:</h6>
                            <input type="number" class="form-control fs-4 py-3" name="job_duration"
                                   value="{{ $job->job_duration }}"
                                   placeholder="Job Duration in weeks">
                            @error("job_duration")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <h6 class="pt-2">Experience :</h6>
                            <input type="radio" name="experience_level" value="0-5"
                                   {{ $job->experience_level == '0-5' ? 'checked' : '' }} id="experience_level"
                                   class="form-check-input me-1"
                                   style="width: 15px; height: 15px;">
                            <label for="form-check-lable" class="fs-4 me-2 ">0-5</label>
                            <input type="radio" name="experience_level" value="5-10"
                                   {{ $job->experience_level == '5-10' ? 'checked' : '' }}
                                   id="" class="form-check-input me-1"
                                   style="width: 15px; height: 15px;">
                            <label for="form-check-lable" class="fs-4 me-2 ">5-10</label>
                            <input type="radio" name="experience_level" value="more than 10"
                                   {{ $job->experience_level == 'more than 10' ? 'checked' : '' }} id="experience_level"
                                   class="form-check-input me-1"
                                   style="width: 15px; height: 15px;">
                            <label for="form-check-lable" class="fs-4 me-2 ">more than 10</label>
                            @error("experience_level")
                            <span class="text-danger fs-5">* {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 mt-5">
                            <input type="submit" value="Update Job" class="btn al-btn me-2">
                            <a href="{{ url("/company-profile/project") }}">
                                <button type="button" class="btn al-btn al-btn-danger">Cancel</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Job Post Section End -->
@endsection
