"use strict";

const maxValue = 100;
const maxLenght = 64;


const RandomArray = (lenght, value) => {
    const array = new Array();
    for (let i = 0; i < lenght; i ++){
        let randomValue = Math.round(Math.random()*value)
        array.unshift(randomValue);
    }
    return array;
}

const newArray = RandomArray(maxLenght,maxValue);
console.log(newArray)

