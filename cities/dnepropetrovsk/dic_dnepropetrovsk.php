<?php
require_once("../../parts/mysql.php");
$query= mysql_query("SELECT title,description,keywords, text from dnepropetrovsk where page_id='dic_dnepropetrovsk'", $db);
if (! $query){exit('Error');}
$res = mysql_fetch_array($query);
 require_once("../../parts/meta.php");?>

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
			<div id="g_menu" align= "center"> <?php require_once("../../parts/menu.php");?> </div>

		</div>
<div id="stripe"></div>
	<div id="middle">

		<div id="container">
			<div id="content">
					<table cellspacing="25" cellpadding="25px"><tr align="center"><td  style="background: #2b1100;"><b><font color="#ffffff">Интересные места</font></b></td><td   style="background: #0a0a6c;"><b><font color="#ffffff">Значимые Здания</font></b></td><td    style="background: #800080;"><b><font color="#ffffff">Парки</font></b></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/kamennie_babi.php">Каменные Бабы</a></td><td style="background: #4e7fd0;"><a href="pages/znz/spaso_preobrazhenskiy_sobor.html">Спасо-Преображенский Собор</a></td><td     style="background: #d481d4;"><a href="pages/parki/park_shevchenko.html">Парк Т.Г. Шевченко</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/alleya_voennoy_techniki.php">Аллея Военной Техники</a></td><td style="background: #4e7fd0;"><a href="pages/znz/dvorec_studentov.html">Дворец Студентов</a></td><td     style="background: #d481d4;"><a href="pages/parki/monastirskiy_ostrov.html">Монастырский Остров</a> </td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/alleya_slavi.php">Аллея Славы</a></td><td style="background: #4e7fd0;"><a href="pages/znz/troickiy_sobor.html">Троицкая церковь</a></td><td     style="background: #d481d4;"><a href="pages/parki/globi_park.html">Детский парк им. Глобы</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/memorial_pogibshim_milicioneram.php">Мемориал "Погибшим работникам<br>правопорядка"</a></td><td style="background: #4e7fd0;"><a href="pages/znz/pushkin_house.html">Пушкинский Дом</a></td><td     style="background: #d481d4;"><a href="pages/parki/sevastopolskiy_park.html">Севастопольский парк</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/lestnica.php">Старинная лестница</a></td><td style="background: #4e7fd0;"><a href="pages/znz/dom_gubernatora.html">Дом Губернатора</a></td><td     style="background: #d481d4;"><a href="pages/parki/b_hmelnitskiy_park.html">Парк им.Б.Хмельницкого</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/institut_kulturi.php">Институт Культуры</a></td><td style="background: #4e7fd0;"><a href="pages/znz/teatr_shevchenko.html">Театр Шевченко</a></td><td     style="background: #d481d4;"><a href="pages/parki/pisargevskiy_park.html">Парк им.Писаржевского</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/smotr_ploshadka.php">Смотровая площадка</a></td><td style="background: #4e7fd0;"><a href="pages/znz/tipografia.html">Типография</a></td><td     style="background: #d481d4;"><a href="pages/parki/40_let_osvobogdenia_dnepropetrovska.html">Парк 40-летия Освобождения<br>Днепропетровска</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/merefo_herson.php">Мерефо-Херсонский мост</a></td><td style="background: #4e7fd0;"><a href="pages/znz/oblsovet.html">Областной Совет</a></td><td     style="background: #d481d4;"><a href="pages/parki/dubinina_park.html">Парк им.В.Дубинина</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/skameika.php">Скамейка влюбленных</a></td><td style="background: #4e7fd0;"><a href="pages/znz/ekaterin_cirk.html">Здание Екатеринославского Цирка</a></td><td     style="background: #d481d4;"><a href="pages/parki/gagarin_park.html">Парк им.Ю.Гагарина</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/church.php">Церковь</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/steklaniy_shar.php">Стекляный шар</a></td><td  style="background: #008000;"><b><font color="#ffffff">Музеи</font></b></td><td      style="background: #2c89a0;"><b><font color="#ffffff">Памятники и скульптуры</font></b></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/naberezhnaya.php">Набережная Днепропетровска</a></td><td  style="background: #15e015;"><a href="pages/museums/ist_museum.html">Музей им.Д.Яворницкого</a></td><td      style="background: #88d9ec;"><a href="pages/scip/kenguru.html">Скульптура Кенгуру</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/lavka.php">Семейная лавка</a></td><td  style="background: #15e015;"><a href="pages/museums/diorama.html">Диорама "Битва за Днепр"</a></td><td      style="background: #88d9ec;"><a href="pages/scip/pamyatnik_slavi.html">Памятник Славы</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/lebed.php">Фонтан "Лебедь"</a></td><td  style="background: #15e015;"><a href="pages/museums/hud_museum.html">Художественный Музей</a></td><td      style="background: #88d9ec;"><a href="pages/scip/general_pushkin.html">Памятник Генералу Пушкину</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/cirk.php">Цирк</a></td><td></td><td      style="background: #88d9ec;"><a href="pages/scip/lomonosov.html">Памятник Ломоносову</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/chram_ioanna.php">Храм Иоанна Крестителя</a></td><td   style="background: #fccb00;"><b><font color="#ffffff">Площади, скверы и бульвары</font></b></td><td      style="background: #88d9ec;"><a href="pages/scip/studentam.html">Памятник погибшим студентам<br>во время ВОВ</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/fontan.php">Фонтан "Одуванчик"</a></td><td    style="background: #ffff00;"><a href="pages/squares/sobornaya.html">Соборная площадь</a></td><td      style="background: #88d9ec;"><a href="pages/scip/lev.html">Скульптура Бронзового Льва</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/detskaya_zh_d.php">Детская Железная дорога</a></td><td    style="background: #ffff00;"><a href="pages/squares/octyabrskaya.html">Октябрьская Площадь</a></td><td      style="background: #88d9ec;"><a href="pages/scip/karuna.html">Памятник Каруне</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/arka.php">Арка Парка Глобы</a></td><td    style="background: #ffff00;"><a href="pages/squares/ekaterinoslavskiy.html">Екатеринославский Бульвар</a></td><td      style="background: #88d9ec;"><a href="pages/scip/shevchenko.html">Памятник Т.Г.Шевченко</a></td></tr>
            	<tr align="center"><td style="background: #956a4e;"><a href="pages/inm/dnepr_arena.php">Стадион "Днепр-Арена"</a></td><td    style="background: #ffff00;"><a href="pages/squares/ploshad_lenina.html">Площадь Ленина</a></td><td      style="background: #88d9ec;">Памятник молодому Т.Г.Шевченко</td></tr>
            	<tr align="center"><td></td><td    style="background: #ffff00;"><a href="pages/squares/evropeiskaya.html">Европейская площадь</a></td><td      style="background: #88d9ec;"><a href="pages/scip/dnepr.html">Скульптура "Днепр"</a></td></tr>
            	<tr align="center"><td></td><td    style="background: #ffff00;"><a href="pages/squares/teatralniy.html">Театральный Бульвар</a></td><td      style="background: #88d9ec;"><a href="pages/scip/margelov.html">Памятник Генералу Маргелову</a></td></tr>
            	<tr align="center"><td></td><td    style="background: #ffff00;"><a href="pages/squares/kucherevskiy.html">Бульвар Кучеревского</a></td><td      style="background: #88d9ec;"><a href="pages/scip/internacionalisti.html">Памятник Воинам-Интернационалистам</a></td></tr>
            	<tr align="center"><td></td><td    style="background: #ffff00;"><a href="pages/squares/skver_lenina.html">Сквер им.Ленина</a></td><td      style="background: #88d9ec;"><a href="pages/scip/malenkiy_princ.html">Скульптура "Маленький Принц"</a></td></tr>
            	
            </table> 

			
				</div><!-- #content-->
				
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
			<?php require_once("../../parts/sideleft.php");?> </div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
<?php require_once("../../parts/footer.php");?>
	</div><!-- #footer -->

</body>
</html>