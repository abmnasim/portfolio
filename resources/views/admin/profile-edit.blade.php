@extends('admin.admin-master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4>

                        <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" value="{{ $editData->name }}" type="text" placeholder="Full name" id="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" value="{{ $editData->email }}" type="email" placeholder="Email address" id="email" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profile-picture" class="col-sm-2 col-form-label">Profile Picture</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="image" value="{{ $editData->image }}" type="file" placeholder="Profile Picture" id="profile-picture" onchange="loadProfilePicture(event)">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-2"></div>
                                <div class="col-md-6">
                                    <img class="img-thumbnail" id="pp_output" alt="200x200" width="200" src="{{ (!empty(Auth::user()->image))? url('upload/admin_images/'.Auth::user()->image) : url('upload/no_image.jpg') }}" data-holder-rendered="true">
                                </div>
                            </div>

                            <button class="btn btn-info float-end waves-effect waves-light" type="submit">Update Profile</button>
                        </form>

                        <script>
                            var loadProfilePicture = function (event) {
                                var image = document.getElementById('pp_output');
	                            image.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection