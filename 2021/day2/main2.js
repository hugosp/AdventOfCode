const fs = require('fs');
const input = fs.readFileSync('input.txt').toString().split("\n").filter(i => i != '');

const pos = {
	d: 0,
	h: 0,
	a: 0,
}

for (let i = 0; i < input.length; i++) {
	let [key, val] = input[i].split(' ');
	if (key == 'up') {
		pos.a -= parseInt(val);
	} else if (key == 'down') {
		pos.a += parseInt(val);
	} else {
		pos.h += parseInt(val);
		pos.d += (parseInt(val) * pos.a);
	}
}

console.log(pos, pos.h * pos.d)
