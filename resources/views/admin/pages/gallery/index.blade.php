@extends('admin.layouts.master')
@section('title')
{{ __('gallery') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive-lg table-hover table-bordered text-center">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Images</td>
                    <td>Is Active</td>
                    <td>Actions</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($galleries as $key => $item)
                <tr>
                    <td scope="row">{{ $galleries->firstItem() + $key }}</td>
                    <td>
                        <img src="{{ url('/upload/gallery'.'/'. $item->image ) }}" alt="{{ $item->title }}"
                            class="img-fluid rounded shadow" width="200" height="200">
                    </td>
                    <td>
                        <p class="{{ $item->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                            {{ $item->is_active }}
                        </p>
                    </td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Manageme
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item d-flex justify-content-between"
                                    href="{{ route('admin.gallery.show',['gallery' => $item->id]) }}">
                                    <span>
                                        {{ __('show') }}
                                    </span>
                                    <span>
                                        <i class="fa fa-fw fa-eye text-success"></i>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between"
                                    href="{{ route('admin.gallery.edit',['gallery' => $item->id]) }}">
                                    <span>
                                        {{ __('edit') }}
                                    </span>
                                    <span>
                                        <i class="fa fa-fw fa-pen text-info"></i>
                                    </span>
                                </a>
                                <form class="dropdown-item" method="POST"
                                    action="{{ route('admin.gallery.destroy', ['gallery' => $item->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-md w-100 p-0 d-flex justify-content-between"
                                        onclick="return confirm('Are you sure to delete this column?')">
                                        <span class="mr-5 p-0">
                                            {{ __('delete') }}
                                        </span>
                                        <span class="ml-4 p-0">
                                            <i class="fa fa-fw fa-trash text-danger"></i>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="d-flex justify-content-center">
                            {{ $galleries->render() }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection