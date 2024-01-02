@include('frontend.documents.pdf.templates.document_headers')
<?php
// $internship = user()->student->internships->last();
$internship = user()->student->internship;

?>


<style type="text/css">
    p {
        direction: ltr;
        line-height: 115%;
        text-align: left;
        orphans: 2;
        widows: 2;
        background: transparent
    }

    h2 {
        direction: ltr;
        line-height: 100%;
        text-align: left;
        page-break-inside: avoid;
        orphans: 2;
        widows: 2;
        background: transparent;
        page-break-after: avoid
    }

    h2.western {
        font-size: 18pt;
        font-weight: bold
    }

    h2.cjk {
        font-size: 18pt;
        font-weight: bold
    }

    h2.ctl {
        font-size: 18pt
    }

    h3 {
        direction: ltr;
        line-height: 100%;
        text-align: left;
        page-break-inside: avoid;
        orphans: 2;
        widows: 2;
        background: transparent;
        page-break-after: avoid
    }

    h3.western {
        font-size: 14pt;
        font-weight: bold
    }

    h3.cjk {
        font-size: 14pt;
        font-weight: bold
    }

    h3.ctl {
        font-size: 14pt
    }

    a:link {
        color: #000080;
        so-language: zxx;
        text-decoration: underline
    }

    a:visited {
        color: #800000;
        so-language: zxx;
        text-decoration: underline
    }

    table,
    td {
        border: 1px solid black;
    }

    #footer {
        position: fixed;
        left: 0;
        bottom: -200px;
        height: 100px;
        width: 100%;
        color: darkgrey;
        background-color: transparent;
        padding: 0.01em 16px;
        font-family: Verdana, sans-serif;
        font-size: 15px;
        line-height: 1.5;
    }
</style>
@include('frontend.documents.pdf.templates.document_css')

</head>

<body lang="fr-FR" link="#000080" vlink="#800000" dir="ltr">

    <center>
        <table width="528" cellpadding="7" cellspacing="0">
            <col width="512" />

            <tr>
                <td width="512">
                    <h2 class="western" align="center" style="orphans: 0; widows: 0"><a name="_h9k9ihsvq0zk"></a>
                        CONVENTION DE STAGE &quot;TECHNIQUE&quot;</h2>
                    <p align="center" style=" orphans: 0; widows: 0">
                        <font face="Arial, serif">2</font><sup>
                            <font face="Arial, serif">ème</font>
                        </sup>
                        <font face="Arial, serif">
                            Ann&eacute;e du cycle des Ing&eacute;nieurs </font>
                        <font face="Arial, serif">d&rsquo;&Eacute;tat</font>
                        <font face="Arial, serif">
                            (INE) </font>
                    </p>
                    <p align="center" style="orphans: 0; widows: 0">
                        <font face="Arial, serif">de
                            l&rsquo;Institut National des Postes et T&eacute;l&eacute;communications
                            (INPT)</font>
                    </p>
                </td>
            </tr>
        </table>
    </center>
    <p align="justify" style=" line-height: 100%">&nbsp;</p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Entre
            : L&rsquo;Institut National des Postes et T&eacute;l&eacute;communications
        </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Situ&eacute;
            au Av. Allal El Fassi, Madinat Al Irfane, Rabat - Maroc</font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Repr&eacute;sent&eacute;
            par {{ config('school.current.signature.envoy_title') }}
            </span><strong><span class="tm91">{{ config('school.current.signature.envoy_name') }},
                    {{ config('school.current.signature.envoy_occupation') }},
                </span></strong>
    </p>
    </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Et
            d&eacute;sign&eacute; dans ce qui suit par l&rsquo;INPT</font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Et
        </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->organization_name }}</b></font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Situ&eacute;
            au </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->adresse }}</b></font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Repr&eacute;sent&eacute;
            par </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->parrain_name }}</b></font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Et
            d&eacute;sign&eacute; dans ce qui suit par l&rsquo;organisme
            d&rsquo;accueil</font>
    </p>
    <h3 class="western"><a name="_9plas6kmmhrv"></a>Pr&eacute;ambule</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">L'INPT
            forme des ing&eacute;nieurs en R&eacute;seaux de T&eacute;l&eacute;communications,
            de l&rsquo;Informatique et du Multim&eacute;dia. Ces ing&eacute;nieurs
            pourront &ecirc;tre de futurs responsables pour des entreprises, dans
            un monde ouvert aux dynamiques des r&eacute;seaux et des syst&egrave;mes
            d'informations. </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">La
            mise en situation professionnelle est une &eacute;tape importante
            dans la formation d&rsquo;ing&eacute;nieurs, elle permet aux &eacute;l&egrave;ves
            de se confronter aux r&eacute;alit&eacute;s techniques,
            scientifiques, &eacute;conomiques et sociales. C&rsquo;est dans cette
            optique que l&rsquo;INPT s&rsquo;inscrit et marque sa volont&eacute;
            d&rsquo;avoir dans ses programmes de formation, des stages de divers
            types orient&eacute;s vers des objectifs globaux et sp&eacute;cifiques
            (Stage Ouvrier, Stage Technique et Stage de Projet de Fin d&rsquo;&Eacute;tudes).
        </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">
            Durant le stage technique dont la durée est de 4 à 8 semaines,
            l’élève ingénieur effectue une recherche personnelle sur
            le thème proposé.</font>
    </p>
    <h3 class="western"><a name="_dhr18evwjqdy"></a>Article 1</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">La
            pr&eacute;sente convention r&egrave;gle les rapports entre
            l&rsquo;organisme d&rsquo;accueil d'une part, l&rsquo;INPT et le
            stagiaire d'autre part. </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Cette
            convention concerne l&rsquo;&eacute;l&egrave;ve ing&eacute;nieur :</font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt"><b> {{ $internship->student->long_full_name }}</b>,
            &eacute;l&egrave;ve
            ing&eacute;nieur de la 2<sup>&egrave;me</sup>
            ann&eacute;e du cycle INE de l&rsquo;INPT.</font>
    </p>
    <h3 class="western"><a name="_9f4lltgvdivs"></a>Article 2</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">L&rsquo;&eacute;tudiant(e)
            sera encadr&eacute;(e) par un Responsable de stage d&eacute;sign&eacute;
            par l'organisme d'accueil </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->encadrant_ext_name }}</b></font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Le
            th&egrave;me du stage est &eacute;tabli d'un commun accord entre
            l&rsquo;organisme d&rsquo;accueil et l&rsquo;&eacute;l&egrave;ve
            ing&eacute;nieur.</font>
    </p>
    <h3 class="western"><a name="_2sl9n78wlxhp"></a>Article 3</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Th&egrave;me
            du stage : </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->title }}</b></font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">La
            dur&eacute;e du stage est fix&eacute;e &agrave; </font>
        <font size="2" style="font-size: 11pt"><b>{{ $internship->duree }}</b></font>
        <font size="2" style="font-size: 11pt">, du
            <b>{{ $internship->starting_at->format('d/m/Y') }}</b>
            au <b>{{ $internship->ending_at->format('d/m/Y') }}.</b>
        </font>
    </p>
    <h3 class="western"><a name="_ritn9hpt2ay1"></a>Article 4</h3>
    <p style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Durant
            son stage l&rsquo;&eacute;l&egrave;ve ing&eacute;nieur est soumis &agrave;
            la discipline de l&rsquo;organisme d&rsquo;accueil, notamment en ce
            qui concerne l'horaire et le respect du secret professionnel.</font>
    </p>
    <h3 class="western"><a name="_ny3sdartq5b1"></a>Article 5</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">En
            cas de faute grave, de manquement &agrave; la discipline ou de tout
            autre probl&egrave;me, l&rsquo;organisme d&rsquo;accueil informera,
            aussit&ocirc;t la direction de l&rsquo;INPT pour convenir des mesures
            &agrave; prendre. </font>
    </p>
    <h3 class="western"><a name="_lqh2l0o3w2t"></a>Article 6</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">L'&eacute;l&egrave;ve
            ing&eacute;nieur continuera &agrave; b&eacute;n&eacute;ficier du
            r&eacute;gime d'assurance universitaire souscrite par l&rsquo;INPT en
            sa faveur, durant la p&eacute;riode de son stage. </font>
    </p>
    <h3 class="western"><a name="_w0yjid3p79hw"></a>Article 7</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">A
            la fin du stage, l'organisme d&rsquo;accueil est pri&eacute;
            d&rsquo;&eacute;tablir une attestation mentionnant la p&eacute;riode
            du stage. De plus le Responsable du stage communiquera &agrave;
            l&rsquo;INPT, d&egrave;s la fin du stage, son appr&eacute;ciation sur
            le travail et le comportement de l&rsquo;&eacute;l&egrave;ve
            ing&eacute;nieur stagiaire au moyen d'une fiche d'&eacute;valuation
            &eacute;labor&eacute;e par les soins de l&rsquo;INPT. </font>
    </p>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">Cette
            lettre sera envoy&eacute;e &agrave; l&rsquo;attention du Directeur
            Adjoint charg&eacute; des Relations avec les Entreprises, par fax au
            N&deg; 00&ndash;212&ndash; 537&ndash;77&ndash;30&ndash;44.</font>
    </p>
    <h3 class="western"><a name="_m3064ve4otvv"></a>Article 8</h3>
    <p align="justify" style=" line-height: 100%">
        <font size="2" style="font-size: 11pt">L&rsquo;&eacute;l&egrave;ve
            ing&eacute;nieur s'engage &agrave; fournir au terme de son stage, un
            rapport repr&eacute;sentant les r&eacute;sultats de son travail &agrave;
            l'organisme d&rsquo;accueil et &agrave; l'INPT avant la fin du mois
            d&rsquo;octobre de l&rsquo;ann&eacute;e en cours. </font><br />

    </p>
    <center>
        <table width="604" cellpadding="7" cellspacing="0">
            <col width="287" />

            <col width="287" />

            <tr valign="top">
                <td width="287" height="231">
                    <p align="center">
                        <font size="2" style="font-size: 11pt">Date et Signature</font>
                    </p>
                    <p align="center">
                        <font size="2" style="font-size: 11pt">du
                            repr&eacute;sentant de l&rsquo;organisme d'accueil</font>
                    </p>
                    <p align="center">
                        <font size="2" style="font-size: 11pt">Cachet
                            de l&rsquo;organisme d'accueil</font>
                    </p>
                </td>
                <td width="287">
                    <p align="center">
                        <font size="2" style="font-size: 11pt">Le
                            repr&eacute;sentant de l&rsquo;INPT</font>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" width="588" height="177" valign="top">
                    <p align="center">
                        <font size="2" style="font-size: 11pt">Date et Signature du
                            stagiaire</font>
                    </p>
                    <p align="center">
                        <font size="2" style="font-size: 11pt">Mention
                            manuscrite &laquo; Lu et approuv&eacute;&nbsp;&raquo;</font>
                    </p>
                </td>
            </tr>
        </table>
    </center>


    <div id="footer" title="footer">
        <p style="line-height: 100%">
            @include('frontend.documents.pdf.templates.document_tag_v1')

            @include('frontend.documents.pdf.templates.document_edited_online')
    </div>
</body>

</html>
