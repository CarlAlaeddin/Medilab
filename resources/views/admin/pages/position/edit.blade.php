@extends('admin.layouts.master')
@section('title')
{{   __('Service - Edit') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    @include('admin.sections.error')
    <div class="col-md-12">
        <form action="{{ route('admin.position.update', ['positionDoctor' => $positionDoctor->id]) }}" method="post">
            @csrf
            @method('PUT')
                      <hr>
            <h5> position</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="position">position name</label>
                    <input type="text" name="position" id="position" class="form-control" value="{{ $positionDoctor->position }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="is_active">Status</label>
                    <select name="is_active" id="is_active" class="form-select form-control">
                        <option value="0" {{ $positionDoctor->getRawOriginal('is_active') ? 'selected' : '' }}>DeActive</option>
                        <option value="1" {{ $positionDoctor->getRawOriginal('is_active') ? 'selected' : '' }}>Active</option>
                    </select>
                </div>
            </div>
            <a href="{{ route('admin.position.index') }}" class="btn btn-dark">Back</a>
            <button class="my-2 btn btn-md btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection