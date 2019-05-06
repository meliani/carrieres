<style type="text/css">
	.canvas{
		margin-left: 20mm;
		margin-right: 20mm;
	}
h1, h2, h3, h4, h5, span, p {
    page-break-after: avoid;
    page-break-before: avoid;
    page-break-inside: avoid;

  }
table, figure {
    page-break-inside: avoid;
  }
p, span {
    font-size:23px;
    text-align: justify;
}

h2{
    font-size:40px;
}
td>p{
    text-align: center;
}
.notes>p {
    font-size: 17px;
    line-height: 13px;
    color: grey;
}
h3, h3 span{
    font-size:33px;
}
</style>
<div class="canvas">
    @include('edocs.pdfConvention')
</div>