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
        <h2>Kapitel 6</h2>
		<h3>Semantische Textauszeichnung, Unicode & UTF-8, (X)HTML-Standards</h3>
		<p style="text-align:justify">
		Es wurden wichtige Aspekte zu HTLM und CSS erörtert, die Konsolen-Browser Lynx und ELinks, sowie zur Textverarbeitung das Tool LyX vorgestellt. Weiterhin wurde auf die
		Zeichenkodierung Unicode & UTF-8 eingegangen und Internet Media Type besprochen. Nachdem die (X)HTML-Standards thematisiert wurden, folgte die Aufgabe die darin bestand
		eine Tabelle in die Cloud zu stellen, die mit CSS (Version 2.1) formatiert wurde und alle "XHTML 1.0 strict"-Elemente beinhaltet.
		<br/><br/>
		Am Ende dieser Seite steht der Link zur <a href="http://mvanderschaeghe.cloudcontrolled.com" onclick="window.open(this.href);return false;">Original-Lösung in der Cloud (mit CSS 3)</a> 
		und die <a href="kap6/index.htm" onclick="window.open(this.href);return false;">Lösung im Blog (mit CSS 2.1)</a> intergriert. Weiterhin gibt es ein Art Vorschau, welche jedoch vom Original-Styling
		und Funktionalität abweicht und der barrierefreien Sicht dient, da sich die übrigen Links in neuen Reitern öffnen.
		<br/><br/>
		Der Reader zu Kapitel 6 beinhaltet folgende Themengebiete:
		<br/><br/>
		<ul>
			<li>HTML - Auszeichnungssprache</li>
			<li>HTML - Hypertext Markup Language</li>
			<li>HTML - Extensible Markup Language (XML)</li>
			<li>HTML - Extensible Hypertext Markup Language (XHTML)</li>
			<li>HTML - WYSIWYG (What You See Is What You Get)</li>
			<li>HTML - WYSIWYM (What You See Is What You Mean)</li>
			<li>HTML - Markdown</li>
			<li>HTML - LyX</li>
			<li>HTML - Zeichenkodierung</li>
			<li>HTML - Zeichensatz</li>
			<li>HTML - Unicode</li>
			<li>HTML - UTF-8</li>
			<li>HTML - Multipurpose Internet Mail Extensions</li>
			<li>HTML - Lynx (Browser)</li>
			<li>CSS - Cascading Style Sheets</li>
			<li>CSS - Logische Auszeichnungen</li>
			<li>CSS - Physische Auszeichnungen</li>
			<li>CSS - Quirks-Modus</li>
			<li>CSS - Reset-Stylesheet</li>
		</ul>
		<br/><br/>
		<a href="http://mvanderschaeghe.cloudcontrolled.com" onclick="window.open(this.href);return false;">Original-Aufgabe zum Kapitel 6 in der Cloud (öffnet einen neuen Reiter + CSS 3)</a>
		<br/><br/>
		<a href="kap6/index.htm" onclick="window.open(this.href);return false;">Lösung im Blog (öffnet einen neuen Reiter + CSS 2.1)</a> 
		</p>
		
		<table>
			<thead>
				<tr>
					<th id="titleH2" colspan="4">Hausaufgabe Kapitel 6: Mit CSS formatierte Tabelle aller "XHTML 1.0 strict"-Elemente </th>
				</tr>
				<tr>
					<th id="titleH21" colspan="4">Validiert mit: <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://mvanderschaeghe.cloudcontrolled.com" onclick="window.open(this.href);return false;"><img src="valid-css2-blue.png" alt="W3C CSS Validation Service"/></a> und <a href="http://validator.w3.org/check?uri=mvanderschaeghe.cloudcontrolled.com" onclick="window.open(this.href);return false;"><img src="valid-xhtml10.png" alt="W3C Markup Validation Service"/></a> </th>
				</tr>
				<tr>
						<th>Element-Tag</th>
						<th>Elementbeschreibung</th>
						<th>Inline- oder Blockelement</th>
						<th>Semantisches HTML</th>
				</tr>
			</thead>
			
			<tfoot>
				<tr>
					<th id="footH2" colspan="4">Marcel Vanderschaeghe, November 2013</th>
				</tr>
			</tfoot>
			
			<tbody>

				<tr>
					<td class="tag">&lt;a&gt;&lt;/a&gt;</td>
					<td class="beschreibung">Verweis (Hyperlink) und Anker für Verweise</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>

				<tr>
					<td class="tag">&lt;abbr&gt;&lt;/abbr&gt;</td>
					<td class="beschreibung">Abkürzung</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;acronym&gt;&lt;/acronym&gt;</td>
					<td class="beschreibung">Akronym</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;address&gt;&lt;/address&gt;</td>
					<td class="beschreibung">Kontaktangabe zum Autor eines Inhalts (Credits)</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;area /&gt;</td>
					<td class="beschreibung">Verweis-sensitiver Bereich in einer Image-Map-Grafik</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;b&gt;&lt;/b&gt;</td>
					<td class="beschreibung">Stilistische Hervorhebung im Text (üblicherweise fett dargestellt)</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">nein</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;base /&gt;</td>
					<td class="beschreibung">Basis-URL für Referenzen</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;bdo&gt;&lt;/bdo&gt;</td>
					<td class="beschreibung">Richtungsänderung bei bclassirektionalem Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;big&gt;&lt;/big&gt;</td>
					<td class="beschreibung">Großschrift</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">nein</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;blockquote&gt;&lt;/blockquote&gt;</td>
					<td class="beschreibung">Zitat in Form eines eigenen Textabsatzes</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;body&gt;&lt;/body&gt;</td>
					<td class="beschreibung">Inhaltsbereich eines HTML-Dokuments</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;br /&gt;</td>
					<td class="beschreibung">Erzwungener Zeilenumbruch an der betreffenden Stelle</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;button&gt;&lt;/button&gt;</td>
					<td class="beschreibung">Schaltfläche in einem Formular</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;caption&gt;&lt;/caption&gt;</td>
					<td class="beschreibung">Tabellenüberschrift / -unterschrift</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;cite&gt;&lt;/cite&gt;</td>
					<td class="beschreibung">Zitat innerhalb eines Absatzes</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;code&gt;&lt;/code&gt;</td>
					<td class="beschreibung">Quelltext-Auszug innerhalb eines Absatzes</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;col /&gt;</td>
					<td class="beschreibung">Tabellenspalte</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;colgroup&gt;&lt;/colgroup&gt;</td>
					<td class="beschreibung">Gruppe von Tabellenspalten</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;dd&gt;&lt;/dd&gt;</td>
					<td class="beschreibung">Definition, Beschreibung, detaillierter Inhalt zu einem dt-Element</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;del&gt;&lt;/del&gt;</td>
					<td class="beschreibung">gelöschter Inhalt (Änderungsmarkierung)</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;dfn&gt;&lt;/dfn&gt;</td>
					<td class="beschreibung">Definition innerhalb eines Absatzes</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;div&gt;&lt;/div&gt;</td>
					<td class="beschreibung">Allgemeiner Bereich</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;dl&gt;&lt;/dl&gt;</td>
					<td class="beschreibung">Liste mit dt- und dd-Elementen, für Definitionslisten, Dialoge usw.</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;dt&gt;&lt;/dt&gt;</td>
					<td class="beschreibung">Zu definierender Ausdruck in einer Definitionsliste, Sprechername in einem Dialog usw.</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;em&gt;&lt;/em&gt;</td>
					<td class="beschreibung">emphatischer Ausdruck innerhalb eines Absatzes (z.B. überspitzte Formulierung)</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;fieldset&gt;&lt;/fieldset&gt;</td>
					<td class="beschreibung">Gruppe von Elementen in einem Formular, Reiter in einem Dialog</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;form&gt;&lt;/form&gt;</td>
					<td class="beschreibung">Formular, Dialog</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;h1-h6&gt;&lt;/h1-h6&gt;</td>
					<td class="beschreibung">Überschrift 1. bis 6. Ordnung</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;head&gt;&lt;/head&gt;</td>
					<td class="beschreibung">Kopfbereich eines HTML-Dokuments</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;hr /&gt;</td>
					<td class="beschreibung">Trennlinie</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;html&gt;&lt;/html&gt;</td>
					<td class="beschreibung">Dokumentelement von HTML-Dokumenten, schließt das gesamte Dokument ein</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;i&gt;&lt;/i&gt;</td>
					<td class="beschreibung">spezieller Ausdruck im Text, z.B. Fachterminus oder classiom (üblicherweise kursiv dargestellt)</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">nein</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;img /&gt;</td>
					<td class="beschreibung">Referenzierte und eingebettete Grafik</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;input /&gt;</td>
					<td class="beschreibung">Formularelement, verwendbar für diverse Typen wie Eingabefelder, Schaltflächen, Auswahlfelder usw.</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;ins&gt;&lt;/ins&gt;</td>
					<td class="beschreibung">Eingefügter Inhalt (Änderungsmarkierung)</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;kbd&gt;&lt;/kbd&gt;</td>
					<td class="beschreibung">Darstellung eines über Tastatur einzugebenden Textes im Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;label&gt;&lt;/label&gt;</td>
					<td class="beschreibung">Beschriftungstext eines Formularfeldes</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;legend&gt;&lt;/legend&gt;</td>
					<td class="beschreibung">Überschrift für eine fieldset-Gruppe von Elementen in einem Formular</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;li&gt;&lt;/li&gt;</td>
					<td class="beschreibung">Listenpunkt in einer ul-, ol- oder menu-Liste</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;link /&gt;</td>
					<td class="beschreibung">Logische Beziehungen der aktuellen Webseite zu anderen Webseiten</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;map&gt;&lt;/map&gt;</td>
					<td class="beschreibung">Bereich für verweis-sensitive Grafiken</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;meta /&gt;</td>
					<td class="beschreibung">Meta-Angabe für nicht im Inhalt sichtbare Dokumentinformationen oder für Anweisungen an den Webserver</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;noscript&gt;&lt;/noscript&gt;</td>
					<td class="beschreibung">Bereich für Inhalte, die angezeigt werden, wenn JavaScript im Browser deaktiviert oder nicht verfügbar ist</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;object&gt;&lt;/object&gt;</td>
					<td class="beschreibung">Eingebettetes Objekt, geeignet für spezielle Multimedia-Objekte, Java-Applets usw.</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;ol&gt;&lt;/ol&gt;</td>
					<td class="beschreibung">Geordnete (z.B. nummerierte) Liste</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;optgroup&gt;&lt;/optgroup&gt;</td>
					<td class="beschreibung">Gruppe von Auswahlmöglichkeiten in einer Auswahlliste</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;option&gt;&lt;/option&gt;</td>
					<td class="beschreibung">Auswahlmöglichkeit in einer Auswahlliste</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;p&gt;&lt;/p&gt;</td>
					<td class="beschreibung">Textabsatz</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;param /&gt;</td>
					<td class="beschreibung">Parameter eines Objekts bei object-Element</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;pre&gt;&lt;/pre&gt;</td>
					<td class="beschreibung">Präformatierter Text (alle Whitespace-Zeichen werden im Browser so dargestellt wie im Text enthalten)</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">nein</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;q&gt;&lt;/q&gt;</td>
					<td class="beschreibung">Wörtliche Rede in einem Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;samp&gt;&lt;/samp&gt;</td>
					<td class="beschreibung">Beispieltext in einem dokumentierenden Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;script&gt;&lt;/script&gt;</td>
					<td class="beschreibung">Scriptbereich für JavaScript und andere Scriptsprachen</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;select&gt;&lt;/select&gt;</td>
					<td class="beschreibung">Auswahlliste in einem Formular</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;small&gt;&lt;/small&gt;</td>
					<td class="beschreibung">kleiner dargestellter Text als Normalschrift</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">nein</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;span&gt;&lt;/span&gt;</td>
					<td class="beschreibung">allgemeiner Bereich innerhalb eines Absatzes</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;strong&gt;&lt;/strong&gt;</td>
					<td class="beschreibung">stark betonter Inhalt im Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;style&gt;&lt;/style&gt;</td>
					<td class="beschreibung">Bereich für Stylesheet-Definitionen, z.B. in CSS</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;sub&gt;&lt;/sub&gt;</td>
					<td class="beschreibung">Tiefgestellter Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;sup&gt;&lt;/sup&gt;</td>
					<td class="beschreibung">Hochgestellter Text</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;table&gt;&lt;/table&gt;</td>
					<td class="beschreibung">Tabelle</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;tbody&gt;&lt;/i&gt;</td>
					<td class="beschreibung">Tabellenkörper mit den eigentlichen Daten</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;td&gt;&lt;/td&gt;</td>
					<td class="beschreibung">Tabellenzelle</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;textarea&gt;&lt;/textarea&gt;</td>
					<td class="beschreibung">Mehrzeiliger Eingabebereich in einem Formular</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;tfoot&gt;&lt;/tfoot&gt;</td>
					<td class="beschreibung">Fußbereich in einer Tabelle, z.B. für summarische Daten</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;th&gt;&lt;/th&gt;</td>
					<td class="beschreibung">Tabellenkopfzelle</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;thead&gt;&lt;/thead&gt;</td>
					<td class="beschreibung">Kopfbereich einer Tabelle</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;title&gt;&lt;/title&gt;</td>
					<td class="beschreibung">Titel eines HTML-Dokuments</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;tr&gt;&lt;/tr&gt;</td>
					<td class="beschreibung">Tabellenzeile</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;tt&gt;&lt;/tt&gt;</td>
					<td class="beschreibung">»Fernschreiber«-Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;ul&gt;&lt;/ul&gt;</td>
					<td class="beschreibung">Unsortierte Liste (Aufzählungsliste)</td>
					<td class="inline">Blockelement</td>
					<td class="semantik">ja</td>
				</tr>
				
				<tr>
					<td class="tag">&lt;var&gt;&lt;/var&gt;</td>
					<td class="beschreibung">Variabler Name in einem dokumentierenden Text</td>
					<td class="inline">Inlineelement</td>
					<td class="semantik">ja</td>
				</tr>
	
			</tbody>
			
		</table>
		
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
