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
        <h5> position</h5>
        <div class="row">
            <div class="col-md-6">
                <label>position name</label>
                <input type="text" class="form-control" value="{{ $positionDoctor->position }}" @disabled(true)>
            </div>

            <div class="form-group col-md-6">
                <label for="is_active">Status</label>
                <select name="is_active" id="is_active" class="form-select form-control" @disabled(true)>
                    <option>{{ $positionDoctor->is_active }}</option>
                </select>
            </div>
        </div>
        <a href="{{ route('admin.position.index') }}" class="btn btn-dark">Back</a>
    </div>
</div>
@endsection