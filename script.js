let namen, text;
namen = [];

function addPromt() {
  namen.push(prompt("Enter a naam please?"));
  text = "";

  namen.forEach(addWord);
  document.getElementById("first").innerHTML = text;

  console.log(namen);
}

function addWord(value) {
  text += value + "<br>";
}
