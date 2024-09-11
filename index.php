<!DOCTYPE html>
<html lang="it" dir="ltr">
  
  <head>

  <title>Doppio Nodo - Tappeti Persiani a Genova | Vendita, Restauro e Lavaggio</title>
  <meta name="description" content="Doppio Nodo: Negozio specializzato in tappeti persiani a Genova. Vendita di tappeti pregiati, restauro e lavaggio professionali. Scopri la nostra vasta collezione di pezzi unici e la passione per l'artigianato e l'arte orientale.">

    <?php
      include 'header/common_header.php';
?>
    <link rel="stylesheet" href="css/style_home.css">

  </head>

  <body>

  


    <?php
      include 'navbar.php';
    ?>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-touch="true" data-bs-ride="carousel" data-bs-interval=3000>
      <div class="carousel-inner">
        <div class="carousel-item active first">
          <div class="overlay">
            <h1 id="text1"> I nostri tappeti...</h1> 
          </div>
          <picture>            
            <source media="(min-width:1200px)" srcset="../images/sliding_images/principale.jpg" class="sliding">
            <source media="(min-width:576px)" srcset="../images/sliding_images/principale_media.jpg" class="sliding">
            <img class="d-block w-100 sliding" src="../images/sliding_images/principale_piccola.jpg" alt="Foto dell'interno del negozio">
          </picture>
        </div>
        
        <div class="carousel-item second" data-bs-interval="3000">
          
            <div class="overlay2">
                <h1 id="text2"> ...raccontano una storia.</h1>
              </div>
            <picture>
              <source media="(min-width:1200px)" srcset="../images/sliding_images/negozio_dentro.jpg" class="sliding">
              <source media="(min-width:576px)" srcset="../images/sliding_images/negozio_dentro_media.jpg" class="sliding">
              <img class="d-block w-100 sliding" src="../images/sliding_images/negozio_dentro_piccola.jpg" alt="Altra foto dell'interno del negozio" >
          </picture>
        </div>

        <div class="carousel-item third" data-bs-interval="8000">
         
          <div class="overlay3">
                <h1 id="text3"> Da più di 30 anni</h1>
                <h1 id="text4"> Genova, via Ippolito d'Aste 26/R</h1>
              </div>
            <picture>
              <source media="(min-width:1200px)" srcset="../images/sliding_images/negozio_fuori.jpg" class="sliding">
              <source media="(min-width:576px)" srcset="../images/sliding_images/negozio_fuori_media.jpg" class="sliding">
              <img class="d-block w-100 sliding" src="../images/sliding_images/negozio_fuori_piccola.jpg" alt="Foto dell'esterno del negozio">
          </picture>
        </div>


      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <div class="main-content">
      <div class="main"> 
        <hr>
        <h1 id="chi-siamo"> Chi siamo </h1>
        <div class = "paragraph">
        <p> 
          <br>Doppio Nodo nasce dal sogno di un bambino.<br><br>
          Ali Parto ha solo sei anni quando, guidato dallo zio, esplora le vie affollate dei bazar,
          stringe amicizia con i mercanti e gli artigiani del posto e da loro impara tutti i segreti sull'arte
          del tappeto e del restauro, un mestiere antichissimo e affascinante.<br><br>
          Crescendo, il suo amore per questi preziosi tessuti diventa sempre più forte e dopo anni
          di duro lavoro e ricerca di tappeti unici e di alta qualità, Ali apre il suo negozio per
          condividere la sua passione con il mondo e per diffondere la bellezza e l'arte del tappeto orientale
          alle generazioni future.<br><br>
          Ed è grazie a questo amore che oggi Doppio Nodo è da più di trent'anni un punto di riferimento a Genova.
          I nostri tappeti sono simboli di legami forti e indissolubili. Raccontano una storia.<br><br>
          Siamo onorati di bussare con questa storia alla vostra porta e di essere una piccola, ma importante parte dei vostri ricordi. </p>
        </div>
        
        <br><br>

        <div class = "paragraph">
          <h2>Articoli e tappeti pregiati </h2>
          <h3>Tappeti particolari sì, ma rigorosamente tradizionali</h3>
          <br>
          <p>
            Doppio Nodo effettua una meticolosa ricerca nei villaggi che appartengono storicamente alla manifattura dei tappeti pregiati di antica lavorazione.
            I nostri tappeti sono esclusivamente di origine caucasica e persiana, con le lane filate a mano e colorate con sostanze
            naturali (vegetali ed animali).<br>Ogni pezzo è un pezzo esclusivo ed un esemplare unico. <br><br> Visitando
            il nostro negozio vi immergerete in un mondo meraviglioso dai sapori antichi, ammirando, oltre ai tappeti, i kilim,
            sacchi di trasporto contenitori di sale e di spezie, e altre manifatture osservabili solamente in musei ed esposizioni d'arte. </p>
          <br><br> 
          <hr>
        </div>

        <h1 id="servizi"> I nostri servizi </h1>
        <br><br>
        <h2 id="restauro"> Restauro </h2>
        <br>
      

        <div class = "paragraph">
          <p> 
            Doppio Nodo ripara e restaura qualsiasi tipo di tappeto.<br><br>
            Tutti i lavori, dalla rottura delle frange o del bordo
            al rammendare grossi strappi, buchi o aree devastate dalle tarme,
            è effettuato personalmente da noi nella nostra sede a Genova
            e questo ci permette di proporvi i migliori prezzi sul mercato.<br><br>
            Poiché il costo del restauro di un tappeto deve essere proporzionale al suo valore,
            Doppio Nodo stima gratuitamente il valore del vostro tappeto e vi propone le soluzioni di restauro
            più adatte per riportarlo in condizioni ottimali e per essere nuovamente calpestato. </p>
        </div>

        <div class="row">
          <div class="column">
            <img src="../images/restauro/tappeto-prima.jpg" alt="tappeto prima del restauro" style="width:100%">
          </div>
          <div class="column">
            <img src="../images/restauro/tappeto-dopo.jpg" alt="tappeto dopo il restauro" style="width:100%">
          </div>
        </div>
        
        <br><br>
        <hr>
        <br><br>
        <h2 id="lavaggio"> Lavaggio </h2>
        <br>
      

        <div class = "paragraph">
          <p>
            Il vostro tappeto viene lavato SINGOLARMENTE senza essere mischiato con altri tappeti. <br><br>

            Come per il restauro, Doppio Nodo effettua un lavaggio professionale assicurandosi che al vostro tappeto venga dato il livello di cura e attenzione che merita.
            Anni di esperienza nel settore ci permettono di offrirvi i migliori consigli sulle modalità di lavaggio
            che il vostro tappeto deve affrontare: i tappeti più antichi e fragili non possono passare per lo stesso procedimento dei tappeti più nuovi e resistenti.<br><br>

            Usiamo i prodotti di più alta qualità, mediante lavaggio ad acqua, rispettando la tradizione e l'ambiente.<br><br>

            Il tappeto viene prima delicatamente depolverizzato e successivamente lavato mantenendolo sempre in orizzontale.
            Infine viene asciugato tramite aria calda e ventilata, senza calore eccessivo e senza essere centrifugato, con un controllo a vista per tutta la durata dell'operazione. 
</p>
        </div>

        <br>
        <br>

      </div>
    </div>


    <?php
      include 'footer.php';
    ?>

  <script src="javascript/script_home.js"></script>

  </body>
</html>