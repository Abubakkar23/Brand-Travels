
function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "100px";  
  document.getElementById("main-content").style.marginLeft = "100px";
  document.getElementById("main").style.display="block";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";  
  document.getElementById("main").style.display="block";  
}