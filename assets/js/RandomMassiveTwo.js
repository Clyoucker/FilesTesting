"use strict";

const print = (message) => {console.log(message)}
const type = (value) => {return typeof(value)}
const int = (value) => {return value = Number(value)}
const str = (value) => {return value = String(value)}
const between = (min,value,max) => {
    if (max > min){
        if (value >= min && value <= max){return true}
        else {return false}
    }
    else {alert(`Error:[max <= min]:[${max} <= ${min}]`)}

}
const bool = (value) => {
    if (value === true){return false}
    else if (value === false){return true}
    else {return NaN}
}
const is = (value, bool) => {
    if (value === bool){
        return true;
    }
    else if (type(value) === bool){
        return true;
    }
    else {
        return false;
    }
}

const maxLenght = 64;

const RandomArray = (min, max, lenght=maxLenght) => {
    const array = [];
    for (let i = 0; i < lenght; i ++){
        let randomValue = Math.round(Math.random() * (max - min) + min)
        if (between(min,randomValue,max)){array.push(randomValue)}
        else {i --}
    }
    return array;
}

console.log(RandomArray(-25,50))