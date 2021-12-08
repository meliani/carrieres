@include('frontend.documents.pdf.templates.document_headers')
<?php
$internship = auth()->user()->student->internships->last();
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8" />
<title>La formation de l&#8217;ing&eacute;nieur au sein de l&#8217;INPT a pour ambition de fournir une base documentaire scientifique et technique dont</title>

<meta name="author" content="inpt" />
<style type="text/css">
.Normal {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Batang";
font-size:12.0pt;
color:Black;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
h1 {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:center;
font-family:"Times New Roman";
font-size:14.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
h2 {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:center;
font-family:"Times New Roman";
font-size:16.0pt;
color:Black;
font-style:italic;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
h3 {
margin:1.0pt;
margin-top:5.0pt;
margin-bottom:5.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Arial Unicode MS";
font-size:13.5pt;
color:Black;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
h4 {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:center;
font-family:"Arial";
font-size:12.0pt;
color:Black;
font-style:italic;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
h5 {
margin:1.0pt;
margin-top:12.0pt;
margin-bottom:3.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Batang";
font-size:13.0pt;
color:Black;
font-style:italic;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyText {
mso-style-name:"Body Text";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:justify;
font-family:"Times New Roman";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyText2 {
mso-style-name:"Body Text 2";
margin:1.0pt;
margin-top:5.0pt;
margin-bottom:5.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:justify;
font-family:"Arial";
font-size:13.0pt;
color:#6C6D6F;
font-style:italic;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.spip {
margin:1.0pt;
margin-top:5.0pt;
margin-bottom:5.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Arial Unicode MS";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.Normal_Web_ {
mso-style-name:"Normal (Web)";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Verdana";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.Header {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Times";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.Footer {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Batang";
font-size:12.0pt;
color:Black;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyTextIndent {
mso-style-name:"Body Text Indent";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Times";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyText3 {
mso-style-name:"Body Text 3";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
text-align:justify;
font-family:"Arial";
font-size:12.0pt;
color:Black;
font-style:italic;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyTextIndent2 {
mso-style-name:"Body Text Indent 2";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:35.5pt;
text-align:justify;
font-family:"Arial";
font-size:12.0pt;
color:Black;
font-style:italic;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.BodyTextIndent3 {
mso-style-name:"Body Text Indent 3";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:279.0pt;
margin-right:0.0pt;
text-indent:-279.0pt;
font-family:"Arial";
font-size:12.0pt;
color:Black;
font-style:italic;
font-weight:normal;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.DocumentMap {
mso-style-name:"Document Map";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Tahoma";
font-size:10.0pt;
color:Black;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;background:#000080;
}
.BalloonText {
mso-style-name:"Balloon Text";
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Tahoma";
font-size:8.0pt;
color:Black;
font-weight:bold;
border:none;padding:3.0pt 3.0pt 3.0pt 3.0pt;
}
.Hyperlink {
color:blue;}
.Strong {
font-weight:bold;}
.titre1 {
color:#00216C;font-size:20.0pt;font-family:"Verdana";}
.boldedcoloredtitle1 {
color:#00216C;font-size:12.0pt;font-family:"Verdana";font-weight:bold;}
.Page_Number {
}
.Texte_de_bulles_Car {
color:Black;font-size:8.0pt;font-family:"Tahoma";font-weight:bold;}
.PageBreak {
page-break-after:always;
}
.tm25 {
text-align:center;
}
.tm26 {
color:Black;
font-size:16.0pt;
font-family:"Times New Roman";
}
.tm27 {
text-transform:uppercase;
color:Black;
font-size:16.0pt;
font-family:"Times New Roman";
}
.tm28 {
margin-bottom:3.0pt;
margin-right:-21.5pt;
}
.tm29 {
font-size:11.0pt;
font-family:"Times New Roman";
font-weight:normal;
}
.tm30 {
font-size:11.0pt;
font-family:"Times New Roman";
}
.tm31 {
margin-right:2.0pt;
text-align:justify;
}
.tm32 {
font-size:10.0pt;
font-family:"Times New Roman";
}
.tm33 {
font-size:10.0pt;
font-family:"Times New Roman";
font-weight:normal;
}
.tm34 {
color:#0070C0;
font-size:10.0pt;
font-family:"Cambria";
}
.tm35 {
color:#0070C0;
font-size:10.0pt;
font-family:"Trebuchet MS";
}
.tm36 {
font-size:10.0pt;
font-family:"Trebuchet MS";
}
.tm37 {
font-size:10.0pt;
font-family:"Arial";
}
.tm38 {
margin-top:3.0pt;
margin-bottom:3.0pt;
margin-right:2.5pt;
}
.tm39 {
margin-right:2.0pt;
}
.tm40 {
font-style:italic;
font-size:10.0pt;
}
.tm41 {
font-size:10.0pt;
}
.tm42 {
font-size:10.0pt;
font-weight:bold;
}
.tm43 {
font-size:10.0pt;
font-family:"Trebuchet MS";
font-weight:bold;
}
.tm44 {
margin-top:3.0pt;
margin-bottom:3.0pt;
margin-right:2.0pt;
text-align:justify;
}
.tm45 {
margin-top:3.0pt;
margin-bottom:3.0pt;
margin-right:2.0pt;
}
.tm46 {
font-style:italic;
font-size:11.0pt;
}
.tm47 {
margin-bottom:3.0pt;
text-align:left;
}
.tm48 {
font-size:11.0pt;
font-family:"Times New Roman";
font-weight:bold;
}
.tm49 {
color:#0070C0;
font-size:10.0pt;
font-family:"Cambria";
font-weight:bold;
}
.tm50 {
margin-left:0.0pt;
margin-right:-28.5pt;
text-indent:0.0pt;
text-align:justify;
}
.tm51 {
margin-right:-28.5pt;
text-align:justify;
}
.tm52 {
margin-top:1.0pt;
margin-right:7.0pt;
text-align:justify;
}
.tm53 {
margin-bottom:3.0pt;
margin-left:0.0pt;
margin-right:2.0pt;
text-indent:0.0pt;
}
.tm54 {
margin-bottom:3.0pt;
margin-left:0.0pt;
margin-right:2.0pt;
text-indent:0.0pt;
text-align:justify;
}
.tm55 {
margin-left:0.0pt;
margin-right:2.0pt;
text-indent:0.0pt;
text-align:justify;
}
.tm56 {
margin-bottom:3.0pt;
margin-right:7.0pt;
text-align:justify;
}
.tm57 {
margin-right:2.5pt;
}
.tm58 {
font-style:italic;
font-size:8.0pt;
font-family:"Times New Roman";
}
.tm59 {
margin-left:0.0pt;
margin-right:2.0pt;
text-align:justify;
}
.tm60 {
margin-bottom:3.0pt;
margin-right:2.5pt;
}
.tm61 {
font-style:italic;
font-size:10.0pt;
font-family:"Times New Roman";
font-weight:normal;
}
.tm62 {
font-size:11.0pt;
}
.tm63 {
margin-bottom:3.0pt;
margin-left:0.0pt;
margin-right:7.0pt;
text-indent:0.0pt;
text-align:justify;
}
.tm64 {
margin-bottom:3.0pt;
margin-right:2.5pt;
text-align:justify;
}
.tm65 {
margin-bottom:3.0pt;
margin-right:2.0pt;
text-align:justify;
}
.tm66 {
margin-top:1.0pt;
margin-bottom:3.0pt;
}
.tm67 {
color:#0070C0;
font-size:10.0pt;
}
.tm68 {
margin-top:3.0pt;
margin-right:2.0pt;
}
.tm69 {
margin-right:8.5pt;
text-align:justify;
}
.tm70 {
margin-bottom:3.0pt;
text-align:justify;
}
.tm71 {
margin-bottom:3.0pt;
margin-right:2.0pt;
}
.tm72 {
margin-bottom:6.0pt;
margin-right:2.0pt;
text-align:justify;
}
.tm73 {
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-right:2.0pt;
}
.tm74 {
font-style:italic;
color:Black;
font-size:10.0pt;
font-family:"Times New Roman";
font-weight:normal;
}
.tm75 {
margin-bottom:6.0pt;
margin-right:2.5pt;
text-align:left;
}
.tm76 {
font-size:11.0pt;
font-weight:bold;
}
.tm77 {
margin-right:2.5pt;
text-align:justify;
}
.tm78 {
margin-bottom:5.0pt;
margin-right:2.5pt;
}
.tm79 {
margin-left:0.0pt;
margin-right:2.0pt;
text-indent:0.0pt;
}
.tm80 {
font-style:italic;
font-size:10.0pt;
font-family:"Times New Roman";
}
.tm81 {
text-align:justify;
}
.tm82 {
margin-bottom:6.0pt;
text-align:center;
}
.tm83 {
width:756px;
}
.tm84 {
width:756px;
border-spacing:0px;
}
.tm85 {
border:1px;
}
.tm86 {
height:188px;
}
.tm87 {
vertical-align:top;
}
.tm88 {
border:solid Black 1.0pt;
padding:1.0pt 1.0pt 5.5pt 5.5pt;
}
.tm89 {
width:350mm;
}
.tm90 {
margin-left:0.0pt;
text-indent:0.0pt;
line-height:110%;
text-align:center;
}
.tm91 {
font-style:italic;
font-size:10.0pt;
font-family:"Trebuchet MS";
}
.tm92 {
height:52px;
}

</style>
</head>
@include('frontend.documents.pdf.templates.document_css')

<body>
<p class="BodyText2 tm25"><strong><span class="tm26">CONVENTION </span><span class="tm27">DE STAGE</span><span class="tm26"> </span></strong></p>
<p class="Normal tm28"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 1</span></u><span class="tm30">&nbsp;: Parties signataires de la convention&nbsp;: </span></strong></p>
<p class="Normal tm31"><strong><span class="tm32"></span></strong><span class="tm33">La pr&eacute;sente convention r&egrave;gle les rapports entre l&#8217;Entreprise</span><strong><span
 class="tm32"> </span><span class="tm34">{{ $internship->raison_sociale }}</span><span class="tm35"> </span></strong><span class="tm33">situ&eacute;e&nbsp;au </span><strong><span
 class="tm34">{{ $internship->adresse }}</span><span class="tm35">&nbsp;</span><span class="tm36">-</span><span class="tm35"> </span><span
 class="tm34">{{ $internship->ville }}</span><span class="tm36">,</span><span class="tm35"> </span><span class="tm34">{{ $internship->pays }}</span><span
 class="tm37">&nbsp;</span></strong><span class="tm33">- </span><strong><span class="tm32">repr&eacute;sent&eacute;e par </span><span
 class="tm34">{{ $internship->parrain_name }}</span><span
 class="tm36">,</span><span class="tm35"> </span><span class="tm34">{{ $internship->parrain_fonction }}</span><span class="tm36">,</span></strong></p>
<p class="Normal tm38"><strong><span class="tm32">de premi&egrave;re part, et</span></strong></p>
<p class="BodyText tm39"><em><span class="tm40"></span></em><span class="tm41">L&#8217;Institut National des Postes et T&eacute;l&eacute;communications (INPT) </span><strong><span
 class="tm42">repr&eacute;sent&eacute; par</span></strong><span class="tm41"> </span><span class="tm41">Monsieur </span><strong><span
 class="tm42">Monsieur Ahmed TAMTAOUI</span><span class="tm43">, </span></strong><span class="tm41">Directeur par int&eacute;rim</span><strong><span
 class="tm43">,</span></strong></p>
<p class="Normal tm38"><strong><span class="tm32">de deuxi&egrave;me part, et</span></strong></p>
<p class="Normal tm44"><span class="tm33"></span><strong><span class="tm34">{{ $internship->person->full_name }}</span><span
 class="tm32">, </span></strong><span class="tm33">&eacute;tudiant(e) de la fili&egrave;re</span><span class="tm33"> </span><strong><span
 class="tm34">{{ $internship->person->filiere_text }}</span></strong><span class="tm33"> </span><span
 class="tm33"> de l&#8217;Institut National des Postes et T&eacute;l&eacute;communications (INPT)</span><strong><span class="tm32"> </span></strong><span
 class="tm33">de Rabat, en échange académique à l’Ecole «Ecole Partenaire» sur l’année scolaire «Année Scolaire» dans le cadre d’un partenariat,</span></p>
<p class="Normal tm45"><strong><span class="tm32">de troisi&egrave;me part, </span></strong></p>
<p class="BodyText tm39"><em><span class="tm46">&#160;</span></em></p>
<h4 class="tm47"><strong><span class="tm48"></span><u><span class="tm48">ARTICLE 2</span></u><span class="tm48">&nbsp;: Contenu et objectif du stage</span><span
 class="tm48"> &laquo;&nbsp;Projet de Fin d&#8217;Etudes&nbsp;&raquo; (PFE)&nbsp;: </span></strong></h4>
<p class="BodyText tm39"><span class="tm41">Conform&eacute;ment au r&egrave;glement int&eacute;rieur de l&#8217;Institut National des Postes et T&eacute;l&eacute;communications (INPT), l&#8217;&eacute;l&egrave;ve ing&eacute;nieur
est appel&eacute; &agrave; effectuer un stage de PFE obligatoire pour l&#8217;obtention du dipl&ocirc;me d&#39;ing&eacute;nieur en t&eacute;l&eacute;communications. L&#39;objectif poursuivi du stage de PFE est de donner &agrave;
chaque &eacute;tudiant l&#39;occasion d&#39;effectuer une recherche personnelle et approfondie sur un sujet propos&eacute; par une entreprise afin de s&#39;immerger dans le monde du travail. Il portera sur le sujet suivant&nbsp;:</span></p>
<p class="BodyText tm39"><span class="tm41">&#160;</span></p>
<p class="BodyText tm25"><strong><span class="tm49">{{ $internship->intitule }}</span></strong></p>
<p class="BodyText tm25"><strong><span class="tm49">&#160;</span></strong></p>
<p class="Normal tm50"><strong><span class="tm32">Contenu d&eacute;taill&eacute; du stage&nbsp;: </span></strong></p>
<p class="BodyText"><strong><span class="tm49">{{ $internship->descriptif }}</span></strong></p>
<p class="Normal tm51"><span class="tm29">&#160;</span></p>
<h5 class="tm52"><strong><span class="tm30"></span><u><span class="tm30">ARTICLE 3</span></u><span class="tm30">&nbsp;: Modalit&eacute;s du stage</span></strong></h5>
<p class="Normal tm53"><strong><span class="tm32">P&eacute;riode de stage&nbsp;: </span></strong><span class="tm33">Le stage aura lieu du</span><strong><span
 class="tm32"> </span><span class="tm34">{{ $internship->date_debut->format('d/m/Y') }}</span><span class="tm32"> </span></strong><span class="tm33">au</span><strong><span
 class="tm32"> </span><span class="tm34">{{ $internship->date_fin->format('d/m/Y') }}</span><span class="tm32">.</span></strong></p>
<p class="Normal tm54"><span class="tm33">Un avenant &agrave; la convention pourra &eacute;ventuellement &ecirc;tre &eacute;tabli en cas de prolongation de stage faite &agrave; la demande de l&#8217;entreprise et de l&#8217;&eacute;tudiant
stagiaire. Toutes prolongations seront soumises aux obligations du programme concern&eacute;.</span></p>
<p class="Normal tm53"><strong><span class="tm32">D&eacute;roulement du stage</span></strong></p>
<p class="Normal tm55"><span class="tm33">La dur&eacute;e hebdomadaire maximale de pr&eacute;sence du stagiaire dans l&#8217;entreprise sera de </span><strong><span
 class="tm34">{{ $internship->load ?? '.......' }}</span></strong><span class="tm33"> heures/semaine.</span></p>
<p class="Normal tm55"><span class="tm33">&#160;</span></p>
<p class="Normal tm56"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 4</span></u><span class="tm30">&nbsp;: Statut du stagiaire - </span><span
 class="tm30">Encadrement</span></strong></p>
<p class="BodyText3 tm57"><span class="tm32">Pendant la dur&eacute;e de son stage, le stagiaire reste plac&eacute; sous la responsabilit&eacute; de l&#8217;entreprise d&#8217;accueil tout en demeurant &eacute;tudiant de l&#8217;INPT.
L&#39;&eacute;l&egrave;ve stagiaire pourra revenir &agrave; l&#39;Ecole pendant la dur&eacute;e du stage, pour y suivre certains cours demand&eacute;s explicitement par le programme,  participer &agrave; des r&eacute;unions..&nbsp;;
Le cas &eacute;ch&eacute;ant, les dates seront port&eacute;es &agrave; la connaissance de l&#39;Entreprise par l&#39;Ecole.</span></p>
<p class="BodyText3 tm39"><span class="tm32">Le r&egrave;glement de l&#8217;INPT pr&eacute;voit l&#39;encadrement du stagiaire au cours de sa p&eacute;riode de stage en entreprise. Cet encadrement doit &ecirc;tre assur&eacute;
par un enseignant de l&#8217;INPT et par un membre de l&#39;entreprise charg&eacute; d&#39;accueillir et d&#39;accompagner le stagiaire.</span></p>
<p class="BodyText3 tm39"><em><span class="tm58">&#160;</span></em></p>
<p class="Normal tm59"><span class="tm33"></span><strong><span class="tm32">L&#8217;encadrement sera assur&eacute; par:</span></strong></p>
<p class="Normal tm60"><span class="tm33"></span><strong><span class="tm32">Ma&icirc;tre de stage : </span>
    <span class="tm34">{{ $internship->encadrant_ext_name }}</span><span class="tm36">,</span><span class="tm35"> </span>
    <span class="tm34">{{ $internship->encadrant_ext_fonction }}</span><span
 class="tm36">.</span></strong></p>
<p class="Normal tm60"><span class="tm33"></span><strong><span class="tm32">Tuteur p&eacute;dagogique / Conseiller de stage&nbsp;: </span><span
 class="tm34">{{ $internship->encadrant_int_name ?? '................  ................' }}</span><span class="tm32">.</span></strong></p>
<p class="Normal tm39"><span class="tm33"></span><strong><span class="tm32">Lieu du stage&nbsp;</span></strong><em><span class="tm61">
    (adresse pr&eacute;cise, si diff&eacute;rente de l&#8217;adresse de l&#8217;entreprise indiqu&eacute;e
ci dessus)</span></em><span class="tm33">:</span></p>
<p class="Normal tm39"><span class="tm33">&#160;</span></p>
<p class="BodyText tm39"><span class="tm62">&#160;</span></p>
<p class="Normal tm63"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 5</span></u><span class="tm30">&nbsp;: Discipline </span></strong></p>
<p class="Normal tm64"><span class="tm33">Durant son stage, l&#39;&eacute;tudiant stagiaire est soumis &agrave; la discipline et au r&egrave;glement int&eacute;rieur de l&#39;Entreprise, notamment en ce qui concerne les horaires,
</span><strong><span class="tm32">la r&eacute;glementation du travail, les r&egrave;gles d&#8217;hygi&egrave;ne et de s&eacute;curit&eacute; en vigueur dans l&#8217;entreprise</span></strong><span
 class="tm33">. </span></p>
<p class="Normal tm65"><span class="tm33">Toute sanction disciplinaire ne peut &ecirc;tre d&eacute;cid&eacute;e que par l&#8217;&eacute;cole. Dans ce cas, l&#8217;entreprise informe l&#8217;&eacute;cole des manquements et
lui fournit &eacute;ventuellement les &eacute;l&eacute;ments constitutifs.</span></p>
<p class="BodyText3 tm39"><span class="tm32">En cas de manquement &agrave; la discipline, l&#8217;entreprise, en accord avec le Directeur de l&#39;INPT, peut mettre fin au stage de l&#39;&eacute;tudiant stagiaire, tout en
respectant les dispositions fix&eacute;es &agrave; l&#8217;article 9 de la pr&eacute;sente convention.</span></p>
<p class="BodyText3 tm39"><span class="tm30">&#160;</span></p>
<h3 class="tm66"><strong><span class="tm30"></span><u><span class="tm30">ARTICLE 6</span></u><span class="tm30">&nbsp;: Gratification &#8211; Avantages en nature - Remboursement de frais</span></strong></h3>
<p class="BodyText tm39"><span class="tm41">L&#8217;&eacute;tudiant stagiaire ne per&ccedil;oit aucune r&eacute;mun&eacute;ration. Toutefois il peut lui &ecirc;tre allou&eacute; une gratification.</span></p>
<p class="BodyText tm39"><em><span class="tm40">Lorsque la dur&eacute;e du  stage est sup&eacute;rieure &agrave; trois mois cons&eacute;cutifs, celui-ci fait l&#8217;objet d&#8217;une gratification </span></em></p>
<p class="BodyText tm45"><span class="tm41">Cette derni&egrave;re est fix&eacute;e &agrave; </span>
    <strong><span class="tm49">{{ $internship->remuneration ?? '.......' }}</span></strong><span
 class="tm67"> </span><span class="tm41">bruts par mois. </span></p>
<p class="Normal tm65"><strong><span class="tm32"></span><span class="tm32">Modalit&eacute;s de versement de la gratification&nbsp;: </span></strong><span
 class="tm33">virement</span></p>
<p class="Normal tm31"><span class="tm33">Si le stagiaire b&eacute;n&eacute;ficie d&#8217;avantages en nature (gratuit&eacute; des repas par exemple), le montant repr&eacute;sentant la valeur de ces avantages sera ajout&eacute;
au montant de la gratification  mensuelle avant comparaison au produit de 12.5% du plafond horaire de la s&eacute;curit&eacute; sociale par le nombre d&#8217;heures de stage effectu&eacute;es au cours du mois consid&eacute;r&eacute;.</span></p>
<p class="BodyText tm68"><span class="tm41">Les frais de d&eacute;placement, d&#39;h&eacute;bergement et de restauration engag&eacute;s par l&#8217;&eacute;tudiant stagiaire &agrave; la demande de l&#39;Entreprise, ainsi que
les frais de formation &eacute;ventuellement n&eacute;cessit&eacute;s par le stage, seront int&eacute;gralement pris en charge par celle-ci selon les modalit&eacute;s en vigueur dans l&#8217;entreprise.</span></p>
<p class="Normal tm69"><strong><span class="tm30">&#160;</span></strong></p>
<p class="Normal tm70"><strong><span class="tm30"></span><u><span class="tm30">ARTICLE 7</span></u><span class="tm30">&nbsp;: Protection sociale</span></strong></p>
<p class="Normal tm31"><span class="tm33"></span><span class="tm33">Le stagiaire est couvert par l&#39;assurance de l&#8217;INPT contre les accidents pouvant survenir au cours du stage dans la limite de garantie de son assurance.
L&#8217;&eacute;l&egrave;ve doit contracter lui-m&ecirc;me une assurance le couvrant &agrave; l&#8217;ext&eacute;rieur de l&#8217;INPT durant toute la dur&eacute;e de son stage.</span><span
 class="tm33"> </span></p>
<p class="BodyText tm71"><strong><span class="tm42"></span></strong><span class="tm41">Pendant la dur&eacute;e du stage et sous r&eacute;serve des dispositions de l&#8217;article 7.2 de la pr&eacute;sente convention, l&#8217;&eacute;tudiant
 stagiaire continue &agrave;  percevoir les prestations du r&eacute;gime social &eacute;tudiant.</span></p>
<p class="Normal tm64"><span class="tm33">Quel que soit le montant de la gratification vers&eacute;e, l&#8217;&eacute;tudiant stagiaire conserve son statut d&#8217;&eacute;tudiant&nbsp;; il ne compte pas dans les effectifs
salari&eacute;s de l&#8217;Entreprise&nbsp;et ne peut pr&eacute;tendre b&eacute;n&eacute;ficier des avantages particuliers valables pour le personnel de l&#8217;Entreprise.</span></p>
<p class="Normal tm65"><strong><span class="tm30">7.1&nbsp;: En cas de gratification inf&eacute;rieure ou &eacute;gale &agrave; </span><span
 class="tm30">15%</span><span class="tm30"> du plafond horaire de la s&eacute;curit&eacute; sociale (soit </span><span class="tm30">554.40 euros en 2016</span><span
 class="tm30"> pour une dur&eacute;e l&eacute;gale de travail hebdomadaire de 35 heures) avantages en nature inclus:</span></strong></p>
<p class="Normal tm31"><span class="tm33">Dans ce cas, conform&eacute;ment &agrave; la l&eacute;gislation en vigueur, la gratification de stage n&#8217;est pas soumise &agrave; cotisation sociale.</span></p>
<p class="BodyText tm39"><span class="tm41">L&#8217;&eacute;tudiant stagiaire continue &agrave; b&eacute;n&eacute;ficier de la l&eacute;gislation sur les accidents du travail au titre de l&#8217;article L 412-8-2 du code de
la S&eacute;curit&eacute; Sociale, r&eacute;gime &eacute;tudiant.</span></p>
<p class="Normal tm72"><span class="tm33">&#160;En cas d&#8217;accident survenant &agrave; l&#8217;&eacute;tudiant stagiaire, soit au cours des travaux dans l&#8217;Entreprise, soit au cours du trajet, soit sur des lieux rendus
utiles pour les besoins de son stage, l&#8217;Entreprise s&#8217;engage &agrave; faire parvenir sous 48 heures toutes les informations utiles &agrave; l&#8217;Ecole pour que cette derni&egrave;re puisse &eacute;tablir la d&eacute;claration
d&#8217;accident. </span></p>
<p class="Normal tm64"><span class="tm29"></span><strong><span class="tm30">7.2: En cas de gratification sup&eacute;rieure &agrave; </span><span
 class="tm30">15%</span><span class="tm30"> du plafond horaire de la s&eacute;curit&eacute; sociale (soit </span><span class="tm30">554.40 euros en 2016</span><span
 class="tm30"> pour une dur&eacute;e l&eacute;gale de travail hebdomadaire de 35 heures) : </span></strong></p>
<p class="Normal tm31"><span class="tm33">Les sommes vers&eacute;es prennent alors le caract&egrave;re d&#8217;une r&eacute;mun&eacute;ration.</span></p>
<p class="BodyText2 tm73"><em><span class="tm74">Les cotisations sociales sont calcul&eacute;es sur le diff&eacute;rentiel entre le montant de la gratification et 15% du plafond horaire de la s&eacute;curit&eacute; sociale
multipli&eacute;e par le nombre d&#8217;heure de stage effectu&eacute; dans le mois.</span></em></p>
<p class="Normal tm64"><span class="tm33">L&#8217;&eacute;l&egrave;ve stagiaire b&eacute;n&eacute;ficie de la couverture l&eacute;gale en application des dispositions  des articles L 411-1 et suivants du code de la S&eacute;curit&eacute;
Sociale. En cas d&#8217;accident survenant &agrave; l&#8217;&eacute;tudiant stagiaire, soit au cours des travaux dans l&#8217;Entreprise, soit au cours du trajet, soit sur des lieux rendus utiles pour les besoins de son stage,
l&#8217;Entreprise effectue toutes les d&eacute;marches n&eacute;cessaires aupr&egrave;s de la Caisse Primaire d&#8217;Assurance Maladie et informe l&#8217;Ecole dans les meilleurs d&eacute;lais.</span></p>
<p class="BodyText tm60"><strong><span class="Strong">7.3: D&eacute;placements:  </span></strong></p>
<p class="BodyText tm39"><span class="tm41">En cas de </span><strong><span class="tm42">d&eacute;placement</span></strong><span
 class="tm41">,  il appartient &agrave; l&#8217;entreprise d&#8217;&eacute;tablir, dans tous les cas, un descriptif nominatif de la nature du d&eacute;placement et d&#39;en informer l&#39;</span><strong><span
 class="tm42">Ecole</span></strong><span class="tm41">.</span></p>
<p class="BodyText tm39"><strong><span class="tm42">De plus, en cas de d&eacute;placements &agrave; l&#8217;&eacute;tranger, ceux-ci doivent imp&eacute;rativement &ecirc;tre signal&eacute;s par &eacute;crit &agrave; l&#8217;&eacute;cole
au moins quinze jours avant la date pr&eacute;vue de d&eacute;part. L&#8217;&eacute;cole doit  signaler ces d&eacute;placements &agrave; la s&eacute;curit&eacute; sociale. </span></strong></p>
<p class="BodyText tm39"><span class="tm41">Lorsque ces conditions ne sont pas remplies, l&#8217;entreprise s&#8217;engage &agrave; cotiser pour la protection de l&#8217;&eacute;l&egrave;ve stagiaire et &agrave; faire les
d&eacute;clarations n&eacute;cessaires en cas d&#8217;accident du travail. </span></p>
<p class="Normal tm31"><span class="tm29">&#160;</span></p>
<p class="Normal tm65"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 8</span></u><span class="tm30">&nbsp;: Responsabilit&eacute; civile et assurances</span></strong></p>
<p class="BodyText tm71"><span class="tm41">Chacune des trois parties (entreprise, &eacute;cole, &eacute;l&egrave;ve stagiaire) d&eacute;clare &ecirc;tre garantie au titre de la responsabilit&eacute; civile.</span></p>
<p class="Normal tm65"><strong><span class="tm32">Lorsque l&#39;Entreprise met un v&eacute;hicule &agrave; la disposition du stagiaire, il lui incombe de v&eacute;rifier pr&eacute;alablement que la police d&#39;assurance du
v&eacute;hicule couvre son utilisation par un &eacute;l&egrave;ve stagiaire.</span></strong></p>
<p class="BodyText tm39"><span class="tm41">Lorsque, dans le cadre de son stage, l&#8217;&eacute;tudiant stagiaire utilise son propre v&eacute;hicule ou un v&eacute;hicule pr&ecirc;t&eacute; par un tiers, il d&eacute;clare
express&eacute;ment &agrave; l&#8217;assureur dudit v&eacute;hicule cette utilisation qu&#8217;il est amen&eacute; &agrave; faire et le cas &eacute;ch&eacute;ant s&#8217;acquitte de la prime y aff&eacute;rente. </span></p>
<p class="BodyText tm39"><span class="tm41">&#160;</span></p>
<h1 class="tm75"><strong><span class="tm76"></span><u><span class="tm76">ARTICLE 9</span></u><span class="tm76">&nbsp;: Absence et  Interruption du stage</span></strong></h1>
<p class="Normal tm77"><strong><span class="tm32">9.1&nbsp;: Interruption temporaire</span></strong></p>
<p class="BodyText tm39"><span class="tm41">Toute absence devra &ecirc;tre signal&eacute;e par l&#8217;Entreprise &agrave; l&#8217;&eacute;tablissement.</span></p>
<p class="BodyText tm78"><span class="tm41">Dans le cas d&#8217;une interruption, d&#8217;une semaine au moins,  pour motif circonstanci&eacute; ou contexte exceptionnel, autoris&eacute;e par l&#8217;entreprise, un avenant
&agrave; la pr&eacute;sente convention devra &ecirc;tre sign&eacute; au pr&eacute;alable par les cocontractants.</span></p>
<h1 class="tm77"><strong><span class="tm42">9.2&nbsp;: Interruption d&eacute;finitive</span></strong></h1>
<p class="Normal tm31"><strong><span class="tm32">En cas de volont&eacute; d&#8217;une des trois parties (entreprise, &eacute;cole, &eacute;tudiant(e)) d&#8217;interrompre d&eacute;finitivement  le  stage, </span></strong><span
 class="tm33">celle-ci devra imm&eacute;diatement en informer les deux autres parties par &eacute;crit. Les raisons invoqu&eacute;es seront examin&eacute;es en &eacute;troite concertation.</span><strong><span
 class="tm32"> La d&eacute;cision d&eacute;finitive d&#8217;interruption du stage ne sera prise qu&#8217;&agrave; l&#8217;issue de cette phase de concertation. </span></strong></p>
<p class="Normal tm31"><strong><span class="tm32">&#160;</span></strong></p>
<p class="Normal tm54"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 10</span></u><span class="tm30">&nbsp;: Fin du stage &#8211; Rapport &#8211; Soutenance - Evaluation</span></strong></p>
<p class="BodyText tm60"><span class="tm41">A l&#8217;issue du stage, l&#8217;Entreprise d&eacute;livre au stagiaire une attestation de stage et  remplit une fiche d&#8217;&eacute;valuation qu&#8217;elle retourne &agrave;
l&#8217;Ecole. De son cot&eacute;, l</span><span class="tm41">&#8217;&eacute;tudiant est tenu de pr&eacute;senter les r&eacute;sultats de son travail, tant par &eacute;crit dans son m&eacute;moire de fin d&#8217;&eacute;tudes,
qu&#39;oralement lors de sa soutenance devant un jury comprenant des responsables de l&#8217;entreprise accueillante ou autres et aussi des enseignants de l&#8217;INPT.</span></p>
<p class="BodyText tm60"><span class="tm41">&#160;</span></p>
<p class="Normal tm39"><strong><span class="tm32">10.1&nbsp;: Soutenance de stage </span></strong></p>
<p class="BodyTextIndent2 tm79"><span class="tm32">Le stagiaire est autoris&eacute; &agrave; faire une pr&eacute;sentation de son travail devant un  jury de stage. La pr&eacute;sentation et le rapport devront avoir &eacute;t&eacute;
valid&eacute;s par l&#8217;entreprise au pr&eacute;alable et par l&#8217;enseignant encadrant &agrave; l&#8217;INPT. </span></p>
<p class="BodyTextIndent2 tm79"><span class="tm32">L&#39;&eacute;tudiant s&#39;engage &agrave; fournir au terme de son stage un rapport (derni&egrave;re version) &agrave; l&#39;organisme d&#8217;accueil et &agrave; l&#39;INPT
au maximum une semaine avant la date de la soutenance.</span></p>
<p class="Normal_Web_ tm64"><span class="tm32">La semaine des soutenances du Projet de Fin d&#39;Etudes (PFE) se d&eacute;roule &agrave; l&#39;INPT la deuxi&egrave;me quinzaine du mois de Juin. </span></p>
<p class="Normal tm57"><strong><span class="tm32">10.2&nbsp;: Evaluation du stage</span></strong></p>
<p class="BodyText3 tm39"><span class="tm32">&Agrave; l&#8217;issue de chaque stage, une &eacute;valuation &#8220;&agrave; chaud&#8221; est faite. Une synth&egrave;se d&#8217;&eacute;valuation pour chaque stagiaire est adress&eacute;e
par les encadrants.</span></p>
<p class="BodyTextIndent2 tm79"><span class="tm32">A la fin du stage et avant la soutenance, le Parrain de l&#39;organisme d&#8217;accueil (ou son d&eacute;l&eacute;gu&eacute;) est pri&eacute; d&#8217;&eacute;tablir une &eacute;valuation
du comportement du stagiaire et de la qualit&eacute; du travail effectu&eacute;. Cette lettre sera envoy&eacute;e par courrier sous enveloppe cachet&eacute;e &agrave; l&#8217;INPT &agrave; l&#8217;adresse suivante&nbsp;: INPT.
Direction Adjointe des Stages et Relations Entreprises. Service des Stages. Avenue Allal Al Fassi. Madinat Al Irfane Rabat. Maroc</span></p>
<p class="Normal tm31"><span class="tm29">&#160;</span></p>
<p class="Normal tm65"><span class="tm29"></span><strong><u><span class="tm30">ARTICLE 11</span></u><span class="tm30">&nbsp;: Devoir de r&eacute;serve et  confidentialit&eacute;</span></strong></p>
<p class="BodyText tm39"><span class="tm41">Le devoir de r&eacute;serve est de rigueur absolue. Les &eacute;tudiants stagiaires prennent donc l&#39;engagement de n&#39;utiliser en aucun cas les informations recueillies ou
obtenues par eux pour en faire l&#39;objet de publication, communication &agrave; des tiers sans accord pr&eacute;alable de la Direction de l&#39;Entreprise, y compris le rapport de stage. Cet engagement vaudra non seulement
pour la dur&eacute;e du stage mais &eacute;galement apr&egrave;s son expiration. L&#39;&eacute;tudiant s&#39;engage &agrave; ne conserver, emporter, ou prendre copie d&#39;aucun document ou logiciel, de quelque nature que
ce soit, appartenant &agrave; l&#39;Entreprise, sauf accord de cette derni&egrave;re.</span></p>
<p class="BodyText3 tm39"><em><span class="tm80">Nota&nbsp;: Dans le cadre de la confidentialit&eacute; des informations contenues dans le rapport, l&#8217;Entreprise peut demander une restriction de la diffusion du rapport,
voire le retrait de certains &eacute;l&eacute;ments tr&egrave;s confidentiels. Les personnes amen&eacute;es &agrave; en conna&icirc;tre sont contraintes par le secret professionnel &agrave; n&#8217;utiliser ni ne divulguer
les informations du rapport.</span></em></p>
<p class="Normal tm31"><span class="tm29">&#160;</span></p>
<h3 class="tm66"><strong><span class="tm30"></span><u><span class="tm30">ARTICLE 12</span></u><span class="tm30">&nbsp;: Recrutement</span></strong></h3>
<p class="Normal tm81"><span class="tm33"></span><span class="tm33">S&#8217;il advenait qu&#8217;un contrat de travail prenant effet avant la date de fin du stage soit sign&eacute; avec l&#8217;Entreprise, la pr&eacute;sente
convention deviendrait caduque&nbsp;; l&#8217;&eacute;tudiant stagiaire perdrait son statut d&#8217;&eacute;tudiant et  ne rel&egrave;verait plus de la responsabilit&eacute; de l&#8217;Ecole. Ce dernier devrait imp&eacute;rativement
en &ecirc;tre averti avant signature du </span><span class="tm33">contrat. </span></p>
<p class="Normal tm81"><span class="tm33">&#160;</span></p>
<p class="Normal tm82"><em><span class="tm61"></span><strong><span class="tm32">Document &eacute;tabli en quatre exemplaires; le premier est destin&eacute; au Coordonnateur de fili&egrave;re, le deuxi&egrave;me &agrave; l&#39;Entreprise
accueillant le stagiaire, le troisi&egrave;me  &agrave; l&#8217;Ecole et le quatri&egrave;me &agrave; l&#39;&eacute;tudiant.</span></strong></em></p>
    
    @include('frontend.documents.pdf.templates.partials.signature_fields')

<div id="footer" title="footer"><p style="line-height: 100%">
        @include('frontend.documents.pdf.templates.document_tag_v1')
    
        @include('frontend.documents.pdf.templates.document_edited_online')
    </div>
</body>
</html>