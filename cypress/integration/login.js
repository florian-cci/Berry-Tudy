describe('Connexion d\'utilisateur', () => {
	it('Vérifie qu\'un utilisateur peu se connecter', () => {
		cy.visit('/login');

		cy.get('#email').type('mrcouvbat@gmail.com');
		cy.get('#password').type('admin123');

		cy.get('button').click()
	})
})
