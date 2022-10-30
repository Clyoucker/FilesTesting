"use strict";

const weeks = ["Пн","Вт","Ср","Чт","Пт","Сб","Вс"];
const date = new Date().getDay()-1;

const main = document.querySelector(".main")
const ul = document.createElement("ul"); ul.className = "ul";
const section = document.createElement("section"); section.className = "section";

weeks.forEach((week) => {
	let li = document.createElement("li");
	li.style.color = "Black";
	if (week === weeks.at(date)){
		li.style.fontWeight = "Bold";
		if (week === "Сб" || week === "Вс"){li.style.fontStyle = "Italic";}
	}
	else if (week === "Сб" || week === "Вс"){li.style.fontStyle = "Italic";}
	li.textContent = week;
	ul.append(li);
});
section.append(ul);
main.append(section)




