const allCashbox = [
    [12, 4500],
    [7, 3210],
    [4, 650],
    [3, 1250],
    [9, 7830],
    [1, 990],
    [6, 13900],
    [1, 370],
]

const getAveragePriceGoods = (array) => {
    let productCount,productCash; productCount = productCash = 0
    const outArrayLength = array.length; const insideArrayLength = array[0].length;
    let i = 0;

    while (outArrayLength > i){
        productCount += array[i][insideArrayLength%2];
        productCash += array[i][insideArrayLength%2] * array[i][insideArrayLength/2];
        i ++;
    }
    return Math.floor(productCash/productCount);
}

console.log(getAveragePriceGoods(allCashbox));