<nav class="navbar navbar-expand navbar-dark bg-dark mt-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> KPMG </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3">
        <li class="breadcrumb-item" aria-current="page">Home</li>
        @yield('breadcrumbs')
    </ol>
</nav>
