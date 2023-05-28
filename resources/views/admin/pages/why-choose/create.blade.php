@extends('admin.layouts.master')
@section('title')
{{   __('why choose - Cretae') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.whyChoose.store') }}" method="post">
            @csrf
            @method('POST')
            <hr>
            <h5> why choose</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="icon"> why choose icon</label>
                    <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="title"> why choose title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title ')}}">
                </div>

                <div class="form-group col-md-12">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option selected disabled>Select a status</option>
                        <option value="0">DeActive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ old('description') }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.whyUs.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection