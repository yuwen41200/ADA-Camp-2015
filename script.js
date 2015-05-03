$(document).ready(function() {

	$('.ui.dropdown').dropdown({
		on: 'hover'
	});

	$('.masthead .information').transition('scale in', 1000);

	var animateIcons = function() {
		$('.ui.feature .icon .icon').transition({
			animation : 'horizontal flip',
			duration : 600,
		})
		.transition({
			animation : 'horizontal flip',
			duration : 600,
		});
	};

	setInterval(animateIcons, 3200);

	var validationRules = {
		firstName: {
			identifier : 'email',
			rules: [
			{
				type : 'empty',
				prompt : 'Please enter an e-mail'
			},
			{
				type : 'email',
				prompt : 'Please enter a valid e-mail'
			}
			]
		}
	};

	$('.ui.form').form(validationRules, {
		on: 'blur'
	});

});
