<!-- Menu NavBar Deslogado -->
<?php
  if (!isset($_SESSION['id'])) {
    ?>
<div class="container mt-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-faded" style="border-radius: 12px;">
    <a class="navbar-brand" href="/onstudies/index.php">
      <img class="logo" src="/onstudies/imagens/Logo.png" width="70px" height="40px" alt="" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/onstudies/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/onstudies/usuarios/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/onstudies/contatos.php">Contatos</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<?php
}
else { ?>
  <div class="container mt-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-faded" style="border-radius: 12px;">
    <a class="navbar-brand" href="/onstudies/usuarios/dashboard.php">
      <img class="logo" src="/onstudies/imagens/Logo.png" width="70px" height="40px" alt="" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/onstudies/usuarios/dashboard.php">Painel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/onstudies/usuarios/perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/onstudies/contatos.php">Contatos</a>
        </li>
        <li>
          <a class="nav-link" href="/onstudies/funcoes/logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<?php
}
?>