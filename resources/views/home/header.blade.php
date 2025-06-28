<header x-data="{ isActive: window.location.pathname === '/' }" :class="isActive ? 'active-bg' : ''" class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="/">
      <span class="bg-white rounded">Aplikasi E-Commerce</span>
    </a>
    <button class="navbar-toggler bg-black" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li x-data="{ active: window.location.pathname === '/' }" :class="active ? 'active' : ''" class="nav-item">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li x-data="{ active: window.location.pathname === '/shop' }" :class="active ? 'active' : ''" class="nav-item">
          <a class="nav-link" href="/shop">Shop</a>
        </li>
        <li x-data="{ active: window.location.pathname === '/wisataUser' }" :class="active ? 'active' : ''" class="nav-item">
          <a class="nav-link" href="/wisataUser">Wisata</a>
        </li>
        <li x-data="{ active: window.location.pathname === '/contact' }" :class="active ? 'active' : ''" class="nav-item">
          <a class="nav-link" href="/contact">Kontak</a>
        </li>
      </ul>

      <div class="user_option">
        @if (Route::has('login'))
        @auth
        <a href="{{url('myorders')}}">
          My Orders
        </a>
        <a href="{{url('mycart')}}">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          [{{$count}}]
        </a>
        <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn btn-danger" type="submit">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
        @else
        <a href="{{url('/login')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>
            Login
          </span>
        </a>
        <a href="{{url('/register')}}">
          <i class="fa fa-vcard" aria-hidden="true"></i>
          <span>
            Registrasi
          </span>
        </a>
        @endauth
        @endif
      </div>
    </div>
  </nav>
</header>

<style>
  .nav-item.active {
    background-color: #008000;
    border-radius: 5px;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>