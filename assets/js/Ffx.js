const print = (message) => {console.log(message)}
const length = (value) => {return value = value.length}
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

const transfer = {
    "$": 61.33,
    "₽": 1,
    "¥":0.4116,
    "₴":1.66,
}


const allScreens = ["Простые","Сложные","Итнерактивные"];

const TITLE = "Lite Solid Core";
const screens = prompt(`Виды экранов:${allScreens}`)
const screenPrice = 2000;
const rollBack = 25;
const fullPrice = 16000;
const adaptive = true; //confirm("Нужен ли адаптив?");

print(type(TITLE));
print(type(fullPrice));
print(type(adaptive));
print(length(allScreens));

console.log(`Стоимость вёрстки экранов: ${screenPrice/transfer["$"]}$ | ${screenPrice*transfer["₽"]}₽ | ${screenPrice/transfer["¥"]}¥ | ${screenPrice/transfer["₴"]}₴`)
console.log(`Стоимость разработки сайта: ${fullPrice/transfer["$"]}$ | ${fullPrice*transfer["₽"]}₽ | ${fullPrice/transfer["¥"]}¥ | ${screenPrice/transfer["₴"]}₴`)
console.log(`Процент отката: ${(fullPrice*(rollBack/100))/transfer["$"]}$ | ${(fullPrice*(rollBack/100))*transfer["₽"]}₽ | ${(fullPrice*(rollBack/100))/transfer["¥"]}¥ | ${(fullPrice*(rollBack/100))/transfer["₴"]}₴`);


const getAllServicePrices = (value) => {

}