<!-- NAVBAR -->
<nav class="navbar bg-body-tertiary">
    <!-- Background warna header-->
    <!-- Logo -->
    <div class="container" style= "background-color: #D9F9EE;">
      <a class="navbar-brand" href="/dashboard">
        <img src="{{ asset('img/Logo-SADIS.png') }}" alt="SADIS" width="102" height="95" >
        <span class="fs-2 fw-bold" style="color: #0E8DC9; margin-left: 10px; font-family: 'Inter', sans-serif;">SADIS</span>
      </a>

      <!-- Button navbar -->
      <div class="button-navbar" >
        
        @auth

        <button onclick="location.href='/logout'" type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Log out</button>
        <button onclick="location.href='/profil'" type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Profil</button>
        @else

        <button onclick="location.href='/login'" type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Login</button>
        <button onclick="location.href='/mitra'" type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Mitra</button>
        <button type="button" class="btn btn-primary rounded-5 border-0 "  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">About Us</button>
        @endauth


      </div>
    </div>
  </nav>
</header>
<!-- END Button Navbar -->
<!-- END NAVBAR -->