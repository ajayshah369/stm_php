<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quotation</title>
  
  <style>
    .form {
      width: fit-content;
      margin: 0 auto;
      font-size: 14px;
    }

    body {
      padding: 0;
    }

    #header {
      width: auto;
    height: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 40px;
    background: #417690;
    color: #ffc;
    overflow: hidden;
    }

    #header a {
      color: #ffc;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div id="header">
    <div id="branding">
      <h1 id="site-name"><a href="/admin/home">Quotation</a></h1>
    </div>
    <div id="user-tools">
      <form action="/logout" method="post">
        @csrf
        <a href="/logout"
            onClick="event.preventDefault();
                this.closest('form').submit();">
          Log out
        </a>
      </form>
    </div>
  </div>

   <script>
  function chv(h) {
    console.log(h)
        h.value = h.checked ? 1 : 0;
    }
</script>

  <form method="post" class="form">
    @csrf
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
                        <td colspan="4" height="1" align="left" valign="top"><table width="35%" border="0" cellspacing="0" cellpadding="0">
                          <tbody><tr>
                            <td align="center">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="h1">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="85%" class="h1"><h1>Quotation</h1></td>
                          </tr>
                        </tbody></table></td>
                      </tr>
					  <tr>
					    <td colspan="4">&nbsp;</td>
				      </tr>
					  <tr>
						<td width="12%" height="29"><font class="ws9"><b>Contact Person</b></font></td>
						<td width="1%"><div align="center"><font class="ws9"><b>&nbsp;:</b></font></div></td>
						<td width="45%" style="padding-left:5px;"><input name="contact_person" type="text" size="55"></td>
						<td width="42%"><font class="ws9"><b>Date</b> </font>&nbsp;:&nbsp;
                            <input name="date" id="txtsaledate" type="date" class="txtbox"></td>
					  </tr>
					  <tr>
						<td height="30"><font class="ws9"><b>Company Name</b></font></td>
						<td width="1%"><div align="center"><font class="ws9"><b>&nbsp;:</b></font></div></td>
						<td style="padding-left:5px;"><input name="company_name" type="text" size="55"></td>
						<td>&nbsp;</td>
					  </tr>
					  <tr>
					    <td height="30"><font class="ws9"><b>Address </b></font></td>
					    <td width="1%"><div align="center"><font class="ws9"><b>&nbsp;:</b></font></div></td>
					    <td style="padding-left:5px;"><input name="address" type="text" size="55"></td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td><font class="ws9"><b>Email-ID</b></font></td>
					    <td width="1%"><div align="center"><font class="ws9"><b>&nbsp;:</b></font></div></td>
					    <td style="padding-left:5px;"><input name="email" required type="email" size="55"></td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					  <tr>
					    <td colspan="4">&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="4"><div align="justify"><font class="ws9" color="#454545"><b>We thank you for your enquiry for the packing and moving of your house hold goods </b></font></div>
					      <div align="justify"><font class="ws9" color="#454545"><b><br>
                          </b></font></div>
					      <div align="justify"><font class="ws9" color="#454545"><b>from&nbsp;&nbsp;</b></font><font class="ws9"><b>&nbsp;:</b></font> <font class="ws9" color="#454545"><b>&nbsp;
					            <input name="moving_from" type="text">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to </b></font><font class="ws9"><b>&nbsp;:</b></font> <font class="ws9" color="#454545"><b>
				          <input name="moving_to" type="text">
				          <br>
                          </b></font></div>
				        <div align="justify" style="padding-top:10px;"><font class="ws9" color="#454545"><b> we have pleasure in quoting our charges as follows:</b></font></div></td>
				      </tr>
					  <tr>
					    <td colspan="3">&nbsp;</td>
				        <td class="text">&nbsp;</td>
					  </tr>
					  <tr>
					    <td colspan="3" class="text_two">1.&nbsp; Packing using quality packing materials&nbsp;&nbsp;</td>
					    <td class="text">Rs.<input name="packing_using_quality_materials_with_manpower" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">2.&nbsp; Transportation charges (Full Load <input type="checkbox" name="full_load" value="0" onclick="chv(this)" /> / Part Load <input type="checkbox" name="part_load" value="0" onclick="chv(this)" />) <input type="text" size="5" name="ft" /> FT <input type="text" size="5" name="cft" /> CFT <input type="text" size="5" name="km" /> KM </td>
					    <td class="text">Rs.<input name="transportation_charges" type="text">						</td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">3.&nbsp; Loading charges&nbsp;&nbsp;&nbsp; ( <input name="loading_floors" type="text" size="5"> Floor ) Lift use&nbsp;&nbsp;&nbsp;
				        <input type="checkbox" onclick="chv(this)" value="0" name="use_lift_loading" id="id_use_lift_loading">				</td>
					    
						<td class="text">Rs.<input name="loading_charges" type="text">						</td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">4.&nbsp; Unloading charges ( 
					      <input name="unloading_floors" type="text" size="5"> Floor ) Lift use&nbsp;&nbsp;&nbsp;
						<input type="checkbox" onclick="chv(this)" value="0" name="use_lift_unloading" id="id_use_lift_unloading">						</td>
					    
						<td class="text">Rs.<input name="unloading_charges" type="text">						</td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">5.&nbsp; Escort with vehicle expenses &amp; return fare :</td>
					    <td class="text">Rs.<input name="escort_charges" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">6.&nbsp; Unpacking charges </td>
					    <td class="text">Rs.<input name="unpacking_charges" type="text"></td>
				      </tr>
					   <tr>
					    <td colspan="3" class="text_two">7.&nbsp; Dismantling and fitting charges
                  of electronics and furniture items: </td>
					    <td class="text">Rs.<input name="dismantling_and_fitting_charges_of_electronics_and_furniture_items" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">8.&nbsp; 
				        Car transportation inclusive of loading & unloading, Insurance by party, 12 ltrs. Fuel must be available in the car </td>
					    <td class="text">Rs.<input name="car_transportation_charges_inclusive_of_loading_unloading_and_insurance" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">9.&nbsp; Society Charges / Union Charges / Entry tax if applicable &nbsp; &nbsp; &nbsp;</td>
					    <td class="text">Rs.<input name="sue" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">10.&nbsp; Insurance Charge : House Hold goods <input type="text" name="ichhgp" size="5" /> % on value (carriers risk) Rs. <input size="5" type="text" name="ichhgr" /></td>
					    <td class="text">Rs.<input name="ichhg" type="text"></td>
				      </tr>
					  
					  <tr>
					    <td colspan="3" class="text_two">11.Insurance Charge : Car declared Value <input type="text" name="iccdvr" size="5" /> (FOV) <input type="text" name="iccdvp" size="5" /> % on value (only transit)</td>
					    <td class="text">Rs.<input name="iccd" type="text"></td>
				      </tr>
<tr>
					    <td colspan="3" class="text_two">12.Surcharges Charge * <input type"text" size="5"  name="suechargep" /> % will be extra on Bill Amount </td>
					    <td class="text">Rs.<input name="surcharges" type="text"></td>
				      </tr>
					  
					  <tr>
					    <td colspan="3" class="text_two">13. GST liability (applicable as per law)
					      <input type="text" name="gst_r" size="6"> @  <input type="text" name="gst_p" size="6"> in case of Proprietorship / Individual
					      </td>
					    <td class="text">Rs.
					      <input name="gst_amount" type="text"></td>
				      </tr>
					  <tr>
                        <td colspan="3" class="text_two">14.&nbsp; Temporary Storage Charges @
                          <input type="text" name="temporary_storage_charges_per_day" size="6" id="temp_storage_charges">
                          Per Day</td>
					    <td height="25" class="text">Rs.
					      <input name="temporary_storage_charges" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">15. Static charges &nbsp; &nbsp;</td>
					    <td class="text">Rs. <input type="text" value="200" name="static_charges"></td>
				      </tr>
					  <tr>
					    <td height="37" colspan="3" class="text_two" style="padding:5px 10px 0 0;" valign="bottom"><div align="right"><strong>Total: </strong></div></td>
					    <td class="text" valign="bottom">Rs.<input name="total" type="text"></td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two">&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two"><b>Comment</b><br>
						<textarea name="comment" cols="30" rows="5"></textarea>						</td>
					    <td>&nbsp;</td>
				      </tr>
					   <tr>
					    <td colspan="3" class="text_two">&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td colspan="3" class="text_two"><div align="center">
				          <input type="submit"  value="Submit">&nbsp;&nbsp;&nbsp;
				        </div></td>
					    <td>&nbsp;</td>
					  </tr>
					</tbody></table>
  </form>
</body>

</html>