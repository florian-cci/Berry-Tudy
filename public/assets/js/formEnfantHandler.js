let validateForm = {
	// Rules for form validation
	rules: {
		Inscription_Nom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Prenom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Date_Naissance: {
			required: true,
			dateISO: true,
		},
		Inscription_Sexe: {
			required: true,
		},
		Inscription_Adresse: {
			required: true,
		},
		Inscription_CP: {
			required: true,
			digits: true,
			minlength: 5,
			maxlength: 5,
		},
		Inscription_Ville: {
			required: true,
			maxlength: 220,
		},
		Inscription_Experience: {
			required: true,
		},
		Inscription_Venu: {
			required: true,
		},
		Inscription_Situation_Ecole: {
			required: true,
			maxlength: 220,
		},
		Inscription_Situation_Classe: {
			required: true,
			maxlength: 220,
		},
		Inscription_Situation_Frere: {
			required: true,
		},
		Inscription_Situation_Frere_Description:{},
		Inscription_Sejour_ID: {
			required: true,
		},
		Inscription_Ville_Depart_ID: {
			required: true,
		},
		Inscription_Legal1_Nom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal1_Prenom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal1_Adresse: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal1_Lien: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal1_CP: {
			required: true,
			digits: true,
			minlength: 5,
			maxlength: 5,
		},
		Inscription_Legal1_Ville: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal1_Fixe: {
			required: true,
			phone: true,
		},
		Inscription_Legal1_Portable: {
			required: true,
			phone: true,
		},
		Inscription_Legal1_Email: {
			required: true,
			email: true,
		},
		Inscription_Legal1_Employeur: {
			required: true,
			maxlength: 220,
		},
		Inscription_Legal2_Nom: {
			maxlength: 220,
		},
		Inscription_Legal2_Prenom: {
			maxlength: 220,
		},
		Inscription_Legal2_Adresse: {
			maxlength: 220,
		},
		Inscription_Legal2_Lien: {
			maxlength: 220,
		},
		Inscription_Legal2_CP: {
			digits: true,
			minlength: 5,
			maxlength: 5,
		},
		Inscription_Legal2_Ville: {
			maxlength: 220,
		},
		Inscription_Legal2_Fixe: {
			phone: true,
		},
		Inscription_Legal2_Portable: {
			phone: true,
		},
		Inscription_Legal2_Email: {
			email: true,
		},
		Inscription_Legal2_Employeur: {
			maxlength: 220,
		},
		Inscription_Regime_Porc: {
			required: true,
		},
		Inscription_Organisme_Intitule: {
			maxlength: 220,
		},
		Inscription_Organisme_Nom: {
			maxlength: 220,
		},
		Inscription_Organisme_Qualite: {
			maxlength: 220,
		},
		Inscription_Organisme_Fixe: {
			phone: true,
		},
		Inscription_Organisme_Portable: {
			phone: true,
		},
		Inscription_Organisme_Email: {
			email: true,
		},
		Inscription_Urgence_Nom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Urgence_Prenom: {
			required: true,
			maxlength: 220,
		},
		Inscription_Urgence_Parente: {
			required: true,
			maxlength: 220,
		},
		Inscription_Urgence_Adresse: {
			required: true,
			maxlength: 220,
		},
		Inscription_Urgence_CP: {
			required: true,
			digits: true,
			minlength: 5,
			maxlength: 5,
		},
		Inscription_Urgence_Ville: {
			required: true,
			maxlength: 220,
		},
		Inscription_Urgence_Fixe: {
			required: true,
			phone: true,
		},
		Inscription_Urgence_Portable: {
			required: true,
			phone: true,
		},
		Inscription_Urgence_Pro: {
			required: true,
			phone: true,
		},
		Inscription_Caf_Numero: {
			required: true,
			digits: true,
			minlength: 7,
			maxlength: 7,
		},
		Inscription_Caf_Ville: {
			required: true,
			maxlength: 220,
		},
	},

	// Messages
	messages: {
		Inscription_Nom: {
			required: "Veuillez entrer le nom de votre enfant.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Prenom: {
			required: "Veuillez entrer le prénom de votre enfant.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Date_Naissance: {
			required: "Veuillez entrer la date de naissance de votre enfant.",
			dateISO: "Veuillez entrer une date valide.",
		},
		Inscription_Sexe: {
			required: "Veuillez sélectionner le sexe de votre enfant.",
		},
		Inscription_Adresse: {
			required: "Veuillez entrer l'adresse de résidence de votre enfant.",
		},
		Inscription_CP: {
			required: "Veuillez entrer le code postal",
			digits: "Veuillez entrer un code postal valide.",
			minlength: "Veuillez entrer un code postal valide.",
			maxlength: "Veuillez entrer un code postal valide.",
		},
		Inscription_Ville: {
			required: "Veuillez entrer la ville de résidence de votre enfant.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Experience: {
			required: "Veuillez selectioner oui ou non.",
		},
		Inscription_Venu: {
			required: "Veuillez selectioner oui ou non.",
		},
		Inscription_Situation_Ecole: {
			required: "Veuillez entrer l'école où votre enfant est scolarisé.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Situation_Classe: {
			required: "Veuillez entrer la classe de votre enfant.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Situation_Frere: {
			required: "Veuillez selectionner oui ou non.",
		},
		Inscription_Situation_Frere_Description:{
			required: "Veuillez indiquer le(s) prénoms et age(s)",
		},
		Inscription_Sejour_ID: {
			required: "Veuillez selectionner un séjour",
		},
		Inscription_Ville_Depart_ID: {
			required: "Veuillez selectionner une ville de départ",
		},
		Inscription_Legal1_Nom: {
			required: "Veuillez entrer le nom du tuteur légal n°1.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Legal1_Prenom: {
			required: "Veuillez entrer le prénom du tuteur légal n°1.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Legal1_Adresse: {
			required: 'Veuillez entrer l\'adresse du tuteur légal n°1.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal1_Lien: {
			required: 'Veuillez entrer le lien de parenté du tuteur légal n°1.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal1_CP: {
			required: 'Veuillez entrer le code postal du tuteur légal n°1.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Legal1_Ville: {
			required: 'Veuillez entrer la ville du tuteur légal n°1.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal1_Fixe: {
			required: 'Veuillez entrer le numéro de téléphone fixe du tuteur légal n°1.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Legal1_Portable: {
			required: 'Veuillez entrer le numéro de téléphone portable du tuteur légal n°1.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Legal1_Email: {
			required: 'Veuillez entrer l\'adresse email du tuteur légal n°1.',
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Legal1_Employeur: {
			required: 'Veuillez entrer le nom de l\'employeur du tuteur légal n°1.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal2_Nom: {
			required: "Veuillez entrer le nom du tuteur légal n°2.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Legal2_Prenom: {
			required: "Veuillez entrer le prénom du tuteur légal n°2.",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Legal2_Adresse: {
			required: 'Veuillez entrer l\'adresse du tuteur légal n°2.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal2_Lien: {
			required: 'Veuillez entrer le lien de parenté du tuteur légal n°2.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal2_CP: {
			required: 'Veuillez entrer le code postal du tuteur légal n°2.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Legal2_Ville: {
			required: 'Veuillez entrer la ville du tuteur légal n°2.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Legal2_Fixe: {
			required: 'Veuillez entrer le numéro de téléphone fixe du tuteur légal n°2.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Legal2_Portable: {
			required: 'Veuillez entrer le numéro de téléphone portable du tuteur légal n°2.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Legal2_Email: {
			required: 'Veuillez entrer l\'adresse email du tuteur légal n°2.',
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Legal2_Employeur: {
			required: 'Veuillez entrer le nom de l\'employeur du tuteur légal n°2.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Regime_Porc: {
			required: 'Veuillez selectioner oui ou non.',
		},
		Inscription_Organisme_Intitule: {
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Organisme_Nom: {
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Organisme_Qualite: {
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Organisme_Fixe: {
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Organisme_Portable: {
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Organisme_Email: {
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Urgence_Nom: {
			required: 'Veuillez entrer le nom du contact.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Urgence_Prenom: {
			required: 'Veuillez entrer le prénom du contact.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Urgence_Parente: {
			required: 'Veuillez entrer le lien de parenté du contact.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Urgence_Adresse: {
			required: 'Veuillez entrer l\'adresse du contact.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Urgence_CP: {
			required: 'Veuillez entrer le code postal du contact.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Urgence_Ville: {
			required: 'Veuillez entrer la ville du contact.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
		Inscription_Urgence_Fixe: {
			required: 'Veuillez entrer le numéro de téléphone fixe du contact.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Urgence_Portable: {
			required: 'Veuillez entrer le numéro de téléphone portable du contact.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Urgence_Pro: {
			required: 'Veuillez entrer le numéro de téléphone professionnel du contact.',
			phone: 'Veuillez entrer un numéro de téléphone valide.',
		},
		Inscription_Caf_Numero: {
			required: 'Veuillez entrer votre numéro d\'allocataire de la CAF.',
			digits: 'Veuillez entrer un numéro d\'allocataire valide.',
			minlength: 'Veuillez entrer un numéro d\'allocataire valide.',
			maxlength: 'Veuillez entrer un numéro d\'allocataire valide.',
		},
		Inscription_Caf_Ville: {
			required: 'Veuillez entrer la ville de votre CAF.',
			maxlength: 'Ce champs ne doit pas dépasser 220 caractères.',
		},
	},

	highlight: function (element) {
		$(element).addClass("is-invalid");
	},

	unhighlight: function (element) {
		$(element).removeClass("is-invalid");
	},

	errorElement: "span",

	errorClass: "invalid-feedback",

	errorPlacement: function (error, element) {
		if (element.attr('type') == 'radio') {
			error.insertAfter(element.closest('div.form-group'));
		} else {
			error.insertAfter(element);
		}
	},

	ignore: ":hidden",

	submitHandler: function () {
		// AJAX with Image Uploading
		let myForm = document.getElementById("inscriptionForm");
		let formData = new FormData(myForm); //use formData for forms with files

		$.ajax({
			type: "POST",
			url: "/enfant",
			data: formData,
			dataType: "json",
			contentType: false,
			cache: false,
			processData: false,
			success: function (response) {
				if (response.msg == "success") {
					Swal.fire({
						icon: "success",
						title: "Créé!",
						text: "Votre inscription a bien été prise en compte.",
						didClose: () => window.location.replace('/'),
					});
				}
			},
			error: function (error) {
				let msg = error.responseJSON.msg;
				if (error.status === 400 || error.status === 422) {
					Swal.fire("Oops!", msg, "error");
				} else {
					Swal.fire(
						"Oops!",
						"Il y a eu une érreur, veuillez réessayer.",
						"error"
					);
				}
			},
		});
	},
};

const showTab = (n) => {
	// This function will display the specified step of the form using jQuery
	let x = $(".step");

	$(".step").eq(n).fadeIn(500);

	n == 0 // if first step then hide the back button
		? $("#prevBtn").hide()
		: $("#prevBtn").show();

	n == x.length - 1 // if last step then next button becomes Submit button
		? $("#nextBtn").html("Envoyer")
		: $(`#nextBtn`).html("Suivant");
};

//validate the current step fields
const validateStep = () => {
	// This function deals with validation of the form fields
	let x, valid = true;

	x = $("#inscriptionForm")


	x.validate(validateForm)

	//Je ne sais pas ce que fait ce bout de code ni pourquoi je l'ai mit la,
	//tout fonctionne sans xD
	//
	// $('Inscription_Situation_Frere1.error').each(function () {
	// 	$(this).valid();
	// });


	x.valid()
		? (valid = true)
		: (valid = false)

	// If the valid status is true, mark the step as finished and valid:
	if (valid) {
		$(".step").eq(currentStep).addClass("finish");
	}
	return valid; // return the valid status
};

function nextPrev(n) {
	//this function will handle the navigation between steps
	let x = $(".step");
	//break if any of the fields in the current step are invalid
	if (n == 1 && !validateStep()) return false;
	// Hide the current step
	$(".step").eq(currentStep).fadeOut(500);
	// Increase or decrease the current step by 1
	currentStep = currentStep + n;
	// if you have reached the end of the form...
	if (currentStep == x.length) {
		//... the form gets submitted:
		$("#inscriptionForm").trigger("submit");
		return false;
	}
	// Otherwise, wait for the fade out, then display the correct tab

	setTimeout(showTab, 490, currentStep);

}

let currentStep = 0; //current step is set to the first step of the form
showTab(currentStep); //Display the current tab

$(document).ready(function () {
	//We'll use the jQuery Validation plugin to validate the form
	//First, implement the RegEx for the FR phone number field
	jQuery.validator.addMethod(
		"phone",
		function (value, element) {
			return (
				this.optional(element) ||
				/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/.test(value)
			);
		},
		"Veuillez entrée un numéro de téléphone valide"
	);

	$("#inscriptionForm").validate(validateForm);

	//we need to make some input required if radio are checked
	$('input[type=radio][name=Inscription_Situation_Frere]').change(function () {
	if ($(this).val() == "oui") {
		$('#Inscription_Situation_Frere_Description').rules('add', 'required');
		$('#Inscription_Situation_Frere_Description').attr('disabled', false);

	} else if ($(this).val() == "non") {
		$('#Inscription_Situation_Frere_Description').val('');
		$('#Inscription_Situation_Frere_Description').rules('remove', 'required');
		$('#Inscription_Situation_Frere_Description').removeClass('is-invalid');
		$('#Inscription_Situation_Frere_Description').attr('disabled', true);

	}
	});

});
