
		var twitterArray = ["elon", "yobaba", "spacex", "ff7"];

		var peopleArray = ['doomers', 'incels', 'wokes', 'gnostics'];

		function yellName(word) {
			console.log(word + '!?!');
		}

		function printOne(thing, index) {
			var listItem= document.createElement('li')
			listItem.textContent = index + " " + thing;
			listItem.classList.add('thing');
			document.body.appendChild(listItem);
		}

		function doThings(anArray, aFunction) {
			for (var i = 0; i < anArray.length; i++) {
			aFunction( anArray[i], i, anArray );	
			}
		}

		//doThings( twitterArray, yellName );

		//doThings( peopleArray, printOne );

		peopleArray.forEach( function(cat, index, fullArray) {
			console.log(cat, index, fullArray);
		});
