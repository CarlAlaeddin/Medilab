@extends('admin.layouts.master')
@section('title')
{{ __('appointment - show') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <hr>
        <h5>appointment</h5>
        <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" value="{{ $appointment->name }}" @disabled(true)>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" value="{{ $appointment->email }}" @disabled(true)>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" value="{{ $appointment->phone }}" @disabled(true)>
            </div>

          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" value="{{ $appointment->date }}" @disabled(true)>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select class="form-control form-select" @disabled(true)>
                  <option>{{ $appointment->department->name }}</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select class="form-control" @disabled(true)>
                  <option>{{ $appointment->doctor->name }} - {{ $appointment->doctor->positionDoctor->position}}</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" @disabled(true)>{{ $appointment->message }}</textarea>
          </div>
        <a href="{{ route('admin.appointment.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection