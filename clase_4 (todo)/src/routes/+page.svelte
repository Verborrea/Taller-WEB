<script>
	import { todos, autoincrement } from '$lib/stores';

	let new_todo

	const crearTodo = (e) => {
		$autoincrement = $autoincrement + 1;
		$todos = [...$todos, {
			id: $autoincrement,
			text: new_todo,
			done: false
		}]
		e.target.reset(); // borrar formulario
	}
</script>

<a href="/otra">Ir a otra pagina</a>

<form on:submit|preventDefault={crearTodo} action="/">
	<label for="todo">Escribe tu TO-DO:</label>
	<br />
	<input type="text" id="todo" name="todo" bind:value={new_todo} autocomplete="off" required>
	<button type="submit">CREAR</button>
</form>

<ul>
	{#each $todos as todo (todo.id)}
		<li>
			<form on:submit|preventDefault={()=> {
				$todos = $todos.filter(t => t.id !== todo.id)
            }}>
				<div class="izq">
					<input type="checkbox" name="done" id={todo.id} checked={todo.done}>
					<label for={todo.id}>{todo.text}</label>
				</div>
				<button type="submit">Borrar</button>
			</form>
		</li>
	{/each}
</ul>

<style>
	ul {
		list-style: none;
		padding: 0;
	}
	ul form {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.izq {
		display: flex;
		gap: 8px;
		align-items: center;
	}
</style>