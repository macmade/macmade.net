<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>T3FRUniversity 2005 - Boîte à outils - CSS</h1>
							<h2>CSS: Améliorer les performances</h2>
							<div>
								Dans Typo3, la plupart des extensions ajoutent des styles CSS par défaut dans les entêtes de page. Ceux si s'affichant sur absolument toutes les pages, même celles où ils sont inutiles, il est préférable de les effacer. Voici un exemple avec l'extension IndexedSearch, à placer dans le champ <span class="strong">«Setup»</span> d'un gabarit TypoScript:
							</div>
							<div class="code">
// Erase CSS defaulty styles
plugin.tx_indexedsearch._CSS_DEFAULT_STYLE >
							</div>
							<h2>CSS: Inclure des styles dans une page précise</h2>
							<div>
								Pour inclure des styles spécifiques à une page ou à une partie de l'arborescence, nous vous recommendons l'utilisation de l'extension <a href="http://typo3.org/extensions/repository/view/css_select/0.5.0/" title="Page StyleSheet Selector">«Page StyleSheet Selector»</a>.
							</div>
							<h2>CSS: Construction de la feuille de style</h2>
							<div>
								Voici un exemple de feuille de style conçue pour Typo3. Celle ci peut se décomposer en 3 partie distinctes. En premier lieu, une configuration de tous les éléments basique et génériques. Ceux-ci vont définir l'apparence globale du site, qui pourra ensuite être affinée dans les autres sections. En second lieu, les éléments et classes liés à l'interface graphique, et en troisième, les éléments et classes liés aux éléments de contenu de Typo3.
							</div>
							<div class="code">
/***************************************************************
* BASE ELEMENTS- SECTION 1
*
* Main classes
***************************************************************/

/* BODY - Generic */
BODY {
	background: #FFFFFF;
	margin: 5px;
	color: #4D4D4D;
	font-style: normal;
	font-weight: normal;
	font-size: 12px;
	line-height: normal;
	text-decoration: none;
	font-family: Verdana, Helvetica, Arial, Geneva, Swiss, SunSans-Regular, sans-serif;
}

/* TD, LI - Generic */
TD, LI {
	color: #4D4D4D;
	font-style: normal;
	font-weight: normal;
	font-size: 11px;
	line-height: normal;
	text-decoration: none;
	font-family: Verdana, Helvetica, Arial, Geneva, Swiss, SunSans-Regular, sans-serif;
}

/* LI - Unordered list */
UL > LI {
	list-style-image: url("/fileadmin/templates/gadlab/list.gif");
}

/* H1 - Generic */
H1 {
	color: #008AB8;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	line-height: normal;
	margin-top: 2px;
	margin-bottom: 2px;
}

/* H2 - Generic */
H2 {
	color: #008AB8;
	font-style: normal;
	font-weight: normal;
	font-size: 18px;
	line-height: normal;
	margin-top: 2px;
	margin-bottom: 2px;
}

/* H3 - Generic */
H3 {
	color: #008AB8;
	font-style: normal;
	font-weight: normal;
	font-size: 15px;
	line-height: normal;
	margin-top: 2px;
	margin-bottom: 2px;
}

/* H# - Generic */
H4, H5, H6 {
	color: #008AB8;
	font-style: normal;
	font-weight: bold;
	font-size: 12px;
	line-height: normal;
	margin-top: 2px;
	margin-bottom: 2px;
}

/* HR - Generic */
HR {
	border: none;
	width: 100%;
	color: #4B4F53;
	background-color: #4B4F53;
	height: 1px;
	}

/* A - Generic */
A {
	text-decoration: none;
}

/* A - Link */
A:link {
	color: #008AB8;
	text-decoration: none;
}

/* A - Visited link */
A:visited {
	color: #008AB8;
}

/* A - Hover link */
A:hover {
	color: #FF5B14;
	text-decoration: underline;
}

/* A - Active link */
A:active {
	color: #FF5B14;
	text-decoration: underline;
}

/* FORM - Generic */
FORM {
	margin: 0px;
}

/* INPUT - Generic */
INPUT {
	color: #4D4D4D;
	font-style: normal;
	font-weight: normal;
	font-size: 11px;
	line-height: normal;
	text-decoration: none;
	font-family: Verdana, Helvetica, Arial, Geneva, Swiss, SunSans-Regular, sans-serif;
	border: solid 1px #BCBCBC;
	background-color: #FFFFFF;
	margin-top: 2px;
	vertical-align: middle;
}

/* TEXTAREA - Generic */
TEXTAREA {
	color: #4D4D4D;
	font-style: normal;
	font-weight: normal;
	font-size: 11px;
	line-height: normal;
	text-decoration: none;
	font-family: Verdana, Helvetica, Arial, Geneva, Swiss, SunSans-Regular, sans-serif;
	border: solid 1px #BCBCBC;
	background-color: #FFFFFF;
	margin-top: 2px;
	vertical-align: middle;
}

/* SELECT - Generic */
SELECT {
	color: #4D4D4D;
	font-style: normal;
	font-weight: normal;
	font-size: 11px;
	line-height: normal;
	text-decoration: none;
	font-family: Verdana, Helvetica, Arial, Geneva, Swiss, SunSans-Regular;
	border: solid 1px #BCBCBC;
	background-color: #FFFFFF;
	margin-top: 2px;
	vertical-align: middle;
}

/* FIELDSET - Generic */
FIELDSET {
	background-color: #F7F7F7;
	border: solid 1px #BCBCBC;
}

/* LEGEND - Generic */
LEGEND {
	color: #008AB8;
	font-weight: bold;
}

/***************************************************************
* BASE ELEMENTS- SECTION 2
*
* Template classes
***************************************************************/

/* Menu - Periph */
TD.menuPeriph {
	vertical-align: bottom;
}
TD.menuPeriph A {
	color: #4D4D4D;
}

/* FCE - Box */
TABLE.fceTeaserBox TD.fceTeaserBox-content {
	background-color: #FFFFFF;
	padding: 5px;
}

/* Content - Images */
TD.content A IMG {
	border: none;
}

/* Miscellaneous */
.noBorder {
	border: none;
}
.strong {
	font-weight: bold;
	color: #5A85A1;
}

/***************************************************************
* BASE ELEMENTS- SECTION 3
*
* Typo3 CSS styled content classes
***************************************************************/

/* P - Body text */
P.bodytext {
	text-align: justify;
}
P.bodytext[ALIGN="right"] {
	text-align: right;
}
P.bodytext[ALIGN="center"] {
	text-align: center;
}

/* TABLE - HTML Area */
TABLE.contenttable {
	border: solid 1px #BCBCBC;
	padding: 10px;
	border-collapse: collapse;
	width: 100%;
	margin-top: 2px;
	margin-bottom: 2px;
}
TABLE.contenttable TD {
	padding: 10px;
	border: solid 1px #BCBCBC;
	background-color: #FFFFFF;
}
TABLE.contenttable TH {
	background-color: #F7F7F7;
	padding: 10px;
	border: solid 1px #BCBCBC;
}
TABLE.contenttable P.bodytext {
	text-align: left;
}
TABLE.contenttable TD[STYLE] P.bodytext {
	text-align: inherit;
}

/* TABLE - File list */
TABLE.csc-uploads {
	border: solid 1px #BCBCBC;
	border-collapse: collapse;
	width: 100%;
	margin-top: 5px;
	margin-bottom: 5px;
}
TABLE.csc-uploads TD {
	padding: 5px;
	border: solid 1px #BCBCBC;
	background: #FFFFFF;
}
TABLE.csc-uploads TR.tr-even TD {
	background: #F7F7F7;
}
TABLE.csc-uploads TD.csc-uploads-fileSize {
	text-align: right;
	width: 10%;
	white-space: nowrap;
}

/* TABLE - Mail form */
TABLE.csc-mailform {
	border: solid 1px #BCBCBC;
	border-collapse: collapse;
	width: 100%;
	margin-top: 5px;
	margin-bottom: 5px;
}
TABLE.csc-mailform TD {
	padding: 5px;
	background-color: #F7F7F7;
	vertical-align: middle;
	text-align: left;
	border-bottom: solid 1px #BCBCBC;
	border-top: solid 1px #BCBCBC;
}
TABLE.csc-mailform TD.csc-form-labelcell {
	background: #F7F7F7;
	width: 25%;
	font-weight: bold;
	vertical-align: top;
}
TABLE.csc-mailform P.csc-form-label-req {
	color: #008AB8;
}
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
