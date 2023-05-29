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
            <h5>faq</h5>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="answer">answer</label>
                    <input class="form-control" value="{{ $faq->answer }}" @disabled(true)>
                </div>

                <div class="form-group col-md-6">
                    <label for="is_active">Status</label>
                    <select @disabled(true) class="form-select form-control">
                        <option value="0" @selected($faq->getRawOriginal('is_active'))>DeActive</option>
                        <option value="1" @selected($faq->getRawOriginal('is_active'))>Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>question</label>
                    <textarea cols="30" rows="3" class="form-control" @disabled(true)>{{ $faq->question }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.faq.index') }}" class="btn btn-dark">Back</a>
    </div>
@endsection