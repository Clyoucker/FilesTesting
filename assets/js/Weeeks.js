
const weeks = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
const date = new Date().getDay()-1;
const ul = document.createElement("ul");
ul.className = "ul";
const section = document.querySelector(".section");


weeks.forEach((week) => {
	let li = document.createElement("li");
	li.style.color = "Black";
	if (week === weeks[date]){
		li.style.fontStyle = "Italic";
		li.innerHTML = week;
	}
	else if (week === "Saturday" || week === "Sunday"){
		li.style.fontWeight = "Bold";
		li.innerHTML = week;
	}
	else {
		li.innerHTML = week;
	}
	ul.append(li);
});

section.append(ul);




