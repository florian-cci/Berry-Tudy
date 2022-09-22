describe('Inscription d\'utilisateur', () => {
	it('Vérifie qu\'un utilisateur peu s\'inscrire', () => {
		cy.visit('/register');

		//etape 1

		cy.get('#firstName').type('Hemery');
		cy.get('#lastName').type('Jules');
		cy.get('#email').type('mrcouvbat@gmail.com');
		cy.get('#password').type('admin123');
		cy.get('#password-confirm').type('admin123');

		cy.get('#registerBtn').click()

	})
})
