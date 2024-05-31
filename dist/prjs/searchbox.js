
const searchbox=document.querySelector("[data-search-box]");
// const allprosucts=document.querySelectorall("[data-all-products]");

var tableRows = document.querySelectorAll('#myTable tr');





searchbox.addEventListener("input",(e)=>{
    const value =e.target.value;
    tableRows.forEach(function(row) {
        
        // console.log(row);
        isvisible=row.textContent.includes(value);
        // console.log(isvisible);
        row.classList.toggle("hidecontent",!isvisible);
        
      }
      
      );
});

