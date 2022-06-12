<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<title>Panel</title>
	<link rel="stylesheet" href="/admin/css/style.css">
	<link rel="stylesheet" href="/admin/css/responsive_991.css" media="(max-width:991px)">
	<link rel="stylesheet" href="/admin/css/responsive_768.css" media="(max-width:768px)">
	<link rel="stylesheet" href="/admin/css/font.css">
	<link type="text/css" rel="stylesheet" href="/admin/css/jalalidatepicker.css" />
	<script type="text/javascript" src="/admin/js/jalalidatepicker.js"></script>
</head>
<body>
@include('admin.layouts.menu')
<div class="content">
	
	@include('admin.layouts.header')
	
	@yield('main')

</div>
</body>
<script src="/admin/js/jquery-3.4.1.min.js"></script>
<script src="/admin/js/js.js"></script>
<script>
    jalaliDatepicker.startWatch({
                                    separatorChar: "/",
                                    minDate: "attr",
                                    maxDate: "attr",
                                    changeMonthRotateYear: true,
                                    showTodayBtn: true,
                                    showEmptyBtn: true
                                });
    //flatpickr("[data-jdp]");
    document.getElementById("aaa").addEventListener("jdp:change", function (e) { console.log(e) });
</script>
</html>