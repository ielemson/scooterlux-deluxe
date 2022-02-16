@extends('shop.layout.master')

@section('content')
    @include('shop.includes.header')

    @include('shop.auth.includes.breadcrumb',['dashboard'=>'Reset Password'])
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
                        <form action="{{ route('user.update.password') }}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Curent Password <span>*</span></label>
                                    <div class="controls">
                                        <input type="password" name="current_password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                    </div>
                                    @error('current_password')
                                        <span class="alert text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">New Password <span>*</span></label>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                    </div>
                                    @error('password')
                                        <span class="alert text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                                    <div class="controls">
                                        <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required=""> <div class="help-block"></div>
                                    </div>
                                    @error('password_confirmation')
                                        <span class="alert text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-primary mb-5 btn-sm">Update</button>
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