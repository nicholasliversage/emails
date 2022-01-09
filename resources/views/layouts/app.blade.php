<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
        </style
</head>
<body>
   <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
            href="/vantagens-contaPro"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
          >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Vantagens da Conta Pro</span>
          </a>
          
          <a href="/contaPro" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-lock fa-fw me-3"></i><span>Conta Pro</span></a
          >
          <a href="/confirmarConta" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>Confirmação da conta</span></a
          >
          <a href="/redefinirSenha" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Redefinição de senha </span>
          </a>
          <a href="/explicadoresAdmitidos" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Explicadoes Admitidos</span></a
          >
          <a href="/contaNaoActiva" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-globe fa-fw me-3"></i><span>Conta Nao Activa</span></a
          >
          <a href="/explicadoresProSemana" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-building fa-fw me-3"></i><span>Explicadoes Pro Semana</span></a
          >
        
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
  
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <label> Campanhas</label>
        </a>
        
  
        
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container pt-4"></div>
  </main>
  <!--Main layout-->
</body>
</html>
