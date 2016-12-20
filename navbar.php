<?php
if(!defined('MyConst1')) {
   die('Direct access not permitted');
}
?>
<nav class="navbar navbar-default navos" id="nav">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" onclick="opkat('index.php')">Početna</a></li>
        <li><a href="o-nama.php" onclick="opkat('o-nama.php')">O nama</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="kategorije_obuke.php" target="_blank" onclick="opkat('kategorije_obuke.php')">Kategorije obuke<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="am.php" data-toggle="tooltip" data-placement="right" title="AM kategorija" onclick="opkat('am.php')">AM kategorija</a></li>
			<li><a href="a1.php"  data-toggle="tooltip" data-placement="right" title="A1 kategorija" onclick="opkat('a1.php')">A1 kategorija</a></li>
			<li><a href="a2.php"  data-toggle="tooltip" data-placement="right" title="A2 kategorija" onclick="opkat('a2.php')">A2 kategorija</a></li>
			<li><a href="a.php"  data-toggle="tooltip" data-placement="right" title="A kategorija" onclick="opkat('a.php')">A kategorija</a></li>
			<li><a href="b.php"  data-toggle="tooltip" data-placement="right" title="B kategorija" onclick="opkat('b.php')">B kategorija</a></li>
			<li><a href="c.php"  data-toggle="tooltip" data-placement="right" title="C kategorija" onclick="opkat('c.php')">C kategorija</a></li>
          </ul>
        </li>
        <li><a href="cenovnik.php" onclick="opkat('cenovnik.php')">Cenovnik</a></li>
		<li><a href="vozni_park.php" onclick="opkat('vozni_park.php')">Vozni park</a></li>
		<li><a href="online_upis.php" onclick="opkat('online_upis.php')">Online upis</a></li>
		<li><a href="novosti.php" onclick="opkat('novosti.php')">Novosti</a></li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="testovi.php" target="_blank" onclick="opkat('testovi.php')">Testovi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="testx1.php" data-toggle="tooltip" data-placement="right" title="Test 1" onclick="opkat('testx1.php')">Test 1</a></li>
			<li><a href="testx2.php" data-toggle="tooltip" data-placement="right" title="Test 2" onclick="opkat('testx2.php')">Test 2</a></li>
			<li><a href="testx3.php" data-toggle="tooltip" data-placement="right" title="Test 3" onclick="opkat('testx3.php')">Test 3</a></li>
			<li><a href="testx4.php" data-toggle="tooltip" data-placement="right" title="Test 4" onclick="opkat('testx4.php')">Test 4</a></li>
			<li><a href="testx5.php" data-toggle="tooltip" data-placement="right" title="Test 5" onclick="opkat('testx5.php')">Test 5</a></li>
			<li><a href="testx6.php" data-toggle="tooltip" data-placement="right" title="Test 6" onclick="opkat('testx6.php')">Test 6</a></li>
			<li><a href="saobracajni-znaci.php" data-toggle="tooltip" data-placement="right" title="Saobraćajni znaci" onclick="opkat('saobracajni-znaci.php')">Saobraćajni znaci</a></li>
          </ul>
        </li>
		<li><a href="kontakt.php">Kontakt</a></li>
        
      </ul>
    </div>
  </div>
</nav>