// $(document).ready(function () {
//   $(".button_home").click(function () {
//     if ($("#input_pin").first().val() === "420") {
//       $(".div_home").empty(), $(".div_home").load("pseudo.txt");
//     }
//   });
// });

// var btn = document.getElementById("button_pin");

// btn.addEventListener("keydown", function () {
//   var pass1 = document.getElementById("pwd").value;
//   console.log(pass1);
//   if (pass1 == test) {
//     alert(sucess);
//   } else {
//     alert("Mauvais code pin");
//   }
// });

var test = 667;
var btn = document.getElementById("button_pin");

btn.addEventListener("click", function () {
  var pass1 = document.getElementById("input_pin").value;
  console.log(input_pin);
  if (pass1 == test) {
    console.log("salut");
    document.location.href = "./desktop3.html";
  } else {
    alert("Mauvais code pin");
  }
});

//pseudo
// var pseudo = document.getElementById("inputpseudo").value;
// console.log(pseudo);
