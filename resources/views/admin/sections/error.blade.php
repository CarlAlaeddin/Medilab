@if (count($errors) > 0)
<div class="container-fluid">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                <li class="list-group-item my-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif