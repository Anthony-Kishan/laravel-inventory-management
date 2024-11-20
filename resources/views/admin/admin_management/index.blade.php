@extends('admin.layouts.master', ['page_slug' => 'admin'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{__('Admin List')}}</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>{{__('SL')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Updated At')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $admin->name}}</td>
                                <td>{{ $admin->email}}</td>
                                <td>{{ date('d M, Y', strtotime($admin->created_at))}}</td>
                                <td>{{ $admin->created_at != $admin->updated_at ? date('d M, Y', strtotime($admin->updated_at_at)) : "NULL" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection