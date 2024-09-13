<div id="loading-screen">
  <div class="logo-container">
    <img src="../images/logo.png" alt="Logo Doppio Nodo">
    <div id="spinner"></div>
  </div>
</div>

<nav>
  <input type="checkbox" id="click">
  <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
  </label>

  <div class="logo">
    <a href="index.php">
      <img src="../images/logo.png" class="small" alt="Logo Doppio Nodo">
    </a>
  </div>
  s
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#chi-siamo" id="link-chi-siamo">Chi siamo</a></li>
    <li><a href="index.php#restauro" id="link-restauro">Restauro</a></li>
    <li><a href="index.php#lavaggio" id="link-lavaggio">Lavaggio</a></li>
    <li><a href="#dove_siamo" id="link-dove-siamo">Dove siamo</a>
    <li><a href="#contatti" id="link-contatti">Contatti</a></li>
  </ul>

  <script>
    // Seleziona tutti i link del menu
    const navLinks = document.querySelectorAll('nav ul li a');
    const checkbox = document.getElementById('click');

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        // Deseleziona il checkbox (chiude il menu)
        checkbox.checked = false;
      });
    });
  </script>

</nav>
