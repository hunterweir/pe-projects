
console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');

$form.addEventListener('submit', function(event) {
	
	event.preventDefault();

	if ($input.value) {
		var message = `Hello, ${$input.value}.`;
		
		$outlet.innerHTML = `<p>${message}</p>`;
	} else {
		$outlet.innerHTML = `<p>Sorry, I didn't catch your name.</p>`;

	}	

})