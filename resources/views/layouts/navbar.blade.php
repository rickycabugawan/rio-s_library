
<div class="alert alert-warning alert-dismissible fade show" id="popup-alert">
  <strong class="popup-text"></strong>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent my-3">
  <a class="navbar-brand text-uppercase p-1" href="/"><h5 class="m-0 font-italic"><span class="text-primary" style="font-size: 1.2em">Rio's</span> Library</h5></a>
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
                    @foreach($genres as $genre)
                      <a class="dropdown-item" href="/search?genre%5B%5D={{$genre->genre}}">{{$genre->genre}}</a>
                    @endforeach
                </div>
            </div>
            <div class="dropdown-item dropdown-submenu">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" class="dropdown-toggle">By Library Section </a>
                <div class="dropdown-menu">
                    @foreach($sections as $section)
                      <a class="dropdown-item" href="/search?section%5B%5D={{$section->section}}">{{$section->section}}</a>
                    @endforeach
                </div>
            </div>
        </div>
      </li>
      
      @auth
        <li class="nav-item dropdown px-2">
          <a class="nav-link" href="/mybooks">
            My Books
          </a>
        </li>
        @if(Auth::user()->isAdmin)
          <li class="nav-item px-2">
            <a href="{{action('BookController@create')}}">
              <button class="btn btn-primary my-2 my-sm-0" type="button">Add Book</button>
            </a>
          </li>
        @endif
      @endauth

    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search" method="get">
      <div class="input-group">
        <div class="input-group-prepend">
        <select class="search-options form-control">
          <option value="title">Title</option>
          <option value="author">Author</option>
        </select>
        </div>
        <input class="form-control mr-sm-2 search-box" type="search" name="title" placeholder="Search" aria-label="Search">
      </div>
      <button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>