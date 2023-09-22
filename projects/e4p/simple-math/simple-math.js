
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');
var firstNumber = document.querySelector('#first');
var secondNumber = document.querySelector('#second');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($input.value) {
		var sum = (+firstNumber.value) + (+secondNumber.value);
		var sumMessage = `${firstNumber.value} + ${secondNumber.value} = ${sum}`;

		var subtract = (+firstNumber.value) - (+secondNumber.value);
		var subMessage = `${firstNumber.value} - ${secondNumber.value} = ${subtract}`;

		var divide = (+firstNumber.value) / (+secondNumber.value);
		var divMessage = `${firstNumber.value} / ${secondNumber.value} = ${divide}`;

		var multiply = (+firstNumber.value) * (+secondNumber.value);
		var multiMessage = `${firstNumber.value} * ${secondNumber.value} = ${multiply}`;
	
		$outlet.innerHTML = `<p>${sumMessage} ${subMessage} ${divMessage} ${multiMessage}</p>`;
	} else {
		$outlet.innerHTML = '<p>Please enter a value</p>';
	}
});