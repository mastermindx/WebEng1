<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="de" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="MOOC WebEngineering I" />
    <meta name="author" content="Marcel Vanderschaeghe" />
    <link rel="shortcut icon" href="bootstrap3/assets/ico/favicon.png" />
  
    <title>Praktische Abschlussprüfung zu MOOC@iversitiy.org WebEngineering I</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3/dist/css/bootstrap.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap3/assets/js/html5shiv.js"></script>
    <script src="bootstrap3/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">MOOC@iversity.org: Web-Engineering I</h3>
        <ul class="nav nav-justified">
          <li><a href="index.html">Home</a></li>
		  <li><a href="blog.html">Über die Bloginhalte</a></li>
          <li><a href="mooc.html">MOOC-Beschreibung</a></li>
          <li><a href="kapitel.html">Kapitel-Übersicht</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>

      <!-- Inhalt -->
      <div>
        <h2>Kapitel 7</h2>
		<p/>
		<h3>Digitale Barrierefreiheit</h3>
		<p style="text-align:justify">
		Sinn und Zweck dieses Kapitels war es, eine barrierfreies Suchformular umzusetzen. Die Aufgabe wurden mittels WAVE auf deren Barrierefreiheit überprüft.
		<br/><br/>
		Am Ende dieser Seite steht der Link zur <a href="http://vanderschaeghem.cloudcontrolled.com" onclick="window.open(this.href);return false;">Original-Lösung in der Cloud (mit CSS 3)</a> 
		und die <a href="kap7/index.htm" onclick="window.open(this.href);return false;">Lösung im Blog (mit CSS 2.1)</a> intergriert.
		Weiterhin gibt es das Suchformular nochmals direkt hier eingebunden was der barrierefreien Sicht dient, da sich die übrigen Links in neuen Reitern öffnen
		<br/><br/>
		Der Reader zu Kapitel 7 beinhaltet den Artikle "Reine Formsache":
		<br/><br/>
		<ul>
			<li>Barrierefreie Formulare mit HTML, CSS & JavaScript</li>
			<li>Teil 1 - Konzeption: Toleranz und Rücksicht einplanen</li>
			<li>Teil 2 - Formulardesign: der wichtige erste Eindruck</li>
			<li>Teil 3 - Technik: HTML & CSS für Formulare</li>
			<li>Teil 4 - Dynamik in Formularen: JavaScript & AJAX</li>
			<li>Teil 5 - Testen von Formularen und web-basierten Anwendungen</li>
		</ul>
		<br/><br/>
		<a href="http://vanderschaeghem.cloudcontrolled.com" onclick="window.open(this.href);return false;">Original-Hausaufgabe zum Kapitel 7 in der Cloud (öffnet einen neuen Reiter + CSS 3)</a>
		<br/><br/>
		<a href="kap7/index.htm" onclick="window.open(this.href);return false;">Lösung im Blog (öffnet einen neuen Reiter + CSS 2.1)</a>
		<h2 style="text-align:center">Hausaufgabe Kapitel 7: Digitale Barrierfreiheit</h2>
		<h2 style="text-align:center"><a href="http://wave.webaim.org/report#/vanderschaeghem.cloudcontrolled.com" onclick="window.open(this.href);return false;"><img src="kap7/wcag2AAA.gif" alt="WAVE Tool for WAI-AAA WCAG 2.0 validation"/></a></h2>

		<form action="http://de.wikipedia.org/wiki/Spezial:Suche">
			<fieldset>
				<legend>Suchen bei Wikipedia</legend>
				<label for="search">Suchbegriff</label>
				<input type="text" name="search" value="" id="search"/>
				<input type="submit" name="go" value="Artikel" alt="Suche nur in Artikeln"/>
				<input type="submit" name="fulltext" value="Volltext" alt="Volltextsuche" />
			</fieldset>
		</form>
		
     </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Marcel Vanderschaeghe 2013</p>
		<p>
			<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS ist valide!" />
			<img src="wcag2AAA.gif" alt="Valid WCAG2AAA" height="31" width="88" />
		</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
