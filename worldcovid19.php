<!DOCTYPE html>
<html>
<head>
	<title>COVID 19</title>
	<style type="text/css">
         body{
             background-image: url('hello.jpg');
         }
</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body onload="ge()">
<CENTER style="font-size: 70px;color:white">COVID 19</CENTER><br>
<CENTER style="font-size: 40px;color:white">We're All In This Together</CENTER><br>

<br><br><br>
<div class="table-responsive">
<center>

<table  id="tbvalue"class="table tasble-hover table-stripped " style="width:1000px">
	<tr>
	<td scope="col" style="color:black;background-color:white">Countries</td>
	<td scope="col" style="color:black;background-color:white">Total Confirmed</td>
	<td scope="col" style="color:black;background-color:white">Total Recovered</td>
	<td scope="col" style="color:black;background-color:white">Total Deaths </td>
	<td scope="col" style="color:black;background-color:white">New Confirmed</td>
	<td scope="col" style="color:black;background-color:white">New Recovered</td>
	<td scope="col" style="color:black;background-color:white">New Deaths</td>
</tr>
</table>
</center>
</div>
<script type="text/javascript">
	function ge(){
        document.body.style.backgroundColor =  "none";
		fetch('https://api.covid19api.com/summary')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data['Countries'][2]['Country']);

    for(var i=0;i<data['Countries'].length;i++){
    	var table=document.getElementById("tbvalue");
    	var tr=document.createElement("tr");
    	
    	var td=document.createElement("td");
    	td.setAttribute("id",i);
    	document.getElementById("tbvalue").appendChild(tr);
    	document.getElementById("tbvalue").appendChild(td);
    	td.style.backgroundColor="white";
        td.style.borderColor="black";
    	document.getElementById(i).innerHTML=data['Countries'][i]['Country'];

    	var td=document.createElement("td");
    	td.setAttribute("id",'b'+i);
    	document.getElementById("tbvalue").appendChild(td);
    td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('b'+i).innerHTML=data['Countries'][i]['TotalConfirmed'];


    	var td=document.createElement("td");
    	td.setAttribute("id",'c'+i);
    	document.getElementById("tbvalue").appendChild(td);
    	td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('c'+i).innerHTML=data['Countries'][i]['TotalRecovered'];


    	var td=document.createElement("td");
    	td.setAttribute("id",'d'+i);
    	document.getElementById("tbvalue").appendChild(td);
    	  	td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('d'+i).innerHTML=data['Countries'][i]['TotalDeaths'];


    	var td=document.createElement("td");
    	td.setAttribute("id",'e'+i);
    	document.getElementById("tbvalue").appendChild(td);
    	td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('e'+i).innerHTML=data['Countries'][i]['NewConfirmed'];


    	var td=document.createElement("td");
    	td.setAttribute("id",'f'+i);
    	document.getElementById("tbvalue").appendChild(td);
    	  td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('f'+i).innerHTML=data['Countries'][i]['NewRecovered'];

    	var td=document.createElement("td");
    	td.setAttribute("id",'g'+i);
    	document.getElementById("tbvalue").appendChild(td);
    	  td.style.backgroundColor="white";
        td.style.borderColor="black";

    	document.getElementById('g'+i).innerHTML=data['Countries'][i]['NewDeaths'];

    }
  });
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>