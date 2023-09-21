
console.clear();

const $form = document.querySelector('form');
const $input = document.querySelector('input');
const $outlet = document.querySelector('output');
var $verb = document.querySelector('#verb');
var $adjective = document.querySelector('#adjective');
var $adverb = document.querySelector('#adverb');

$form.addEventListener('submit', function(event) {
	event.preventDefault();

	if ($input.value) {
		var message = `You like to ${$verb.value} your ${$adjective.value} ${$input.value} ${$adverb.value}?`;
		$outlet.innerHTML = `<p>${message}</p>`;
	} else {
		$outlet.innerHTML = `<p>Missing noun</p>`;
	}
});