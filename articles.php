<!-- Popup -->
<div id="login">
    <h2 align="center" style="
    font-size: 24pt;
">授权证书</h2>
	  <table style="margin: auto; padding: 0px 0px 20px 0px; width: 100%;">
	  <tr>
	  <td style="text-align: right; width: 50%;">
	  密码 : &nbsp;
	  </td>
	  <td><input id="logopass" type="password" style="width: 75px;">
	  </td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr style="text-align: center; width: 100%;">
	  
	  <td align="right" id="logosend"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 发送 </span></td>
	  <td align="left" id="logoclose"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 取消 </span></td>
	  </tr>
	  </table>
</div>

<div hidden id="fail">
    <h2 id="fail2" align="center">
	拒绝访问
	</h2>
	<table style="margin: auto; padding: 0px 0px 20px 0px; width: 100%;">
	  <tr style="text-align: center; width: 100%;">
	  <td align="center" id="failclose"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px; color: #ff4444;"> 重试 </span></td>
	  </tr>
	  </table>
</div>

 <!-- Green -->
<div hidden class="artcontainer" id="green">
<h1 class="artcolor">Green</h1>

<h1 style="font-family: 'Libre Barcode 128 Text', cursive; font-size: 92px; text-align: center; line-height: 12pt; font-weight: 400;">"Article Title"</h1>			
			
     <div>								
		"Mr. and Mrs. Dursley, of number four, Privet Drive, were proud to say that they were perfectly normal, thank you very much. They were the last people you’d expect to be involved in anything strange or mysterious, because they just didn’t hold with such nonsense."
				  </div>
				  </div>
				  <!-- Green - end -->



<!-- Popup - End -->

<script>
$(document).ready(function() {
    $('#logoclose').click(function(e) {
    $('#logo1').delay(250).fadeOut();
    });
    $('#logo').click(function(e) {
    $('#logo1').delay(250).fadeIn();
    });
});

    document.getElementById('logosend').onclick = function() {
      if ($("#logopass").val() == "green") {
		  $('#login').css('display', 'none');
		  $('#green').delay(50).fadeIn();
	  } else if ($("#logopass").val() != "green") {
		  $('#login').css('display', 'none');
		  $('#fail').delay(50).fadeIn();
	  }
    }
	
	document.getElementById('failclose').onclick = function() {
		  $('#fail').css('display', 'none');
		  $('#login').delay(50).fadeIn();
    }
</script>

<style>
#login, #fail {
position: relative;
top: 275px;
margin: auto;
width: 350px;
z-index: 3;
background: #cccccc6b;
border: 1px solid #f3f3f3;
border-radius: 5px;
color: #8fde39;
}

#fail2 {
	font-size: 32pt;
	color: #ff4444;
	animation: blinker 1.5s cubic-bezier(0, 0, 1, -0.51) infinite;
}
@keyframes blinker {  
  50% { opacity: 0; }
}

.artcontainer {
    background-color: rgba(222, 222, 222, 0.17);
    color: #cf7fff;
    border-radius: 5px;
    padding: 5px;
    position: relative;
    font-family: Simsun;
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

.artcolor {
 font-family: 'Libre Barcode 128 Text', cursive;
 font-size: 92px;
 text-align: center;
 line-height: 12pt;
 font-weight: 400;
}
</style>