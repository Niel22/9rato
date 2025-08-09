@if(session()->has('error'))
    <div class="mb-6">
        <span class="alert alert-danger col-12">
            {{ session('error') }}
        </span>
    </div>
@endif