<nav class="navbar navbar-expand-lg navbar-light bg-light my-3">
  <a class="navbar-brand text-uppercase p-3" href="#"><h5 class="m-0">Rio's Library</h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown px-2">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
          Browse
        </a>
        <div class="dropdown-menu">
			     <div class="dropdown-item dropdown-submenu">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" class="dropdown-toggle">By Genre </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Horror</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Thriller</a>
                    <a class="dropdown-item" href="#">Sci-Fi</a>
                    <a class="dropdown-item" href="#">Fantasy</a>
                    <a class="dropdown-item" href="#">Comedy</a>
                </div>
            </div>
            <div class="dropdown-item dropdown-submenu">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" class="dropdown-toggle">By Library Section </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Circulation</a>
                    <a class="dropdown-item" href="#">Periodical Section</a>
                    <a class="dropdown-item" href="#">General Reference</a>
                    <a class="dropdown-item" href="#">Children's Section</a>
                    <a class="dropdown-item" href="#">Fiction</a>
                </div>
            </div>
             <div class="dropdown-divider"></div>
            <div class="dropdown-item">
            	<a href="#" class="nav-link">Random Book</a>
            </div>
        </div>
      </li>

      <li class="nav-item dropdown px-2">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
          My Books
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item nav-link" href="#">Borrowed Books</a>
          <a class="dropdown-item nav-link" href="#">My Favorites</a>
        </div>
      </li>

      <li class="nav-item px-2">
        <button class="btn btn-primary my-2 my-sm-0" type="button">Add Book</button>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
        <div class="input-group-prepend">
        <select class="search-options form-control">
          <option value="all">All</option>
          <option value="title">Title</option>
          <option value="author">Author</option>
        </select>
        </div>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </div>
      <button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>