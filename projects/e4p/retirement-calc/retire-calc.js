
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');
var currentAge = document.querySelector('#cur');
var retireAge = document.querySelector('#ret');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($input.value) {
		var yearsLeft = (+retireAge.value) - (+currentAge.value);
		var currentYear = new Date().getFullYear();

		var futureYear = currentYear + yearsLeft; 

		var leftMessage = `You have ${yearsLeft} years until you can retire.`;

		var yearsMessage = `It's ${currentYear}, so you can retire in ${futureYear}.`

		$outlet.innerHTML = `<p> ${leftMessage} ${yearsMessage}</p>`;
	} else {
		$outlet.innerHTML = `<p> Please enter an age.</p>`;
	}
});