const error = (message) => {alert(message)}
const print = (args=[]) => {
    for(const arg of args){console.log(arg)}
}
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
const even = (value) => {
    if (value % 2 === 0){return value}
    else {return false}
}
const odd = (value) => {
    if (value % 2 === 1 || value % 2 === -1){return value}
    else {return false}
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






