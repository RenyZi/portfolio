
//bars 
const bars = document.querySelector(".disap");
const links = document.querySelector(".wrapper-links");

bars.addEventListener('click',function(){
    links.classList.toggle("act-togg")
    
})
//scroll behaviour


const body = document.body;
const abt = document.querySelector(".about-me");
const edt = document.querySelector(".Education");
const serv = document.querySelector(".services");
const cont = document.querySelector(".contact");
let lastscroll = 0;

window.addEventListener("scroll",()=>{

 
  const currentscroll = window.scrollY;
  
  if(currentscroll <= 50){
    body.classList.remove('scroll-up');
    
  }
 
  if(currentscroll > lastscroll && !body.classList.contains('scroll-down')){
    body.classList.remove('scroll-up');
    body.classList.add('scroll-down');
    body.classList.remove('scroll-up');
    abt.classList.remove("marg");
    edt.classList.remove("marg");
    serv.classList.remove("marg");
    cont.classList.remove("marg");
    
  } 

  if(currentscroll < lastscroll && body.classList.contains('scroll-down')){
    body.classList.remove('scroll-down');
    body.classList.add('scroll-up');
    abt.classList.add("marg");
    edt.classList.add("marg");
    serv.classList.add("marg");
    cont.classList.add("marg");
  } 

  lastscroll = currentscroll;
  
  
})