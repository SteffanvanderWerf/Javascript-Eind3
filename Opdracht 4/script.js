let form = $("form,body");
let kleurverandering = $("input,textarea,select");
let input = $("input");

input.attr('onkeyup', 'regexTester(this)');

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

function regexTester(x){
  

  let nieuwe_regex = new RegExp($("#"+x.id).attr("regex"), "i");
  let inputVal = $("#"+x.id).val();
  
  if (nieuwe_regex.test(inputVal)) {
      
      $("#"+x.id).css('background-color', 'green').css('color', '#000');
      
  } else {
      
      $("#"+x.id).css('background-color', 'Maroon').css('color', '#FFF');
      
  }
}
