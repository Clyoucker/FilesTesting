"use strict";

const tags = document.querySelector(".tags");

const allTags = document.querySelectorAll(".tag")

function tagCreate(){

    let tag = document.createElement("div");
    tag.classList.add("tag");

    let input = document.getElementById("input").value;

    if (input != ""){
        tag.textContent = input;
        tags.append(tag);
    }
}