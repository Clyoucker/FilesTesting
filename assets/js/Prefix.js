const names = ["Leron", "Frenk", "Clyoucker", "Abarf", "Lysi"];

const addPrefix = (array, prefix) => {
    const newNames = [];
    array.filter(item => {
        let value = prefix + " " + item;
        newNames.push(value);
    });
    return newNames;
}

console.log(addPrefix(names,"Mr"));