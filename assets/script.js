
function submitted(event){

    const f = document.getElementById('form');
    const q = document.getElementById('query');
    const google = 'https://www.google.com/search?q=site%3A+';
    const site = 'C:/Users/tchou/Documents/UCAC-ICAM/X2/PROSIT/SEMESTRE 2/UE 5 - DEVELOPPEMENT WEB/PROSIT 1 (HTML_CSS)/WS/Solution/www/index.html';

    event.preventedDefault();
    const url = google + site + "+" + q.value;
    const win = window.open(url, '-blank');
    win.focus()
}

const searchWrapper = document.querySelector('.search-input');
const inputBox = searchWrapper.querySelector('input');
const suggBox = searchWrapper.querySelector('.autocom-box');
const icon = searchWrapper.querySelector('.icon');

let linkTag = searchWrapper.querySelector('a');
let webLink;

//If user presses any key and release
inputBox.onkeyup = (e) => {
    let userData = e.target.value;  //user entered data
    let emptyArray = [];
    if(userData){
        icon.onclick = () => {
            webLink = "https://www.google.com/search?q=" + userData;
            linkTag.setAttribute("href", webLink);
            console.log(webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data) => {
            return data.toLocaleLowerCase().startswitch(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data) => {
            //return data inside linkTag
            return data = '<li>' + data + '</li>';
        });
        searchWrapper.classList.add("active");
        //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li")
        for(let i=0;i<allList.length;i++){
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    } else{
        searchWrapper.classList.remove("active");   //hide atocomple
    }
}
function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = () => {
        webLink = "https://www.google.com/search?q=" + userData;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}
function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>' + userValue + '</li>';
    } else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "About",
    "How to learn HTML & CSS",
    "How to learn javascript",
    "YouTube",
    "Facebook",
    "Facebook Page"

]