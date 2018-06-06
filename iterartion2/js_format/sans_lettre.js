$(document).ready(function() {

	// input only integers
	$('body').delegate('input.input-cin','keyup',function(){
		if(!$(this).val().match(/^[0-9-]*$/i))	// numbers
			remove_last_input(this);
	});


}); // end of document.ready


function remove_last_input(elm) {
	var val = $(elm).val();
	var cursorPos = elm.selectionStart;
	$(elm).val(	val.substr(0,cursorPos-val.length) +			// before cursor - 1
				val.substr(cursorPos,val.length)	// after  cursor
	)
	elm.selectionStart = cursorPos-1;				// replace the cursor at the right place
	elm.selectionEnd   = cursorPos-1;
}

<script language="JavaScript">
function afficherAutre() {
	var a = document.getElementById("autre");
	var m = document.getElementById("mots");

	if (document.form1.liste.value == "Autre")
	{
		if (a.style.display == "none")
		a.style.display = "block";

		if (m.style.display == "none")
		m.style.display = "block";
	}
	else
	{
		a.style.display = "none";
	m.style.display = "none";
	}


}




function affichersection(){
	var kid= document.getElementById("section");
	var classe1=document.getElementById("classe1");
	if (document.form1.liste1.value == "Kindergarten")
	{
		if (kid.style.display == "none")
kid.style.display = "block";

		if (classe1.style.display == "none")
classe1.style.display = "block";
	}
	else
	{
		kid.style.display = "none";
classe1.style.display = "none";
	}
}
