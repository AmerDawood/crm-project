@extends('dashboard.master')






@section('content')




<div class="container-fluid" style="padding-top: 60px">
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload File</div>


                {{-- @if($contacts->topic() == 1)
                   <h1>Test</h1>
                @endif --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                        @csrf

                            <div class="mb-3">
                              <label  class="form-label">Name</label>
                              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
                                    @error('name')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                    @enderror
                            </div>


                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
                                @error('email')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" aria-describedby="emailHelp">
                                @error('phone')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label  class="form-label">description</label>
                                <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" id="description" aria-describedby="emailHelp">

                                @error('description')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                              </div>


                              <select class="form-select" name="city_id" aria-label="Default select example">
                                <option selected>Choose your city from here</option>

                                @foreach ($cities as $city )
                                <option value="{{ $city->id }}">{{ $city->title }}</option>
                                @endforeach
                              </select>

                              <div class="mb-3">
                                <label  class="form-label">Birthday</label>
                                <input type="text" name="birthday" class="form-control @error('birthday') is-invalid @enderror" id="birthday" aria-describedby="emailHelp">

                                @error('birthday')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                              </div>

                              <select class="form-select" name="job_id" aria-label="Default select example">
                                <option selected>Choose your job from here</option>
                                {{-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> --}}


                                @foreach ($jobs as $job )
                                <option value="{{ $job->id }}">{{ $job->title }}</option>
                                @endforeach
                              </select>


                              <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" name="image" class="form-control @error('image_path') is-invalid @enderror" id="image_path" aria-describedby="image_path">
                                @error('image_path')
                                <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                              </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
