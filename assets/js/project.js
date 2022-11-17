"use strict";
const Python = {
    error(message){alert(message)},
    print(){for (let i = 0; i < arguments.length; i++){console.log(arguments[i])}},
    type(value){return typeof(value)},
    int(value){return value = Number(value)},
    str(value){return value = String(value)},
    even(value){if (value % 2 === 0){return value} else {return false}},
    odd(value){if (value % 2 === 1 || value % 2 === -1) {return value} else {return false}},
    bool(value){if (value === true) {return false} else if (value === false) {return true} else {return NaN}},
    is(value,bool){if (value === bool) {return true} else if (this.type(value) === bool) {return true} else {return false}},
    between(min=-999999999,max=+999999999,include=false,array=undefined){
        new_array = []
        if (include === true){
             return  Math.round(Math.random() * (max - min) + min)
        }
        else {
            if (max > min){for (let value of array){if (value >= min && value <= max){new_array.push(value)}}}
            else {this.error("Error: [max !<= min]")}
        }
        return new_array
    },
}


const transfer = {
    "$": 61.33,
    "₽": 1,
    "¥":0.4116,
    "₴":1.66,
}
const allScreens = ["Простые","Сложные","Итнерактивные"];

const title = "  lite soLid cOre";
//const screens = prompt(`Виды экранов:${allScreens}`)
const screenPrice = 2000;
const rollBack = 25;
const fullPrice = NaN;
const adaptive = true; //confirm("Нужен ли адаптив?");
const allServicePrices = NaN;
const servicePercentPrices = NaN;

const getAllServicePrices = () => {
    
}

const getFullPrices = () => {return screenPrice + allServicePrices;}

const getTitle = (str) => {
    let values = str.trim().toLowerCase().split(" ");
    let lst = values.map(elem => elem[0].toUpperCase() + elem.slice(1));
    str = lst.join(" ");
    console.log(str);
}

const getServicePercentPrices = () => {return fullPrice - (fullPrice/100 * rollBack)} 




Python.print(`Стоимость вёрстки экранов: ${screenPrice/transfer["$"]}$ | ${screenPrice*transfer["₽"]}₽ | ${screenPrice/transfer["¥"]}¥ | ${screenPrice/transfer["₴"]}₴`);
Python.print(`Стоимость разработки сайта: ${fullPrice/transfer["$"]}$ | ${fullPrice*transfer["₽"]}₽ | ${fullPrice/transfer["¥"]}¥ | ${screenPrice/transfer["₴"]}₴`);
Python.print(`Процент отката: ${(fullPrice*(rollBack/100))/transfer["$"]}$ | ${(fullPrice*(rollBack/100))*transfer["₽"]}₽ | ${(fullPrice*(rollBack/100))/transfer["¥"]}¥ | ${(fullPrice*(rollBack/100))/transfer["₴"]}₴`);
