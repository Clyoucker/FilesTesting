const print = (message) => {console.log(message)}
const type = (value) => {return typeof(value)}
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
const for_in = (value,values) => {

}




