<html>
<head>
<title></title>

<script language="javascript" type="text/javascript">
function ExamForm(form) {
	if(form["chk"].checked) {
		form["add2_num"].value = form["add_num"].value;
		form["add2_moo"].value = form["add_moo"].value;
		form["add2_soi"].value = form["add_soi"].value;
                form["add2_road"].value = form["add_road"].value;
                form["add2_tumbon"].value = form["add2_tumbon"].value;
                form["add2_amphur"].value = form["add_amphur"].value;
                form["show_arti_topic4"].value = form["show_arti_topic3"].value;
                form["add2_post"].value = form["add_post"].value;
                form["add2_tel"].value = form["add_tel"].value;
                form["add2_mobi"].value = form["add_mobi"].value;
                 
	else {
		form["add2_num"].value = "";
		form["add2_moo"].value = "";
		form["add2_soi"].value = "";
                form["add2_road"].value = "";
                form["add2_tumbon"].value = "";
                form["add2_amphur"].value = "";
                form["show_arti_topic4"].value = "";
                form["add2_post"].value = "";
                form["add2_tel"].value = "";
                form["add2_mobi"].value = "";
	}
}

</script>
</head>
<body> 
<form> 
  <table> 
    <tr> 
      <td> 
	  <input name="samesided" id="chk" type="checkbox" value="yes" onClick="ExamForm(this.form)"> 
        Same image both sides <br> 
        Side One &nbsp; 
        <select name="SideOne"> 
          <option>1 colour</option> 
          <option>2 colours</option> 
          <option>3 colours</option> 
          <option>4 colours</option> 
          <option>5 colours</option> 
          <option>6 colours</option> 
          <option>more</option> 
        </select> 
&nbsp; Coverage
        <input name="SideOneCoverage" type="text" size="3" maxlength="3"> 
        % &nbsp;&nbsp;Bleed
        <input name="SideOneBleed" id="SideOneBleed" type="checkbox" value="yes"> 
        <br> 
        Side Two &nbsp; 
        <select name="SideTwo" id="SideTwo"> 
          <option>1 colour</option> 
          <option>2 colours</option> 
          <option>3 colours</option> 
          <option>4 colours</option> 
          <option>5 colours</option> 
          <option>6 colours</option> 
          <option>more</option> 
        </select> 
&nbsp; Coverage
        <input name="SideTwoCoverage" type="text" id="SideTwoCoverage" size="3" maxlength="3"> 
        % &nbsp; Bleed
        <input name="SideTwoBleed" id="SideTwoBleed" type="checkbox" value="yes" > </td> 
    </tr> 
    
 
  </table> 
</form> 
</body>
</html>