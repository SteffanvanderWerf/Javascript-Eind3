let form = $("form,body");
let kleurverandering = $("input,textarea,select");
let input = $("input");

//input.atrr("onkeyup", "Regextester(this)");

$("#man, #vrouw").click(function(event) {
  $("#btn-con").fadeOut("slow", function() {
    form.fadeIn("slow");
    form.css("display", "flex");
    $("#btn-con").remove();

    manofvrouw = event.target.id;

    if (manofvrouw == "man") {
      form.css("background-color", "darkgreen");
      kleurverandering.css("background-color", "lightgreen");
    } else if (manofvrouw == "vrouw") {
      form.css("background-color", "purple");
      kleurverandering.css("background-color", "pink");
    }
  });
});
