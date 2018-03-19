<div id="itcontainer">

<!-- chimages -->
<div hidden id="itimg1a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg1b" class="itimgb" src="rolactid.png">
</div>

<div hidden id="itimg2a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg2b" class="itimgb" src="smartwatch.png">
</div>

<div hidden id="itimg3a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg3b" class="itimgb" src="dice.png">
</div>

<div hidden id="itimg4a" class="itimga">
<div class="itimgclose">X</div>
<img id="itimg4b" class="itimgb" src="usb.png">
</div>


<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">Items</h1>			
		
	
	<div id="itselect">
            <select id="itselecta">
			<option>Item Select</option>
			<option>Smartwatch</option>
			<option>Lucky Dice</option>
			<option>USB</option>
			</select>
   </div>
				  
				<div hidden id="item1" style="text-align: center; margin: 50px 0px;">
				<img id="itimg1" class="itimg" src="rolactid.png">
				
				<div class="ittitle">15mg Rolactid</div>
				<div class="itparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>				

<div hidden id="item2" style="text-align: center; margin: 50px 0px;">
<img id="itimg2" class="itimg" src="smartwatch.png">
				
				<div class="ittitle">Smartwatch</div>
				<div class="itparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>	

<div hidden id="item3" style="text-align: center; margin: 50px 0px;">
<img id="itimg3" class="itimg" src="dice.png">
				
				<div class="ittitle">Lucky Dice</div>
				<div class="itparagraph">
				Gold plated six-sided dice.
				<br/>These give the player an extra 2D6 bonus to any roll of their choice, once per day.
				</div>
				<div style="text-align: center;">Daily Uses:
				<br/><input type="checkbox"></div>
</div>

<div hidden id="item4" style="text-align: center; margin: 50px 0px;">
<img id="itimg4" class="itimg" src="usb.png">
				
				<div class="ittitle">USB</div>
				<div class="itparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>			
				  



<script>
$(function() {
      $("#itselecta").change(function() {
      if ($(this).val() == "Item1") {
        ($("#item1").prop("hidden", false));
      } else if ($(this).val() != "Item1") {
        ($("#item1").prop("hidden", true));
      }
	  if ($(this).val() == "Smartwatch") {
        $("#item2").prop("hidden", false);
      } else if ($(this).val() != "Smartwatch") {
        $("#item2").prop("hidden", true);
      }
	  if ($(this).val() == "Lucky Dice") {
        $("#item3").prop("hidden", false);
      } else if ($(this).val() != "Lucky Dice") {
        $("#item3").prop("hidden", true);
      }
	  if ($(this).val() == "USB") {
        $("#item4").prop("hidden", false);
      } else if ($(this).val() != "USB") {
        $("#item4").prop("hidden", true);
      }
    });
	
	$('#itimg1').click(function(e) {
		$('#itimg1a').toggle();
	});
	$('#itimg2').click(function(e) {
		$('#itimg2a').toggle();
	});
	$('#itimg3').click(function(e) {
		$('#itimg3a').toggle();
	});
	$('#itimg4').click(function(e) {
		$('#itimg4a').toggle();
	});
	  $('.itimgclose').click(function(e) {
		$(this).parent('.itimga').css('display', 'none');
	});
});

</script>

<style>

#itcontainer {
    background-color: rgba(222, 222, 222, 0.17);
    color: #fd6293;
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

.itparagraph {
	width: 600px;
    margin: auto;
    list-style: none;
    text-align: left;
}

.ittitle {
    text-align: center;
	font-size: 24pt;
	font-family: 'Fredericka the Great', cursive;
}

#itselect {
	text-align: center;
}

#itselecta {
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

.itimg {
	border: 1px solid;
    height: 250px;
	cursor: pointer;
}


.itimga {
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

.itimgb {
	width: 250px;
}

.itimgclose {
	position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
    font-size: 14pt;
}

</style>
