"use strict";

const navItem = document.querySelectorAll(".btn-header");
const navInside = document.querySelectorAll(".nav-inside");
const boxShadow = document.querySelector(".box_shadow_bg");

navItem.forEach((item)=>{
    item.addEventListener("click",()=>{

        let currentBtn = item;
        let NavId = currentBtn.getAttribute("data-nav");
        let currentTable = document.querySelector(NavId);

        boxShadow.style.display = "block";

        if (!currentBtn.classList.contains("btn_active")){

            navItem.forEach((item)=>{
                item.classList.remove("btn_active");
            });
    
            navInside.forEach((navigation)=>{
                navigation.classList.remove("table_show");
            });

            boxShadow.addEventListener("click",()=>{
                boxShadow.style.display = "none";
                navItem.forEach((item)=>{
                    item.classList.remove("btn_active");
                });
        
                navInside.forEach((navigation)=>{
                    navigation.classList.remove("table_show");
                });

            });

            currentBtn.classList.add("btn_active");
            currentTable.classList.add("table_show");
        }
        else{
            navItem.forEach((item)=>{
                item.classList.remove("btn_active");
            });
    
            navInside.forEach((navigation)=>{
                navigation.classList.remove("table_show");
            });

            boxShadow.style.display = "none";
        }
    });
});









