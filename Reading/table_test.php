<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>table list</title>
</head>
<body onload="table();">
	<script type="text/javascript">
		function table(){

		const xhttp = new XMLHttpRequest();
		xhttp.onload = function (){
			document.getElementById('table').innerHTML =this.responseText;
		}
		xhttp.open("GET","items.php");
		xhttp.send();
	}

	</script>
	


<div id="table">
	

</div>

</body>
</html>