<div id="itcontainer">


<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">Items</h1>			
		
	
	<div id="itselect">
            <select id="itselecta">
			<option>Item Select</option>
			<option>Item1</option>
			<option>Item2</option>
			<option>Item3</option>
			<option>Item4</option>
			</select>
   </div>
				  
				<div hidden id="item1">
				<img class="itemimg" src="rolactid.png">
				
				<div class="itparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>				

<div hidden id="item2">
				<img class="itemimg" src="smartwatch.png">
				
				<div class="itparagraph">
				In my younger and more vulnerable years my father gave me some advice that I’ve been turning over in my mind ever since.
     <br/>“Whenever you feel like criticizing any one,” he told me, “just remember that all the people in this world haven’t had the advantages that you’ve had.”
				</div>
</div>				
				  



<script>
$(function() {
      $('#itselecta').change(function() {
        if ($(this).val() == "Item1") {
			$("#item1").prop("hidden", "false");
		} else if ($(this).val() != "Item1") {
			$("#item1").prop("hidden", "true");
		}
		if ($(this).val() == "Item2") {
			$("#item2").prop("hidden", "false");
		} else if ($(this).val() != "Item2") {
			$("#item2").prop("hidden", "true");
		}
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
	list-style: none;
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

</style>