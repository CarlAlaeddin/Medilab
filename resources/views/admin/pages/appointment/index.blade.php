@extends('admin.layouts.master')
@section('title')
{{ __('appointment') }}
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
                    <td>Names</td>
                    <td>Phones</td>
                    <td>Emails</td>
                    <td>Departemants</td>
                    <td>Doctor</td>
                    <td>Actions</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($appointments as $key => $item)
                <tr>
                    <td scope="row">{{ $appointments->firstItem() + $key }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
                    <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                    <td>{{ $item->department->name }}</td>
                    <td>{{ $item->doctor->name }}</td>

                    <td>
                        <p class="{{ $item->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                            <a href="{{ route('admin.appointment.is_active',['appointment' => $item->id]) }}">{{ $item->is_active }}</a>
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
                                    href="{{ route('admin.appointment.show',['appointment' => $item->id]) }}">
                                    <span>
                                        {{ __('show') }}
                                    </span>
                                    <span>
                                        <i class="fa fa-fw fa-eye text-success"></i>
                                    </span>
                                </a>
                                <form class="dropdown-item" method="POST"
                                    action="{{ route('admin.appointment.destroy', ['appointment' => $item->id])}}">
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
                            {{ $appointments->render() }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection