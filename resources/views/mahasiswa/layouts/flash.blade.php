
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show my-toast" role="alert">
        <strong>Sukses!</strong> <br> {{ session()->get('success') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show my-toast" role="alert">
        <strong>Error!</strong> <br> {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show my-toast" role="alert">
        <strong>Warning!</strong> <br> {{ session()->get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
@endif
