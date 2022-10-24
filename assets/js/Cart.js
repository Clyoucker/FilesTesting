"use strict";

const category = {items: new Array(),}
const file = require("fs");
const path = "../jsons/items.json";

const Card = {
    //items : {items:[]},
    items: category,
    //items: require(path),
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

    addItem(item="unknown",price=0,count=1){
        this.getAllItems(this.items,"items");

        if (this.allItems.has(item)){
            let index = this.getItemIndex(this.items,"items",item);
            let newCount = this.items["items"][index].count + count;
            if (!newCount < 1){
                this.items["items"][index].price = price;
                this.items["items"][index].count = newCount;
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
        this.calculate("items","yes","yes");
        this.getAllItems(this.items,"items");
        file.writeFile(path, JSON.stringify(this.items),(error) => {
            if (!error){console.log("File Was Update");}
        });
    },

    calculate(category,price=null,count,array=this.items){

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
            console.log("You idiot!");
        }
    },

    clear(array=this.items){
        this.items["items"].splice(0,this.items["items"].length);
        this.calculate("items","yes","yes");
        file.writeFile(path,"[]",(error) => {
            if (!error){console.log("File Was Cleared");}
        });
    },

    print(){
        //let datas = require(path);
        console.log(this.items)
        console.log(`Count:${this.allCount} || Price:${this.totalPrice}`)
    }

}



Card.addItem("mouse",432,2);
Card.addItem("screen",65,4);
Card.addItem("game",65,4);
Card.addItem("screen",65,-2);
Card.addItem("screen",65,-1);

Card.print()








