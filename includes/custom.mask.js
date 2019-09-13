jQuery(document).ready(function($) {
	// change options here if needed
	var selector = ".advq_askinfo_1 input",
		placeholder = "+7 (___) ___-__-__",
		mask = "+7 (000) 000-00-00";

	jQuery(selector)
		.attr("placeholder", placeholder)
		.mask(mask);
});
