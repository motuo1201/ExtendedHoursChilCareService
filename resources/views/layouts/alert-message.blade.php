@if (session('message'))
<div class="row">
    <div >
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    </div>
</div>
@endif