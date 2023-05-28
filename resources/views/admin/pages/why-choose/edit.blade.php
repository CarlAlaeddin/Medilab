@extends('admin.layouts.master')
@section('title')
{{   __('why us - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.whyChoose.update', ['whyChoose' => $whyChoose->id]) }}" method="post">
            @csrf
            @method('PUT')
            <hr>
            <h5>why us</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="icon">why us icon</label>
                    <input type="text" name="icon" id="icon" class="form-control" value="{{ $whyChoose->icon }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="title">why us title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $whyChoose->title }}">
                </div>

                <div class="form-group col-md-12">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option value="0" {{ $whyChoose->getRawOriginal('is_active') ? 'selected' : '' }} >DeActive</option>
                        <option value="1" {{ $whyChoose->getRawOriginal('is_active') ? 'selected' : '' }} >Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ $whyChoose->description }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.whyChoose.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection