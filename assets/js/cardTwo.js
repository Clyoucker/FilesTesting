"use strict";

const card = {
    items: [{title:"cup",price:256,count:6},{title:"mouse",price:128,count:1}],
    totalPrice : 0,
    allCount : 0,

    getIndex(value,array=this.items){
        for (let index = 0; index < array.length; index++){
            if (array[index].title === value){
                return index;
            }
        }
    },

    addItem(item="unknown",price=0,count=1){
        let all = new Set();
        this.items.forEach(item => {
            all.add(item.title)
        })

        if (all.has(item)){
            let index = this.getIndex(item.toLowerCase());
            let newCount = this.items[index].count + count;
            if (!newCount < 1){
                this.items[index].price = price;
                this.items[index].count = newCount;
            } else {
                if(index === 0){ this.items.shift();}
                else{this.items.splice(index,index)}
            }
        }
        else {
            let obj = {
                title:item.toLowerCase(),
                price:price,
                count:count,
            }
            this.items.push(obj);
        }
        this.calcItem("yes","yes");
    },

    calcItem(price="yes",count="yes",array=this.items){

        if (price === "yes" && count === "no"){
            this.totalPrice = 0;
            for (let index = 0; index < array.length; index++){
                this.totalPrice += +array[index].price * array[index].count;
            }
        }

        else if (price === "no" && count === "yes"){
            this.allCount = 0;
            for (let index = 0; index < array.length; index++){
                this.allCount +=  +array[index].count;
            }
        }

        else{
            this.totalPrice = 0;
            this.allCount = 0;
            for (let index = 0; index < array.length; index++){
                this.totalPrice += +array[index].price * array[index].count;
                this.allCount +=  +array[index].count;
            }
        }
    },

    clear(){
        this.items = [];
        this.totalPrice = 0;
        this.allCount = 0;
    },

    print(item=null){
        if(item == null){
            console.log(JSON.stringify(this.items));
            console.log(`Count:${this.allCount} || Price:${this.totalPrice}`);
        }
        else{
            let all = new Set();
            this.items.forEach(item => {
                all.add(item.title)
            })

            if (all.has(item.toLowerCase())){
                let index = this.getIndex(item.toLowerCase());
                console.log(this.items[index])
            }
            else{
                console.log("Unknown Item!")
            }
        }
    }
}

card.addItem("cup",432,6);
card.addItem("mouse",65,-2);
card.addItem("screen",65,1);

card.print("CUP")








