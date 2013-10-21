<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<link rel="stylesheet" style="text/css" href="jquerysite.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

<script>

function saveBids(str)
{
alert("We are storing your bid");

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","getuser.php?q="+str,true);
xmlhttp.send();
}


function showBids(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    if (str=='Chem101')
    	{
    	document.getElementById("Chem101Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Chem102')
    	{
    	document.getElementById("Chem102Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Chem103')
    	{
    	document.getElementById("Chem103Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='DTC1')
    	{
    	document.getElementById("DTC-1Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='DTC2')
    	{
    	document.getElementById("DTC-2Hint").innerHTML=xmlhttp.responseText;
    	}	
    else if(str=='EA1')
    	{
    	document.getElementById("EA1Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='EA2')
    	{
    	document.getElementById("EA2Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='EA3')
    	{
    	document.getElementById("EA3Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Math220')
    	{
    	document.getElementById("Math220Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Math224')
    	{
    	document.getElementById("Math224Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Math230')
    	{
    	document.getElementById("Math230Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Math234')
    	{
    	document.getElementById("Math234Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Phys135-1')
    	{
    	document.getElementById("Phys135-1Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Phys135-2')
    	{
    	document.getElementById("Phys135-2Hint").innerHTML=xmlhttp.responseText;
    	}
    else if(str=='Phys135-3')
    	{
    	document.getElementById("Phys135-3Hint").innerHTML=xmlhttp.responseText;
    	}
    }
  }
xmlhttp.open("GET","search.php?q="+str,true);
xmlhttp.send();
}


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
		<form action="saveBid.php" method="post" data-ajax="false">
		<div data-role="fieldcontain">
			<label for="fullname">Full Name:</label>
			<input type="text" name="fullname" id="fullname"><br>
			<label for="class" class = "select">Class:</label>
			<select name = "class" id = "class">
				<option value="Chem101">Chem 101</option>
				<option value="Chem102">Chem 102</option>
				<option value="Chem103">Chem 103</option>
				<option value="DTC1">DTC 1</option>
				<option value="DTC2">DTC 2</option>
      				<option value="EA1">EA 1</option>
      				<option value="EA2">EA 2</option>
      				<option value="EA3">EA 3</option>
      				<option value="Math220">Math 220</option>
      				<option value="Math224">Math 224</option>
      				<option value="Math230">Math 230</option>
      				<option value="Math234">Math 234</option>
      				<option value="Phys135-1">Physics 135-1</option>
      				<option value="Phys135-2">Physics 135-2</option>
      				<option value="Phys135-3">Physics 135-3</option>
   			</select><br>
			<label for="bid">Asking Price:</label>
			<input type="text" name="bid" id="bid" ><br>
			<label for="contact">Phone Number:</label>
			<input type="text" name="contact" id="contact"><br>
			<input type="submit" value = "Submit" >
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
		<li><a href="#Chem101" onClick="showBids('Chem101')">Chem 101</a></li>
		<li><a href="#Chem102" onClick="showBids('Chem102')">Chem 102</a></li>
		<li><a href="#Chem103" onClick="showBids('Chem103')">Chem 103</a></li>
		<li><a href="#DTC1" onClick="showBids('DTC1')">DTC 1</a></li>
		<li><a href="#DTC2" onClick="showBids('DTC2')">DTC 2</a></li>
		<li><a href="#EA1" onClick="showBids('EA1')">EA 1</a></li>
		<li><a href="#EA2" onClick="showBids('EA2')">EA 2</a></li>
		<li><a href="#EA3" onClick="showBids('EA3')">EA 3</a></li>
		<li><a href="#Math220" onClick="showBids('Math220')">Math 220</a></li>
		<li><a href="#Math224" onClick="showBids('Math224')">Math 224</a></li>
		<li><a href="#Math230" onClick="showBids('Math230')">Math 230</a></li>
		<li><a href="#Math234" onClick="showBids('Math234')">Math 234</a></li>
		<li><a href="#Phys135-1" onClick="showBids('Phys135-1')">Physics 135-1</a></li>
		<li><a href="#Phys135-2" onClick="showBids('Phys135-2')">Physics 135-2</a></li>
		<li><a href="#Phys135-3" onClick="showBids('Phys135-3')">Physics 135-3</a></li>
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

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Chem101Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="Chem102">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Chem102Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="Chem103">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Chem103Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="DTC1">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="DTC-1Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="DTC2">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="DTC-2Hint"><b>class book will show here.</b></div>
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

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="EA1Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="EA2">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="EA2Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="EA3">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="EA3Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="Math220">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Math220Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="Math224">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Math224Hint"><b>class book will show here.</b></div>
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



<div data-role="page" id="Math230">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Math230Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="Math234">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Math234Hint"><b>class book will show here.</b></div>
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


<div data-role="page" id="Phys135-1">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Phys135-1Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="Phys135-2">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Phys135-2Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="Phys135-3">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content">

	<div id="Phys135-3Hint"><b>class book will show here.</b></div>
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

<div data-role="page" id="confirmed">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content" align="center">
		<b>Your post has been successfully submitted!</b>
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

<div data-role="page" id="failed">

	<div data-role="header">
	  <h1>McCormick Market</h1>
	</div>
	
	<div data-role="content" align="center">
		<b>Improper form input! Price must be a number!</b><br>
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
