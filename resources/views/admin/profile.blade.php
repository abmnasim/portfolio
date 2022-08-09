@extends('admin.admin-master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4">
                            <img class="card-img img-fluid" src="{{ (!empty($adminData->image))? url('upload/admin_images/'.$adminData->image) : url('upload/no_image.jpg') }}" alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $adminData->name}}</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Details</h5>
                        <span style="position: absolute; top: 0; right: 0;" class=""><a href="{{ route('admin.profile.edit') }}" style="display: block; text-decoration: none; padding: 10px;"><i class="ri-edit-2-line"></i></a></span>
                        <p class="card-text">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Full name</b>
                                </div>
                                <div class="col-md-6">
                                    : {{ $adminData->name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Email address</b>
                                </div>
                                <div class="col-md-6">
                                    : {{ $adminData->email }}
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection