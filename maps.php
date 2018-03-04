<div id="mpcontainer">

<!-- chimages -->
<div hidden id="mpimg1a" class="mpimga">
<div class="mpimgclose">X</div>
<img id="mpimg1b" class="mpimgb" src="rolactid.png">
</div>

<div hidden id="mpimg2a" class="mpimga">
<div class="mpimgclose">X</div>
<img id="mpimg2b" class="mpimgb" src="smartwatch.png">
</div>


<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">Maps</h1>			
		
	
	<div id="mpselect">
            <select id="mpselecta">
			<option>Item Select</option>
			<option>Item1</option>
			<option>Item2</option>
			</select>
   </div>
				  
				<div hidden id="mpem1" style="text-align: center; margin: 50px 0px;">
				<img id="mpimg1" class="mpimg" src="rolactid.png">
				
				<div class="mpparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>				

<div hidden id="mpem2" style="text-align: center; margin: 50px 0px;">
<img id="mpimg2" class="mpimg" src="smartwatch.png">
				
				<div class="mpparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>				
				  



<script>
$(function() {
      $("#mpselecta").change(function() {
      if ($(this).val() == "Item1") {
        ($("#mpem1").prop("hidden", false));
      } else if ($(this).val() != "Item1") {
        ($("#mpem1").prop("hidden", true));
      }
	  if ($(this).val() == "Item2") {
        $("#mpem2").prop("hidden", false);
      } else if ($(this).val() != "Item2") {
        $("#mpem2").prop("hidden", true);
      }
    });
	
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
	width: 250px;
}

.mpimgclose {
	position: absolute;
    top: 10px;
    right: 10px;
    color: #8fde39;
    font-weight: bold;
    font-size: 14pt;
}

</style>