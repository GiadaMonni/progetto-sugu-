//NAVBAR 
 
let navbar = document.querySelector(`#navbar`);
// icone
let pinkcar = document.querySelector(`#pinkcar`);
let check = false;
window.addEventListener(`scroll`,()=>{
    let scrolled = window.scrollY;
    if(scrolled > 0){
        navbar.classList.remove(`bg-acqua-marina`);
        navbar.classList.add(`bg-darkorchid`);}
   else{navbar.classList.remove(`bg-darkorchid`);
        navbar.classList.add(`bg-acqua-marina`);}
});

pinkcar.addEventListener(`click`,()=>{
    if(check == false){
        pinkcar.style.marginLeft = `66vw`
    check = true;}
    else{ pinkcar.style.marginLeft = `0vw`
    check = false;}});
