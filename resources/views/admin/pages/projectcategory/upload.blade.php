@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Add Real State</h4>
                    <p class="card-description">
                        Basic form elements
                    </p>
                    <form class="forms-sample" action="{{ route('project.category.store') }}" method="post">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputEmail3">Category Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail3"
                                placeholder="Enter your title">
                                <div class="invalid-feedback">
                                    <p>{{$errors->first('title')}}</p>
                                </div>
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <label for="">Category Status</label>
                            <input type="checkbox" value="1" name="status" class="ms-3
                            mb-1 ">
                        </div>





                        <button type="submit" class="btn btn-primary me-2" >Submit</button>

                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
