function verif(chars) {
        // Caractères autorisés
        var regex = new RegExp("[0-9-]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
            }
        }
    }
	
	function seulementSexe()
{
    var champ = document.getElementById('sex');
    while (champ.value.match(/[^mf]/))
    {
        champ.value = champ.value.replace(/[^mf]/,'');
    }
}