<?php
require_once("parts/mysql.php");
$query= mysql_query("SELECT title,description,keywords, text from mainpages where page_id='index'", $db);
if (! $query){exit('Error');}
$res = mysql_fetch_array($query);
 require_once("parts/main_meta.php");?>

<div id="wrapper">

	<div id="header">
		<div id="logo"><a href="#"><img src="http://willkommen.pp.ua/img/logo.png" width="240px" /></a></div>
		<div id="forma">  <ul id="connect">
          <li align="center"><a href="#"><b>Главная</b></a></li>
        <li>&bull;</li>
        <li align="center"><a href="http://willkommen.pp.ua/pages/help_us.php"><b>Помочь проекту</b></a></li>
        <li>&bull;</li>
           <li align="center"><a href="http://willkommen.pp.ua/pages/os.php"><b>Обратная связь</b></a></li>
       
        
</ul> </div>
</div><!-- #header-->
<div id="stripe"></div>
	<div id="middle">

		<div id="container">
         <div id="intro">
            <div id="intro_text"><font color="#ffffff" face="Segoe UI">Добро пожаловать на главную страницу проекта Willkommen!<br />
            Часто, собираясь в поездку в другой город, вы задавались вопросом: "А что бы там посмотреть?".<br /> По этому и был разработан этот проект.<br /> Что бы вы знали, какие достопримечательности посмотреть в незнакомом городе. </font>
            </div></div>
			<div id="content">
           
            
				 <div id="dnepr"><img src="http://willkommen.pp.ua/img/cities/dnepr.png" width="95px" style="margin-left: 25px;"><br><h2><b>Днепропетровск</b></h2><br>
				 	
				 		<div id="g_menu" style="margin-left: -25px;">  <ul id="cssmenu">
        
        <li align="center"><a href="cities/dnepropetrovsk/dnepropetrovsk.php"><img src="img/ico/map.png" height="31px"><br>Карта</a></li>
           <li align="center"><a href="cities/dnepropetrovsk/dic_dnepropetrovsk.php"><img src="img/ico/od.png" height="31px"><br>Справочник</a></li>
       </ul> </div>
			
				 </div>	</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
        
<?php require_once("parts/sideleft.php");?>
</div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
<?php require_once("parts/footer.php");?>
	</div><!-- #footer -->

</body>
</html>