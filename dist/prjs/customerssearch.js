
const mytable=document.querySelectorAll("#mytable tr");


const searchbox=document.querySelector("[data-search-box]");


searchbox.addEventListener("input",(e)=>{
    value=e.target.value;
    console.log(value);
    mytable.forEach(function(tr){
        isvisible=tr.textContent.includes(value);
        tr.parentElement.classList.toggle("hidecontent",!isvisible);
    });

});