<link rel="stylesheet" type="text/css" href="/css/form.css">

<p>&nbsp;</p>
<center>
<div class="form-bg">
	<div class="form-top">
    	<div class="form-bottom">
        	<div class="form-header">������ ������</div>


            <form method="post" action="/sender.php" onSubmit="return myValidForm(this,['email','fio','phone','info']);">
            <input type="hidden" name="type" value="question">
           
             
            <p class="form-input"><span class="form-input-title">* ��� �����:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="fio" style="width:400px;" maxlength="40"></span></span></span></p>
            
            <p class="form-input"><span class="form-input-title">* ��� ���������� e-mail</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="email" style="width:400px;" maxlength="30"></span></span></span></p>
            
              
            <p class="form-input"><span class="form-input-title">* ��� ���������� �������:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="phone" style="width:400px;" maxlength="10"></span></span></span></p>
             
                      
            <p class="form-input"><span class="form-input-title">* ��� ������:</span><br>
            <span class="f-body"><span class="f-left"><span class="f-right"><input type="text" name="info" style="width:400px;"
             ></span></span></span></p>
            
            <p>&nbsp;</p>
            <p style="text-align:left"><input  type="submit" name="submit" value="" class="button"></p>
            </form> 

        </div>
    </div>
</div>
</center>



