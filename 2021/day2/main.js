const utils = require('../utils');
const input = utils.readInput('day2');

const pos = {
	d: 0,
	h: 0,
}

for (let i = 0; i < input.length; i++) {
	let [key, val] = input[i].split(' ');
	if (key == 'up') {
		pos.d -= parseInt(val);
	} else if (key == 'down') {
		pos.d += parseInt(val);
	} else {
		pos.h += parseInt(val);
	}

}
console.log(pos, pos.h * pos.d)
