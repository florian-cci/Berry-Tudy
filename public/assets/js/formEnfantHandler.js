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
			required: false,
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
			required: false,
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
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Prenom: {
			required: "Veuillez entrer le pr??nom de votre enfant.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Date_Naissance: {
			required: "Veuillez entrer la date de naissance de votre enfant.",
			dateISO: "Veuillez entrer une date valide.",
		},
		Inscription_Sexe: {
			required: "Veuillez s??lectionner le sexe de votre enfant.",
		},
		Inscription_Adresse: {
			required: "Veuillez entrer l'adresse de r??sidence de votre enfant.",
		},
		Inscription_CP: {
			required: "Veuillez entrer le code postal",
			digits: "Veuillez entrer un code postal valide.",
			minlength: "Veuillez entrer un code postal valide.",
			maxlength: "Veuillez entrer un code postal valide.",
		},
		Inscription_Ville: {
			required: "Veuillez entrer la ville de r??sidence de votre enfant.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Experience: {
			required: "Veuillez selectioner oui ou non.",
		},
		Inscription_Venu: {
			required: "Veuillez selectioner oui ou non.",
		},
		Inscription_Situation_Ecole: {
			required: "Veuillez entrer l'??cole o?? votre enfant est scolaris??.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Situation_Classe: {
			required: "Veuillez entrer la classe de votre enfant.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Situation_Frere: {
			required: "Veuillez selectionner oui ou non.",
		},
		Inscription_Situation_Frere_Description:{
			required: "Veuillez indiquer le(s) pr??noms et age(s)",
		},
		Inscription_Sejour_ID: {
			required: "Veuillez selectionner un s??jour",
		},
		Inscription_Ville_Depart_ID: {
			required: "Veuillez selectionner une ville de d??part",
		},
		Inscription_Legal1_Nom: {
			required: "Veuillez entrer le nom du tuteur l??gal n??1.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Legal1_Prenom: {
			required: "Veuillez entrer le pr??nom du tuteur l??gal n??1.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Legal1_Adresse: {
			required: 'Veuillez entrer l\'adresse du tuteur l??gal n??1.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal1_Lien: {
			required: 'Veuillez entrer le lien de parent?? du tuteur l??gal n??1.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal1_CP: {
			required: 'Veuillez entrer le code postal du tuteur l??gal n??1.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Legal1_Ville: {
			required: 'Veuillez entrer la ville du tuteur l??gal n??1.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal1_Fixe: {
			required: 'Veuillez entrer le num??ro de t??l??phone fixe du tuteur l??gal n??1.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Legal1_Portable: {
			required: 'Veuillez entrer le num??ro de t??l??phone portable du tuteur l??gal n??1.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Legal1_Email: {
			required: 'Veuillez entrer l\'adresse email du tuteur l??gal n??1.',
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Legal1_Employeur: {
			required: 'Veuillez entrer le nom de l\'employeur du tuteur l??gal n??1.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal2_Nom: {
			required: "Veuillez entrer le nom du tuteur l??gal n??2.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Legal2_Prenom: {
			required: "Veuillez entrer le pr??nom du tuteur l??gal n??2.",
			maxlength: "Ce champs ne doit pas d??passer 220 caract??res.",
		},
		Inscription_Legal2_Adresse: {
			required: 'Veuillez entrer l\'adresse du tuteur l??gal n??2.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal2_Lien: {
			required: 'Veuillez entrer le lien de parent?? du tuteur l??gal n??2.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal2_CP: {
			required: 'Veuillez entrer le code postal du tuteur l??gal n??2.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Legal2_Ville: {
			required: 'Veuillez entrer la ville du tuteur l??gal n??2.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Legal2_Fixe: {
			required: 'Veuillez entrer le num??ro de t??l??phone fixe du tuteur l??gal n??2.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Legal2_Portable: {
			required: 'Veuillez entrer le num??ro de t??l??phone portable du tuteur l??gal n??2.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Legal2_Email: {
			required: 'Veuillez entrer l\'adresse email du tuteur l??gal n??2.',
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Legal2_Employeur: {
			required: 'Veuillez entrer le nom de l\'employeur du tuteur l??gal n??2.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Regime_Porc: {
			required: 'Veuillez selectioner oui ou non.',
		},
		Inscription_Organisme_Intitule: {
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Organisme_Nom: {
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Organisme_Qualite: {
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Organisme_Fixe: {
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Organisme_Portable: {
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Organisme_Email: {
			email: 'Veuillez entrer une adresse email valide.',
		},
		Inscription_Urgence_Nom: {
			required: 'Veuillez entrer le nom du contact.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Urgence_Prenom: {
			required: 'Veuillez entrer le pr??nom du contact.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Urgence_Parente: {
			required: 'Veuillez entrer le lien de parent?? du contact.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Urgence_Adresse: {
			required: 'Veuillez entrer l\'adresse du contact.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Urgence_CP: {
			required: 'Veuillez entrer le code postal du contact.',
			digits: 'Veuillez entrer un code postal valide.',
			minlength: 'Veuillez entrer un code postal valide.',
			maxlength: 'Veuillez entrer un code postal valide.',
		},
		Inscription_Urgence_Ville: {
			required: 'Veuillez entrer la ville du contact.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
		},
		Inscription_Urgence_Fixe: {
			required: 'Veuillez entrer le num??ro de t??l??phone fixe du contact.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Urgence_Portable: {
			required: 'Veuillez entrer le num??ro de t??l??phone portable du contact.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Urgence_Pro: {
			required: 'Veuillez entrer le num??ro de t??l??phone professionnel du contact.',
			phone: 'Veuillez entrer un num??ro de t??l??phone valide.',
		},
		Inscription_Caf_Numero: {
			required: 'Veuillez entrer votre num??ro d\'allocataire de la CAF.',
			digits: 'Veuillez entrer un num??ro d\'allocataire valide.',
			minlength: 'Veuillez entrer un num??ro d\'allocataire valide.',
			maxlength: 'Veuillez entrer un num??ro d\'allocataire valide.',
		},
		Inscription_Caf_Ville: {
			required: 'Veuillez entrer la ville de votre CAF.',
			maxlength: 'Ce champs ne doit pas d??passer 220 caract??res.',
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
		let myForm = $('#inscriptionForm');
		let formData = new FormData(myForm[0]); //use formData for forms with files
		
		$.ajax({
			type: "POST",
			url: myForm.attr('action'),
			data: formData,
			dataType: "json",
			contentType: false,
			cache: false,
			processData: false,
			success: function (response) {
				if (response.msg == "success") {
					Swal.fire({
						icon: "success",
						title: "Cr????!",
						text: "Votre inscription a bien ??t?? prise en compte.",
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
						"Il y a eu une ??rreur, veuillez r??essayer.",
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
	// return true;
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
		"Veuillez entr??e un num??ro de t??l??phone valide"
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

// get if radio is checked
$('input[type=radio][name=Inscription_Situation_Frere]').change(function () {
	if ($(this).val() == "oui") {
		$('.frere_soeur').removeClass('d-none');

	} else if ($(this).val() == "non") {
		$('.frere_soeur').addClass('d-none');
		$('.nbre_frere').html(''); // reset the number of frere
		$('#Inscription_Situation_frere_soeur').val(''); // reset the number of frere
		$('.nbre_frere').addClass('d-none');
	}
});

$('#Inscription_Situation_frere_soeur').on('input', function () {
	// generate field nom and prenom , age and radio oui non
	let nbr = $(this).val();
	let html = '';
	if(nbr > 0){

	for (let i = 1; i <= nbr; i++) {
		html += `
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="Inscription_Situation_Frere_Nom${i}">Nom & Pr??nom</label>
					<input type="text" name="inscription_frere_info[Nom${i}]" id="Inscription_Situation_Frere_Nom${i}" class="form-control" required>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="Inscription_Situation_Frere_Age${i}">Age</label>
					<input type="number" name="inscription_frere_info[Age${i}]" id="Inscription_Situation_Frere_Age${i}" class="form-control" required>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="Inscription_Situation_Frere_Participe${i}">participe au s??jour ?? berry?</label>
					<div class="form-check pt-2">
						<label class="radio-inline">
							<input type="radio" name="inscription_frere_info[Participe${i}]" value="oui"> oui	
						</label>
						<label class="radio-inline">
							<input type="radio" name="inscription_frere_info[Participe${i}]" value="non"> non
						</label>
					</div>
				</div>
			</div>
		</div>
		
		`;
	}
	$('.nbre_frere').removeClass('d-none');
	$('.nbre_frere').html(html);
	}else{
		$('.nbre_frere').addClass('d-none');
		$('.nbre_frere').html('');
	}

});

$('#Inscription_Legal1_Nom').on('input', function () {
	$('#Inscription_Legal2_Nom').val($(this).val());
});
$('#Inscription_Legal1_Prenom').on('input', function () {
	$('#Inscription_Legal2_Prenom').val($(this).val());
});
$('#Inscription_Legal1_Lien').on('input', function () {
	$('#Inscription_Legal2_Lien').val($(this).val());
});
$('#Inscription_Legal1_Email').on('input', function () {
	$('#Inscription_Legal2_Email').val($(this).val());
});
$('#Inscription_Legal1_Adresse').on('input', function () {
	$('#Inscription_Legal2_Adresse').val($(this).val());
});
$('#Inscription_Legal1_Ville').on('input', function () {
	$('#Inscription_Legal2_Ville').val($(this).val());
});
$('#Inscription_Legal1_CP').on('input', function () {
	$('#Inscription_Legal2_CP').val($(this).val());
});
$('#Inscription_Urgence_Fixe').on('input', function () {
	$('#Inscription_Urgence_Portable').rules('remove', 'required');
		$('#Inscription_Urgence_Pro').rules('remove', 'required');
});
$('#Inscription_Urgence_Portable').on('input', function () {
	$('#Inscription_Urgence_Fixe').rules('remove', 'required');
			$('#Inscription_Urgence_Pro').rules('remove', 'required');
});

$('#Inscription_Urgence_Pro').on('input', function () {
	$('#Inscription_Urgence_Fixe').rules('remove', 'required');
	$('#Inscription_Urgence_Portable').rules('remove', 'required');
});
$('#Inscription_Legal1_Fixe').on('input', function () {
	$('#Inscription_Legal1_Portable').rules('remove', 'required');
	$('#Inscription_Legal2_Portable').rules('remove', 'required');
	$('#Inscription_Legal2_Fixe').val($(this).val());
});
$('#Inscription_Legal1_Portable').on('input', function () {
    console.log($(this).val())
    	$('#Inscription_Legal2_Portable').val($(this).val());
	$('#Inscription_Legal1_Fixe').rules('remove', 'required');
$('#Inscription_Legal2_Fixe').rules('remove', 'required');
});
$('#Inscription_Caf_Numero').pincodeInput({hidedigits: false, inputs: 7});
$('input[type=radio][name=Inscription_Situation_prise_en_change_caf]').change(function () {
	if ($(this).val() == "oui") {
		$('.prise_ok').removeClass('d-none');

	} else if ($(this).val() == "non") {
		$('.prise_ok').addClass('d-none');
	}
});
$('input[type=radio][name=Inscription_Situation_personne_acontacter]').change(function () {
	if ($(this).val() != "Autre") {
		let val = $(this).val();
		$('#Inscription_Urgence_Nom').val($("#Inscription_"+val+"_Nom").val());
		$('#Inscription_Urgence_Prenom').val($("#Inscription_"+val+"_Prenome").val());
		$('#Inscription_Urgence_Parente').val($("#Inscription_"+val+"_Lien").val());
		$('#Inscription_Urgence_Adresse').val($("#Inscription_"+val+"_Adresse").val());
		$('#Inscription_Urgence_Ville').val($("#Inscription_"+val+"_Ville").val());
		$('#Inscription_Urgence_CP').val($("#Inscription_"+val+"_CP").val());
		$('#Inscription_Urgence_Fixe').val($("#Inscription_"+val+"_Fixe").val());
		$('#Inscription_Urgence_Portable').val($("#Inscription_"+val+"_Portable").val());
			$('#Inscription_Urgence_Fixe').rules('remove', 'required');
	$('#Inscription_Urgence_Portable').rules('remove', 'required');

	} else {
		$('#Inscription_Urgence_Nom').val('');
		$('#Inscription_Urgence_Prenom').val('');
		$('#Inscription_Urgence_Parente').val('');
		$('#Inscription_Urgence_Adresse').val('');
		$('#Inscription_Urgence_Ville').val('');
		$('#Inscription_Urgence_CP').val('');
		$('#Inscription_Urgence_Fixe').val('');
		$('#Inscription_Urgence_Portable').val('');
	}
});