@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Project</h4>
                    <form class="forms-sample" action="{{ route('myproject.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Project Title *</label>
                            <input type="text" name="project_title" class="form-control file-upload-info"
                                placeholder="Enter your project title" value="{{ old('project_title') }}" required>
                            @error('project_title')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Project Image *</label>
                            <input type="file" name="project_image" class="form-control file-upload-info" required>
                            @error('project_image')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="project_category_id">Select Project Category</label>
                            <select id="select" class="form-control" name="project_category_id">
                                @foreach ($projectCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>

                            @error('project_category_id')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Project Description *</label>
                            <textarea name="project_description" placeholder="Enter Project Description" cols="180" rows="6"
                                minlength="50" class="form-control ckeditor form-control"
                                required>{{ old('project_description') }}</textarea>
                            @error('project_description')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Playstore Link</label>
                            <input type="url" name="playstore_link" value="{{ old('playstore_link') }}"
                                class="form-control file-upload-info" placeholder="Enter playstore link ">
                            @error('playstore_link')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Appstore Link</label>
                            <input type="url" name="appstore_link" value="{{ old('appstore_link') }}"
                                class="form-control file-upload-info" placeholder="Enter app store link">
                            @error('appstore_link')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Project Tag *</label>
                            <input type="text" name="project_tag" class="form-control file-upload-info"
                                placeholder="Enter your project tag eg: IOS & Android" value="{{ old('project_tag') }}"
                                required>
                            @error('project_tag')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Banner Title *</label>
                            <input type="text" name="banner_title" class="form-control file-upload-info"
                                placeholder="Enter Banner Title" value="{{ old('banner_title') }}" required>
                            @error('banner_title')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Banner Image *</label>
                            <input type="file" name="banner_image" class="form-control file-upload-info" required>
                            @error('banner_image')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Usecase Title *</label>
                            <input type="text" name="usecase_title" class="form-control file-upload-info"
                                placeholder="Enter Usecase Title" value="{{ old('usecase_title') }}" required>
                            @error('usecase_title')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Services *</label>
                            <input type="text" name="services" class="form-control file-upload-info"
                                placeholder="eg: Android Development,Multifunctional" value="{{ old('services') }}"
                                required>
                            @error('services')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Availability *</label>
                            <input type="text" name="availability" class="form-control file-upload-info"
                                placeholder="eg: IOS Platform, Android Platform" value="{{ old('availability') }}"
                                required>
                            @error('availability')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Why to Use Project Description *</label>
                            <textarea name="why_to_use_description" placeholder="Enter Description on Why to USe Project"
                                cols="180" rows="6" minlength="50" class="form-control ckeditor form-control"
                                required>{{ old('why_to_use_description') }}</textarea>
                            @error('why_to_use_description')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Navigation Description *</label>
                            <textarea name="navigation_description" placeholder="Enter Description on navigating Project"
                                cols="180" rows="6" minlength="50" class="form-control ckeditor form-control"
                                required>{{ old('navigation_description') }}</textarea>
                            @error('navigation_description')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Navigation Image *</label>
                            <input type="file" name="navigation_image" class="form-control file-upload-info" required>
                            @error('navigation_image')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Project Story *</label>
                            <textarea name="project_story" placeholder="Enter Project Story" cols="180" rows="6"
                                minlength="50" class="form-control ckeditor form-control"
                                required>{{ old('project_story') }}</textarea>
                            @error('project_story')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Project Story Image *</label>
                            <input type="file" name="project_story_image" class="form-control file-upload-info" required>
                            @error('project_story_image')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No of Month to Complete Project *</label>
                            <input type="number" name="project_month" class="form-control file-upload-info"
                                placeholder="eg: 04" value="{{ old('project_month') }}" required>
                            @error('project_month')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>No of Team Member in Project *</label>
                            <input type="number" name="project_team_member" class="form-control file-upload-info"
                                placeholder="eg: 02" value="{{ old('project_team_member') }}" required>
                            @error('project_team_member')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>No of Active User *</label>
                            <input type="text" name="active_user" class="form-control file-upload-info" placeholder="eg: 1k"
                                value="{{ old('active_user') }}" required>
                            @error('active_user')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Average Rating in Project *</label>
                            <input type="text" name="average_rating" class="form-control file-upload-info"
                                placeholder="eg: 3.5" value="{{ old('average_rating') }}" required>
                            @error('average_rating')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>What's Next</label>
                            <textarea name="what_next" placeholder="Enter what's next plan about project"
                                cols="180" rows="6" minlength="50" class="form-control ckeditor form-control"
                                >{{ old('what_next') }}</textarea>
                            @error('what_next')
                                <span class="text-danger invalid-feedback" style="display: block;"
                                    role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
