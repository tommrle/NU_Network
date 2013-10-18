<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, content="initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<link rel="stylesheet" style="text/css" href="jquerysite.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

<script>
/*
function showBids(cls)
{
if(cls=="")
	{
	document.getElementById("txtHint").innerHTML="";
	return;
	}
if(window.XMLHttpRequest)
	{// code for IE7+ Firefox, Chrome, Opera, Safari
	xmlhttp = new XMLHttpRequest();
	}
else
	{// code for IE6, IE5
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
xmlhttp.onreadystatechange=function()
	{
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	  {
	  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	  }
	}
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}

*/

function saveBids()
{
alert("We are storing your bid");

$.ajax({
	url: "saveBid.php",
	success: function(data) {
		alert("Hello!");	
		}
	});
});

/*

	$.ajax({
	url: "saveBid.php",
	type: "POST",
	data: {
		fullname: $("fullname").val(),
		bid: $("bid").val()
	}});
	

	success: function(response)
	{
		if(response == 'true')
		{ window.location.replace("#frontpage"); }
	});
*/	
}

</script>

</head>

<body>
<!-- Start of first page: #one -->
<div data-role="page" id="frontpage">

	<div data-role="header">
		<h1 align="center">McCormick Marketplace</h1>
	</div><!-- /header -->

	<div data-role="content" align="center">	
		<h1> Welcome to McCormick Marketplace!</h1>
		<p> Buy and sell textbooks directly with other students for Northwestern freshman engineering classes! Click on the navigation bar below to get started. </p>
		<img src="http://www.danlockton.co.uk/research/images/textbook.jpg" align="center">
	</div><!-- /content -->
	
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
		<ul>
		<li><a href="#frontpage" data-icon="home">Home</a></li>
		<li><a href="#searchpage" data-icon="search">Search for Books</a></li>
		<li><a href="#sellpage" data-icon="arror-r">Sell Book</a></li>
	  	</ul>
		</div>
	</div>
</div><!-- /page one -->

<div data-role="page" id="sellpage">
	
	<div data-role="header">
		<h1>McCormick Market</h1>
	</div>
	
	<div data-role="content" align="center">	
		<form method="post" action="">
		<div data-role="fieldcontain">
			<label for="fullname">Full Name:</label>
			<input type="text" name="fullname" id="fullname"><br>
			<label for="class">Class:</label>
			<input type="text" name="class" id="class"><br>
			<label for="bid">Asking Price:</label>
			<input type="text" name="bid" id="bid"><br>
			<input type="submit" value = "Submit" onclick="saveBids()">
		</div>
		</form>
	</div>
		
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
		<ul>
		<li><a href="#frontpage" data-icon="home">Home</a></li>
		<li><a href="#searchpage" data-icon="search">Search for Books</a></li>
		<li><a href="#sellpage" data-icon="arror-r">Sell Book</a></li>
	  	</ul>
		</div>
	</div>
	
</div>

<div data-role="page" id="searchpage">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>

	<div data-role="content">
	  <ul data-role="listview" data-inset="true" data-filter="true">
		<li><a href="#Chem101">Chem 101</a></li>
		<li><a href="#EA1">EA 1</a></li>
	  </ul>

	</div>

	<div data-role="footer" data-position="fixed">
	  <div data-role="navbar">
		<ul>
		<li><a href="#frontpage" data-icon="home">Home</a></li>
		<li><a href="#searchpage" data-icon="search">Search for Books</a></li>
		<li><a href="#sellpage" data-icon="arror-r">Sell Book</a></li>
	  	</ul>
	  </div>
	</div>
	

</div>

<div data-role="page" id="Chem101">
	<div id="txtHint" data-role="content">
	  
	  <a href="#classlist">Go To Page One</a>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
		<ul>
		<li><a href="#frontpage" data-icon="home">Home</a></li>
		<li><a href="#searchpage" data-icon="search">Search for Books</a></li>
		<li><a href="#sellpage" data-icon="arror-r">Sell Book</a></li>
	  	</ul>
		</div>
	</div>
</div>

<div data-role="page" id="EA1">
	<div id="txtHint" data-role="content">
		<a href="#classlist">Go To Page One</a>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar">
		<ul>
		<li><a href="#frontpage" data-icon="home">Home</a></li>
		<li><a href="#searchpage" data-icon="search">Search for Books</a></li>
		<li><a href="#sellpage" data-icon="arror-r">Sell Book</a></li>
	  	</ul>
		</div>
	</div>
</div>
</body>

</html>
