@extends('admin.layouts.master')
@section('title')
{{   __('Profile - Cretae') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <hr>
            <h5>doctor</h5>
            <div class="row">
                <div class="col-md-4">
                    <label for="image">doctor image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image')}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="nike_name">nike name</label>
                    <input type="text" name="nike_name" id="nike_name" class="form-control" value="{{ $profile->nike_name }}">
                </div>

                <div class="form-group col-md-4">
                    <label for="phone_number">phone number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $profile->phone_number }}">
                </div>

                <div class="form-group col-md-12">
                    <label for="biography">biography</label>
                    <textarea name="biography" id="biography" cols="30" rows="3" class="form-control">{{ $profile->biography }}</textarea>
                </div>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection