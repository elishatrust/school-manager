<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd!important;">
    <div class="container">
      <a class="navbar-brand fs-5" href="{{url('/')}}"><i class="bi bi-bookshelf text-primary"></i> <span class="text-info">STUDENT</span>MANAGER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/create')}}">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
