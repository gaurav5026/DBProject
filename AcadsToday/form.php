<?php
session_start();
if(!isset($_SESSION['uid'])) header("location:login_page.php");
?>
<html>
<style type="text/css">
<!--
.style1 {font-size: xx-large}
-->
</style>
<body bgcolor="#FFCC66">
<form method="post" action="form_action.php">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td><div align="center" class="style1">MESS REFERENDUM 2011</div></td>
  </tr>
</table>
<p><strong><br/>
    <em>1. BREAKFAST</em></strong><br/><br/>
    <em>(a) Dishes</em><br/>
</p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Egg Omlette</td>
    <td width="75%"><input type="radio" name="1" value="1"/>
    *
    &nbsp;
    <input type="radio" name="1" value="2"/>
    **
    &nbsp;
    <input type="radio" name="1" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="1" value="4"/>
    ****
    &nbsp;  
     <input type="radio" name="1" value="5"/>
    *****
    &nbsp;
      <input type="radio" name="1" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Upma</td>
    <td width="75%"><input type="radio" name="2" value="1"/>
    *
    &nbsp;
    <input type="radio" name="2" value="2"/>
    **
    &nbsp;
    <input type="radio" name="2" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="2" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="2" value="5"/>
    *****
    &nbsp;<input type="radio" name="2" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Sprouts</td>
    <td width="75%"><input type="radio" name="3" value="1"/>
    *
    &nbsp;
    <input type="radio" name="3" value="2"/>
    **
    &nbsp;
    <input type="radio" name="3" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="3" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="3" value="5"/>
    *****
    &nbsp;<input type="radio" name="3" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Poha</td>
    <td width="75%"><input type="radio" name="4" value="1"/>
    *
    &nbsp;
    <input type="radio" name="4" value="2"/>
    **
    &nbsp;
    <input type="radio" name="4" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="4" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="4" value="5"/>
    *****
    &nbsp;<input type="radio" name="4" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Cheese Sandwich </td>
    <td width="75%"><input type="radio" name="5" value="1"/>
    *
    &nbsp;
    <input type="radio" name="5" value="2"/>
    **
    &nbsp;
    <input type="radio" name="5" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="5" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="5" value="5"/>
    *****
    &nbsp;<input type="radio" name="5" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Aloo Paratha</td>
    <td width="75%"><input type="radio" name="6" value="1"/>
    *
    &nbsp;
    <input type="radio" name="6" value="2"/>
    **
    &nbsp;
    <input type="radio" name="6" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="6" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="6" value="5"/>
    *****
    &nbsp;<input type="radio" name="6" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%"><p>Gobi Paratha</p></td>
    <td width="75%"><input type="radio" name="7" value="1"/>
    *
    &nbsp;
    <input type="radio" name="7" value="2"/>
    **
    &nbsp;
    <input type="radio" name="7" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="7" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="7" value="5"/>
    *****
    &nbsp;<input type="radio" name="7" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Puri Bhaji</td>
    <td width="75%"><input type="radio" name="8" value="1"/>
    *
    &nbsp;
    <input type="radio" name="8" value="2"/>
    **
    &nbsp;
    <input type="radio" name="8" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="8" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="8" value="5"/>
    *****
    &nbsp;<input type="radio" name="8" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Boiled Egg</td>
    <td width="75%"><input type="radio" name="9" value="1"/>
    *
    &nbsp;
    <input type="radio" name="9" value="2"/>
    **
    &nbsp;
    <input type="radio" name="9" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="9" value="4"/>
    ****
    &nbsp;
     <input type="radio" name="9" value="5"/>
    *****
    &nbsp;<input type="radio" name="9" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Egg Bhurji</td>
    <td width="75%"><input type="radio" name="10" value="1"/>
    *
    &nbsp;
    <input type="radio" name="10" value="2"/>
    **
    &nbsp;
    <input type="radio" name="10" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="10" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="10" value="5"/>
    *****
    &nbsp;<input type="radio" name="10" value="0" style="display:none" checked/></td>
  </tr>
</table>


<p><br/>
  <em>(b) Extras</em></p>
  <table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%"><p>Hot Milk</p></td>
    <td width="75%"><input type="radio" name="11" value="1"/>
    *
    &nbsp;
    <input type="radio" name="11" value="2"/>
    **
    &nbsp;
    <input type="radio" name="11" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="11" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="11" value="5"/>
    *****
    &nbsp;<input type="radio" name="11" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Cold Bournvita</td>
    <td width="75%"><input type="radio" name="12" value="1"/>
    *
    &nbsp;
    <input type="radio" name="12" value="2"/>
    **
    &nbsp;
    <input type="radio" name="12" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="12" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="12" value="5"/>
    *****
    &nbsp;<input type="radio" name="12" value="0" style="display:none" checked/></td>
  </tr>
</table>

<!--LUNCH START------------------------------------------------------------------------------------->
<p><br/>
    <br/>
  <em><br/>
  <strong>2. LUNCH</strong></em></p>
<p><em>(a) Dishes</em><br/>
</p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Rajma</td>
    <td width="75%"><input type="radio" name="13" value="1"/>
    *
    &nbsp;
    <input type="radio" name="13" value="2"/>
    **
    &nbsp;
    <input type="radio" name="13" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="13" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="13" value="5"/>
    *****
    &nbsp;<input type="radio" name="13" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Chhole-Bhature</td>
    <td width="75%"><input type="radio" name="14" value="1"/>
    *
    &nbsp;
    <input type="radio" name="14" value="2"/>
    **
    &nbsp;
    <input type="radio" name="14" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="14" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="14" value="5"/>
    *****
    &nbsp;<input type="radio" name="14" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Mutter Paneer</td>
    <td width="75%"><input type="radio" name="15" value="1"/>
    *
    &nbsp;
    <input type="radio" name="15" value="2"/>
    **
    &nbsp;
    <input type="radio" name="15" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="15" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="15" value="5"/>
    *****
    &nbsp;<input type="radio" name="15" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Kaala Chana</td>
    <td width="75%"><input type="radio" name="16" value="1"/>
    *
    &nbsp;
    <input type="radio" name="16" value="2"/>
    **
    &nbsp;
    <input type="radio" name="16" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="16" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="16" value="5"/>
    *****
    &nbsp;<input type="radio" name="16" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Aloo Jeera</td>
    <td width="75%"><input type="radio" name="17" value="1"/>
    *
    &nbsp;
    <input type="radio" name="17" value="2"/>
    **
    &nbsp;
    <input type="radio" name="17" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="17" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="17" value="5"/>
    *****
    &nbsp;<input type="radio" name="17" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Aloo Palak</td>
    <td width="75%"><input type="radio" name="18" value="1"/>
    *
    &nbsp;
    <input type="radio" name="18" value="2"/>
    **
    &nbsp;
    <input type="radio" name="18" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="18" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="18" value="5"/>
    *****
    &nbsp;<input type="radio" name="18" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Bhindi Fry</td>
    <td width="75%"><input type="radio" name="19" value="1"/>
    *
    &nbsp;
    <input type="radio" name="19" value="2"/>
    **
    &nbsp;
    <input type="radio" name="19" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="19" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="19" value="5"/>
    *****
    &nbsp;<input type="radio" name="19" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Pakoda Curry</td>
    <td width="75%"><input type="radio" name="20" value="1"/>
    *
    &nbsp;
    <input type="radio" name="20" value="2"/>
    **
    &nbsp;
    <input type="radio" name="20" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="20" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="20" value="5"/>
    *****
    &nbsp;<input type="radio" name="20" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Dal Palak</td>
    <td width="75%"><input type="radio" name="21" value="1"/>
    *
    &nbsp;
    <input type="radio" name="21" value="2"/>
    **
    &nbsp;
    <input type="radio" name="21" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="21" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="21" value="5"/>
    *****
    &nbsp;<input type="radio" name="21" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Jeera Rice</td>
    <td width="75%"><input type="radio" name="22" value="1"/>
    *
    &nbsp;
    <input type="radio" name="22" value="2"/>
    **
    &nbsp;
    <input type="radio" name="22" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="22" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="22" value="5"/>
    *****
    &nbsp;<input type="radio" name="22" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Akha Masoor</td>
    <td width="75%"><input type="radio" name="23" value="1"/>
    *
    &nbsp;
    <input type="radio" name="23" value="2"/>
    **
    &nbsp;
    <input type="radio" name="23" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="23" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="23" value="5"/>
    *****
    &nbsp;<input type="radio" name="23" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Plain Paratha</td>
    <td width="75%"><input type="radio" name="24" value="1" bgcolor="#FFFFFF"/>
    *
    &nbsp;
    <input type="radio" name="24" value="2"/>
    **
    &nbsp;
    <input type="radio" name="24" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="24" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="24" value="5"/>
    *****
    &nbsp;<input type="radio" name="24" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Methi Puri</td>
    <td width="75%"><input type="radio" name="25" value="1"/>
    *
    &nbsp;
    <input type="radio" name="25" value="2"/>
    **
    &nbsp;
    <input type="radio" name="25" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="25" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="25" value="5"/>
    *****
    &nbsp;<input type="radio" name="25" value="0" style="display:none" checked/></td>
  </tr>
</table>
<p><em>(b) Extras</em></p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Shrikhand</td>
    <td width="75%"><input type="radio" name="26" value="1"/>
    *
    &nbsp;
    <input type="radio" name="26" value="2"/>
    **
    &nbsp;
    <input type="radio" name="26" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="26" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="26" value="5"/>
    *****
    &nbsp;<input type="radio" name="26" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Lassi</td>
    <td width="75%"><input type="radio" name="27" value="1"/>
    *
    &nbsp;
    <input type="radio" name="27" value="2"/>
    **
    &nbsp;
    <input type="radio" name="27" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="27" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="27" value="5"/>
    *****
    &nbsp;<input type="radio" name="27" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Butter Milk</td>
    <td width="75%"><input type="radio" name="28" value="1"/>
    *
    &nbsp;
    <input type="radio" name="28" value="2"/>
    **
    &nbsp;
    <input type="radio" name="28" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="28" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="28" value="5"/>
    *****
    &nbsp;<input type="radio" name="28" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Watermelon Juice</td>
    <td width="75%"><input type="radio" name="29" value="1"/>
    *
    &nbsp;
    <input type="radio" name="29" value="2"/>
    **
    &nbsp;
    <input type="radio" name="29" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="29" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="29" value="5"/>
    *****
    &nbsp;<input type="radio" name="29" value="0" style="display:none" checked/></td>
  </tr>
</table>

<!--TIFFIN START---------------------------------------------------------------------------------------->
<p><strong><br/>
    <em>3. TIFFIN</em></strong><br/>
  </p>
<p><em>(a) Dishes</em><br/>
</p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Pav Bhaji</td>
    <td width="75%"><input type="radio" name="30" value="1"/>
    *
    &nbsp;
    <input type="radio" name="30" value="2"/>
    **
    &nbsp;
    <input type="radio" name="30" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="30" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="30" value="5"/>
    *****
    &nbsp;<input type="radio" name="30" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Potato & Onion Pakoda</td>
    <td width="75%"><input type="radio" name="31" value="1"/>
    *
    &nbsp;
    <input type="radio" name="31" value="2"/>
    **
    &nbsp;
    <input type="radio" name="31" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="31" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="31" value="5"/>
    *****
    &nbsp;<input type="radio" name="31" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Baingan & Gobhi Pakoda</td>
    <td width="75%"><input type="radio" name="32" value="1"/>
    *
    &nbsp;
    <input type="radio" name="32" value="2"/>
    **
    &nbsp;
    <input type="radio" name="32" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="32" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="32" value="5"/>
    *****
    &nbsp;<input type="radio" name="32" value="0" style="display:none" checked/></td>
  </tr>
</table>

<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Idli Sambhar</td>
    <td width="75%"><input type="radio" name="33" value="1"/>
    *
    &nbsp;
    <input type="radio" name="33" value="2"/>
    **
    &nbsp;
    <input type="radio" name="33" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="33" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="33" value="5"/>
    *****
    &nbsp;<input type="radio" name="33" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Masala Dosa</td>
    <td width="75%"><input type="radio" name="34" value="1"/>
    *
    &nbsp;
    <input type="radio" name="34" value="2"/>
    **
    &nbsp;
    <input type="radio" name="34" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="34" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="34" value="5"/>
    *****
    &nbsp;<input type="radio" name="34" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Bun Pattice</td>
    <td width="75%"><input type="radio" name="35" value="1"/>
    *
    &nbsp;
    <input type="radio" name="35" value="2"/>
    **
    &nbsp;
    <input type="radio" name="35" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="35" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="35" value="5"/>
    *****
    &nbsp;<input type="radio" name="35" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Cheese Burger</td>
    <td width="75%"><input type="radio" name="36" value="1"/>
    *
    &nbsp;
    <input type="radio" name="36" value="2"/>
    **
    &nbsp;
    <input type="radio" name="36" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="36" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="36" value="5"/>
    *****
    &nbsp;<input type="radio" name="36" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Samosa & Kachori</td>
    <td width="75%"><input type="radio" name="37" value="1"/>
    *
    &nbsp;
    <input type="radio" name="37" value="2"/>
    **
    &nbsp;
    <input type="radio" name="37" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="37" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="37" value="5"/>
    *****
    &nbsp;<input type="radio" name="37" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Pani Puri</td>
    <td width="75%"><input type="radio" name="38" value="1"/>
    *
    &nbsp;
    <input type="radio" name="38" value="2"/>
    **
    &nbsp;
    <input type="radio" name="38" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="38" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="38" value="5"/>
    *****
    &nbsp;<input type="radio" name="38" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Bhel Puri</td>
    <td width="75%"><input type="radio" name="39" value="1"/>
    *
    &nbsp;
    <input type="radio" name="39" value="2"/>
    **
    &nbsp;
    <input type="radio" name="39" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="39" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="39" value="5"/>
    *****
    &nbsp;<input type="radio" name="39" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Aloo Sandwich</td>
    <td width="75%"><input type="radio" name="40" value="1"/>
    *
    &nbsp;
    <input type="radio" name="40" value="2"/>
    **
    &nbsp;
    <input type="radio" name="40" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="40" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="40" value="5"/>
    *****
    &nbsp;<input type="radio" name="40" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Sabudana Khichadi/Wada</td>
    <td width="75%"><input type="radio" name="41" value="1"/>
    *
    &nbsp;
    <input type="radio" name="41" value="2"/>
    **
    &nbsp;
    <input type="radio" name="41" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="41" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="41" value="5"/>
    *****
    &nbsp;<input type="radio" name="41" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Vada Pav</td>
    <td width="75%"><input type="radio" name="42" value="1"/>
    *
    &nbsp;
    <input type="radio" name="42" value="2"/>
    **
    &nbsp;
    <input type="radio" name="42" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="42" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="42" value="5"/>
    *****
    &nbsp;<input type="radio" name="42" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Dahi Vada</td>
    <td width="75%"><input type="radio" name="43" value="1"/>
    *
    &nbsp;
    <input type="radio" name="43" value="2"/>
    **
    &nbsp;
    <input type="radio" name="43" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="43" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="43" value="5"/>
    *****
    &nbsp;<input type="radio" name="43" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Medu Vada</td>
    <td width="75%"><input type="radio" name="44" value="1"/>
    *
    &nbsp;
    <input type="radio" name="44" value="2"/>
    **
    &nbsp;
    <input type="radio" name="44" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="44" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="44" value="5"/>
    *****
    &nbsp;<input type="radio" name="44" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Fried Maggi&nbsp;</td>
    <td width="75%"><input type="radio" name="45" value="1"/>
    *
    &nbsp;
    <input type="radio" name="45" value="2"/>
    **
    &nbsp;
    <input type="radio" name="45" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="45" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="45" value="5"/>
    *****
    &nbsp;<input type="radio" name="45" value="0" style="display:none" checked/></td>
  </tr>
</table>
<p><em><strong><br/>
  </strong>(b) Extras</em> </p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Ice Tea</td>
    <td width="75%"><input type="radio" name="46" value="1"/>
    *
    &nbsp;
    <input type="radio" name="46" value="2"/>
    **
    &nbsp;
    <input type="radio" name="46" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="46" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="46" value="5"/>
    *****
    &nbsp;<input type="radio" name="46" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Cold Coffee</td>
    <td width="75%"><input type="radio" name="47" value="1"/>
    *
    &nbsp;
    <input type="radio" name="47" value="2"/>
    **
    &nbsp;
    <input type="radio" name="47" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="47" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="47" value="5"/>
    *****
    &nbsp;<input type="radio" name="47" value="0" style="display:none" checked/></td>
  </tr>
</table>

<!--DINNER START--------------------------------------------------------------------------------------------->
<p><em><strong>4. DINNER</strong></em></p>
<p><em>(a) Dishes</em></p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Lauki Chana Dal</td>
    <td width="75%"><input type="radio" name="48" value="1"/>
    *
    &nbsp;
    <input type="radio" name="48" value="2"/>
    **
    &nbsp;
    <input type="radio" name="48" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="48" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="48" value="5"/>
    *****
    &nbsp;<input type="radio" name="48" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Gaajar Mutter</td>
    <td width="75%"><input type="radio" name="49" value="1"/>
    *
    &nbsp;
    <input type="radio" name="49" value="2"/>
    **
    &nbsp;
    <input type="radio" name="49" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="49" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="49" value="5"/>
    *****
    &nbsp;<input type="radio" name="49" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Aloo Baingan</td>
    <td width="75%"><input type="radio" name="50" value="1"/>
    *
    &nbsp;
    <input type="radio" name="50" value="2"/>
    **
    &nbsp;
    <input type="radio" name="50" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="50" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="50" value="5"/>
    *****
    &nbsp;<input type="radio" name="50" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Mix Veg. Paneer</td>
    <td width="75%"><input type="radio" name="51" value="1"/>
    *
    &nbsp;
    <input type="radio" name="51" value="2"/>
    **
    &nbsp;
    <input type="radio" name="51" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="51" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="51" value="5"/>
    *****
    &nbsp;<input type="radio" name="51" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Chhole Puri</td>
    <td width="75%"><input type="radio" name="52" value="1"/>
    *
    &nbsp;
    <input type="radio" name="52" value="2"/>
    **
    &nbsp;
    <input type="radio" name="52" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="52" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="52" value="5"/>
    *****
    &nbsp;<input type="radio" name="52" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Dum Aloo</td>
    <td width="75%"><input type="radio" name="53" value="1"/>
    *
    &nbsp;
    <input type="radio" name="53" value="2"/>
    **
    &nbsp;
    <input type="radio" name="53" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="53" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="53" value="5"/>
    *****
    &nbsp;<input type="radio" name="53" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Aloo Gobi</td>
    <td width="75%"><input type="radio" name="54" value="1"/>
    *
    &nbsp;
    <input type="radio" name="54" value="2"/>
    **
    &nbsp;
    <input type="radio" name="54" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="54" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="54" value="5"/>
    *****
    &nbsp;<input type="radio" name="54" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Shahi Paneer</td>
    <td width="75%"><input type="radio" name="55" value="1"/>
    *
    &nbsp;
    <input type="radio" name="55" value="2"/>
    **
    &nbsp;
    <input type="radio" name="55" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="55" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="55" value="5"/>
    *****
    &nbsp;<input type="radio" name="55" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Dal Makhani</td>
    <td width="75%"><input type="radio" name="56" value="1"/>
    *
    &nbsp;
    <input type="radio" name="56" value="2"/>
    **
    &nbsp;
    <input type="radio" name="56" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="56" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="56" value="5"/>
    *****
    &nbsp;<input type="radio" name="56" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="25%">Khichdi</td>
    <td width="75%"><input type="radio" name="57" value="1"/>
    *
    &nbsp;
    <input type="radio" name="57" value="2"/>
    **
    &nbsp;
    <input type="radio" name="57" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="57" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="57" value="5"/>
    *****
    &nbsp;<input type="radio" name="57" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Lemon Rice</td>
    <td width="75%"><input type="radio" name="58" value="1"/>
    *
    &nbsp;
    <input type="radio" name="58" value="2"/>
    **
    &nbsp;
    <input type="radio" name="58" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="58" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="58" value="5"/>
    *****
    &nbsp;<input type="radio" name="58" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Imli Rice</td>
    <td width="75%"><input type="radio" name="59" value="1"/>
    *
    &nbsp;
    <input type="radio" name="59" value="2"/>
    **
    &nbsp;
    <input type="radio" name="59" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="59" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="59" value="5"/>
    *****
    &nbsp;<input type="radio" name="59" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Veg. Biryani</td>
    <td width="75%"><input type="radio" name="60" value="1"/>
    *
    &nbsp;
    <input type="radio" name="60" value="2"/>
    **
    &nbsp;
    <input type="radio" name="60" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="60" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="60" value="5"/>
    *****
    &nbsp;<input type="radio" name="60" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">NON VEG : Chicken Curry</td>
    <td width="75%"><input type="radio" name="61" value="1"/>
    *
    &nbsp;
    <input type="radio" name="61" value="2"/>
    **
    &nbsp;
    <input type="radio" name="61" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="61" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="61" value="5"/>
    *****
    &nbsp;<input type="radio" name="61" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">NON VEG : Chicken Biryani</td>
    <td width="75%"><input type="radio" name="62" value="1"/>
    *
    &nbsp;
    <input type="radio" name="62" value="2"/>
    **
    &nbsp;
    <input type="radio" name="62" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="62" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="62" value="5"/>
    *****
    &nbsp;<input type="radio" name="62" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">NON VEG : Chicken Fry</td>
    <td width="75%"><input type="radio" name="63" value="1"/>
    *
    &nbsp;
    <input type="radio" name="63" value="2"/>
    **
    &nbsp;
    <input type="radio" name="63" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="63" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="63" value="5"/>
    *****
    &nbsp;<input type="radio" name="63" value="0" style="display:none" checked/></td>
  </tr>
</table>
<p><em>(b) Extras</em></p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">SWEET : Rasgulla</td>
    <td width="75%"><input type="radio" name="64" value="1"/>
    *
    &nbsp;
    <input type="radio" name="64" value="2"/>
    **
    &nbsp;
    <input type="radio" name="64" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="64" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="64" value="5"/>
    *****
    &nbsp;<input type="radio" name="64" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">SWEET : Rasmalai</td>
    <td width="75%"><input type="radio" name="65" value="1"/>
    *
    &nbsp;
    <input type="radio" name="65" value="2"/>
    **
    &nbsp;
    <input type="radio" name="65" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="65" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="65" value="5"/>
    *****
    &nbsp;<input type="radio" name="65" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">SWEET : Son Papdi</td>
    <td width="75%"><input type="radio" name="66" value="1"/>
    *
    &nbsp;
    <input type="radio" name="66" value="2"/>
    **
    &nbsp;
    <input type="radio" name="66" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="66" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="66" value="5"/>
    *****
    &nbsp;<input type="radio" name="66" value="0" style="display:none" checked/></td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="25%">Fruit Salad</td>
    <td width="75%"><input type="radio" name="67" value="1"/>
    *
    &nbsp;
    <input type="radio" name="67" value="2"/>
    **
    &nbsp;
    <input type="radio" name="67" value="3"/>
    ***
    &nbsp;
    <input type="radio" name="67" value="4"/>
    ****
    &nbsp;
    <input type="radio" name="67" value="5"/>
    *****
    &nbsp;<input type="radio" name="67" value="0" style="display:none" checked/></td>
  </tr>
</table>
<p><br/>
  <br/>
  <input type="submit" name="submit" value="Done"/>
</p>
</form>
</body>
</html>