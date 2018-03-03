<!-- Popup -->
<div style="position: relative; top: 100px; margin: auto; width: 350px; z-index: 3; background: #ccc; border: 1px solid #f3f3f3; border-radius: 5px;">
    <h2 align="center">授权证书</h2>
	  <table>
	  <tr>
	  <td>
	  密码 : 
	  </td>
	  <td><input id="logopass" type="password">
	  </td>
	  </tr>
	  <tr>
	  <td align="center" colspan="2" id="logosend" style="background: white; cursor: pointer;">发送</td>
	  <td align="center" colspan="2" id="logoclose" style="background: white; cursor: pointer;">取消</td>
	  </tr>
	  </table>
</div>
<!-- Popup - End -->

<script>
//logo
$(document).ready(function() {
    $('#logoclose').click(function(e) {
    $('#logo1').delay(250).fadeOut();
    });
    $('#companylogo').click(function(e) {
    $('#logo1').delay(500).fadeIn();
    });
});
//logo
</script>