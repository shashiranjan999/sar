@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <!-- users edit Info form start -->
                <form novalidate method="post">
                    @csrf
                    @method('PUT')

                    <div class="row mt-1">
                        <div class="col-12 col-sm-6">
                            <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Change Password</h5>
                            @if(session()->has('error'))
                            <!-- <span class="alert alert-danger mb-10"> -->
                            <strong style="color:red">{{ session()->get('error') }}</strong>
                            <!-- </span> -->
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>NEW PASSWORD</label>
                                            <input type="password" name="password" class="form-control" required placeholder="Enter password" data-validation-required-message="This Name field is required">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <label>CONFIRM PASSWORD</label>
                                    <input type="password" name="confirmpassword" class="form-control" required placeholder="Confirm password" data-validation-required-message="This Confirm password field is required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Change Password</button>
                        <!-- <button type="reset" class="btn btn-outline-warning">{{__('fr.Reset')}}</button> -->
                    </div>
                 </div>
                 </form>

        </div>
    </div>
</div>
</div>
@endsection