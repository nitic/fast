	tinyMCE.init({
		mode : "exact",
		elements : "fastedit",
		width : "100%",
		height : "250",
		theme : "advanced",
		plugins : "save",
		convert_urls : false,
		schema: "html5", // "html5", "html4" or "html5-strict"
		theme_advanced_buttons1 : "save,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,|,bullist,numlist,|,undo,redo",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_statusbar_location : "none",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "center",
		save_onsavecallback : "Editor_Save"
		});


function Editor_Save() {
    document.formeditor1.action = "?action=save";
    document.formeditor1.submit();
};