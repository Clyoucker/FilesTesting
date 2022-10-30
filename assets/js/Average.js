const allCashbox = [4500,3210,650,1250,7830,990,13900,370];

const getAverageValue = (array) => {
    let arraySum = array.reduce((previousValue,currentValue) => previousValue + currentValue,0)
    return Math.floor(arraySum /= allCashbox.length);
}

console.log(getAverageValue(allCashbox));


