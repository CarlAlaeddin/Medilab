@extends('admin.layouts.master')
@section('title')
{{   __('doctor - Cretae') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.doctor.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <hr>
            <h5>doctor</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">doctor image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="name"> doctor name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="linkedin"> linkedin</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="twitter"> twitter</label>
                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="facebook"> facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="instagram"> instagram</label>
                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram')}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="position">position</label>
                    <select name="position_doctor_id" id="position" class="form-select form-control">
                        <option selected disabled>Select a status</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->position }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option selected disabled>Select a position</option>
                        <option value="0">DeActive</option>
                        <option value="1">Active</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label for="biography">description</label>
                    <textarea name="biography" id="biography" cols="30" rows="3" class="form-control">{{ old('biography') }}</textarea>
                </div>
            </div>
            <a href="{{ route('admin.doctor.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection