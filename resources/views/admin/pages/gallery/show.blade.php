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
        <h5>gallery</h5>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ url('/upload/gallery/'.$gallery->image) }}" alt="{{ $gallery->name }}" width="300" height="300" class="rounded shadow">
                <hr>
            </div>

            <div class="form-group col-md-12">
                <label for="is_active">Status</label>
                <label>Status</label>
                <select class="form-select form-control" @disabled(true)>
                    <option>{{ $gallery->is_active }}</option>
                </select>
            </div>
        </div>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection