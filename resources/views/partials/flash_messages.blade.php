@if(Session::has('alert-success'))
    <div class="container top15">
        <div class="alert alert-success">
            {{ session('alert-success') }}
        </div>
    </div>
@endif