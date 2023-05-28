@extends('admin.layouts.master')
@section('title')
{{   __('department - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.department.update', ['department' => $department->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr>
            <h5>why us</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">why us icon</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="name">why us title</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $department->name }}">
                </div>

                <div class="form-group col-md-12">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option value="0" {{ $department->getRawOriginal('is_active') ? 'selected' : '' }} >DeActive</option>
                        <option value="1" {{ $department->getRawOriginal('is_active') ? 'selected' : '' }} >Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ $department->description }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.department.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection