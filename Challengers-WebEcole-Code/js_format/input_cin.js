<script>
var $this = $( this );
var input = $this.val();
 
// 2
var input = input.replace(/[\D\s\._\-]+/g, "");
 
// 3
input = input ? parseInt( input, 10 ) : 0;
 
// 4
$this.val( function() {
    return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
} );
</script>

/*$(document).ready(function() {

	// input only integers
	$('body').delegate('input.only_integer','keyup',function(){
		if(!$(this).val().match(/^\-?[0-9]*$/))	// numbers
			remove_last_input(this);
	});
	});
	
	// input email if (!preg_match("#^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$#", $tel))
  /* $('body').delegate('input.only_email','keyup',function(){
		if(!$(this).val().match(/^[a-z0-9\-\.\_]*@?[a-z0-9\-\.]*\.?[0-9a-z]*$/i))	// a-z and 0-9
			remove_last_input(this);
	});*/
	
	// input zip code
	/*$('body').delegate('input.only_zip_code','keyup',function(){
		if(!$(this).val().match(/^[0-9]{0,5}$/))	// 5 numbers maximum
			remove_last_input(this);
	});*/

	
	/*function remove_last_input(elm) {
	var val = $(elm).val();
	var cursorPos = elm.selectionStart;
	$(elm).val(	val.substr(0,cursorPos-1) +			// before cursor - 1
				val.substr(cursorPos,val.length)	// after  cursor
	)
	elm.selectionStart = cursorPos-1;				// replace the cursor at the right place
	elm.selectionEnd   = cursorPos-1;
}