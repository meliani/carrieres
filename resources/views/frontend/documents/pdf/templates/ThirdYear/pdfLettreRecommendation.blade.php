<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8" />
<title></title>

<meta name="author" content="user" />
<style type="text/css">
.Normal {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Times New Roman";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:1.0pt 1.0pt 1.0pt 1.0pt;
}
.Header {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Times New Roman";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:1.0pt 1.0pt 1.0pt 1.0pt;
}
.Footer {
margin:1.0pt;
margin-top:1.0pt;
margin-bottom:1.0pt;
margin-left:0.0pt;
margin-right:0.0pt;
text-indent:0.0pt;
font-family:"Times New Roman";
font-size:12.0pt;
color:Black;
font-weight:normal;
border:none;padding:1.0pt 1.0pt 1.0pt 1.0pt;
}
.Strong {
font-weight:bold;}
.Page_Number {
}
.PageBreak {
page-break-after:always;
}
.tm6 {
text-align:justify;
}
.tm7 {
font-family:"Arial";
}
.tm8 {
font-family:"Arial";
font-weight:bold;
}
.tm9 {
margin-left:248.0pt;
text-indent:35.5pt;
text-align:right;
}
.tm10 {
color:#0070C0;
font-family:"Arial";
}
.tm11 {
color:#0070C0;
font-family:"Arial";
font-weight:bold;
}

</style>
</head>
<body>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><strong><span class="tm8">&#160;</span></strong></p>
<p class="Normal tm6"><strong><span class="tm8">&#160;</span></strong></p>
<p class="Normal tm9"><span class="tm7">Rabat, le </span><span class="tm10">{{ Carbon\Carbon::now()->isoFormat('dddd Do MMMM YYYY') }}</span><span
 class="tm7"> </span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">Objet&nbsp;: Lettre de recommandation</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">Madame, Monsieur, </span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">Nous vous remercions de bien vouloir accorder un Stage de Projet de Fin d&#8217;Etudes (PFE) &agrave;  </span><strong><span
 class="tm11"> {{ user()->student->title }} {{ user()->student->full_name }} </span></strong><span class="tm7">, &eacute;l&egrave;ve ing&eacute;nieur de </span><strong><span
 class="tm8">3&egrave;me ann&eacute;e &agrave; l&#8217;INPT</span></strong><span class="tm7"> de Rabat. En accueillant notre &eacute;l&egrave;ve stagiaire au sein de votre entreprise, vous auriez contribu&eacute; &agrave;
une meilleure pr&eacute;paration pour son insertion dans la vie professionnelle.</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">Les stages de PFE int&eacute;gr&eacute;s &agrave; la structure p&eacute;dagogique du cycle des Ing&eacute;nieurs d&#8217;Etat (INE), permettent &agrave; l&#8217;&eacute;l&egrave;ve ing&eacute;nieur
d&#8217;effectuer, en situation r&eacute;elle, une recherche personnelle approfondie sur le th&egrave;me du projet propos&eacute;. En plus, gr&acirc;ce &agrave; vos appr&eacute;ciations des capacit&eacute;s et des comp&eacute;tences
de notre &eacute;l&egrave;ve, nous pourrions am&eacute;liorer notre action p&eacute;dagogique en rapprochant notre formation aux exigences du march&eacute; de travail.</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">A l&#8217;issue de ce stage, l&#8217;&eacute;l&egrave;ve ing&eacute;nieur est tenu d&#8217;&eacute;laborer un rapport dans lequel il pr&eacute;sentera les r&eacute;sultats de son travail.
Une copie dudit rapport sera remise &agrave; l&#8217;INPT et une autre &agrave; votre entreprise. L&#8217;&eacute;l&egrave;ve devra &eacute;galement soutenir son sujet de PFE devant un jury compos&eacute; d&#8217;enseignants
de l&#8217;INPT et d&#8217;un ou plusieurs repr&eacute;sentant(s) de votre honorable entreprise que vous voudriez bien d&eacute;signer.</span></p>
<p class="Normal tm6"><span class="tm7">&#160;</span></p>
<p class="Normal tm6"><span class="tm7">En vous remerciant de votre coop&eacute;ration, nous vous prions d&#8217;agr&eacute;er, Madame, Monsieur, l&#8217;expression de nos salutations les meilleures.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<br><br><br>
<div align="center"><!-- Signature -->
	<img src="{{ public_path('templates/pdf/images/signature.png') }}" name="Image1" align="center" width="231" height="124" border="0"/>
</div><!-- End Signature -->
</body>
</html>