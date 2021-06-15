// let score = 0;
// var btn = document.getElementById("verite4");

// btn.addEventListener("click", function () {
//   score++;
//   console.log(score);
// });

// const btn = document.getElementById("verite4");
// btn.addEventListener("click", function () {
//   let score = 0;
//   // Si il y a déja une valeur stockée dans le localStorage , tu la prend et ca devient le score
//   if (localStorage.getItem("valeur")) {
//     score = localStorage.getItem("valeur");
//   }
//   // Incrementation du score ( a redifinir en fonction de la bonne reponse ou non)
//   score++;

//   // Tu ajoutes le score final (apres validation de la question) dans le local storage
//   localStorage.setItem("valeur", JSON.stringify(score));

//   console.log(score);
// });

//  A LA FIN DU QUIZZ UTILISE CA POUR CLEAR LE CACHE DU LOCALSTORAGE
// localStorage.removeItem("valeur");
// $.ajax({
//   url: "",
//   data: "",
//   type: "post",
//   cache: false,
//   dataType: "html",
//   success: function (msg) {},
// });

// SCRIPT JQUERY AJAX !!
function resultat() {
  $.ajax({
    url: "question1.php",
    data:
      "question=" + $("#question").val() + "&reponse=" + $("#reponse").val(),
    type: "post",
    cache: false,
    dataType: "html",
    success: function (msg) {
      $("#questions").html(msg);
    },
  });
  return false;
}
// (function ($) {
//   $.fn.shuffle = function () {
//     var allElems = this.get(),
//       getRandom = function (max) {
//         return Math.floor(Math.random() * max);
//       },
//       shuffled = $.map(allElems, function () {
//         var random = getRandom(allElems.length),
//           randEl = $(allElems[random]).clone(true)[0];
//         allElems.splice(random, 1);
//         return randEl;
//       });

//     this.each(function (i) {
//       $(this).replaceWith($(shuffled[i]));
//     });

//     return $(shuffled);
//   };
// })(jQuery);

// $("#verite1,#verite2,#verite3,#verite4").shuffle();
