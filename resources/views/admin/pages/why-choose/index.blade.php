@extends('admin.layouts.master')
@section('title')
{{   __('why choose') }}
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
                        <td>Icons</td>
                        <td>Titles</td>
                        <td>Conditions</td>
                        <td>Actions</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($why_choose as $key => $item)
                        <tr>
                            <td scope="row">{{ $why_choose->firstItem() + $key }}</td>
                            <td>{{ $item->icon }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <p class="{{ $item->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                    {{ $item->is_active }}
                                </p>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Manageme
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item d-flex justify-content-between" href="{{ route('admin.whyChoose.show',['whyChoose' => $item->id]) }}">
                                        <span>
                                            {{ __('show') }}
                                        </span>
                                        <span>
                                            <i class="fa fa-fw fa-eye text-success"></i>
                                        </span>
                                    </a>
                                      <a class="dropdown-item d-flex justify-content-between" href="{{ route('admin.whyChoose.edit',['whyChoose' => $item->id]) }}">
                                        <span>
                                            {{ __('edit') }}
                                        </span>
                                        <span>
                                            <i class="fa fa-fw fa-pen text-info"></i>
                                        </span>
                                    </a>
                                      <form class="dropdown-item" method="POST" action="{{ route('admin.whyChoose.destroy', ['whyChoose' => $item->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-md w-100 p-0 d-flex justify-content-between" onclick="return confirm('Are you sure to delete this column?')">
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
                                {{ $why_choose->render() }}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection