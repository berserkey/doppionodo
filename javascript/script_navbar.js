// Funzione per scrollare alla sezione target con offset
function scrollToTarget(targetId) {
  const targetElement = document.getElementById(targetId);

  if (targetId === "dove_siamo" || targetId === "contatti") {
    // Scrolla al fondo della pagina
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: "smooth"
    });
  } else if (targetElement) {
    // Calcola l'offset e scrolla alla sezione target
    const offsetPosition = targetElement.offsetTop - 90; // Adjust for navbar height
    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
    });
  }
}
// Controlla se l'URL attuale è home.php
if (window.location.pathname === '/index.php') {
  // Funzioni per gestire i click sui link
  document.getElementById('link-chi-siamo').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('chi-siamo');
  });

  document.getElementById('link-chi-siamo-footer').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('chi-siamo');
  });

  document.getElementById('link-servizi').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('servizi');
  });

  document.getElementById('link-restauro').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('restauro');
  });

  document.getElementById('link-lavaggio').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('lavaggio');
  });

  
}

if (window.location.pathname === '/policy.php') {
  // Funzioni per gestire i click sui link
  document.getElementById('link-cookie').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('cookie');
  });
}

document.getElementById('link-dove-siamo').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('dove_siamo');
  });

  document.getElementById('link-contatti').addEventListener('click', function(event) {
    event.preventDefault();
    scrollToTarget('contatti');
  });

// Gestisce l'attivazione del link attuale nel menu
function activateCurrentLink() {
  var currentPage = window.location.href;
  var links = document.querySelectorAll("li a");
  for (var i = 0; i < links.length; i++) {
    if (currentPage.endsWith(links[i].getAttribute("href"))) {
      links[i].classList.add("active");
    }
  }
}

// Verifica l'hash al caricamento della pagina e scrolla con offset
window.addEventListener('load', function() {
  const hash = window.location.hash;
  if (hash) {
    const targetId = hash.substring(1); // Rimuovi il '#' per ottenere solo l'ID
    scrollToTarget(targetId);
  }

  // Rimuove la schermata di caricamento dopo il caricamento della pagina
  var loadingScreen = document.getElementById("loading-screen");
  if (loadingScreen) {
    loadingScreen.classList.add("fade-out");
    setTimeout(function() {
      loadingScreen.parentNode.removeChild(loadingScreen);
    }, 500);
  }

  // Attiva il link corrente nel menu
  activateCurrentLink();
});


