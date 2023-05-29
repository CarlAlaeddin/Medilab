@extends('admin.layouts.master')
@section('title')
{{ __('profile - Show') }}
@endsection

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <hr>
        <h5>profile</h5>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ url('/upload/profile/'.$profile->image) }}" alt="{{ $profile->name }}" class="card-img-top" width="200" height="200">
            </div>
            <div class="col-md-9">
                <ul class="list-group">

                    <li class="list-group-item d-fkex">
                        <strong class="fw-bold">You special ID :</strong>
                        <!-- Target -->
                        <input id="UUID" class="w-50" value="{{ $profile->uuid }}"/>
                        <!-- Trigger -->
                        <button class="clipBorad btn btn-sm btn-dark" data-clipboard-target="#UUID">
                            <i class="fa fa-fw fa-copy"></i>
                        </button>
                    </li>

                    <li class="list-group-item">
                        <strong>NikeName : </strong>
                        <span>{{ $profile->nike_name }}</span>
                    </li>

                    <li class="list-group-item">
                        <strong>Phone Number : </strong>
                        <span>{{ $profile->phone_number }}</span>
                    </li>

                    <li class="list-group-item">
                        <strong>Biography : </strong>
                        <br>
                        <span>{{ $profile->biography }}</span>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-md btn-primary">Edit Your Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-dark">Back</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.clipBorad');
    </script>
@endsection