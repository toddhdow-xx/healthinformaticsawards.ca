<? 
$page_title = "Registration";

include "header_form.php";
include "body_left.php";
include "body_header.php";
?>

<tr bgcolor="#866B3E">
	<td class="c"><font color="#FFFFFF">&nbsp;&nbsp;Registration</font></td>
</tr>
<tr>
<td class="b" colspan="2">
<div style="padding: 0px 10px 0px 10px;">
<BR><h1 class="ss-form-title">CHIA 2011 registration - Paypal Payment</h1>
<p align="left">You're almost done. Simply select the number fo tickets you'd like to purchase and click the "Pay Now" button. Follow the instructions on the Paypal site. Once complete, you will be redirected back here for final instructions.</p>

<BR>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="69EF2N24T5QLW">
<table>
<tr><td><input type="hidden" name="on0" value="# of tickets"># of tickets</td></tr><tr><td><select name="os0">
	<option value="1 ticket">1 ticket $255.00</option>
	<option value="2 tickets">2 tickets $510.00</option>
	<option value="3 tickets">3 tickets $765.00</option>
	<option value="4 tickets">4 tickets $1,020.00</option>
	<option value="5 tickets">5 tickets $1,275.00</option>
	<option value="6 tickets">6 tickets $1,530.00</option>
	<option value="7 tickets">7 tickets $1,785.00</option>
	<option value="8 tickets">8 tickets $2,040.00</option>
	<option value="9 tickets">9 tickets $2,295.00</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="CAD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<BR>

<p align="left">If you have any questions, comments or concerns, do not hesitate to contact us directly at  <a href="mailto:info@healthinformaticsawards.ca"> info@healthinformaticsawards.ca</a>.
</p>


</div>
</td>
</tr>

<? include "footer.php"; ?>
