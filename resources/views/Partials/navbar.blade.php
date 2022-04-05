<div class="container-fluid pt-2 pb-2 bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/ailogo-dark.png" alt="Logo"
                        style="height: 30px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Biodata") ? 'active' : '' }}" href="/biodata">Biodata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Comment") ? 'active' : '' }}" href="/comment">Comment</a>
                        </li>
                    </ul>
                    <a href="/login" class="btn btn-outline-success">Login</a>
                    {{-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </div>
</div>
