
var btn = document.getElementById('bouton');
btn.addEventListener("click", function (e) {
    e.preventDefault();
    var pseudo = document.getElementById('nom').value;
    var pseudo1 = pseudo;
    localStorage.setItem("nom", JSON.stringify(pseudo1));
    document.getElementById("result").innerHTML = localStorage.getItem("lastname");
    console.log(pseudo1);
    window.location.href = "./desktop5.html";
   
  });