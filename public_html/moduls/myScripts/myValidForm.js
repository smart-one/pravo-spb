// JavaScript Document
// ������� �������� �������� ����� �� �������
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////// �����������: ������ �������

function myValidForm(formObj,fieldsArr)
{
	for(i=0;i<formObj.elements.length;i++)
	{
		for(j=0;j<fieldsArr.length;j++)
		{
			var reg = /^[\s]*$/
			if(formObj.elements[i].name==fieldsArr[j] && ( formObj.elements[i].value=="" || reg.test(formObj.elements[i].value)))
			{
				//formObj.elements[i].style.border="1px solid red";
				
				formObj.elements[i].focus();
				alert("�� ��������� ������������ ����");
				return false;
			}
		}
	}
	return true;
}