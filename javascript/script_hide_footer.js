const checkbox = document.getElementById("click");
const footer = document.getElementById("footer");

checkbox.addEventListener("click", function(){
  if(this.checked){
    footer.style.display = "none";
  } else {
    footer.style.display = "block";
  }
});

