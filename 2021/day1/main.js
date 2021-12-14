const utils = require('../utils');
const input = utils.readInput('day1');

// Part A
const res = input.reduce((acc, cur) => {
	return {
		last: cur,
		tot: (acc.last < cur) ? acc.tot += 1 : acc.tot
	}
}, { tot: 0, last: 0 })


// Part B
let lastVal;
let c = 0;

for (let i = 1; i < input.length - 1; i++) {
	let curVal = parseInt(input[i - 1]) + parseInt(input[i]) + parseInt(input[i + 1]);
	if (curVal > lastVal && lastVal != undefined) {
		c++;
	}
	lastVal = curVal;
}

console.log({
	A: res.tot,
	B: c
});
