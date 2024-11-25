@extends('admin.layouts.master', ['page_slug' => 'admin'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">{{__('Admin Create')}}</h4>
                <div class="buttons">
                    <a href="{{route('admin.index')}}" class="btn btn-sm btn-primary">{{__('Back')}}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">{{__('Name')}}</label>
                        <input type="text" placeholder="Enter your name" name="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{__('Email')}}</label>
                        <input type="email" placeholder="Enter your email" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{__('Password')}}</label>
                        <input type="password" placeholder="Enter your password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{__('Confirm Password')}}</label>
                        <input type="confirm_password" placeholder="Enter your confirm password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary btn-sm float-end" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection