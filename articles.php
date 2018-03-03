<!-- Popup -->
<div id="login">
    <h2 align="center" style="
    font-size: 24pt;
">授权证书</h2>
	  <table style="margin: auto;padding: 0px 0px 20px 0px;width: 100%;">
	  <tbody><tr>
	  <td style="
    text-align: right;
    width: 50%;
">
	  密码 : &nbsp;
	  </td>
	  <td><input id="logopass" type="password" style="
    width: 75px;
">
	  </td>
	  </tr>
	  <tr>
	  <td><br></td>
	  </tr>
	  <tr style="text-align: center;width: 100%;">
	  
	  <td align="right" id="logosend"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 发送 </span></td>
	  <td align="left" id="logoclose"><span style="border: 1px solid silver; cursor: pointer;padding: 2px 10px;"> 取消 </span></td>
	  </tr>
	  </tbody></table>
</div>

<div hidden id="fail">
    <h2 align="center" style="font-size: 24pt; color: red;">
	拒绝访问
	</h2>
</div>

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
      if ($("#logopass").val() != "one") {
		  $('#login').delay(50).fadeOut();
		  $('#fail').delay(55).fadeIn();
	  }
    }
</script>

<style>
#login, #fail {
position: relative;
top: 20px;
margin: auto;
width: 350px;
z-index: 3;
background: #cccccc6b;
border: 1px solid #f3f3f3;
border-radius: 5px;
color: #8fde39;
}

#fail {
	animation: blinker 1s linear infinite;
}
@keyframes blinker {  
  50% { opacity: 0; }
}
</style>
