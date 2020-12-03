

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;z-index:4;" id="mySidebar">
  <div class="row azul-secundario">
    <div class="col-8">
    </div>
    <div class="col-4">
      <button onclick="w3_close()" class="w3-bar-item w3-large verde-secundario">&times;</button>
    </div>
    <div class="col-12 text-center">
      <h6><strong><?php echo $_SESSION['nombre']; ?></strong></h6>
      <h7 class="m-2">Empresa: <?php echo $_SESSION['empresa']; ?></h7>
    </div>
    <div class="col-12 text-center">
      <img src="https://api.qrserver.com/v1/create-qr-code/?data=http://goqr.me/api/doc/create-qr-code/&nombre=juan&amp;size=100x100" alt="" title="" />
      <br/>
      <br/>
    </div>
  </div>
  <a href="inicio.php" class="w3-bar-item w3-button">Ruta</a>
  <a href="perfil.php" class="w3-bar-item w3-button">Perfil</a>
  <a href="bases.php" class="w3-bar-item w3-button">Base</a>
</div>
<!-- Sidebar -->

<!-- Overlay -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
