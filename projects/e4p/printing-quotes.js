
var $form = document.querySelector('form');

$form.addEventListenenr('submit', function(myEvent) {
	myEvent.preventDefault();
	// the 'submit' event default behavior would be to submit the form to a server
	//this prevents that
	console.log('You pressed submit.');
});