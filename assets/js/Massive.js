"use strict";

const print = (message) => {console.log(message)}
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





const allStudents = ["Иванов","Петров","Сидоров","Клеченко","Венди","Франческо"]
const failedStudents = ["Сидоров","Венди","Франческо"]
const trueStudents = new Array();

const trs = allStudents.map((item)=>{
 if(failedStudents.includes(item) === false){
  return item
 }
});


//for (let student of allStudents) {
// if (failedStudents.includes(student) === false){
//  trueStudents.push(student)
// }
//}

print(trs)