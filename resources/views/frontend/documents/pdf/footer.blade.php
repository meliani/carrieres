<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body style="border: 1px solid blue;margin-left: 18px;margin-right: 0px;padding:10px">
<div style="color: red">
    THIS IS <b>PAGE FOOTER</b>
    Page=<span id="page"></span>|
    Total Page=<span id="topage"></span>|
    Date=<span id="date"></span>|
    Time=<span id="time"></span>
</div>
<script type="text/javascript">
    var vars={};
    var x=window.location.search.substring(1).split('&');
    for (var i in x) {
        var z=x[i].split('=',2);
        vars[z[0]] = unescape(z[1]);
    }
    document.getElementById('page').innerHTML = vars.page;
    document.getElementById('topage').innerHTML = vars.topage;
    document.getElementById('date').innerHTML = vars.date;
    document.getElementById('time').innerHTML = vars.time;
</script>
</body>

</html>