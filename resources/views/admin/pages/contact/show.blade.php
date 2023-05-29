@extends('admin.layouts.master')
@section('title')
{{ __('contact - Edit') }}
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
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" @disabled(true) value="{{ $contact->name }}">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" @disabled(true) value="{{ $contact->email }}">
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" @disabled(true) value="{{ $contact->subject }}">
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" @disabled(true)>{{ $contact->message }}</textarea>
          </div>
        <a href="{{ route('admin.contact.index') }}" class="btn btn-dark">Back</a>
    </div>
</div>
@endsection