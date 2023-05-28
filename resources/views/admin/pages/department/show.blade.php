@extends('admin.layouts.master')
@section('title')
{{ __('service - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <hr>
        <h5>department</h5>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('/upload/department/'.$department->image) }}" alt="{{ $department->name }}" width="300" height="300" class="rounded shadow">
                <hr>
            </div>

            <div class="form-group col-md-6">
                <label> department name</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $department->name}}">
            </div>

            <div class="form-group col-md-6">
                <label for="is_active">Status</label>
                <label>Status</label>
                <select class="form-select form-control" @disabled(true)>
                    <option>{{ $department->is_active }}</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <label>description</label>
                <textarea @disabled(true) cols="30" rows="3"
                    class="form-control">{{ $department->description }}</textarea>
            </div>
        </div>
        <a href="{{ route('admin.department.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection