<h1>Заказать звонок</h1>
<p>Если Вы хотите, чтобы мы сами позвонили Вам, просто оставьте заявку:</p>

<link rel="stylesheet" type="text/css" href="/css/form.css">
<p>&nbsp;</p>
<center>
<div class="form-bg">
	<div class="form-top">
    	<div class="form-bottom">
        	<div class="form-header">Заказать звонок</div>


            <form method="post" action="/sender.php" onSubmit="return myValidForm(this,['fio','phone','theme']);">
            <input type="hidden" name="type" value="call">
           
             
            <p class="form-input"><span class="form-input-title">* Как Вас зовут:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="fio" style="width:400px;" maxlength="40" value="<? echo @$_POST["fio"];?>"></span></span></span></p>
            
    
            <p class="form-input"><span class="form-input-title">* Ваш телефон:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="phone" style="width:400px;" maxlength="10" value="<? echo @$_POST["phone"];?>"></span></span></span></p>
             
                      
            <p class="form-input"><span class="form-input-title">* Тематика обращения:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right">
             <select name="theme" style="width:400px" >
                <option value="">Выберите из списка</option>
                <option value="Регистрация фирм" <? if(@$_POST["theme"]=="Регистрация фирм") echo "selected";?>>Регистрация фирм</option>
                <option value="Юридические услуги фирмам" <? if(@$_POST["theme"]=="Ликвидация фирм") echo "selected";?>>Ликвидация фирм</option>
                
                <option value="Другое" <? if(@$_POST["theme"]=="Другое") echo "selected";?>>Другое</option>

            </select>
            
            </span></span></span></p>
            
            <p>&nbsp;</p>
            <p style="text-align:left"><input  type="submit" name="submit" value="" class="button"></p>
            </form> 

        </div>
    </div>
</div>
</center>



