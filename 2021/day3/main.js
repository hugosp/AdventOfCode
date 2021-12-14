const utils = require('../utils');
const input = utils.readInput('day3');

const acc = [];

input.forEach(row => {
	row.split('').forEach((v, i) => {
		if (!acc[i]) {
			acc[i] = { 0: 0, 1: 0 }
		} else {
			acc[i][v] = acc[i][v] + 1
		}
	});
});

const gamma = acc.map((v) => v[0] > v[1] ? 0 : 1).join('');
const epsilon = acc.map((v) => v[0] > v[1] ? 1 : 0).join('');
const final = parseInt(gamma, 2) * parseInt(epsilon, 2);

console.log(final);
