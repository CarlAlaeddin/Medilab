@extends('admin.layouts.master')
@section('title')
{{   __('department - Cretae') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <hr>
            <h5>gallery</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">department image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image')}}" multiple="">
                </div>

                <div class="form-group col-md-6">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option selected disabled>Select a status</option>
                        <option value="0">DeActive</option>
                        <option value="1">Active</option>
                    </select>
                </div>
            </div>
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection