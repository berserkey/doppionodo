
  document.onkeydown = function(e) {
    if(e.key == 'ArrowLeft') {
      $("#carouselExampleFade").carousel("prev");
    }
    else if(e.key == 'ArrowRight') {
      $("#carouselExampleFade").carousel("next");
    }
  }




  window.addEventListener("load", function() {
    setTimeout(function () {
  
      var text1 = document.getElementById("text1");
      var text2 = document.getElementById("text2");
      var text3 = document.getElementById("text3");
      var text4 = document.getElementById("text4");
      var carousel = document.getElementById("carouselExampleFade");
  
      function fadeText1() {
        text1.style.opacity = 0;
        text2.style.opacity = 0;
        text3.style.opacity = 0;    
        text4.style.opacity = 0;
  
        text1.style.transition = "opacity 1.5s";
        text1.style.opacity = 1;
      }
  
      function fadeText2() {
        text1.style.opacity = 0;
        text2.style.opacity = 0;
        text3.style.opacity = 0;    
        text4.style.opacity = 0;
  
        text2.style.transition = "opacity 1.5s";
        text2.style.opacity = 1;
      }
  
      function fadeText3And4() {
        text1.style.opacity = 0;
        text2.style.opacity = 0;
        text3.style.opacity = 0;    
        text4.style.opacity = 0;
  
        text3.style.transition = "opacity 1.5s";
        text3.style.opacity = 1;
  
        setTimeout(function () {
          text4.style.transition = "opacity 1.5s";
          text4.style.opacity = 1;
        }, 1500);
      }
  
      carousel.addEventListener("slid.bs.carousel", function () {
        if (carousel.querySelector(".active").classList.contains("first")) {
          fadeText1();
        }
        else if (carousel.querySelector(".active").classList.contains("second")) {
          fadeText2();
        }
        else if (carousel.querySelector(".active").classList.contains("third")) {
          fadeText3And4();
        }
      });
      fadeText1();
  
    }, 500);
  });