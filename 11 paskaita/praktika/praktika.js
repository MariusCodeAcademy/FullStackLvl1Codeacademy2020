const myArray = [0, -15, 10, 45, -7, "dobilas", 14, "mangas", -12, true, null, "zalia", "3", 4]




function gauti() {
  numb = prompt("iveskit skaiciu");

  if (numb > 15) {
    console.log("didesnis");
  } else if (numb < 15) {
    console.log("mazesnis");
  } else console.log("not a number");               
}

gauti();




function say(x) {
    console.log(x)
}

say("whatever")