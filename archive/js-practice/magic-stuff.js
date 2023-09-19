
var miscItems = [
	"lozenges",
	"Airpods", 
	"waterloo", 
	"lamp", 
	"hydroflask", 
	"allergy meds", 
	"lacrosse ball,"
];

var personalItems = [
	{
		name: "lozenges",
		type: "substance",
	},
	{	
		name: "Airpods", 
		type: "tech",
	},
	{
		name: "waterloo",
		type: "drink",
	},
	{	
		name: "lamp", 
		type: "tech",
	},
	{
		name: "hydroflask",
		type: "drink",
	},
	{	
		name: "allergy meds", 
		type: "substance",
	},
	{
		name: "lacrosse ball",
		type: "tech",
	}, 
];



var tech = personalItems.filter( function(item) {
	return item.type == 'tech';
});

var drink = personalItems.filter( function(item) {
	return item.type == 'drink';
});

var substance = personalItems.filter( function(item) {
	return item.type == 'substance';
});

// create function that accepts an array and generates markup
// must have heading -- and create a list of the items...

function buildListSection(items, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2); 

	var ol = document.createElement('ol');

	items.forEach( function(item) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
}



buildListSection( tech, "Things I have that are tech" );

buildListSection( substance, "Hunter's fav substances");

buildListSection( drink, "I'm effin thirsty!");




