
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');


$form.addEventListener('submit', function(event) {

event.preventDefault();

if ($input.value) {
	var message = `${$input.value} has ${$input.value.length} characters.`;

	$outlet.innerHTML = `<p>${message}</p>`;
} else {
	$outlet.innerHTML = `<p>You gotta enter something</p>`;

}

})