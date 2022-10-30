"use strict";

const maxValue = 100;
const maxLenght = 64;

const RandomArray = (lenght, value) => {
    const array = [];
    for (let i = 0; i < lenght; i ++){
        let randomValue = Math.round(Math.random()*value)
        array.push(randomValue);
    }
    return array;
}

console.log(RandomArray(maxLenght,maxValue))

