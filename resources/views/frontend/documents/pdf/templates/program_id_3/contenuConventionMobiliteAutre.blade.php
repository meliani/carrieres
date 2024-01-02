@include('frontend.documents.pdf.templates.document_headers')
<?php
$internship = user()->student->internship;
//$internship = user()->student->internships->last();

//dd($internship);
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <title></title>

    <meta name="author" content="inpt" />
    <style type="text/css">
        .Normal {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        h1 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 14.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        h2 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 16.0pt;
            color: Black;
            font-style: italic;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        h3 {
            margin: 1.0pt;
            margin-top: 5.0pt;
            margin-bottom: 5.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 13.5pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        h4 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Arial";
            font-size: 12.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        h5 {
            margin: 1.0pt;
            margin-top: 12.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 13.0pt;
            color: Black;
            font-style: italic;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyText {
            mso-style-name: "Body Text";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyText2 {
            mso-style-name: "Body Text 2";
            margin: 1.0pt;
            margin-top: 5.0pt;
            margin-bottom: 5.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Arial";
            font-size: 13.0pt;
            color: #6C6D6F;
            font-style: italic;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .spip {
            margin: 1.0pt;
            margin-top: 5.0pt;
            margin-bottom: 5.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .Normal_Web_ {
            mso-style-name: "Normal (Web)";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Verdana";
            font-size: 12.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .Header {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .Footer {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyTextIndent {
            mso-style-name: "Body Text Indent";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 12.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyText3 {
            mso-style-name: "Body Text 3";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Arial";
            font-size: 12.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyTextIndent2 {
            mso-style-name: "Body Text Indent 2";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 35.5pt;
            text-align: justify;
            font-family: "Arial";
            font-size: 12.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BodyTextIndent3 {
            mso-style-name: "Body Text Indent 3";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 279.0pt;
            margin-right: 0.0pt;
            text-indent: -279.0pt;
            font-family: "Arial";
            font-size: 12.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .DocumentMap {
            mso-style-name: "Document Map";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Tahoma";
            font-size: 10.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .BalloonText {
            mso-style-name: "Balloon Text";
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Tahoma";
            font-size: 8.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .Hyperlink {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: blue;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .Strong {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .titre1 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Verdana";
            font-size: 20.0pt;
            color: #00216C;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .boldedcoloredtitle1 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Verdana";
            font-size: 12.0pt;
            color: #00216C;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .Page_Number {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .agency_employees_text {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .Texte_de_bulles_Car {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Tahoma";
            font-size: 8.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .PageBreak {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm26 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 36.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm27 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm28 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm29 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm30 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 9.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm31 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: -21.5pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm32 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 11.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm33 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 11.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm34 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm35 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: #0070C0;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm36 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm37 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm38 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm39 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: #00B050;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm40 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm41 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm42 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 3.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm43 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: #548DD4;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm44 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 6.0pt;
            margin-bottom: 6.0pt;
            margin-left: 42.5pt;
            margin-right: 2.5pt;
            text-indent: -7.5pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm45 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: #0070C0;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm46 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Tahoma";
            font-size: 10.0pt;
            color: #0070C0;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm47 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 12.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm48 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: #0070C0;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm49 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm50 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-style: italic;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm51 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: -21.5pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm52 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm53 {
            line-height: 120%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm54 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 10.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm55 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm56 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 8.0pt;
            color: Black;
            font-style: italic;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm57 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm58 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm59 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm60 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm61 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm62 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm63 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm64 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: solid Black 1.0pt;
            padding: 1.0pt 5.5pt 5.5pt 1.0pt;
        }

        .tm65 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm66 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm67 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm68 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 12.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm69 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            text-align: center;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm70 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 1.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm71 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm72 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 9.5pt;
            color: Green;
            font-style: italic;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm73 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 9.5pt;
            color: Black;
            font-weight: bold;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm74 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 9.5pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm75 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm76 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.5pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm77 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Trebuchet MS";
            font-size: 9.5pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm78 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            text-align: justify;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm79 {
            line-height: 110%;
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 6.0pt;
            margin-left: 0.0pt;
            margin-right: 2.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .tm80 {
            margin: 1.0pt;
            margin-top: 1.0pt;
            margin-bottom: 3.0pt;
            margin-left: 0.0pt;
            margin-right: 0.0pt;
            text-indent: 0.0pt;
            font-family: "Times New Roman";
            font-size: 10.0pt;
            color: Black;
            font-weight: normal;
            border: none;
            padding: 1.0pt 1.0pt 1.0pt 1.0pt;
        }

        .PageBreak {
            page-break-after: always;
        }

        .tm82 {
            border: none;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .tm83 {
            font-style: italic;
            color: #6C6D6F;
            font-size: 13.0pt;
            font-family: "Arial";
            font-weight: bold;
        }

        .tm84 {
            font-size: 13.0pt;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm85 {
            text-transform: uppercase;
            font-size: 13.0pt;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm86 {
            margin-top: 1.0pt;
        }

        .tm87 {
            font-size: 12.0pt;
            font-weight: bold;
        }

        .tm88 {
            font-size: 11.0pt;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm89 {
            font-family: "Trebuchet MS";
        }

        .tm90 {
            color: #0070C0;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm91 {
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm92 {
            color: #00B050;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm93 {
            margin-top: 1.0pt;
            text-align: justify;
        }

        .tm94 {
            font-size: 12.0pt;
        }

        .tm95 {
            color: #548DD4;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm96 {
            color: #0070C0;
            font-family: "Tahoma";
        }

        .tm97 {
            text-align: justify;
        }

        .tm98 {
            font-style: italic;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm99 {
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
        }

        .tm100 {
            margin-top: 1.0pt;
            margin-bottom: 1.0pt;
            margin-left: 279.0pt;
            text-indent: -279.0pt;
        }

        .tm101 {
            font-style: italic;
            font-size: 12.0pt;
            font-family: "Arial";
        }

        .tm102 {
            text-align: center;
        }

        .tm103 {
            width: 756px;
        }

        .tm104 {
            width: 756px;
            border-spacing: 0px;
        }

        .tm105 {
            border: 1px;
        }

        .tm106 {
            height: 210px;
        }

        .tm107 {
            vertical-align: top;
        }

        .tm108 {
            border: solid Black 1.0pt;
            padding: 3.0pt 3.0pt 3.0pt 3.0pt;
        }

        .tm109 {
            width: 350mm;
        }

        .tm110 {
            height: 64px;
        }

        .tm111 {
            font-size: 9.5pt;
            font-family: "Trebuchet MS";
            font-weight: bold;
        }

        .tm112 {
            font-size: 9.5pt;
            font-family: "Trebuchet MS";
        }

        .tm113 {
            font-size: 13.5pt;
            font-weight: bold;
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

<body>
    <p class="tm26 tm82"><strong><em><span class="tm83"></span><span class="tm84">-=- CONVENTION </span></em><span
                class="tm85">DE StAge -=-</span></strong></p>
    <p class="tm26 tm82"><strong><em><span class="tm83"></span></em><span class="tm85">Projet de FIN
                D&#8217;ETUDES</span></strong></p>
    <p class="tm29 tm82"><strong><em><span class="tm83">&#160;</span></em></strong></p>
    <p class="tm31 tm82 tm86"><strong><span class="tm87"></span><u><span class="tm88">ARTICLE
                    PREMIER&nbsp;:</span></u></strong></p>
    <p class="tm34 tm82 tm86"><strong><span class="tm87"></span></strong><span class="tm89">La pr&eacute;sente
            convention r&egrave;gle les rapports de&nbsp;: </span><strong><span
                class="tm90">{{ $internship->organization_name }}</span><span class="tm91">-</span><span
                class="tm90">{{ $internship->adresse }}</span><span class="tm91">-</span><span
                class="tm90">{{ $internship->city }}</span><span class="tm91">,</span><span
                class="tm90">{{ $internship->country }}</span><span class="tm91">.</span><span
                class="tm90">&nbsp;</span></strong></p>
    <p class="tm38 tm82 tm86"><strong><span class="tm87"></span></strong><span class="tm89">ci-apr&egrave;s
            d&eacute;sign&eacute;e par Entreprise, et repr&eacute;sent&eacute;e par</span><strong><span class="tm92">
            </span><span class="tm90">{{ $internship->parrain_name }}</span><span class="tm91">, </span><span
                class="tm90">{{ $internship->parrain_fonction }}</span><span class="tm91">,</span></strong></p>
    <p class="tm40 tm82 tm93"><span class="tm94"></span><span class="tm89">avec L&#8217;Institut National des Postes
            et T&eacute;l&eacute;communications (INPT) repr&eacute;sent&eacute; par
            {{ config('school.current.signature.envoy_title') }}
        </span><strong>
            <span class="tm91">
                {{ config('school.current.signature.envoy_name') }},
                {{ config('school.current.signature.envoy_occupation') }},
            </span></strong></p>
    <p class="tm34 tm82 tm86"><strong><span class="tm87"></span></strong><span class="tm89">Concernant le stage de
            Fin d&#8217;&eacute;tudes de</span><strong><span class="tm91"> </span><span
                class="tm90">{{ $internship->student->title }}</span><span class="tm91">&nbsp;</span><span
                class="tm90">{{ $internship->student->full_name }}</span></strong><span class="tm89">,
        </span><strong><span class="tm90"> </span></strong><span class="tm89">&eacute;l&egrave;ve ing&eacute;nieur
            de la fili&egrave;re : </span><strong>
            <span class="tm90">
                {{ config('school.current.branches.' . $internship->student->filiere_text . '.full_title') }}
            </span></strong><span class="tm89">,
            de l’Institut National des Postes et Télécommunications (INPT) de Rabat,
            en échange académique à l’Ecole
            <span class="tm90">
                <strong>
                    {{ $internship->student->abroad_school }}
                </strong>
            </span>
            sur l’année scolaire
            <span class="tm90">
                <strong>
                    {{ config('school.current.academic_year') }}
                </strong>
            </span>
            dans le cadre d’un partenariat,
        </span></p>
    <p class="tm42 tm82"><strong><span class="tm87"></span></strong><span class="tm89">Pour la p&eacute;riode du
        </span><strong><span class="tm90">{{ $internship->date_debut->format('d/m/Y') }}</span></strong><span
            class="tm89">&nbsp;au</span><strong><span class="tm95"> </span><span
                class="tm90">{{ $internship->date_fin->format('d/m/Y') }}</span></strong><span class="tm89">, sous
            la responsabilit&eacute; de&nbsp;:</span></p>
    <p class="tm44 tm82"><strong><span class="tm87"></span></strong><span class="tm96">- </span><span
            class="tm89">Encadrant Externe&nbsp;: </span><strong><span
                class="tm90">{{ $internship->encadrant_ext_name }}</span><span class="tm91">, </span><span
                class="tm90">{{ $internship->encadrant_ext_fonction }}</span><span class="tm91">, </span><span
                class="tm90">{{ $internship->encadrant_ext_tel }}</span><span class="tm91">, </span><span
                class="tm90">{{ $internship->encadrant_ext_mail }}</span><span class="tm91">.</span></strong></p>
    <p class="tm44 tm82"><strong><span class="tm87"></span></strong><span class="tm96">- </span><span
            class="tm89">Coordonnateur de la fili&egrave;re&nbsp;: </span><strong><span class="tm90">
                {{ config('school.current.branches.' . $internship->student->filiere_text . '.cf_title') ?? '' }}
                {{ config('school.current.branches.' . $internship->student->filiere_text . '.cf_name') ?? '. . . . . . . . . . . . . . . . . . .' }}
            </span></strong></p>
    <p class="tm47 tm82 tm97"><span class="tm94"></span><span class="tm89">Le stage portera sur le sujet
            suivant&nbsp;:</span><strong><span class="tm91"> </span><span
                class="tm90"><b>{{ $internship->title }}</b></span><span class="tm91">&nbsp;</span></strong></p>
    <p class="tm49 tm82 tm93"><span class="tm94"></span><span class="tm89">Descriptif d&eacute;taill&eacute;&nbsp;:
        </span><strong><span class="tm90">{{ $internship->descriptif }}</span></strong><span
            class="tm89">&nbsp;</span></p>
    <p class="tm49 tm82 tm93"><span class="tm94"></span><span class="tm89">Adresse du
            stage&nbsp;</span><strong><em><span class="tm98">(adresse pr&eacute;cise, si diff&eacute;rente de
                    l&#8217;adresse de l&#8217;entreprise indiqu&eacute;e
                    ci dessus)</span></em><span class="tm91"> : </span>
            <span class="tm90">{{ $internship->office_location ?? '' }} </span>
        </strong></p>
    <p class="tm51 tm82 tm86"><strong><span class="tm87"></span><u><span class="tm88">ARTICLE
                    SECOND&nbsp;:</span></u></strong></p>
    <p class="tm52 tm82 tm99"><strong><span class="tm87"></span></strong><span class="tm89">La pr&eacute;sente
            convention garantit que le r&egrave;glement des stages inscrit au verso a &eacute;t&eacute; port&eacute;
            &agrave; la
            connaissance de l&#8217;entreprise et de l&#8217;&eacute;l&egrave;ve et que ceux-ci en ont approuv&eacute;
            express&eacute;ment toutes les clauses.</span></p>
    <p class="tm52 tm82 tm99"><strong><span class="tm87">&#160;</span></strong></p>
    <p class="tm53 tm82 tm86"><strong><span class="tm87"></span><em><u><span class="tm98">Document &eacute;tabli
                        en quatre exemplaires</span></u></em></strong></p>
    <p class="tm55 tm82 tm100"><em><span class="tm101">&#160;</span></em></p>

    @include('frontend.documents.pdf.templates.partials.signature_fields')

    <p style="page-break-after: always;" class="tm68 tm82 tm86"><span class="tm94">&#160;</span></p>
    <p class="tm68 tm82 tm86"><span class="tm94"></span><strong><span class="tm91">REGLEMENT DES STAGES EN
                ENTREPRISE</span></strong></p>
    <p class="tm69 tm82 tm99"><span class="tm94">&#160;</span></p>
    <p class="tm71 tm82 tm93"><span class="tm94"></span><strong><span class="tm111">Art.1-</span></strong><span
            class="tm112"> l&#8217;&eacute;l&egrave;ve ing&eacute;nieur est appel&eacute; &agrave; effectuer un stage
            de PFE obligatoire
            pour l&#8217;obtention du dipl&ocirc;me d&#8217;ing&eacute;nieur en t&eacute;l&eacute;communications.
            L&#8217;objectif poursuivi du stage de PFE est de donner &agrave; chaque &eacute;tudiant l&#8217;occasion
            d&#8217;effectuer
            une recherche personnelle et approfondie sur un sujet propos&eacute; par une entreprise afin de
            s&#8217;immerger dans le monde du travail.</span></p>
    <p class="tm75 tm82 tm93"><em><span class="tm101"></span><strong><span
                    class="tm111">Art.2-</span></strong><span class="tm112"> Pendant la dur&eacute;e de son stage,
                le stagiaire reste plac&eacute; sous la responsabilit&eacute;
                de l&#8217;entreprise d&#8217;accueil tout en demeurant &eacute;tudiant de l&#8217;INPT.
                L&#39;&eacute;l&egrave;ve stagiaire pourra revenir &agrave; l&#39;Institut pendant la dur&eacute;e du
                stage, pour y suivre certains cours
                demand&eacute;s explicitement par le programme, participer &agrave; des r&eacute;unions; Le cas
                &eacute;ch&eacute;ant, les dates seront port&eacute;es &agrave; la connaissance de l&#39;Entreprise par
                l&#39;Etablissement.</span></em></p>
    <p class="tm71 tm82 tm93"><em><span class="tm101"></span><span class="tm112">Le r&egrave;glement de
                l&#8217;INPT pr&eacute;voit l&#39;encadrement du stagiaire au cours de sa p&eacute;riode de stage en
                entreprise. Cet encadrement
                doit &ecirc;tre assur&eacute; par un enseignant de l&#8217;INPT et par un membre de l&#39;entreprise
                charg&eacute; d&#39;accueillir et d&#39;accompagner le stagiaire.</span></em></p>
    <p class="tm76 tm82 tm86"><strong><span class="tm87"></span><span class="tm111">Art.3-</span></strong><span
            class="tm112"> Durant son stage, l&#39;&eacute;tudiant stagiaire est soumis &agrave; la discipline et au
            r&egrave;glement
            int&eacute;rieur de l&#39;Entreprise, notamment en ce qui concerne les horaires, </span><strong><span
                class="tm111">la r&eacute;glementation du travail, les r&egrave;gles d&#8217;hygi&egrave;ne et de
                s&eacute;curit&eacute;
                en vigueur dans l&#8217;entreprise</span></strong><span class="tm112">.</span></p>
    <p class="tm78 tm82 tm86"><strong><span class="tm87"></span></strong><span class="tm112">Toute sanction
            disciplinaire ne peut &ecirc;tre d&eacute;cid&eacute;e que par l&#39;Institut. Dans ce cas,
            l&#8217;entreprise informe
            l&#39;Institut des manquements et lui fournit &eacute;ventuellement les &eacute;l&eacute;ments constitutifs.
            L&#8217;entreprise, en accord avec le Directeur de l&#39;INPT, peut mettre fin au stage du stagiaire, tout
            en respectant
            les dispositions fix&eacute;es &agrave; l&#8217;article 4 ci-apr&egrave;s.</span></p>
    <p class="tm76 tm82 tm86"><strong><span class="tm87"></span><span class="tm111">Art.4-</span></strong><span
            class="tm112"> Toute absence devra &ecirc;tre signal&eacute;e par l&#8217;Entreprise &agrave;
            l&#8217;&eacute;tablissement.</span></p>
    <p class="tm75 tm82 tm93"><span class="tm94"></span><span class="tm112">Dans le cas d&#8217;une interruption,
            d&#8217;une semaine au moins, pour motif circonstanci&eacute; ou contexte exceptionnel, autoris&eacute;e par
            l&#8217;entreprise,
            un avenant &agrave; la pr&eacute;sente convention devra &ecirc;tre sign&eacute; au pr&eacute;alable par les
            cocontractants.</span></p>
    <p class="tm75 tm82 tm93"><span class="tm94"></span><span class="tm112">En cas de volont&eacute; d&#8217;une
            des trois parties (entreprise, INPT, &eacute;tudiant(e)) d&#8217;interrompre d&eacute;finitivement le stage,
        </span><strong><span class="tm111">celle-ci devra imm&eacute;diatement en informer les deux autres parties par
                &eacute;crit. Les raisons invoqu&eacute;es seront examin&eacute;es en &eacute;troite
                concertation.</span></strong><span class="tm112"> La d&eacute;cision d&eacute;finitive
            d&#8217;interruption du stage ne sera prise qu&#8217;&agrave; l&#8217;issue de cette phase de
            concertation.</span></p>
    <p class="tm71 tm82 tm93"><span class="tm94"></span><strong><span class="tm111">Art.5-</span></strong><span
            class="tm112"> Le stagiaire est couvert par l&#39;assurance de l&#8217;INPT contre les accidents pouvant
            survenir
            au cours du stage dans la limite de garantie de son assurance.</span></p>
    <p class="tm78 tm82 tm86"><strong><span class="tm87"></span><span class="tm111">Art.6-</span></strong><span
            class="tm112"> A l&#8217;issue du stage, l&#8217;&eacute;tudiant est tenu de pr&eacute;senter les
            r&eacute;sultats
            de son travail, tant par &eacute;crit dans son m&eacute;moire de fin d&#8217;&eacute;tudes, qu&#39;oralement
            lors de sa soutenance devant un jury comprenant des repr&eacute;sentants de l&#8217;entreprise accueillante
            et des
            enseignants de l&#8217;INPT. La pr&eacute;sentation et le rapport devront avoir &eacute;t&eacute;
            valid&eacute;s par l&#8217;entreprise au pr&eacute;alable et par l&#8217;enseignant encadrant &agrave;
            l&#8217;INPT. L&#39;&eacute;tudiant
            s&#39;engage &agrave; fournir un rapport &agrave; l&#39;organisme d&#8217;accueil et &agrave; l&#39;INPT au
            maximum une semaine avant la date de la soutenance.</span></p>
    <p class="tm79 tm82 tm93"><em><span class="tm101"></span><span class="tm112">A la fin du stage et avant la
                soutenance, le Directeur de stage mentionn&eacute; dans la convention est pri&eacute; de communiquer
                &agrave; l&#8217;&eacute;cole
                une &eacute;valuation du comportement du stagiaire et de la qualit&eacute; du travail
                effectu&eacute;.</span></em></p>
    <p class="tm78 tm82 tm86"><strong><span class="tm87"></span><span class="tm111">Art.7-</span></strong><span
            class="tm112"> Les &eacute;tudiants stagiaires prennent l&#39;engagement de n&#39;utiliser en aucun cas
            les informations
            recueillies ou obtenues par eux pour en faire l&#39;objet de publication, communication &agrave; des tiers
            sans accord pr&eacute;alable de la Direction de l&#39;Entreprise, y compris le rapport de stage. Cet
            engagement vaudra
            non seulement pour la dur&eacute;e du stage mais &eacute;galement apr&egrave;s son expiration.
            L&#39;&eacute;tudiant s&#39;engage &agrave; ne conserver, emporter, ou prendre copie d&#39;aucun document ou
            logiciel, de quelque
            nature que ce soit, appartenant &agrave; l&#39;Entreprise, sauf accord de cette derni&egrave;re.
            L&#8217;Entreprise peut demander une restriction de la diffusion du rapport, voire le retrait de certains
            &eacute;l&eacute;ments
            tr&egrave;s confidentiels. Les personnes amen&eacute;es &agrave; en conna&icirc;tre sont contraintes par le
            secret professionnel &agrave; n&#8217;utiliser ni ne divulguer les informations du rapport.</span></p>
    <p class="tm80 tm82"><strong><span class="tm113"></span><span class="tm111">Art.8- </span></strong><span
            class="tm112">S&#8217;il advenait qu&#8217;un contrat de travail prenant effet avant la date de fin du
            stage soit sign&eacute;
            avec l&#8217;Entreprise, la pr&eacute;sente convention deviendrait caduque&nbsp;; l&#8217;&eacute;tudiant
            stagiaire perdrait son statut d&#8217;&eacute;tudiant et ne rel&egrave;verait plus de la
            responsabilit&eacute; de l&#8217;Ecole.
            Ce dernier devrait imp&eacute;rativement en &ecirc;tre averti avant signature du contrat.</span></p>

    <div id="footer" title="footer">
        <p style="line-height: 100%">
            @include('frontend.documents.pdf.templates.document_tag_v1')

            @include('frontend.documents.pdf.templates.document_edited_online')
    </div>
</body>

</html>
