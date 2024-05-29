let scroll_container = document.querySelector(".container");
let backbtn = document.querySelector("#backbtn");
let nextbtn = document.querySelector("#nextbtn");

scroll_container.addEventListener("wheel",(evt) => {
    evt.preventDefault();
    scroll_container.scrollLeft += evt.deltaY;
})

backbtn.addEventListener("click",() => {
    scroll_container.scrollLeft += 950;
})

nextbtn.addEventListener("click",() => {
    scroll_container.scrollLeft -= 900;
})

const menu = document.querySelector(".medianav");
const icon = document.querySelector("media-icon");


 function toggleMenu() {
    //const menu = document.querySelector(".nav");
    //const icon = document.querySelector("media-icon");
   
    menu.style.display = "inline-block";

    


    
    

 }

icon.addEventListener("click",(toggleMenu) =>{
    
})

function hidden1(id){
    document.getElementById('hidden_input').value = id;
    document.getElementById('hidden').submit();

}



