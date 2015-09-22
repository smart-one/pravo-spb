// JavaScript Document

var regfirmform = document.getElementById('regfirmform');

function submitForm()
{
	var access =  myValidForm(regfirmform,['fname','ifns_phonenumber','email','fio','phone','deyatelnost']);
	if(access) 
	{
		regfirmform.action = "/sender.php";
		regfirmform.submit();
	}
}


function addUch()
{
	regfirmform.action = "/adduch";
	regfirmform.submit();
}