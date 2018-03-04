<table style="margin: auto; padding-right: 30px;">
 <tbody><tr>
 <td id="chpcs" class="chmenu" style="left: -125px; color: #cf7fff;"><b>PCs</b></td>
 <td id="chnpcs" class="chmenu" style="left: -90px; color: #cf7fff;"><b>NPCs</b></td>
</tr>
</tbody></table>

<div hidden id="chpcs1">
<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt;">Player Characters</h1>			
			<div>
              <fieldset style="border: none;" class="majorpoints">
                <legend class="majorpointslegend"><b style="background: #d0d0d0; font-size: 14pt; text-shadow: rgba(255, 255, 255, .8) 0 1px 2px;">&nbsp; 鼷 &nbsp;</b></legend>
                <div class="hiders" style="display:none">
				
				<b>2.28.72</b>
                  <ul style="font-size: 10pt;">
				  <li class="newpage"><b>Welcome!</b></li>
                  </ul>
				  
				  </div>
				  </fieldset>
				  </div>

</div>

<div hidden id="chnpcs1">	
<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt;">Non-Player Characters</h1>		
			<div>
              <fieldset style="border: none;" class="majorpoints">
                <legend class="majorpointslegend"><b style="background: #d0d0d0; font-size: 14pt; text-shadow: rgba(255, 255, 255, .8) 0 1px 2px;">&nbsp; 鼷 &nbsp;</b></legend>
                <div class="hiders" style="display:none">
				
				<b>2.28.72</b>
                  <ul style="font-size: 10pt;">
				  <li class="newpage"><b>Welcome!</b></li>
                  </ul>
				  
				  </div>
				  </fieldset>
				  </div>

</div>

<script>
$(document).ready(function() {	
	$('#chpcs').click(function(e) {
		$('#chpcs1').toggle();
		$('#chnpcs1').css("display", "none");
	
	});
	$('#chnpcs').click(function(e) {
		$('#chnpcs1').toggle();
		$('#chpcs1').css("display", "none");
	
	});
});

$(function() {
$('.majorpoints').click(function() {
        $(this).find('.hiders').toggle();
      });
});

</script>

<style>
.chmenu {
	position: relative; 
	top: 0px; 
	border-radius: 5px; 
	width: 50px; 
	box-shadow: rgba(0, 0, 0, .2) 0 2px 8px;
	font-family: Courier new; 
	font-size: 12pt; 
	background: linear-gradient(to bottom, #717171 0%, #ff99cc00 100%);
	height: 25px; 
	line-height: 18pt; 
	z-index: 3; 
	text-align: center; 
	cursor: pointer;
	margin: auto;
	}

#chpcs1, #chnpcs1 {
    background-color: rgba(222, 222, 222, 0.17);
    color: #cf7fff;
    border-radius: 5px;
    padding: 5px;
    position: relative;
    font-family: Simsun;
    font-size: 9pt;
    width: 650px;
    max-height: 500px;
    z-index: 1;
    border: solid white 1px;
    box-shadow: rgba(0, 0, 0, .8) 0 2px 8px;
    margin: auto;
    font-size: 14pt;
    overflow-y: auto;
    top: 50px;
}
</style>
