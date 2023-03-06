const body = document.querySelector("body"),
sidebar = body.querySelector(".sidebar"),
toggle = body.querySelector(".toggle"),
logo = body.querySelector(".logo"),
logo_icon = body.querySelector(".logo-icon");

toggle.addEventListener("click",()=>{
    sidebar.classList.toggle("close");
    logo.classList.toggle("d-none");
    logo_icon.classList.toggle("d-none");
    
});