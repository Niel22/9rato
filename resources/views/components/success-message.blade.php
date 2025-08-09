@if(session()->has('success'))
    <div class="mb-6">
        <span class="alert alert-success col-12">
            {{ session('success') }}
        </span>
    </div>
@endif