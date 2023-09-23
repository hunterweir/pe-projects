
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');
var roomLength = document.querySelector('#length');
var roomWidth = document.querySelector('#width');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($input.value) {
		var sqft = (+roomLength.value) * (+roomWidth.value);
		var sqm = sqft * .092;
		var inputMessage = `You entered ${roomLength.value} feet by ${roomWidth.value} feet.`;
		var sqMessage = `The area is ${sqft} sqft and ${sqm} square meters.`;

		$outlet.innerHTML = `<p> ${inputMessage} ${sqMessage}</p>`;
	} else {
		$outlet.innerHTML = `<p> Please enter a length.</p>`;
	}
});