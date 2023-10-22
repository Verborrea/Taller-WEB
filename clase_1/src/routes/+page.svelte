<script>
	let nombre = 'José'

	const cambiarNombre = () => {
		if (nombre === 'Pedro') {
			nombre = 'José'
		} else {
			nombre = 'Pedro'
		}
	}
</script>

<button on:click={cambiarNombre} type="button">
	Hola {nombre.toUpperCase()}
</button>

<style>
	button {
		border: none;
		font-size: 22px;
		background-color: rgb(245 159 20);
		color: white;
		padding: 8px 16px;
		border-radius: 4px;
	}

	button:hover{
		background-color: #b450ed;
	}
</style>