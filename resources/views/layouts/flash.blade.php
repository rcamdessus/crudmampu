@if ( session()->has('success') )
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{ session()->get('success') }}
    </div>
@endif
