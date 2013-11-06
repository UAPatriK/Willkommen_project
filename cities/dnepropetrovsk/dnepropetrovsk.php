<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Днепропетровск достопримечательности</title>
	<meta name="keywords" content="Карта достопримечательностей, посмотреть достопримечательности, выбрать достопримечательности" />
	<meta name="description" content="На этой интерактивной карте, вы можете просмотреть различные достопримечательности города Днепропетровска" />
	<link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="../../css/connect.css" type="text/css" media="screen, projection" />
	
	<style type="text/css">
        /* Оформление меню (начало)*/
    .menu {
        list-style: none;

        margin: 0;
        padding: 0;
    }
    .submenu {
        list-style: none;

        margin: 0 0 0 20px;
        padding: 0;
    }
    .submenu li {
        font-size: 90%;
    }
        /* Оформление меню (конец)*/
</style>
 <script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script src="//yandex.st/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="dnepropetrovsk_groups.js" type="text/javascript"></script>
<script type="text/javascript">
ymaps.ready(init);

function init() {

    // Создание экземпляра карты.
    var myMap = new ymaps.Map('map', {
            center: [48.459946,35.04496],
            zoom: 15,
            behaviors:['default', 'scrollZoom']
        }),
        
        
        // Контейнер для меню.
        menu = $('<ul class="menu"/>');

    // Перебираем все группы.
    groups.forEach(function (group) {
        // Пункт меню.
        var menuItem = $('<li><a href="#">' + group.name + '</a></li>'),
            // Коллекция для геообъектов группы.
            collection = new ymaps.GeoObjectCollection(null, { preset: group.style }),
            // Контейнер для подменю.
            submenu = $('<ul class="submenu"/>');

        // Добавляем коллекцию на карту.
        myMap.geoObjects.add(collection);

        // Добавляем подменю.
        menuItem
            .append(submenu)
            // Добавляем пункт в меню.
            .appendTo(menu)
            // По клику удаляем/добавляем коллекцию на карту и скрываем/отображаем подменю.
            .find('a')
            .toggle(function () {
                myMap.geoObjects.remove(collection);
                submenu.hide();
            }, function () {
                myMap.geoObjects.add(collection);
                submenu.show();
            });

        // Перебираем элементы группы.
        group.items.forEach(function (item) {
            // Пункт подменю.
            var submenuItem = $('<li><a href="#">' + item.name + '</a></li>'),
            // Создаем метку.
                placemark = new ymaps.Placemark(item.center, { balloonContent: item.name });

            // Добавляем метку в коллекцию.
            collection.add(placemark);
            // Добавляем пункт в подменю.
            submenuItem
                .appendTo(submenu)
                // При клике по пункту подменю открываем/закрываем баллун у метки.
                .find('a')
                .toggle(function () {
                    placemark.balloon.open();
                }, function () {
                    placemark.balloon.close();
                });
        });
    });

    // Добавляем меню в тэг BODY.
    menu.appendTo($('p')
    );
     myMap.controls
        // Кнопка изменения масштаба.
        .add('zoomControl', { left: 5, top: 5 })
        // Список типов карты
        .add('typeSelector')
        // Стандартный набор кнопок
        .add('mapTools', { left: 35, top: 5 });

    // Также в метод add можно передать экземпляр класса элемента управления.
    // Например, панель управления пробками.
    var trafficControl = new ymaps.control.TrafficControl();
    myMap.controls
        .add(trafficControl)
        // В конструкторе элемента управления можно задавать расширенные
        // параметры, например, тип карты в обзорной карте.
        .add(new ymaps.control.MiniMap({
            type: 'yandex#publicMap'
        }));
    // Выставляем масштаб карты чтобы были видны все группы.
    myMap.setBounds(myMap.geoObjects.getBounds());
}
</script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?98"></script>
	<link rel="stylesheet" href="../../css/g_menu.css" type="text/css" media="screen, projection" />
</head>

<body>

<div id="wrapper">

	<div id="header">
		<div id="logo"><a href="http://willkommen.pp.ua/index.php"><img src="../../img/logo.png" width="240px" /></a></div>
		<div id="forma">  <ul id="connect">
          <li align="center"><a href="http://willkommen.pp.ua/index.php"><b>Главная</b></a></li>
        <li>&bull;</li>
        <li align="center"><a href="http://willkommen.pp.ua/pages/help_us.php"><b>Помочь проекту</b></a></li>
        <li>&bull;</li>
           <li align="center"><a href="http://willkommen.pp.ua/pages/os.php"><b>Обратная связь</b></a></li>
       
        
</ul> </div>
</div><!-- #header-->
<div id="main_menu">
			<div id="g_menu" align= "center">  <?php require_once("../../parts/menu.php");?> </div>

		</div>
<div id="stripe"></div>
	<div id="middle">

		<div id="container">
			<div id="content">
					<table cellspacing="15px"><tr><td valign="top"><div id="map" style="width:425px;height:680px;"/></td><td><p></p></td></tr></table>
			
				</div><!-- #content-->
				
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
			<?php require_once("../../parts/sideleft.php");?>
		      </div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
<?php require_once("../../parts/footer.php");?>
	</div><!-- #footer -->

</body>
</html>