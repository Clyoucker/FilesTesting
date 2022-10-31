//const print = (message) => {console.log(message)}
const type = (value) => {return typeof(value)}
const int = (value) => {return value = Number(value)}
const str = (value) => {return value = String(value)}
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
const forIn = (array,value) => {
	if (value in array){
		return array.map((item)=> item === value);
	}
	else {
		for (let value of array) {
			console.log(value);
		}
	}
}



import {print} from "./python.js";


const calc = document.querySelector("#title");
//const calc2 = document.getElementsByTagName("title");
const button = document.querySelector(".handler_btn");
const plus = document.querySelector(".screen-btn");
const percent = document.querySelectorAll(".percent");
const number = document.querySelectorAll(".number");
const rollback = document.querySelector(".rollback");
const span = document.querySelector(".range-value");
const total =  document.querySelector(".total-input");
let screen =  document.querySelectorAll(".range-value");

button.addEventListener("click"()=>{

});


print(calc);
print(button);
print(plus);
print(percent);
print(number);
print(rollback);
print(span);
print(total);
print(screen);
