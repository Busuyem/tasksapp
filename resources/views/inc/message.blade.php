
<div class="mb-3">
    @if(session('store'))
        <span class="alert alert-success">{{ session('store') }}</span>
    @endif
</div>

<div class="mb-3">
    @if (session('update'))
        <span class="alert alert-success">{{ session('update') }}</span>
    @endif
</div>

<div class="mb-3">
    @if (session('destroy'))
        <span class="alert alert-danger">{{ session('destroy') }}</span>
    @endif
</div>
