async function get() {
    const response = await fetch("https://www.breakingbadapi.com/api");
    const dataAll = await response.json();
    console.log(dataAll);

    const response2 = await fetch("https://www.breakingbadapi.com/api/characters");
    const dataChars = await response2.json();
    console.log(dataChars);

    document.querySelector("#bilgi1").innerHTML = dataChars[0].name + "<br>" +dataChars[0].birthday;
    document.querySelector("#char1").src = dataChars[0].img;
    document.querySelector("#bilgi2").innerHTML = dataChars[1].name + "<br>" +dataChars[1].birthday;
    document.querySelector("#char2").src = dataChars[1].img;
    document.querySelector("#bilgi3").innerHTML = dataChars[6].name + "<br>" +dataChars[6].birthday;
    document.querySelector("#char3").src = dataChars[6].img;

    const response3 = await fetch("https://breakingbadapi.com/api/quotes");
    const dataQuotes = await response3.json();
    console.log(dataQuotes);

    document.querySelector("#alinti1").innerHTML = dataQuotes[0].author + "<br>" + dataQuotes[0].quote;
    document.querySelector("#alinti2").innerHTML = dataQuotes[1].author + "<br>" + dataQuotes[1].quote;
    document.querySelector("#alinti3").innerHTML = dataQuotes[2].author + "<br>" + dataQuotes[2].quote;
    document.querySelector("#alinti4").innerHTML = dataQuotes[3].author + "<br>" + dataQuotes[3].quote;
    document.querySelector("#alinti5").innerHTML = dataQuotes[4].author + "<br>" + dataQuotes[4].quote;


}

get();
