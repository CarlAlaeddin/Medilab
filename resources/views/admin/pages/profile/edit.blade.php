@extends('admin.layouts.master')
@section('title')
{{   __('profile - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.profile.update', ['profile' => $profile->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr>
            <h5>profile</h5>
            <div class="row">

                <div class="form-group col-md-6">
                    <label for="nike_name">nike name</label>
                    <input type="text" name="nike_name" id="nike_name" class="form-control" value="{{ $profile->nike_name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone_number">phone number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $profile->phone_number }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $profile->user->name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $profile->user->email }}">
                </div>
                <div class="col-md-12">
                    <label for="image">profile image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image')}}">
                </div>
                <div class="form-group col-md-12">
                    <label for="biography">biography</label>
                    <textarea name="biography" id="biography" cols="30" rows="3" class="form-control">{{ $profile->biography }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.profile.show') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection