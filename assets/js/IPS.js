"use strict";

const file = require("fs");
const path = "../jsons/ipv4.json";

const ips = require(path)["listIPv4"];
const uniqueIp = [];

for (const ip of ips){
    if(!uniqueIp.includes(ip)){uniqueIp.push(ip)}
}

console.log(uniqueIp.length);
