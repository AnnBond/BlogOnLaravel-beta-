<header class="col-12" style="padding: 0;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-7">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('main') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
            </ul>
            <form class="form-inline col-4 searchForm">
                <input class="form-control mr-sm-2 col-9" type="text" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>
</header>