<nav class="navbar navbar-expand-lg navbar-light nav-bg nav-bg">
  <div class="container">
    <a class="navbar-brand text-white" href="{{url('/')}}">
      <i class="fa fa-home" aria-hidden="true"></i> Shop
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa fa-th" aria-hidden="true"></i> Category</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa fa-tags" aria-hidden="true"></i> Brand</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="{{url('products/cart')}}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
            @if(session('items'))
              {{count(session('items'))}}
            @endif
            
          </a>
        </li>

        <li class="nav-item dropdown float-end">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-briefcase" aria-hidden="true"></i> Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">View All</a></li>
            <li><a class="dropdown-item" href="{{url('products/create')}}">Create</a></li>
            <li><a class="dropdown-item" href="#">Edit</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown float-end">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-users" aria-hidden="true"></i> Members
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">LOGOUT</a></li>
            <li><a class="dropdown-item" href="#">LOGIN</a></li>
            <li><a class="dropdown-item" href="#">REGISTER</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>