describe('Fomulaire d\'inscription sejour famille', () => {

	beforeEach(() => {
		cy.refreshDatabase();
		cy.seed();
	});

	it('S\'inscrit pour un sejour famille',() => {

		cy.login();
		cy.wait(2000);

		cy.visit('/');
		cy.get('#famille').click()
		cy.wait(2000);

		//tout les champs sont obligatoires
		cy.get('#nextBtn').click()

		cy.get('#Inscription_Nom').type('Hemery');
		cy.get('#Inscription_Prenom').type('Jules');
		cy.get('#Inscription_Adresse').type('52 rue du cretet, Bourgneuf');
		cy.get('#Inscription_Ville').type('Bourges');
		cy.get('#Inscription_CP').type('18000');
		cy.get('#Inscription_Fixe').type('0612345678');
		cy.get('#Inscription_Portable').type('0612345678');
		cy.get('#Inscription_Email').type('mrcouvbat@gmail.com');

		cy.get('#nextBtn').click()
		cy.wait(2000)

		//etape 2

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Pension_Demi').check()

		cy.get('#nextBtn').click()
		cy.wait(2000)

		//etape 3

		cy.get('#nextBtn').click()

		cy.get('input[name=Inscription_Semaine_Demi_Adulte_nb]').type('2')
		cy.get('input[name=Inscription_Semaine_Demi_Enfant_3_nb]').type('1')

		cy.get('#nextBtn').click()
		cy.wait(2000)

		cy.get('.swal2-confirm').click()
	})
})
