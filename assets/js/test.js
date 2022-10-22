const btns = document.querySelectorAll(".btn-table");
const tables = document.querySelectorAll(".table");


btns.forEach((btn)=>{

    btn.addEventListener("click",()=>{

        let currentBtn = btn;
        let TableId = currentBtn.getAttribute("data-table");
        let currentTable = document.querySelector(TableId);


        if (!currentBtn.classList.contains("btn_active")){

            btns.forEach((btn)=>{
                btn.classList.remove("btn_active");
            });
    
            tables.forEach((table)=>{
                table.classList.remove("table_show");
            });
    
            currentBtn.classList.add("btn_active");
            currentTable.classList.add("table_show");
        }
    });
});





