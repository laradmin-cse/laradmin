<!-- Step 3: Adding a Page - Profile::PageAdding -->
@extends('layouts.app')
<!-- Step 4:  Adding a Page - Profile::ViewDefining-->
@section('content')
<div class="flex-row">
    <i class="bi bi-person"></i>
    <span class="fw-bold">Account Settings - Profile</span>
</div>
<hr class="border-bottom-info">
<div class="row my-4"><!-- Content Row -->
    <div class="col-lg-4">
        <div class="card mb-3"><!-- Profile -->
            <div class="card-header">
                <span class="fw-bold text-primary">Profile Picture</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img class="img-profile rounded-circle w-50"
                        src="{{asset('assets/svg/profile.svg')}}">
                </div>
                <div class="d-flex justify-content-center">
                    <span class="text-secondary p-2">JPG or PNG no larger than 5 MB</span>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary m-2">Upload New Image</button>
                </div>
            </div>
            <div class="card-footer">
                <span class="small text-secondary">All rights are reserved!</span>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card"><!-- Account Details -->
            <div class="card-header">
                <span class="fw-bold text-primary">Account Details</span>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Sadan Posts">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" placeholder="Sadan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Posts">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="organization_name">Organization Name</label>
                            <input type="text" class="form-control" id="organization_name" placeholder="Laradmin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="United States">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email Address</label>
                        <input type="email" class="form-control" id="inputAddress" placeholder="sadan@posts.com">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone_no">Phone No</label>
                            <input type="text" class="form-control" id="phone_no" placeholder="+1 9455819694">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" id="birthday" placeholder="Posts">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Laplace, Hazrat Ganj">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" placeholder="Lucknow">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <select id="state" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="zip">Zip</label>
                            <input type="text" placeholder="226001" class="form-control" id="zip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
            <div class="card-footer">
                <span class="small text-secondary">All rights are reserved!</span>
            </div>
        </div>

    </div>
</div>
@endsection