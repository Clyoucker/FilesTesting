//export const print = (args=[]) => {
    //for(const arg of args){console.log(arg)}
//}




const Python = {
    error(message){alert(message)},
    print(args=[]){for(const arg of args){console.log(arg)}},
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


