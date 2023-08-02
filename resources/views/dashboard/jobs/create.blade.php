@extends('dashboard.master')






@section('content')




<div class="container-fluid" style="padding-top: 60px">
    {{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Job</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
                        @csrf

                            <div class="mb-3">
                              <label  class="form-label">Title</label>
                              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="name" aria-describedby="emailHelp">
                              @error('title')
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
