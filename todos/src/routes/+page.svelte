<script>
    let new_todo;
    let todos = [];

    const addTodo = (e) => {
        todos = [
            ...todos,
            {
                id: todos.length + 1,
                text: new_todo,
                checked: false,
            },
        ];
        e.target.reset();
    };

</script>

<form on:submit|preventDefault={addTodo}>
    <input type="text" bind:value={new_todo} />
    <button type="submit"> Añadir </button>
</form>

<ul>
    {#each todos as todo}
        <li>
            <form on:submit|preventDefault={()=> {
                todos = todos.filter((t)=>t.id !== todo.id)
            }}>
                <input
                    type="checkbox"
                    name={todo.id}
                    id={todo.id}
                    bind:checked={todo.checked}
                />
                <label for={todo.id}>{todo.text}</label>
                <button type="submit">Borrar</button>
            </form>
        </li>
    {/each}
</ul>

<style>
    input:checked + label {
        text-decoration: line-through;
    }
</style>
