
var headers=document.getElementById("header");
var brand = document.querySelector(".closebtn i")
var dashboard=document.getElementById("dashboard");
var closebtn=document.getElementById("closebtn");
var linkdis=document.querySelectorAll(".navigations ul li span");

   function Closebtn(){
      brand.classList.toggle("closeindex");
      console.log(brand);  
      headers.classList.toggle("cosi");
  
      for(i=0 ; i<linkdis.length ; i++){
       
          linkdis[i].classList.toggle("linkdis");
         
      }
     dashboard.classList.toggle("dashbor");
   }
   function Logouts(){
       confirm("Are you Sure ?")
   }
  
