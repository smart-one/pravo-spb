<div style="background:#82d6fa; height:20px;"></div>

<table class="bookmarkContainer">
	<tr>
		<td class="bookmark <? if($page->src=="/head.php") echo "selected"?>">
			<p><a href="/">Главная</a></p>
		</td>
		<td class="bookmark <? if($page->src=="/p_service.php") echo "selected"?>">
			<p><a href="/service">Услуги</a></p>
		</td>
		<td class="bookmark <? if($page->src=="/p_price.php") echo "selected"?>">
			<p><a href="/price">Цены</a></p>
		</td>
		<td class="bookmark <? if($page->src=="/p_info.php") echo "selected"?>">
			<p><a href="/info">Полезная информация</a></p>
		</td>
		<td class="bookmark <? if($page->src=="/p_contacts.php") echo "selected"?>">
			<p><a href="/contacts">Контакты</a></p>
		</td>
	  <td>&nbsp;&nbsp;&nbsp;</td>
	</tr>
</table>

<div class="pageArea">
	<div class="pageArea2">
		<?= breadcrumbs($page); ?>
		<? $page->Attach();?>
  </div>
</div>
