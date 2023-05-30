@extends('admin.layouts.master')
@section('title')
    {{ __('index') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Appointment
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $appointmentCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Department
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $departmentCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fal fa-building fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                {{ __('Doctors') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $doctorCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                {{ __('Contact Messages') }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $contactCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid" style="max-height: 500px;overflow-y: scroll">
            <div class="col-md-12">
                <h5>Reports</h5>
            </div>
            <div class="col-md-12 bg-white p-4 shadow rounded">
                @foreach($users as $user)
                    <ul style="list-style-type: none" class="">
                        @foreach($user->notifications as $notification)
                            @if(!is_null($user->profile))
                                <li class="mr-5">
                                    <img src="{{ url('/upload/profile/'.$user->profile->image) }}" alt="{{ $user->name }}" width="50" height="50" class="img-thumbnail rounded-circle">
                                </li>
                            @endif
                            <li class="mr-3">{{ \Illuminate\Support\Str::ucfirst($notification -> data['name']) }} {{ __('An appointment for a date') }}:</li>
                            <li>{{ $notification -> created_at }} {{ __('submitted') }}</li>
                                <hr>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection
