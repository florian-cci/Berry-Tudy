describe('Fomulaire d\'inscription sejour enfant', () => {

	beforeEach(() => {
		cy.refreshDatabase();
		cy.seed();
	});

	// it('logs in', () => {

	// 	cy.visit('/');
	// 	cy.get('#email').type('mrcouvbat@gmail.com')
	// 	cy.get('#password').type('admin123')
	// 	cy.get('#loginBtn').click()
	// 	cy.wait(2000)
	// })

	it('Inscrit son enfant',() => {

		cy.login();
		cy.wait(2000);

		cy.visit('/');
		cy.get('#enfant').click()
		cy.wait(2000);

		//tout les champs sont obligatoires
		cy.get('#nextBtn').click()

		cy.get('#Inscription_Nom').type('Hemery');
		cy.get('#Inscription_Prenom').type('Mélune');
		cy.get('#Inscription_Date_Naissance').type('1970-01-01');
		cy.get('#Inscription_Sexe2').check();
		cy.get('#Inscription_Adresse').type('1 rue moyenne');
		cy.get('#Inscription_CP').type('18000');
		cy.get('#Inscription_Ville').type('Bourges');
		cy.get('#Inscription_Experience2').check();
		cy.get('#Inscription_Venu2').check();

		cy.get('#nextBtn').click()
		cy.wait(2000)

		//etape 2

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Situation_Ecole').type('Auron A');
		cy.get('#Inscription_Situation_Classe').type('CM1');
		cy.get('#Inscription_Situation_Frere2').check();
		cy.get('#Inscription_Situation_Description').type('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod, nunc eu euismod consectetur, nisi nunc ultricies nisl, euismod euismod nisl nisl euismod. Mauris euismod, nunc eu euismod consectetur, nisi nunc ultricies nisl, euismod euismod nisl nisl euismod.');

		cy.get('#nextBtn').click()
		cy.wait(2000)

		//etape 3

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Sejour_ID').select('3');
		cy.get('#Inscription_Ville_Depart_ID3').check();
		cy.get('#Inscription_Groupe').type('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod, nunc eu euismod consectetur, nisi nunc ultricies nisl, euismod euismod nisl nisl euismod. Mauris euismod, nunc eu euismod consectetur, nisi nunc ultricies nisl, euismod euismod nisl nisl euismod.');

		cy.get('#nextBtn').click()
		cy.wait(2000)

		//etape 4

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Legal1_Nom').type('Hemery');
		cy.get('#Inscription_Legal1_Prenom').type('Jules');
		cy.get('#Inscription_Legal1_Lien').type('Père');
		cy.get('#Inscription_Legal1_Adresse').type('52 rue du cretet, Bourgneuf');
		cy.get('#Inscription_Legal1_Ville').type('Saint-Eloy de Gy');
		cy.get('#Inscription_Legal1_CP').type('18000');
		cy.get('#Inscription_Legal1_Fixe').type('0612345678');
		cy.get('#Inscription_Legal1_Portable').type('0612345678');
		cy.get('#Inscription_Legal1_Email').type('mrcouvbat@gmail.com');
		cy.get('#Inscription_Legal1_Employeur').type('Devncie');

		cy.get('#nextBtn').click()
		cy.wait(1000)

		//etape 5

		cy.get('#nextBtn').click()

		//skip
		cy.wait(1000)

		cy.get('#nextBtn').click()
		cy.wait(1000)

		//etape 6

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Regime_Porc2').check();
		cy.get('#Inscription_Regime_Autre').type('lorem ipsum');

		cy.get('#nextBtn').click()
		cy.wait(1000)

		//etape 7

		cy.get('#nextBtn').click()

		//skip
		cy.wait(1000)

		cy.get('#nextBtn').click()
		cy.wait(1000)

		//etape 8

		cy.get('#Inscription_Urgence_Nom').type('Hemery');
		cy.get('#Inscription_Urgence_Prenom').type('Jules');
		cy.get('#Inscription_Urgence_Parente').type('Père');
		cy.get('#Inscription_Urgence_Adresse').type('52 rue du cretet, Bourgneuf');
		cy.get('#Inscription_Urgence_Ville').type('Saint-Eloy de Gy');
		cy.get('#Inscription_Urgence_CP').type('18000');
		cy.get('#Inscription_Urgence_Fixe').type('0612345678');
		cy.get('#Inscription_Urgence_Portable').type('0612345678');
		cy.get('#Inscription_Urgence_Pro').type('0612345678');

		cy.get('#nextBtn').click()
		cy.wait(1000)

		//etape 9

		cy.get('#nextBtn').click()

		cy.get('#Inscription_Caf_Numero').type('1234567');
		cy.get('#Inscription_Caf_Ville').type('Bourges');

		cy.get('#nextBtn').click()
		cy.wait(1000)

		cy.get('.swal2-confirm').click()
	})
})
