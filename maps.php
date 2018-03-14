<div id="mpcontainer">

<!-- chimages -->
<div hidden id="mpimg1a" class="mpimga">
<div class="mpimgclose">X</div>
<a href="ForbiddenCityMap.png" target="_blank"><img id="mpimg1b" class="mpimgb" src="ForbiddenCityMap.png"></a>
</div>

<div hidden id="mpimg2a" class="mpimga">
<div class="mpimgclose">X</div>
<img id="mpimg2b" class="mpimgb" src="smartwatch.png">
</div>


<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">Settings</h1>			
		
	
	<div id="mpicons">
	<table style="text-align: center; margin: auto;">
	<tr>
	<td>
	<img id="mpimg1" class="mpimg" src="ForbiddenCityMap.png">
	</td>
	</tr>
	<tr>
	<td>The Forbidden City
	</td>
	</tr>
	</table>
	
   </div>
				  
				
</div>				
				  



<script>
$(function() {	
	$('#mpimg1').click(function(e) {
		$('#mpimg1a').toggle();
	});
	$('#mpimg2').click(function(e) {
		$('#mpimg2a').toggle();
	});
	  $('.mpimgclose').click(function(e) {
		$(this).parent('.mpimga').css('display', 'none');
	});
});

</script>

<style>

#mpcontainer {
    background-color: rgba(222, 222, 222, 0.17);
    color: #ffab78;
    border-radius: 5px;
    padding: 5px;
    position: relative;
    font-family: Simsun;
    width: 850px;
    height: auto;
    z-index: 1;
    border: solid white 1px;
    box-shadow: rgba(0, 0, 0, .8) 0 2px 8px;
    margin: auto;
    font-size: 14pt;
    overflow-y: auto;
    top: 50px;
}

.mpparagraph {
	width: 600px;
    margin: auto;
    list-style: none;
    text-align: left;
}

#mpselect {
	text-align: center;
}

#mpselecta {
	position: relative;
    top: 0px;
    left: -10px;
    width: auto;
    text-align: center;
    list-style: none;
    background: #00000099;
	font-size: 14pt;
	color: #8edc39;
}

.mpimg {
	border: 1px solid;
    height: 250px;
	width: 250px;
	cursor: pointer;
}


.mpimga {
	position: absolute;
    top: 0px;
    left: 0px;
    background: #00000099;
    width: 100%;
    height: -webkit-fill-available;
    z-index: 3;
    text-align: center;
    padding: 100px 0px;
}

.mpimgb {
	width: 800px;
}

.mpimgclose {
	position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
    font-size: 14pt;
}

</style>