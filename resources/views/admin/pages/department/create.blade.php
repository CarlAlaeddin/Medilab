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
        <form action="{{ route('admin.department.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <hr>
            <h5>department</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">department image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name"> department name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
                </div>

                <div class="form-group col-md-12">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option selected disabled>Select a status</option>
                        <option value="0">DeActive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ old('description') }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.department.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection