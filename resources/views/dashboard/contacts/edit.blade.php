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

                <div class="card-body">
                    <form method="POST" action="{{ route('contacts.update',$contact->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                              <label  class="form-label">Name</label>
                              <input type="text" name="name" value="{{ $contact->name }}" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>


                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="text" name="email" value="{{ $contact->email }}" class="form-control" id="email" aria-describedby="emailHelp">
                              </div>

                              <div class="mb-3">
                                <label  class="form-label">Phone</label>
                                <input type="text" name="phone"  value="{{ $contact->phone }}"class="form-control" id="phone" aria-describedby="emailHelp">
                              </div>

                              <div class="mb-3">
                                <label  class="form-label">description</label>
                                <input type="text" name="description"  value="{{ $contact->description }}"class="form-control" id="description" aria-describedby="emailHelp">
                              </div>


                              <div class="mb-3">
                                <label  class="form-label">City</label>
                                <input type="text" name="city" value="{{ $contact->city }}" class="form-control" id="city" aria-describedby="emailHelp">
                              </div>

                              <div class="mb-3">
                                <label  class="form-label">Birthday</label>
                                <input type="text" name="birthday" value="{{ $contact->birthday }}" class="form-control" id="birthday" aria-describedby="emailHelp">
                              </div>

                              <select class="form-select" name="job_id" aria-label="Default select example">
                                <option selected>Choose your job from here</option>

                                @foreach ($jobs as $job )
                                <option value="{{ $job->id }}">{{ $job->title }}</option>
                                @endforeach
                              </select>


                              <div class="mb-3">
                                <label  class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image_path" aria-describedby="image_path">
                              </div>


                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
