<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Github</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body>

<div id="arrayManier">
</div>

<div id="jsonManier">
</div>
<div>
    Achternaam : <input type="text" id="anaam" onblur="check()" onkeyup="test()">
</div>
<script>
function test() {
    if (document.getElementById("anaam").value.length <= 3)
    {

    }
}

function check() {
    if (document.getElementById("anaam").value.length <= 3)
    {
        document.getElementById("anaam").style.backgroundColor="red";
    }
    else
    document.getElementById("anaam").style.backgroundColor="lightgreen";
}

// STANDAARD ARRAY
let studentenA = [
["Fokke","","Gnodde"],
["Rick", "", "Pauw"],
["Freaky", "", "Rachyd"], 
["Goofy", "ahh", "Joshua"],
["Antoni", "", "Karzmacyk"]
];

let tekst = "";

for (let i=0; i < studentenA.length; i++) {
const student = studentenA[i];
tekst += student[0] + "" + student[1] + "" + student [2] + "<br>";
}
let arrayManier = document.getElementById("arrayManier");
arrayManier.innerHTML = tekst;

//JSON:
let studentenB = [
    { "voornaam":"Fokke", "tv":"", "achternaam": "Gnodde" },
    { "voornaam":"Goofy", "tv":"ahh", "achternaam": "Joshua" , "leeftijd":15}
];

tekst = "";
for (let i=0; i < studentenB.length; i++) {
    const student = studentenB[i];
    tekst += student.voornaam +""+ student.tv +" "+ student.achternaam+ "<br>";
}
let jsonManier = document.getElementById("jsonManier");
jsonManier.innerHTML = tekst;

</script>
</body>
</html>