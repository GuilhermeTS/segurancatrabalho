<nav class="na navbar navbar-expand-lg navbar-light bg-success">
  <div class="collapse navbar-collapse d-flex justify-content-between align-items-center">
    <div class="navbar-brand">
      <span class="text-white display-4">Lazal</span>
    </div>
    <div class="navbar-item">
      <div class="dropdown">
        <a href="#" data-toggle="dropdown" style="font-size: 18pt; text-decoration: none;">
          <span class="dropdown-toggle text-light">Bem vindo, {{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item dropdown-link">Sair</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<br><br><br><br>
<center>
<nav class="na2 navbar navbar-expand-lg navbar-light text-center bg-success">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    {{ $slot }}
  </div>
</nav>
</center>

