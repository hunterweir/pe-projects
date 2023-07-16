<style> 
	picture {
		display: block;
	}
	img {
		display: block;
		width: 100%;
		height: auto;
	}

	ol {
		list-style: none;
		margin: 0;
		padding: 0;
		/**/
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
		grid-gap: 1em;
	}

	monster-card {
		display: block;
		border: 2px solid red;
		padding: 30px;
	}
</style>
