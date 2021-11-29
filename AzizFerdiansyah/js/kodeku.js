alert("Hello ini dari External JavaScript");
function
temperaturConverter(valNum) {
    valNum = parseFloat(valNum);

    document.getElemenById("outputCelsius").inner.HTML = (valNum-32)/1.8;
}