@extends('admin.layouts.master')
@section('title')
{{   __('faq - Cretae') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.faq.store') }}" method="post">
            @csrf
            @method('POST')
            <hr>
            <h5>faq</h5>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="answer">answer</label>
                    <input type="text" name="answer" id="answer" class="form-control" value="{{ old('answer')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option selected disabled>Select a status</option>
                        <option value="0">DeActive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="question">question</label>
                    <textarea name="question" id="question" cols="30" rows="3" class="form-control">{{ old('question') }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.faq.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection