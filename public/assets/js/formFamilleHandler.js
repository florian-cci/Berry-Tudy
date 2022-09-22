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
		Inscription_Fixe: {
			required: true,
			phone: true,
		},
		Inscription_Portable: {
			required: true,
			phone: true,
		},
		Inscription_Email: {
			required: true,
			email: true,
		},
		Inscription_Pension: {
			required: true,
		},
		Inscription_Nuit: {
			required: true,
		},
		Inscription_Semaine_Adulte_nb: {
			min: 1,
		},

		Inscription_Nuit_Adulte_nb: {
			min: 1,
		},
		Inscription_Nuit_Adulte_nbNuits: {
			required: true,
			min: 1,
		},
		Inscription_Nuit_Ado_nb: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
		Inscription_Nuit_Ado_nbNuits: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
		Inscription_Nuit_Enfant_12_nb: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
		Inscription_Nuit_Enfant_12_nbNuits: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
		Inscription_Nuit_Enfant_3_nb: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
		Inscription_Nuit_Enfant_3_nbNuits: {
			required: {
				depends: function () {
					return $("input[name=Inscription_Nuit]").is(":checked");
				},
			},
		},
	},
	// Messages
	messages: {
		Inscription_Nom: {
			required: "Veuillez entrer votre nom",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Prenom: {
			required: "Veuillez entrer votre prénom",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Adresse: {
			required: "Veuillez entrer votre adresse de résidence",
		},
		Inscription_CP: {
			required: "Veuillez entrer votre code postal",
			digits: "Veuillez entrer un code postal valide.",
			minlength: "Veuillez entrer un code postal valide.",
			maxlength: "Veuillez entrer un code postal valide.",
		},
		Inscription_Ville: {
			required: "Veuillez entrer votre ville de résidence",
			maxlength: "Ce champs ne doit pas dépasser 220 caractères.",
		},
		Inscription_Fixe: {
			required: "Veuillez entrer votre numéro de téléphone fixe",
			phone: "Veuillez entrer un numéro de téléphone valide.",
		},
		Inscription_Portable: {
			required: "Veuillez entrer votre numéro de téléphone portable",
			phone: "Veuillez entrer un numéro de téléphone valide.",
		},
		Inscription_Email: {
			required: "Veuillez entrer votre adresse email",
			email: "Veuillez entrer une adresse email valide.",
		},
		Inscription_Pension: {
			required: "Veuillez cocher au moins une des cases",
		},
		Inscription_Semaine_Demi_Adulte_nb: {
			required: "Veuillez entrer le nombre d'adulte participants",
			min: "Au moins 1 adulte est requis",
		},
		Inscription_Semaine_Demi_Ado_nb: {
			required: "Veuillez entrer le nombre d'adolescent participants",
		},
		Inscription_Semaine_Demi_Enfant_12_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 12 ans participants",
		},
		Inscription_Semaine_Demi_Enfant_3_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 3 ans participants",
		},
		Inscription_Semaine_Complete_Adulte_nb: {
			required: "Veuillez entrer le nombre d'adulte participants",
			min: "Au moins 1 adulte est requis",
		},
		Inscription_Semaine_Complete_Ado_nb: {
			required: "Veuillez entrer le nombre d'adolescent participants",
		},
		Inscription_Semaine_Complete_Enfant_12_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 12 ans participants",
		},
		Inscription_Semaine_Complete_Enfant_3_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 3 ans participants",
		},
		Inscription_Nuit_Adulte_nb: {
			required: "Veuillez entrer le nombre d'adulte participants",
		},
		Inscription_Nuit_Ado_nb: {
			required: "Veuillez entrer le nombre d'adolescent participants",
		},
		Inscription_Nuit_Enfant_12_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 12 ans participants",
		},
		Inscription_Nuit_Enfant_3_nb: {
			required:
				"Veuillez entrer le nombre d'enfant de moins de 3 ans participants",
		},
	},

	//error formating UI
	highlight: function (element) {
		$(element).addClass("is-invalid");
	},
	unhighlight: function (element) {
		$(element).removeClass("is-invalid");
	},
	errorElement: "span",
	errorClass: "invalid-feedback",
	errorPlacement: function (error, element) {
		if (element.attr("type") == "radio") {
			error.insertAfter(element.closest("div.form-group"));
		} else if (element.attr("type") == "checkbox") {
			error.insertAfter($("span#sejour"));
		} else {
			error.insertAfter(element);
		}
	},

	ignore: ":hidden",

	submitHandler: function () {
		// AJAX with file Uploading
		let myForm = document.getElementById("inscriptionForm");
		let formData = new FormData(myForm); //use formData for forms with files
		$.ajax({
			type: "POST",
			url: "/famille",
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
						didClose: () => window.location.replace("/"),
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
	let x,
		valid = true;

	x = $("#inscriptionForm");

	x.validate(validateForm);

	x.valid() ? (valid = true) : (valid = false);

	// If the valid status is true, mark the step as finished and valid:
	if (valid) {
		$(".step").eq(currentStep).addClass("finish");
	}
	return valid; // return the valid status
	// return true;
};

function nextPrev(n) {
	//this function will handle the navigation between steps
	$("#nextBtn").attr("disabled", true);
	$("#prevBtn").attr("disabled", true);
	let x = $(".step");
	//break if any of the fields in the current step are invalid
	if (n == 1 && !validateStep()) {
		$("#nextBtn").attr("disabled", false);
		$("#prevBtn").attr("disabled", false);
		return false;
	}
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
	$("#nextBtn").attr("disabled", false);
	$("#prevBtn").attr("disabled", false);
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

	//chekcbox acts like a radio button but deselectable
	$(".pensionType").on("change", function () {
		$(".pensionType").not(this).prop("checked", false);
	});

	//forces to choose at least one sejour type
	$("div.checkbox-group :checkbox").on("change", function () {
		if ($("div.checkbox-group :checkbox:checked").length > 0) {
			$("input[name='Inscription_Pension'], input[name='Inscription_Nuit']").rules("remove", "required");

			$("#Demi, #Complete").hide();

			//show the correct table
			if ($("input[name='Inscription_Pension']").is(":checked")) {
				if ($("#Inscription_Pension_Demi").is(":checked")) {
					$("#Demi").show();
					$("input[name='Inscription_Semaine_Demi_Adulte_nb']").rules(
						"add",
						"required"
					);
				} else if ($("#Inscription_Pension_Complete").is(":checked")) {
					$("#Complete").show();
					$("input[name='Inscription_Semaine_Complete_Adulte_nb']").rules(
						"add",
						"required"
					);
				}
			}
			if ($("input[name='Inscription_Nuit[]']").is(":checked")) {
				$("#Nuit").show();
				$("input[name='Inscription_Semaine_Nuit_Adulte_nb'], input[name='Inscription_Semaine_Nuit_Adulte_nbNuits']"
				).rules("add", "required");
			} else {
				$("#Nuit").hide();
			}
		} else if ($("div.checkbox-group :checkbox:checked").length == 0) {
			$("input[name='Inscription_Pension']").rules("add", "required");
			$("input[name='Inscription_Nuit']").rules("add", "required");
		}
	});


		function calculTotal() {
			let total = 0;
			$("form").find('.sum').each(function () {
				let x = 0
				if ($(this).html() != '') {
					x = parseInt($(this).html().replace(/[^0-9]+/g, ""));
				}
				console.log(x)
				total += x
			});
			//update the total price in the table at the closest .sum element
			$('form').find('#total').html(`${total}`);
			$('form').find("input[name='Inscription_Montant_Total']").val(total);

		}

		function calculSomme(selector,sumInput) {
			let somme = 0;
			let table = selector.parent().parent().parent().parent();
			//get the value of each .dynamicPrice of this particular table
			table.find('.dynamicPrice').each(function () {
				//trim the string to an integer
				let price = parseInt($(this).html().replace(/[^0-9]+/g, ""));
				somme += price;
			});
			//update the total price in the table at the closest .sum element
			table.find('.sum').html(`= ${somme} €`);
			$(sumInput).val(somme);
			calculTotal();
		}

	function calculPrixSemaine(selector) {
		//get the value of the input
		let nb = selector.val();
		let price = selector.parent().siblings(".price").html();
		let dynamicPrice;
		//if the input is not empty
		if (nb != "") {
			//select in jquery the parent div of the input then the next <td> with the class "price"
			dynamicPrice = nb * price;
		}
		//if the input is empty
		else {
			dynamicPrice = 0;
		}
		//update the price in the table
		selector.parent().siblings(".dynamicPrice").html(`= ${dynamicPrice} €`);
		calculSomme(selector,`input[name='Inscription_Montant_A']`);
	}

	function calculPrixNuit(selector) {
		//get the value of the input
		let x = selector.parent().parent();
		let nbPers = x.children(".nbPers").children("input").val();
		let nbNuits = x.children(".nbNuits").children("input").val();
		let price = x.children(".price").html();
		let dynamicPrice;
		//if the input is not empty
		if (nbPers != "" && nbNuits != "") {
			//select in jquery the parent div of the input then the next <td> with the class "price"
			dynamicPrice = nbPers * nbNuits * price;
		}
		//if the input is empty
		else {
			dynamicPrice = 0;
		}
		dynamicPrice=dynamicPrice+10
		//update the price in the table
		x.children(".dynamicPrice").html(`= ${dynamicPrice} €`);
		calculSomme(selector,`input[name='Inscription_Montant_B']`);
	}

	$("input[name^='Inscription_Semaine_Demi_'], input[name^='Inscription_Semaine_Complete_']"
	).on("change", function () {
		let x = $(this);
		calculPrixSemaine(x);
	});

	$("input[name^='Inscription_Nuit_'], input[name$='_nbNuits']"
	).on(
		"change",
		function () {
			let x = $(this);
			calculPrixNuit(x);
		}
	);

});

$('#Inscription_Nuit_Adulte_nbNuits').on('input', function () {
	$('#Inscription_Nuit_Ado_nbNuits').val($(this).val());
	$('#Inscription_Nuit_Enfant_12_nbNuits').val($(this).val());
	$('#Inscription_Nuit_Enfant_3_nbNuits').val($(this).val());
});
