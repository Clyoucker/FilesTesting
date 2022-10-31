"use strict";

const ads = document.querySelectorAll(".adv");
const books = document.querySelectorAll(".book")


ads.forEach((item)=>{item.style.display = "none"})

console.log(books)

for (let book of books){
	let pos = book.children[0].textContent.trim().split(".")[0].split(" ")[1]
	console.log(pos)

}