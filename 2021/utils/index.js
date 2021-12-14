const fs = require('fs');
const path = require('path');

const readInput = (day) => fs.readFileSync(path.resolve(__dirname + '/../' + day + '/', 'input.txt')).toString().split("\n").filter(i => i != '');



exports.readInput = readInput;
