@extends('shop.layout.master')

@section('content')
    @include('shop.includes.header')

    @include('shop.auth.includes.breadcrumb',['dashboard'=>'Profile Update'])

<!-- My Account Area -->
 <section class="my-account-area section_padding_100_50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="my-account-navigation mb-50">
                    @include('shop.auth.includes.sidebar')
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="my-account-content mb-50">
                    <div class="card-body">
                        <form action="{{ route('user.profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="name" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value={{ $user->name }}>
                            </div>
                            @error('name')
                                <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{ $user->email }}">
                            </div>
                            @error('email')
                                <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                                <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{ $user->phone_number }}">
                            </div>
                            @error('phone_number')
                                <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Profile Picture <span>*</span></label>
                                <div class="controls">
                                    <input type="file" name="image" id="image" class="form-control" required=""> <div class="help-block"></div>
                                </div>
                            </div>
                          <div class="row">
                            {{-- <div class="col-md-8 widget-user-image">
                                <img  id="show-image" class="rounded-circle" src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/avatar.jpg') }}" alt="User Avatar" style="float: right" width="100px" height="100px">
                            </div> --}}
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-rounded btn-sm btn-primary mb-5">Update Profile</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- My Account Area -->
@endsection