"use strict";

const maxValue = 100; const maxLenght = 100;

const RandomArray = (lenght, value) => {
    const array = new Array();
    for (let i = 0; i < lenght; i ++){
        let randomValue = Math.round(Math.random()*value)
        array.unshift(randomValue);
    }
    return array;
}

let message = "Введите число от 0-100: "


class Bot{

    constructor(name) {
        this.name = name;
        this.botValue = null;
    }

    game(){
        if (this.botValue != null){
            while (true){
                //alert(this.botValue);
                let userValue = prompt(message);
                console.log(userValue);
                if (userValue === null){
                    break
                }
                else if (userValue > this.botValue){
                    alert("Холодно")
                }
                else if (userValue < this.botValue){
                    alert("Горячё")
                }
                else {
                    alert("Победа")
                    break
                }
            }
        }
        else {
            this.botValue = Math.round(Math.random()*maxValue);
            while (true){
                //alert(this.botValue);
                let userValue = prompt(message);
                console.log(userValue);
                if (userValue === null){
                    break
                }
                else if (userValue > this.botValue){
                    alert("Холодно")
                }
                else if (userValue < this.botValue){
                    alert("Горячё")
                }
                else {
                    alert("Победа")
                    break
                }
            }
        }
    }
}

const bot = new Bot("Clyoucker");
bot.game();