const allCashbox = [4500,3210,650,1250,7830,990,13900,370];

const getAverageValue = (array) => {
    const arrayLength = array.length;
    let cash = 0
    let average = array.filter((item) => {
        cash += item;
    });
    return Math.floor(cash /= arrayLength);
}

console.log(getAverageValue(allCashbox));

