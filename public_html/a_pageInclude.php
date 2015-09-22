<div style="background:#82d6fa; height:20px;"></div>
<table class="bookmarkContainer" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td class="bookmark <? if($page->src=="/head.php") echo "selected"?>"><p><a href="/">Главная</a></p></td>
	<td class="bookmark <? if($page->src=="/p_service.php") echo "selected"?>"><p><a href="/service">Услуги</a></p></td>
	<td class="bookmark <? if($page->src=="/p_price.php") echo "selected"?>"><p><a href="/price">Цены</a></p></td>
	<td class="bookmark <? if($page->src=="/p_info.php") echo "selected"?>"><p><a href="/info">Полезная информация</a></p></td>
	<?php /* <td class="bookmark <? if($page->src=="/p_actions.php") echo "selected"?>"><p><a href="/actions"><small>Акции и скидки</small></a></p></td> */?>
	<td class="bookmark <? if($page->src=="/p_contacts.php") echo "selected"?>"><p><a href="/contacts">Контакты</a></p></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
<div class="pageArea">
	<div class="pageArea2">
		<? $page->Attach();?>
    </div>
</div>
