@extends('admin.layouts.master')
@section('title')
{{ __('doctor - Show') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <hr>
        <h5>doctor</h5>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('/upload/doctor/'.$doctor->image) }}" alt="{{ $doctor->name }}" class="rounded-circle img-fluid" width="200" height="200">
                <hr>
            </div>
            <div class="form-group col-md-6">
                <label> doctor name</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $doctor->name }}">
            </div>

            <div class="form-group col-md-6">
                <label > linkedin</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $doctor->linkedin }}">
            </div>

            <div class="form-group col-md-6">
                <label > twitter</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $doctor->twitter }}">
            </div>

            <div class="form-group col-md-6">
                <label  > facebook</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $doctor->facebook }}">
            </div>

            <div class="form-group col-md-6">
                <label for="instagram"> instagram</label>
                <input type="text" @disabled(true) class="form-control" value="{{ $doctor->instagram }}">
            </div>

            <div class="form-group col-md-6">
                <label>position</label>
                <select class="form-select form-control" @disabled(true)>
                    <option selected>{{ $doctor->position }}</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="is_active">Status</label>
                <select class="form-select form-control" @disabled(true)>
                    <option selected>{{ $doctor->is_active }}</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <label>description</label>
                <textarea @disabled(true) cols="30" rows="3" class="form-control">{{ $doctor->biography }}</textarea>
            </div>
        </div>
        <a href="{{ route('admin.doctor.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection