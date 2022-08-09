@extends('admin.admin-master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>

                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show">
                                    {{ $error }}
                                </p>
                            @endforeach
                        @endif

                        <form action="{{ route('admin.password.update') }}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <label for="old_password" class="col-sm-2 col-form-label">Old password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="old_password" type="password" placeholder="Old password" id="old_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="new_password" class="col-sm-2 col-form-label">New password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="new_password" type="password" placeholder="New password" id="new_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="confirm_password" type="password" placeholder="Confirm password" id="confirm_password">
                                </div>
                            </div>

                            <button class="btn btn-info float-end waves-effect waves-light" type="submit">Update Password</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection