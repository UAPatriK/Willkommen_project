<?php
require_once("../parts/mysql.php");
$query= mysql_query("SELECT title,description,keywords, text from mainpages where page_id='os'", $db);
if (! $query){exit('Error');}
$res = mysql_fetch_array($query);
 require_once("../parts/main_meta.php");?>
<div id="wrapper">

	<div id="header">
		<div id="logo"><a href="#"><img src="http://willkommen.pp.ua/img/logo.png" width="240px" /></a></div>
		<div id="forma">  <ul id="connect">
          <li align="center"><a href="http://willkommen.pp.ua/index.php"><b>Главная</b></a></li>
        <li>&bull;</li>
        <li align="center"><a href="http://willkommen.pp.ua/pages/help_us.php"><b>Помочь проекту</b></a></li>
        <li>&bull;</li>
           <li align="center"><a href="#"><b>Обратная связь</b></a></li>
       
        
</ul> </div>
</div><!-- #header-->
<div id="stripe"></div>
	<div id="middle">

		<div id="container">
        <div id="content">
				<?php echo $res['text'] ;?>
				</div><!-- #content-->
		</div><!-- #container-->

		<div class="sidebar" id="sideLeft">
<?php require_once("../parts/sideleft.php");?>
</div><!-- .sidebar#sideLeft -->

	</div><!-- #middle-->

</div><!-- #wrapper -->

<div id="footer">
<?php require_once("../parts/footer.php");?>
	</div><!-- #footer -->

</body>
</html>