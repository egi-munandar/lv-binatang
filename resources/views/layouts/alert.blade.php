@if (session('msg'))
    <div class="container my-3">
        <div class="alert alert-{{ session('msg')['type'] }} alert-dismissible fade show" role="alert">
            {{ session('msg')['message'] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
