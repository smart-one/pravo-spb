<?php foreach($_POST as $key=>$value){ $_POST[$key] = htmlspecialchars(stripslashes($value)); }?>

<p>&nbsp;</p>
<div class="form-bg center-block">
	<div class="form-top">
  	<div class="form-bottom">
      	<div class="form-header">Онлайн заявка на регистрацию фирмы</div>
        <form id="regfirmform" method="post" action="/sender.php" >
          <input type="hidden" name="type" value="regFirm">
          <input type="hidden" name="u4index" value="<? echo isset($_POST["u4index"])? $_POST["u4index"]:0;?>">
         
          <p class="form-input">
            <span class="form-input-title">Организационно-правовая форма:</span>
            <br>
            <input type="radio" name="ftype" value="OOO" <? if(!isset($_POST["ftype"]) or $_POST["ftype"]=="OOO") echo "checked";?>> - ООО
            <br>
           <input type="radio" name="ftype" value="ЗАО" <? if(isset($_POST["ftype"]) && $_POST["ftype"]=="ЗАО") echo "checked";?>> - ЗАО
           <br>
           <input type="radio" name="ftype" value="ОАО" <? if(isset($_POST["ftype"]) && $_POST["ftype"]=="ОАО") echo "checked";?>> - ОАО
           <br>
           <input type="radio" name="ftype" value="Индивидуальный предприниматель" <? if(isset($_POST["ftype"]) && $_POST["ftype"]=="Индивидуальный предприниматель") echo "checked";?>> - Индивидуальный предприниматель
          </p>
          
         
          <p class="form-input">
            <span class="form-input-title">* Наименование на русском языке:</span>
            <br>
            <span class="f-body">
              <span class="f-left">
                <span class="f-right">
                  <input type="text" name="fname" style="width:400px;" maxlength="40" value="<? echo @$_POST["fname"];?>">
                </span>
              </span>
            </span>
          </p>
         
          <p class="form-input">
            <span class="form-input-title"> Наименование на английском языке(если требуется):</span>
            <br>
            <span class="f-body">
              <span class="f-left">
                <span class="f-right">
                  <input type="text" name="fenglishname" style="width:400px;" maxlength="40" value="<? echo @$_POST["fenglishname"];?>">
                </span>
              </span>
            </span>
            <br>
          </p>
         
          <p class="form-input">
            <span class="form-input-title">* Номер телефона для ИФНС:</span>
            <br>
            <span class="f-body">
              <span class="f-left">
                <span class="f-right">
                  <input type="text" name="ifns_phonenumber" style="width:400px;" maxlength="40" value="<? echo @$_POST["ifns_phonenumber"];?>">
                </span>
              </span>
            </span>
          </p>
         
          <p class="form-input">
            <span class="form-input-title">* Юридический адрес:</span>
            <br>
            <input type="radio" name="ur_adress_type" value="есть" <? if(!isset($_POST["ur_adress_type"]) or $_POST["ur_adress_type"]=="есть") echo "checked";?>> есть(указать точный адрес):
            <span class="f-body">
              <span class="f-left">
                <span class="f-right">
                  <input type="text" name="ur_adress" style="width:400px;" maxlength="100" value="<? echo @$_POST["ur_adress"];?>">
                </span>
              </span>
            </span>
          
            <br>
            <input type="radio" name="ur_adress_type" value="желаю приобрести" <? if(isset($_POST["ur_adress_type"]) && $_POST["ur_adress_type"]=="желаю приобрести") echo "checked";?>> желаю приобрести(желаемый район):
            <span class="f-body">
              <span class="f-left">
                <span class="f-right">
                  <input type="text" name="ur_adress_area" style="width:400px;" maxlength="100" value="<? echo @$_POST["ur_adress_area"];?>">
                </span>
              </span>
            </span>
          </p>

          <div id="ur_adress_form" style="display:none"></div>
             
          <p class="form-input">
            <span class="form-input-title">Система налогообложения:</span>
            <br>
            <input type="radio" name="nalog_system" value="Обычная" <? if(!isset($_POST["nalog_system"]) or $_POST["nalog_system"]=="Обычная") echo "checked";?>> Обычная
            <br>
            <input type="radio" name="nalog_system" value="УСН 6%" <? if(isset($_POST["nalog_system"]) && $_POST["nalog_system"]=="УСН 6%") echo "checked";?>> УСН 6%
            <br>
            <input type="radio" name="nalog_system" value="УСН 15%" <? if(isset($_POST["nalog_system"]) && $_POST["nalog_system"]=="УСН 15%") echo "checked";?>> УСН 15%
            <br>
            <input type="radio" name="nalog_system" value="Не знаю(требуется консультация)" <? if(isset($_POST["nalog_system"]) && $_POST["nalog_system"]=="Не знаю(требуется консультация)") echo "checked";?>> Не знаю(требуется консультация)
            <br>
          </p>
         
          <p class="form-input">
            <span class="form-input-title">* Учредители:</span>
            <br>
            <?php if(isset($_POST["u4index"]) && $_POST["u4index"]): ?>
              <ol style="text-align:left">
                <?php for($i=1; $i <= $_POST["u4index"]; $i++): ?>
         	      <li><? echo $_POST["u4_name_".$i];?></li>
                <input type="hidden" name="u4_name_<? echo $i;?>" value="<? echo $_POST["u4_name_".$i];?>">
                <input type="hidden" name="u4_dola_<? echo $i;?>" value="<? echo $_POST["u4_dola_".$i];?>">
                <input type="hidden" name="u4_phone_<? echo $i;?>" value="<? echo $_POST["u4_phone_".$i];?>">
                <input type="hidden" name="u4_passportserie_<? echo $i;?>" value="<? echo $_POST["u4_passportserie_".$i];?>">
                <input type="hidden" name="u4_passportnumber_<? echo $i;?>" value="<? echo $_POST["u4_passportnumber_".$i];?>">
                <input type="hidden" name="u4_passport_vidan_<? echo $i;?>" value="<? echo $_POST["u4_passport_vidan_".$i];?>">
                <input type="hidden" name="u4_passport_date_<? echo $i;?>" value="<? echo $_POST["u4_passport_date_".$i];?>">
                <input type="hidden" name="u4_passport_code_<? echo $i;?>" value="<? echo $_POST["u4_passport_code_".$i];?>">
                <input type="hidden" name="u4_burndate_<? echo $i;?>" value="<? echo $_POST["u4_burndate_".$i];?>">
                <input type="hidden" name="u4_burnplace_<? echo $i;?>" value="<? echo $_POST["u4_burnplace_".$i];?>">
                <input type="hidden" name="u4_adres_index_<? echo $i;?>" value="<? echo $_POST["u4_adres_index_".$i];?>">
                <input type="hidden" name="u4_adres_city_<? echo $i;?>" value="<? echo $_POST["u4_adres_city_".$i];?>">
                <input type="hidden" name="u4_adres_street_<? echo $i;?>" value="<? echo $_POST["u4_adres_street_".$i];?>">
                <input type="hidden" name="u4_adres_home_<? echo $i;?>" value="<? echo $_POST["u4_adres_home_".$i];?>">
                <input type="hidden" name="u4_adres_corp_<? echo $i;?>" value="<? echo $_POST["u4_adres_corp_".$i];?>">
                <input type="hidden" name="u4_adres_flat_<? echo $i;?>" value="<? echo $_POST["u4_adres_flat_".$i];?>">
                <?php endfor; ?>
              </ol>
            <?php endif; ?>
            <input type="submit" value="" name="add_u4" style=" border:0px; cursor:pointer;background:url(/pictures/form/button01.jpg) no-repeat; width:274px; height:22px;" onClick="addUch();return false;">
          </p>
         
          <p class="form-input">
            <span class="form-input-title">* Генеральный директор:</span>
            <br>
            <input type="radio" name="gen_director_type" value="Выберу из учредителей" <? if(!isset($_POST["gen_director_type"]) or $_POST["gen_director_type"]=="Выберу из учредителей") echo "checked";?> onClick="document.getElementById('gd_select_list').style.display='inline-block';document.getElementById('gd_new_person').style.display='none';"> Выберу из учредителей
            <br>
            <input type="radio" name="gen_director_type" value="Новое лицо" onClick="document.getElementById('gd_select_list').style.display='none';document.getElementById('gd_new_person').style.display='block';" <? if(isset($_POST["gen_director_type"]) && $_POST["gen_director_type"]=="Новое лицо") echo "checked";?>> Новое лицо
            <br>
            <span id="gd_select_list" style="display:<? echo $_POST["gen_director_type"]=="Новое лицо"? "none":"inline-block";?>;">
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <select name="gen_director" style="width:200px;">
                      <?php for($i=1;$i<=$_POST["u4index"];$i++):?>
                        <option value="<? echo $_POST["u4_name_".$i];?>"><? echo $_POST["u4_name_".$i];?></option>
                      <?php endfor;?>
                    </select>
                  </span>
                </span>
              </span>
            </span>
          </p>
                      
		      <div id="gd_new_person" style="display:<? echo $_POST["gen_director_type"]!="Новое лицо"? "none":"block";?>">
            <p class="form-input">* ФИО:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_name" style="width:400px;" maxlength="40" value="<? echo @$_POST["gd_name"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input">Доля в уставном капитале, %:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_dola" style="width:400px;" maxlength="40" value="<? echo @$_POST["gd_dola"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input">Телефон:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_phone" style="width:400px;" maxlength="40" value="<? echo @$_POST["gd_phone"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input" style="float:left; width:150px">Серия паспорта:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_passportserie" style="width:120px;" maxlength="10" value="<? echo @$_POST["gd_passportserie"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Номер паспорта:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_passportnumber" style="width:120px;" maxlength="10" value="<? echo @$_POST["gd_passportnumber"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input" style="clear:both">Кем выдан (полностью, как в паспорте):<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_passport_vidan" style="width:400px;" maxlength="40" value="<? echo @$_POST["gd_passport_vidan"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Когда выдан:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_passport_date" style="width:120px;" maxlength="40" value="<? echo @$_POST["gd_passport_date"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Код подразделения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_passport_code" style="width:120px;" maxlength="40" value="<? echo @$_POST["gd_passport_code"];?>"></span></span></span>
            </p>

            <p class="form-input" style="clear:left; float:left; width:150px;">Дата рождения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_burndate" style="width:120px;" maxlength="40" value="<? echo @$_POST["gd_burndate"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Место рождения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_burnplace" style="width:120px;" maxlength="40" value="<? echo @$_POST["gd_burnplace"];?>"></span></span></span>
            </p>

            <p style="clear:left;">&nbsp;</p>
            <p class="form-input">Адрес прописки или регистрации:<br> </p>

            <p class="form-input" style="float:left;width:150px"> Индекс:
              <br>
		          <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="gd_adres_index" style="width:120px;" maxlength="10" value="<? echo @$_POST["gd_adres_index"];?>">
                  </span>
                </span>
              </span>
            </p>
          
            <p class="form-input" style="float:left;width:250px">Город:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_adres_city" style="width:200px;" maxlength="40" value="<? echo @$_POST["gd_adres_city"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="clear:left;">Улица:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_adres_street" style="width:400px;" maxlength="40" value="<? echo @$_POST["gd_adres_street"];?>"></span></span></span>
            </p>
          
            <p class="form-input"  style="float:left;width:100px">Дом:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_adres_home" style="width:80px;" maxlength="10" value="<? echo @$_POST["gd_adres_home"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="float:left;width:100px">Корпус:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_adres_corp" style="width:80px;" maxlength="10" value="<? echo @$_POST["gd_adres_corp"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="float:left;width:100px">Квартира:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="gd_adres_flat" style="width:80px;" maxlength="10" value="<? echo @$_POST["gd_adres_flat"];?>"></span></span></span>
            </p>
            <p style="clear:both">&nbsp;</p>   
          </div>  
         
         
         
         
          <p class="form-input">
            <span class="form-input-title">* Главный бухгалтер:</span>
            <br>
            <input type="radio" name="glavbuh_type" value="Выберу из учредителей" <? if(!isset($_POST["glavbuh_type"]) or $_POST["glavbuh_type"]=="Выберу из учредителей") echo "checked";?> onClick="document.getElementById('glbuh_select_list').style.display='inline-block';document.getElementById('glbuh_new_person').style.display='none';"> Выберу из учредителей
            <br>
            <input type="radio" name="glavbuh_type" value="Новое лицо" <? if(isset($_POST["glavbuh_type"]) && $_POST["glavbuh_type"]=="Новое лицо") echo "checked";?> onClick="document.getElementById('glbuh_select_list').style.display='none';document.getElementById('glbuh_new_person').style.display='block';"> Новое лицо
            <br>

		        <span id="glbuh_select_list" style="display:<? echo $_POST["glavbuh_type"]=="Новое лицо"? "none":"inline-block";?>;">
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <select name="glavbuh" style="width:200px;">
                      <?php for($i=1;$i<=$_POST["u4index"];$i++): ?>
         	              <option value="<? echo $_POST["u4_name_".$i];?>"><? echo $_POST["u4_name_".$i];?></option>
                      <?php endfor; ?>
                    </select>
                  </span>
                </span>
              </span>
		        </span>
          </p>
                      
		      <div id="glbuh_new_person" style="display:<? echo $_POST["glavbuh_type"]!="Новое лицо"? "none":"block";?>;">
            <p class="form-input">* ФИО:
              <br>
              <span class="f-body">
                <span class="f-left">
                  <span class="f-right">
                    <input type="text" name="glbuh_name" style="width:400px;" maxlength="40" value="<? echo @$_POST["glbuh_name"];?>">
                  </span>
                </span>
              </span>
            </p>

            <p class="form-input">Доля в уставном капитале, %:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_dola" style="width:400px;" maxlength="40" value="<? echo @$_POST["glbuh_dola"];?>"></span></span></span>
            </p>

            <p class="form-input">Телефон:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_phone" style="width:400px;" maxlength="40" value="<? echo @$_POST["glbuh_phone"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px">Серия паспорта:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_passportserie" style="width:120px;" maxlength="10" value="<? echo @$_POST["glbuh_passportserie"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Номер паспорта:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_passportnumber" style="width:120px;" maxlength="10" value="<? echo @$_POST["glbuh_passportnumber"];?>"></span></span></span>
            </p>

            <p class="form-input" style="clear:both">Кем выдан (полностью, как в паспорте):<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_passport_vidan" style="width:400px;" maxlength="40" value="<? echo @$_POST["glbuh_passport_vidan"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Когда выдан:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_passport_date" style="width:120px;" maxlength="40" value="<? echo @$_POST["glbuh_passport_date"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Код подразделения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_passport_code" style="width:120px;" maxlength="40" value="<? echo @$_POST["glbuh_passport_code"];?>"></span></span></span>
            </p>

            <p class="form-input" style="clear:left; float:left; width:150px;">Дата рождения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_burndate" style="width:120px;" maxlength="40" value="<? echo @$_POST["glbuh_burndate"];?>"></span></span></span>
            </p>

            <p class="form-input" style="float:left; width:150px;">Место рождения:<br>
              <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_burnplace" style="width:120px;" maxlength="40" value="<? echo @$_POST["glbuh_burnplace"];?>"></span></span></span>
            </p>

            <p style="clear:left;">&nbsp;</p>
            <p class="form-input">Адрес прописки или регистрации:<br> </p>
            <p class="form-input" style="float:left;width:150px"> Индекс:
              <br>
		          <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_index" style="width:120px;" maxlength="10" value="<? echo @$_POST["glbuh_adres_index"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="float:left;width:250px">Город:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_city" style="width:200px;" maxlength="40" value="<? echo @$_POST["glbuh_adres_city"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="clear:left;">Улица:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_street" style="width:400px;" maxlength="40" value="<? echo @$_POST["glbuh_adres_street"];?>"></span></span></span>
            </p>
          
            <p class="form-input"  style="float:left;width:100px">Дом:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_home" style="width:80px;" maxlength="10" value="<? echo @$_POST["glbuh_adres_home"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="float:left;width:100px">Корпус:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_corp" style="width:80px;" maxlength="10" value="<? echo @$_POST["glbuh_adres_corp"];?>"></span></span></span>
            </p>
          
            <p class="form-input" style="float:left;width:100px">Квартира:<br>
		           <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="glbuh_adres_flat" style="width:80px;" maxlength="10" value="<? echo @$_POST["glbuh_adres_flat"];?>"></span></span></span>
            </p>
            <p style="clear:both">&nbsp;</p>   
          </div>            
         
          <p class="form-input"><span class="form-input-title">* Планируемая деятельность:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="deyatelnost" style="width:400px;" maxlength="400" value="<? echo @$_POST["deyatelnost"];?>"></span></span></span>
          </p>
         
          <p class="form-input"><span class="form-input-title">Заказать Печать:</span><br>
            <input type="radio" name="pe4at" value="Простая(в подарок)" <? if(@$_POST["pe4at"]=="Простая(в подарок)") echo "checked";?>> Простая(в подарок)<br>
            <input type="radio" name="pe4at" value="Автомат" <? if(@$_POST["pe4at"]=="Автомат") echo "checked";?>> Автомат<br>
            <input type="radio" name="pe4at" value="Компакт-автомат" <? if(@$_POST["pe4at"]=="Компакт-автомат") echo "checked";?>> Компакт-автомат<br>
            <input type="radio" name="pe4at" value="Не требуется" <? if(@$_POST["pe4at"]=="Не требуется") echo "checked";?>> Не требуется
          </p>
         
          <p class="form-input"><span class="form-input-title">Из каких источников узнали о нас?</span><br>
             <input type="radio" name="isto4nik" value="Интернет" <? if(@$_POST["isto4nik"]=="Интернет") echo "checked";?>> Интернет<br>
             <input type="radio" name="isto4nik" value="Флаеры" <? if(@$_POST["isto4nik"]=="Флаеры") echo "checked";?>> Флаеры<br>
             <input type="radio" name="isto4nik" value="По рекомендации" <? if(@$_POST["isto4nik"]=="По рекомендации") echo "checked";?>> По рекомендации<br>
             <input type="radio" name="isto4nik" value="Иное" <? if(@$_POST["isto4nik"]=="Иное") echo "checked";?>> Иное
          </p>
           
          <p class="form-input"><span class="form-input-title">Комментарий:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="comment" style="width:400px;" maxlength="400" value="<? echo @$_POST["comment"];?>"></span></span></span>
          </p>
         
          <p class="form-input"><span class="form-input-title">* Ваш e-mail:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="email" style="width:400px;" maxlength="40" value="<? echo @$_POST["email"];?>"></span></span></span>
          </p>
         
          <p class="form-input"><span class="form-input-title">* Ваш телефон:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="phone" style="width:400px;" maxlength="40" value="<? echo @$_POST["phone"];?>"></span></span></span>
          </p>
         
          <p>&nbsp;</p>
          <p style="text-align:left">
            <input  type="submit" name="submit" value="" class="button" onClick="submitForm(); return false;">
          </p>
        </form> 
    </div>
  </div>
</div>
<p>&nbsp;</p>
<script type="text/javascript" src="/Scripts/regfirm.js"></script>