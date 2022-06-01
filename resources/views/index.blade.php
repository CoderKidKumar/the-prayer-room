@extends ('layouts/main')

@section('body')
@if (session('logout'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('logout')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<h2>Home Page Here</h2>



@endsection