<div style="background:#82d6fa; height:20px;"></div>
<table class="bookmarkContainer" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td class="bookmark <? if($page->src=="/head.php") echo "selected"?>"><p><a href="/">�������</a></p></td>
	<td class="bookmark <? if($page->src=="/p_service.php") echo "selected"?>"><p><a href="/service">������</a></p></td>
	<td class="bookmark <? if($page->src=="/p_price.php") echo "selected"?>"><p><a href="/price">����</a></p></td>
	<td class="bookmark <? if($page->src=="/p_info.php") echo "selected"?>"><p><a href="/info">�������� ����������</a></p></td>
	<?php /* <td class="bookmark <? if($page->src=="/p_actions.php") echo "selected"?>"><p><a href="/actions"><small>����� � ������</small></a></p></td> */?>
	<td class="bookmark <? if($page->src=="/p_contacts.php") echo "selected"?>"><p><a href="/contacts">��������</a></p></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
<div class="pageArea">
	<div class="pageArea2">
		<? $page->Attach();?>
    </div>
</div>
