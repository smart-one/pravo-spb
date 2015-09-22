<? if(@$_POST["type"]!="regFirm") goto("/regfirm");?>

<link rel="stylesheet" type="text/css" href="/css/form.css">

<p>&nbsp;</p>
<center>
<div class="form-bg">
	<div class="form-top">
    	<div class="form-bottom">
        	<div class="form-header">Добавить физическое лицо как учредителя</div>
            
<? 
	$u4index = $_POST["u4index"] = ($_POST["u4index"]>0)? ($_POST["u4index"]+1) : 1;
	?>
<form action="/regfirm" method="post" onSubmit="return myValidForm(this,['u4_name_<? echo $u4index;?>']);">
<? 
	foreach($_POST as $key=>$value)
	{
	?>
    	<input type="hidden" name="<? echo $key;?>" value="<? echo htmlspecialchars(stripslashes($value));?>">
    <?
	}
?>

	 <p class="form-input"><span class="form-input-title">* ФИО:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_name_<? echo $u4index;?>" style="width:400px;" maxlength="40"></span></span></span></p>

 <p class="form-input"><span class="form-input-title">Доля в уставном капитале, %:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_dola_<? echo $u4index;?>" style="width:400px;" maxlength="40"></span></span></span></p>

 <p class="form-input"><span class="form-input-title">Телефон:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_phone_<? echo $u4index;?>" style="width:400px;" maxlength="40"></span></span></span></p>

 <p class="form-input" style="float:left; width:150px"><span class="form-input-title">Серия паспорта:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_passportserie_<? echo $u4index;?>" style="width:120px;" maxlength="10"></span></span></span></p>

 <p class="form-input" style="float:left; width:150px;"><span class="form-input-title">Номер паспорта:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_passportnumber_<? echo $u4index;?>" style="width:120px;" maxlength="10"></span></span></span></p>

 <p class="form-input" style="clear:both"><span class="form-input-title">Кем выдан (полностью, как в паспорте):</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_passport_vidan_<? echo $u4index;?>" style="width:400px;" maxlength="40"></span></span></span></p>

 <p class="form-input" style="float:left; width:150px;"><span class="form-input-title">Когда выдан:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_passport_date_<? echo $u4index;?>" style="width:120px;" maxlength="40"></span></span></span></p>

 <p class="form-input" style="float:left; width:150px;"><span class="form-input-title">Код подразделения:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_passport_code_<? echo $u4index;?>" style="width:120px;" maxlength="40"></span></span></span></p>

 <p class="form-input" style="clear:left; float:left; width:150px;"><span class="form-input-title">Дата рождения:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_burndate_<? echo $u4index;?>" style="width:120px;" maxlength="40"></span></span></span></p>

 <p class="form-input" style="float:left; width:150px;"><span class="form-input-title">Место рождения:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_burnplace_<? echo $u4index;?>" style="width:120px;" maxlength="40"></span></span></span></p>


<p style="clear:left;">&nbsp;</p>
 <p class="form-input"><span class="form-input-title"><big>Адрес прописки или регистрации:</big></span><br> </p>
<p class="form-input" style="float:left;width:150px"> Индекс:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_index_<? echo $u4index;?>" style="width:120px;" maxlength="10"></span></span></span></p>
            
<p class="form-input" style="float:left;width:250px">Город:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_city_<? echo $u4index;?>" style="width:200px;" maxlength="40"></span></span></span></p>
            
<p class="form-input" style="clear:left;">Улица:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_street_<? echo $u4index;?>" style="width:400px;" maxlength="40"></span></span></span></p>
            
<p class="form-input"  style="float:left;width:100px">Дом:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_home_<? echo $u4index;?>" style="width:80px;" maxlength="10"></span></span></span></p>
            
<p class="form-input" style="float:left;width:100px">Корпус:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_corp_<? echo $u4index;?>" style="width:80px;" maxlength="10"></span></span></span></p>
            
<p class="form-input" style="float:left;width:100px">Квартира:<br>
			<span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="u4_adres_flat_<? echo $u4index;?>" style="width:80px;" maxlength="10"></span></span></span></p>
   <p style="clear:both">&nbsp;</p>         
            
           

<p style="text-align:left"><input  type="submit" name="submit" value="" class="button"></p>

</form>

		</div>
    </div>
</div>
</center>
<p>&nbsp;</p>