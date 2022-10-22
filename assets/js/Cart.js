"use strict";



const category = {items: new Array(),}
const file = require("fs");
const path = "../jsons/items.json";
const ffs = require("../jsons/items.json");

file.stat(path, (error, stats) =>{
    if (!error) {console.log("Файл найден");}
    else {
        console.log("Файл не найден");
        file.writeFile("../jsons/items.json",JSON.stringify(category),(error) => {
            if (error){return "No Was Created";}
        });}
});

const Card = {
    //items : {items:[]},
    items: {"items":[{"item":"mouse","price":432,"count":2},{"item":"screen","price":65,"count":4}]},
    allItems : new Set(),
    totalPrice : 0,
    allCount : 0,

    getItemIndex(array,category,value){
        let arrayLength = array[category].length;
        for (let index = 0; index < arrayLength; index++){
            if (value === array[category][index].item){
                return index;
            }
        }
    },

    getAllItems(array,category){
        let arrayLength = array[category].length;
        for (let index = 0; index < arrayLength; index++) {
            this.allItems.add(array[category][index].item);
        }
    },

    getTotalPrice(){

    },

    addItem(item="unknown",price=0,count=1){
        this.getAllItems(this.items,"items");

        if (this.allItems.has(item)){
            let index = this.getItemIndex(this.items,"items",item);
            let newCount = this.items["items"][index].count + count;
            if (!newCount < 1){
                this.items["items"][index].price=price;
                this.items["items"][index].count=newCount;
            } else {
                console.log("Count!")
            }
        }
        else {
            let obj = {
                item:item,
                price:price,
                count:count,
            }
            this.items["items"].push(obj);
        }
        this.getAllItems(this.items,"items");
        file.writeFile("../jsons/items.json",JSON.stringify(this.items),(error) => {
            if (!error){console.log("File Was Update");}
        });
    },

    calc(category,price=null,count,array=this.items){

        let arrayLength = array[category].length;

        if (price === "yes" && count === "no"){
            this.totalPrice = 0;
            for (let index = 0; index < arrayLength; index++){
                this.totalPrice += +[array[category][index].price] * [array[category][index].count];
            }
        }

        else if (price === "no" && count === "yes"){
            this.allCount = 0;
            for (let index = 0; index < arrayLength; index++){
                this.allCount +=  +[array[category][index].count];
            }
        }

        else if (price === "yes" && count === "yes"){
            this.totalPrice = 0;
            this.allCount = 0;
            for (let index = 0; index < arrayLength; index++){
                this.totalPrice += +[array[category][index].price] * [array[category][index].count];
                this.allCount +=  +[array[category][index].count];
            }
        }
        else {
            console.log("You idiot");
        }
    }
}



//Card.addItem("mouse",432,2);
//Card.addItem("screen",65,4);

Card.calc("items","yes","no")
console.log(Card.totalPrice,Card.allCount)








