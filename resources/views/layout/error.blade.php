@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
        <strong>يوجد بعض الأخطاء:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
