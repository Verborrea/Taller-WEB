/** @type {import('./$types').PageLoad} */
export async function load() {
	return {
		posts: [
			{
				id: 1,
				nombre: 'Alan'
			},
			{
				id: 2,
				nombre: 'Pepe'
			},
		]
	}
}
export const actions = {
	login: async ({ request }) => {
		const data = await request.formData();
		const email = data.get('email');
		const password = data.get('password');
		console.log("login", email, password)
	},
	register: async ({ request }) => {
		const data = await request.formData();
		const email = data.get('email');
		const password = data.get('password');
		console.log("register", email, password)
	}
};