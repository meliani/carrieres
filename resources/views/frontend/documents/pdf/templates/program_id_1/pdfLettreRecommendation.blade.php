
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.2.3.2 (Windows)"/>
	<meta name="author" content="nawalmoumen"/>
	<meta name="created" content="2013-04-03T13:18:00"/>
	<meta name="changed" content="2019-05-01T13:16:45.261000000"/>
	<style type="text/css">
		@page { size: 21cm 29.7cm; margin-right: 3.5cm; margin-left: 3.5cm; margin-top: 1.25cm; margin-bottom: 1.25cm }
		p { font-family: "Times New Roman", serif; font-size: 14pt; text-align:justify; margin-bottom: 0.25cm; direction: ltr; color: #000000; line-height: 130%; orphans: 2; widows: 2; background: transparent }
		p.western { font-family: "Times New Roman", serif; font-size: 15pt; }
		p.cjk { font-family: "Times New Roman", serif; font-size: 14pt }
		p.ctl { font-family: "Times New Roman", serif; font-size: 14pt; }
		a:link { color: #0000ff; text-decoration: underline }
		a:visited { color: #800000; text-decoration: underline }
		img, table p{text-align: center; margin: auto}
		.canvas{
		margin-left: 20mm;
		margin-right: 20mm;
	}
	</style>
</head>

<body class="canvas" lang="fr-FR" text="#000000" link="#0000ff" vlink="#800000" dir="ltr">
<p lang="en-US" class="western" align="right" style="margin-bottom: 0cm; line-height: 100%; text-align:right;">
<font face="Times New Roman, serif">Rabat, le :
		{{ Carbon\Carbon::now()->isoFormat('dddd Do MMMM YYYY') }}
	</font></p>
<p class="western" align="center" style="margin-bottom: 0cm; line-height: 100%">
<br/>

</p>
<center>
	<table width="60%" cellpadding="4" cellspacing="0">
		<col width="256*"/>

		<tr>
			<td width="100%" valign="top" style="border: none; padding: 0cm"><p lang="en-US" class="western" align="center" style="margin-bottom: 0cm">
				<font face="Times New Roman, serif"><font size="5" style="font-size: 18pt"><span lang="fr-FR"><span style="font-weight: normal">Lettre
				de recommandation</span></span></font><font size="4" style="font-size: 16pt"><span lang="fr-FR"><b>
				                   </b></span></font></font>
				</p>
				<p lang="en-US" class="western" align="center"><font face="Times New Roman, serif"><span lang="fr-FR">Stage
				ouvrier de la 1</span><sup><span lang="fr-FR">&egrave;re</span></sup><span lang="fr-FR">
				ann&eacute;e du cycle des Ing&eacute;nieurs d&rsquo;Etat (INE) de
				l&rsquo;Institut National des Postes et T&eacute;l&eacute;communications
				(INPT)</span></font></p>
			</td>
		</tr>
	</table>
</center>
<p class="western" align="justify" style="margin-bottom: 0cm; line-height: 100%">
<br/>

</p>
<p>
Monsieur le Directeur,
</p><p>
Nous vous remercions par la présente de bien vouloir accorder un Stage 
Ouvrier à notre élève ingénieur de première année,  
<b>{{ auth()->user()->person->title }} {{ auth()->user()->person->long_full_name }}</b>. 
En accueillant notre élève-stagiaire au sein de votre entreprise, vous auriez contribué ainsi à une meilleure préparation pour son insertion dans la vie professionnelle.
</p><p>
Les stages ouvriers intégrés à la structure pédagogique du cycle INE permettent à l’élève ingénieur de se familiariser avec les conditions de travail et observer le fonctionnement de l’entreprise. En plus, grâce à vos appréciations des capacités et des compétences de notre élève, nous pourrions améliorer notre action pédagogique en rapprochant notre formation aux exigences du marché de travail.
</p><p>
A l’issue de ce stage, l’élève ingénieur est tenu d’élaborer un rapport dans lequel il présentera les résultats de son travail. Une copie dudit rapport sera remise à l’INPT et une autre à votre entreprise. 
</p><p>
Ce Stage Ouvrier est d’une durée de 4 semaines ou plus. (entre le 05 juillet et le 05 septembre de chaque année). Nous vous confirmons que notre élève stagiaire est couvert par l’assurance de l’INPT contre les accidents pouvant survenir au cours de ce stage et ce dans la limite de garantie de son assurance.
</p><p>
En vous remerciant de votre coopération, nous vous prions d’agréer, Monsieur le Directeur, l’expression de nos salutations les meilleures.
</p>
<p class="western" style="margin-bottom: 0cm; line-height: 100%"><br/>

</p>
<p class="western" style="margin-bottom: 0cm; line-height: 100%"><br/>

</p>
<p class="western" style="margin-bottom: 0cm; line-height: 100%"><br/>

</p>
<div align="center">
	<img src="{{ public_path('templates/pdf/images/signature.png') }}" name="Image1" align="center" width="231" height="124" border="0"/>
</div>
</body>
</html>