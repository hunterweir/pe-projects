
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');
var people = document.querySelector('#people');
var pizza = document.querySelector('#pizza');
var slices = document.querySelector('#slice')

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($input.value) {
		var each = (pizza.value) / (people.value);
		var pieces = each * (slices.value);
		var roundedPieces = Math.floor(pieces);
		var left = 
		var restate = `There are ${people.value} people with ${pizza.value} pizzas.`;
		var eachMessage = `Each person gets ${roundedPieces} piece(s) of pizza.`;

		$outlet.innerHTML = `<p> ${restate} ${eachMessage}</p>`;
	} else {
		$outlet.innerHTML = `<p> Please enter a value.</p>`;
	}
});