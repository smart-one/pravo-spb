<?	


	include $_SERVER['DOCUMENT_ROOT']."/configs/config.php";
	$page = new myPage("");
	$page->createFileIfNotExist = 0;
	//$page->startUpText= "<div class=\"text\">\n\n\n</div>";
	
//	public function setAttributsByPageName($pageSrc,$name,$title,$metas) - записывает атрибуты страницы
//	опции:
//		public $createFileIfNotExist = 0; 	{ 1-создать, 0 - не создавать}
// 		public $startUpText = "Новая страница";
	
//	examples:
//	$page->setAttributsByPageName("/head.php","Главная","Юридическая Компания \"Центр Правовых Услуг\" Санкт-Петербург.","");
	$page->setAttributsByPageName("/p_ur/p_30.php","Ликвидация фирм с долгами в Санкт-Петербурге","Ликвидация фирм с долгами в Санкт-Петербурге","");
//	$page->setAttributsByPageName("/p_news.php","Новости","Новости Центра правовых услуг","");
//	$page->setAttributsByPageName("/p_urPrices.php","Цены","Цены для юридических лиц","");
//	$page->setAttributsByPageName("/p_fizPrices.php","Цены","Цены для физических лиц","");

/* 	$page->setAttributsByPageName("/p_contacts.php","Контакты Центр правовых услуг Санкт-Петербург","Контакты Центр правовых услуг Санкт-Петербург",'<meta name="description" content="Контаткы Центра Правовых Услуг в Санкт-Петербурге">');
	
	$page->setAttributsByPageName("/p_question.php","Задать вопрос","Задать вопрос специалисту Центр правовых услуг",'<script src=\"/moduls/myScripts/myValidForm.js\"><\/script><meta name="description" content="через форму на сайте можно задать вопрос юристу онлайн">');
 */




/* 	$page->setAttributsByPageName(
		"/p_ur/p_11.php",
		"Регистрация ООО Санкт-Петербург. Цены и сроки",
		"Регистрация ООО Санкт-Петербург. Цены и сроки",
		'<meta name="description" content="Лучшая в городе цена, регистрация за 1 посещение.Через 5-7 рабочих дней, Вы получаете на руки весь пакет документов, необходимый для начала Вашей коммерческой деятельности.">
		<meta name="keywords" content="Регистрация ООО Санкт-Петербург. Цены и сроки">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_11_2.php",
		"Регистрация ОАО, ЗАО Санкт-Петербург. Цены и сроки
",
		"Регистрация ОАО, ЗАО Санкт-Петербург. Цены и сроки
",
		'<meta name="description" content="Обратившись к нам, Вы сможете зарегистрировать ОАО и ЗАО в кратчайшие сроки по хорошей цене
">
		<meta name="keywords" content="Регистрация ОАО, ЗАО Санкт-Петербург. Цены и сроки
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_11_3.php",
		"Регистрация некоммерческих организаций в Санкт-Петербурге. Цены и сроки
",
		"Регистрация некоммерческих организаций в Санкт-Петербурге. Цены и сроки
",
		'<meta name="description" content="Мы помогаем в регистрации некоммерческих организаций в Санкт-Петербурге- делаем это быстро и недорого.
">
		<meta name="keywords" content="Регистрация некоммерческих организаций в Санкт-Петербурге. Цены и сроки
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_11_4.php",
		"Регистрация индивидуального предпринимателя(ИП) в Санкт-Петербурге. Цены и сроки
",
		"Регистрация индивидуального предпринимателя(ИП) в Санкт-Петербурге. Цены и сроки
",
		'<meta name="description" content="Быстро и недорого зарегистрировать ИП в Петербурге Вы сможете через наш Центр Правовых услуг.
">
		<meta name="keywords" content="Регистрация индивидуального предпринимателя(ИП) в Санкт-Петербурге. Цены и сроки
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_11_5.php",
		"Регистрация филиала (представительства) в Санкт-Петербуре. Цены и сроки
",
		"Регистрация филиала (представительства) в Санкт-Петербуре. Цены и сроки
",
		'<meta name="description" content="Необходимо открыть филиал в Санкт-Петербурге- регистрация подразделения быстро и без проблем в Центре правовых услуг
">
		<meta name="keywords" content="Регистрация филиала (представительства) в Санкт-Петербуре. Цены и сроки
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_11_6.php",
		"Перерегистрация ООО в Санкт-Петербурге. Цены и сроки.
",
		"Перерегистрация ООО в Санкт-Петербурге. Цены и сроки.
",
		'<meta name="description" content="Вам нужно перерегистрировать компанию - обращайтесь к нашим юристам. Профессиональные юридические услуги для бинеса.
">
		<meta name="keywords" content="Перерегистрация ООО в Санкт-Петербурге. Цены и сроки.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_12.php",
		"Внесение изменений в Устав и учредительные документы ООО,ОАО. Цены и сроки.
",
		"Внесение изменений в Устав и учредительные документы ООО,ОАО. Цены и сроки.
",
		'<meta name="description" content="Чтобы внести изменения в Устав предприятия - просто позвоните нам и юристы центра подготовят документы и сделают все за Вас.
">
		<meta name="keywords" content="Внесение изменений в Устав и учредительные документы ООО,ОАО. Цены и сроки.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_13.php",
		"Ликвидация фирмы ООО - путем продажи доли в Санкт-Петербуре. Стоимость и сроки.
",
		"Ликвидация фирмы ООО - путем продажи доли в Санкт-Петербуре. Стоимость и сроки.
",
		'<meta name="description" content="Чтобы ликвидировать ООО путем продажи доли позвоните нам - мы сделаем все быстро и на профессиональном уровне.
">
		<meta name="keywords" content="Ликвидация фирмы ООО - путем продажи доли в Санкт-Петербуре. Стоимость и сроки.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_20_2.php",
		"Ликвидация фирм с долгами путем исключения из ЕГРЮЛ. Закрыть фирму с долгами.
",
		"Ликвидация фирм с долгами путем исключения из ЕГРЮЛ. Закрыть фирму с долгами.
",
		'<meta name="description" content="Как закрыть фирму с долгами- все очень просто- не ломайте голову, обратитесь к профессионалам.
">
		<meta name="keywords" content="Ликвидация фирм с долгами путем исключения из ЕГРЮЛ. Закрыть фирму с долгами.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_20_3.php",
		"Банкротство фирмы ООО- процедура. Помощь юристов в Санкт-Петербурге.
",
		"Банкротство фирмы ООО- процедура. Помощь юристов в Санкт-Петербурге.
",
		'<meta name="description" content="Помощь в ведении процедуры банкротства предприятия, сокращение сроков процедуры профессиональными бинес юристами.
">
		<meta name="keywords" content="Банкротство фирмы ООО- процедура. Помощь юристов в Санкт-Петербурге.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_15.php",
		"Предоставление юридического адреса при регистрации фирмы. Санкт-Петербург.
",
		"Предоставление юридического адреса при регистрации фирмы. Санкт-Петербург.
",
		'<meta name="description" content="Предлагаем помощь в побдоре и предоставлении юридических адресов для регистрируемых предприятий в Петербурге
">
		<meta name="keywords" content="Предоставление юридического адреса при регистрации фирмы. Санкт-Петербург.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_15_1.php",
		"Открыть расчетный счет в Санкт-Петербурге. Быстро и без проблем.
",
		"Открыть расчетный счет в Санкт-Петербурге. Быстро и без проблем.
",
		'<meta name="description" content="Содействие в подборе банков и быстром открытии расчетного счета в Петербурге. Профессионально и недорого.
">
		<meta name="keywords" content="Открыть расчетный счет в Санкт-Петербурге. Быстро и без проблем.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_15_2.php",
		"Заказать изготовление печати в Санкт-Петербурге.
",
		"Заказать изготовление печати в Санкт-Петербурге.
",
		'<meta name="description" content="Мы изготовим для Вас печать в соответствии с пожеланиями. А наш курьер доставит ее Вам быстро и недорого.
">
		<meta name="keywords" content="Заказать изготовление печати в Санкт-Петербурге.
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_20_1.php",
		"Ликвидация фирмы путем реорганизации. Санкт-Петербург. 
",
		"Ликвидация фирмы путем реорганизации. Санкт-Петербург. 
",
		'<meta name="description" content="Для ликвидации фирмы путем реорганизации обратитесь к нашим юристам- мы сделаем все быстро и на профессиональном уровне.
">
		<meta name="keywords" content="ликвидация фирмы реорганизация петербург
">'
		);
	
	$page->setAttributsByPageName(
		"/p_ur/p_21.php",
		"Готовые ООО в Петербурге без расчетного счета
",
		"Готовые ООО в Петербурге без расчетного счета
",
		'<meta name="description" content="Предлагаемые готовые фирмы в Санкт-Петербурге помогут Вам начать бизнес уже сегодня
">
		<meta name="keywords" content="Готовые ООО без расчетного счета
">'
		); */
	
/* 	
	$page->setAttributsByPageName("/p_ur/p_01.php","Получить лицензию на продажу алкоголя в Санкт-Петербурге","Получить лицензию на продажу алкоголя в Санкт-Петербурге",'<meta name="description" content="С нашей помощью Вы сможете стать обладателем лицензии на право осуществления видов деятельности, связанных с оборотом этилового спирта (хранение, импорт, экспорт, продажа алкоголя), просто посетив нас всего 1 раз.">');
	
	$page->setAttributsByPageName("/p_ur/p_02.php","Получить лицензию ЧОП| Лицензирование частной охранной деятельности","Получить лицензию ЧОП| Лицензирование частной охранной деятельности",'<meta name="description" content="С нашей помощью Вы сможете стать обладателем Лицензии на право осуществления негосударственной (частной) охранной деятельности посетив нас всего 1 раз">');
	
	$page->setAttributsByPageName("/p_ur/p_03.php","Лицензия транспортная| Получить транспортную лицензию: помощь юристов","Лицензия транспортная| Получить транспортную лицензию: помощь юристов",'<meta name="description" content="Вы сможете стать обладателем Лицензии на право перевозки пассажиров автомобильным транспортом, оборудованным для перевозок более 8 человек по РФ просто посетив нас всего 1 раз">');
	
	
	$page->setAttributsByPageName("/p_ur/p_04.php","Помощь в суде, представительство в Арбитражном суде СПб и Л.О., судах Общей юрисдикции (Федеральные Районные суды), Мировом суде","Помощь в суде, представительство в Арбитражном суде СПб и Л.О., судах Общей юрисдикции (Федеральные Районные суды), Мировом суде",'<meta name="description" content="Наши специалисты окажут помощь клиентам не только в ходе представительства в суде, но и в случае необходимости - в процессе досудебного урегулирования споров">');
	
	$page->setAttributsByPageName("/p_ur/p_05.php","Международная сертификация по стандартам серии ISO","Международная сертификация по стандартам серии ISO",'<meta name="description" content="С нашей помощью Вы сможете стать обладателем международного сертификата менеджмента качества ISO 9001, международного сертификата экологического менеджмента ISO 14001 и международная сертификация систем менеджмента здоровья и безопасности по OHSAS 18001 просто посетив нас всего 1 раз.">');


	$page->setAttributsByPageName("/p_ur/p_06.php","Возврат долгов, представительство в суде Санкт-Петербурга","Возврат долгов, представительство в суде Санкт-Петербурга",'<meta name="description" content="Ваше дело будут вести юристы, имеющие опыт более 15 лет именно в данной сфере. На основе полученных сведений будет разработана индивидуальная схема возврата долга. ">');


	$page->setAttributsByPageName("/p_ur/p_07.php","Абонентское юридическое обслуживание организаций в Санкт-Петербурге","Абонентское юридическое обслуживание организаций в Санкт-Петербурге",'<meta name="description" content="Накопив определенный опыт работы с юридическими лицами, нами были разработаны несколько вариантов юридического абонентского обслуживания для наших клиентов">');

	$page->setAttributsByPageName("/p_ur/p_08.php","Лицензия на медицинские виды деятельности","Лицензия на медицинские виды деятельности",'<meta name="description" content="Вы сможете стать обладателем Лицензии на право осуществления видов деятельности связанной с охраной здоровья населения посетив нас всего 1 раз">');

	$page->setAttributsByPageName("/p_ur/p_09.php","Консультации юридических лиц и предпринимателей","Консультации юридических лиц и предпринимателей",'<meta name="description" content="консультации организаций по вопросам действующего законодательства РФ- профессиональные услуги юристов">');

	$page->setAttributsByPageName("/p_ur/p_10.php","Составление договоров, исков, жалоб, претензий","Составление договоров, исков, жалоб, претензий",'<meta name="description" content="«ЦЕНТР ПРАВОВЫХ УСЛУГ» оказывает своим клиентам услуги по анализу и оценке юридической значимости того или иного документа, а также услуги по составлению, изменению, дополнению договоров">');

//	$page->setAttributsByPageName("/p_ur/p_11.php","Регистрация ООО","Регистрация ООО","");

//	$page->setAttributsByPageName("/p_ur/p_12.php","Внесение изменений в устав","Внесение изменений в устав","");


	$page->setAttributsByPageName("/p_ur/p_14.php","Готовые фирмы ООО в СПб. Продажа готовых фирм ООО.","Готовые фирмы ООО в СПб. Продажа готовых фирм ООО.",'<meta name="description" content="Обращаясь к нам по вопросам продажи готовых ООО фирм в СПб, Вы можете быть уверены, что разгрузите себя от рутинной работы по сбору документов и сэкономите время при регистрации">');

	$page->setAttributsByPageName("/p_ur/p_19.php","Вступить в СРО Изыскателей|Услуги по вступлениею в СРО изыскателей","Вступить в СРО Изыскателей|Услуги по вступлениею в СРО изыскателей",'<meta name="description" content="С нашей помощью Вы сможете стать членом СРО и получить допуск на производство инженерно-изыскательских работ, просто посетив нас всего 1 раз">');

	$page->setAttributsByPageName("/p_ur/p_20.php","Услуги по представительству в государственных органах Санкт-Петербурга","Услуги по представительству в государственных органах Санкт-Петербурга",'<meta name="description" content="«ЦЕНТР ПРАВОВЫХ УСЛУГ» оказывает услуги организациям по представительству ее интересов в государственных органах">');

//	$page->setAttributsByPageName("/p_ur/p_21.php","Готовые фирмы без открытого счета","Готовые фирмы без открытого счета","");

	$page->setAttributsByPageName("/p_ur/p_22.php","Налоговый аудит организаций в Санкт-Петербурге","Налоговый аудит организаций в Санкт-Петербурге",'<meta name="description" content="Иногда требуется быть уверенным в правильности бухгалтерского и налогового учета. Для этих целей налоговый аудит просто незаменим.">');

	$page->setAttributsByPageName("/p_ur/p_22_1.php","Бухгалтерское обслуживание для юр. лиц и предпринимателей","Бухгалтерское обслуживание для юр. лиц и предпринимателей",'<meta name="description" content="Поручив нам Ваш бухгалтерский учет, Вы не зависите больше от жизненных обстоятельств Вашего бухгалтера, его профессиональной компетенции, состояния здоровья и степени лояльности.">');

	$page->setAttributsByPageName("/p_ur/p_22_2.php","Восстановление бухгалтерского учета фирмы в Петеррбурге","Восстановление бухгалтерского учета фирмы в Петеррбурге",'<meta name="description" content="В результате Вы получите надлежащее состояние бухгалтерского учета, а также необходимые рекомендации по дальнейшему оформлению своей финансово-хозяйственной деятельности">');

	$page->setAttributsByPageName("/p_ur/p_22_3.php","Оптимизация налогообложения предприятий и организаций в Санкт-Петербурге","Оптимизация налогообложения предприятий и организаций в Санкт-Петербурге",'<meta name="description" content="Итогом нашей работы является снижение уплачиваемых Вами налогов и оптимизация Вашего бизнеса.">');

	$page->setAttributsByPageName("/p_ur/p_22_4.php","Консультации по ведению бухгалтерского учета","Консультации по ведению бухгалтерского учета",'<meta name="description" content="При возникновении нестандартных или незнакомых ситуаций наши специалисты готовы проконсультировать Вас по любым вопросам бухгалтерского и налогового учета">');

	$page->setAttributsByPageName("/p_ur/p_21_1.php","Готовые фирмы с открытым счетом","Готовые фирмы с открытым счетом",'<meta name="description" content="Готовые ООО уже зарегистрированы, поставлены на налоговый учет и на учет в соответствующих внебюджетных фондах, имеют счет в банке и собственную печать">');

	$page->setAttributsByPageName("/p_ur/p_21_2.php","Участие в переговорах| Представительство на переговорах в Петербурге","Участие в переговорах| Представительство на переговорах в Петербурге",'<meta name="description" content="Если Вам нужна помощь при переговорах, контроль качества работ или их объемов, обращайтесь к нам и наши специалисты помогут Вам почувствовать уверенность, что все идет так, как нужно Вам!!!">');
	
	$page->setAttributsByPageName("/p_ur/p_21_3.php","Готовые фирмы с допуском СРО","Готовые фирмы с допуском СРО",'<meta name="description" content="Покупка готовой фирмы с допуском СРО станет отличным началом для ведения успешного бизнеса. Используйте возможность заняться собственным прибыльным делом.">');
	
//	$page->setAttributsByPageName("/p_ur/p_20_1.php","Ликвидация фирмы путем реорганизации","Ликвидация фирмы путем реорганизации","");
//	$page->setAttributsByPageName("/p_ur/p_20_2.php","Ликвидация фирмы путем исключения из ЕГРЮЛ","Ликвидация фирмы путем исключения из ЕГРЮЛ","");
//	$page->setAttributsByPageName("/p_ur/p_20_3.php","Сопровождение процедуры банкротства","Сопровождение процедуры банкротства","");

//	$page->setAttributsByPageName("/p_ur/p_11_2.php","Регистрация ОАО, ЗАО","Регистрация ОАО, ЗАО","");

//	$page->setAttributsByPageName("/p_ur/p_11_3.php","Регистрация некоммерческих организаций","Регистрация некоммерческих организаций","");

//	$page->setAttributsByPageName("/p_ur/p_11_4.php","Регистрация индивидуального предпринимателя(ИП)","Регистрация индивидуального предпринимателя(ИП)","");

//	$page->setAttributsByPageName("/p_ur/p_11_5.php","Регистрация филиала (представительства) ","Регистрация филиала (представительства) ","");

//	$page->setAttributsByPageName("/p_ur/p_11_6.php","Перерегистрация ООО ","Перерегистрация ООО ","");

//	$page->setAttributsByPageName("/p_ur/p_12_2.php","Внесение изменений не связанных с уставом","Внесение изменений не связанных с уставом","");

//	$page->setAttributsByPageName("/p_ur/p_12_3.php","Внесение изменений связанных с куплей продажей доли","Внесение изменений связанных с куплей продажей доли","");

//	$page->setAttributsByPageName("/p_ur/p_15_1.php","Открытие расчетного счета","Открытие расчетного счета","");

//	$page->setAttributsByPageName("/p_ur/p_15_2.php","Изготовление печатей и штампов","Изготовление печатей и штампов","");

	$page->setAttributsByPageName("/p_ur/p_15_3.php","Выезд юриста к заказчику в Санкт-Петербурге","Выезд юриста к заказчику в Санкт-Петербурге",'<meta name="description" content="В случае необходимости наш специалист может приехать прямо к Вам офис для оперативного или планового решения любого вопроса">');

	$page->setAttributsByPageName("/p_ur/p_15_4.php","Выезд курьера к заказчику для доставки юридических документов","Выезд курьера к заказчику для доставки юридических документов",'<meta name="description" content="В случае необходимости наш курьер может приехать прямо к Вам офис и забрать/привезти все необходимые документы.">');

	$page->setAttributsByPageName("/p_ur/p_19_2.php","Вступить в СРО проектировщиков|Услуги по Вступлению в СРО проектировщиков","Вступить в СРО проектировщиков|Услуги по Вступлению в СРО проектировщиков",'<meta name="description" content="С нашей помощью Вы сможете стать членом СРО и получить допуск на производство инженерно-изыскательских работ, просто посетив нас всего 1 раз">');

	$page->setAttributsByPageName("/p_ur/p_19_3.php","Вступить в СРО строителей| Услуги по вступлению в строительное СРО","Вступить в СРО строителей| Услуги по вступлению в строительное СРО",'<meta name="description" content="Через 3-5 рабочих дней, Вы получаете на руки допуск, необходимый для Вашей инженерно-изыскательской деятельности">');




	$page->setAttributsByPageName("/p_fiz/p_01.php","Устные и письменные консультации по вопросам гражданского, трудового, семейного и земельного законодательства","Устные и письменные консультации по вопросам гражданского, трудового, семейного и земельного законодательства",'<meta name="description" content="ЦЕНТР ПРАВОВЫХ УСЛУГ» проводит консультации граждан по юридическим вопросам">');


	$page->setAttributsByPageName("/p_fiz/p_02.php","Представительство интересов  организации в суде Санкт-Петербурга","Представительство интересов  организации в суде Санкт-Петербурга",'<meta name="description" content="Услуги, предоставляемые «ЦЕНТРОМ ПРАВОВЫХ УСЛУГ» по данному направлению охватывает практически весь спектр деятельности граждан">');

	$page->setAttributsByPageName("/p_fiz/p_03.php","Составление исков, претензий, жалоб, договоров и иных документов","Составление исков, претензий, жалоб, договоров и иных документов",'<meta name="description" content="Качественно и грамотно составленный договор позволит Вам быть уверенным в том, что другая сторона исполнит свои обязанности перед Вами надлежащим образом">');

	$page->setAttributsByPageName("/p_fiz/p_04.php","Услуги по сопровождении сделок с недвижимостью в Санкт-Петербурге","Услуги по сопровождении сделок с недвижимостью в Санкт-Петербурге",'<meta name="description" content="Помните!!! Без специальных правовых навыков практически невозможно гарантировать "чистоту" сделки с недвижимостью">');

	$page->setAttributsByPageName("/p_fiz/p_05.php","Жилищные споры| Юридические услуги по жилищным спорам","Жилищные споры| Юридические услуги по жилищным спорам",'<meta name="description" content="мы предлагаем представление интересов доверителя в суде по жилищным делам любой сложности">');

	$page->setAttributsByPageName("/p_fiz/p_06.php","Семейные споры| Помощб юриста по семейному праву","Семейные споры| Помощб юриста по семейному праву",'<meta name="description" content="Наши специалисты помогут Вам получить решение суда, которое в наибольшей степени будет удовлетворять Вашим пожеланиям. При этом, наши специалисты избавят Вас от участия в неприятном для Вас процессе, представляя Ваши интересы в данном суде.">');

	$page->setAttributsByPageName("/p_fiz/p_07.php","Трудовые споры| Юрист по трудовым отношениям","Трудовые споры| Юрист по трудовым отношениям",'<meta name="description" content="Наши специалисты внимательно выслушают Вашу трудовую проблему и окажут юридическую консультацию, подскажут возможные варианты дальнейшего развития ситуации">');

	$page->setAttributsByPageName("/p_fiz/p_08.php","Наследственные споры| Юридические услуги по наследству","Наследственные споры| Юридические услуги по наследству",'<meta name="description" content="Специалисты «ЦЕНТРА ПРАВОВЫХ УСЛУГ» качественно и профессионально окажут Вам помощь по оформлению и получению всех необходимых документов для вступления в права наследника, сопровождении на приеме у Нотариуса, представительстве в суде при опротестовании завещания">');

	$page->setAttributsByPageName("/p_fiz/p_09.php","Земельные споры| Юридические услуги по земельному праву","Земельные споры| Юридические услуги по земельному праву",'<meta name="description" content="«ЦЕНТР ПРАВОВЫХ УСЛУГ» составляет и подаёт иски, жалобы, заявления, вступает в дело на стороне ответчика или третьего лица и представляют интересы в арбитражных судах и судах общей юрисдикции по следующим земельным спорам">');

	$page->setAttributsByPageName("/p_fiz/p_10.php","Возврат долга| Как вернуть деньги: Услуги по возврату денежных средств в Петербурге","Возврат долга| Как вернуть деньги: Услуги по возврату денежных средств в Петербурге",'<meta name="description" content="Если должник не выполнил свои обязательства в срок, то появляется возможность получить с него дополнительные денежные средства, это – получение неустойки, на условиях, отраженных в договоре">');

	$page->setAttributsByPageName("/p_fiz/p_11.php","Возврат прав, возмещение ущерба после ДТП, споры со страховыми компаниями","Возврат прав, возмещение ущерба после ДТП, споры со страховыми компаниями",'<meta name="description" content="В большинстве случаев стоимость оказанных нашей компанией услуг компенсируется виновной стороной, т.е. для наших клиентов услуги оказываются бесплатно">');

	$page->setAttributsByPageName("/p_fiz/p_12.php","Юридическая помощь, услуги по защите прав потребителей в Петербурге","Юридическая помощь, услуги по защите прав потребителей в Петербурге",'<meta name="description" content="Быстро и профессионально специалисты «ЦЕНТРА ПРАВОВЫХ УСЛУГ» помогут Вам восстановить нарушенные права покупателя нужной вещи и обеспечат Вашу юридическую защиту.">');






	$page->setAttributsByPageName("/p_ring.php","Заказать звонок в Центре Правовых Услуг","Заказать звонок в Центре Правовых Услуг",'<meta name="description" content="вы можете закаать звонок юриста с сайта">');
	$page->setAttributsByPageName("/p_regfirm.php","Онлайн заявка на регистрацию фирмы","Онлайн заявка на регистрацию фирмы",'<meta name="description" content="Вы можете подать онлайн заявку на регистрацию фирмы прямо на сайте">');
	
//	$page->setAttributsByPageName("/p_adduch.php","Добавить физическое лицо как учредителя","Добавить физическое лицо как учредителя","");
	$page->setAttributsByPageName("/p_service.php","Юридические услуги Центра Правовых Услуг в Санкт-Петербурге","Юридические услуги Центра Правовых Услуг в Санкт-Петербурге",'<meta name="description" content="список услуг центра правовых услуг на этой странице сайта">');
	
	$page->setAttributsByPageName("/p_price.php","Цены на юридические услуги Центра  Правовых Услуг| Стоимость юридических услуг","Цены на юридические услуги Центра  Правовых Услуг| Стоимость юридических услуг",'<meta name="description" content="цены на услуги компании">');
	
	$page->setAttributsByPageName("/p_info.php","Справочная информация по налоговой и регистрационному центру.","Справочная информация по налоговой и регистрационному центру.","");
	
	$page->setAttributsByPageName("/p_sitemap.php","Карта сайта www.pravo-spb.net","Карта сайта www.pravo-spb.net",'<meta name="description" content="Карта сайта">'); */

	showme($page->error);
	showme($page->statusLog);
?>
