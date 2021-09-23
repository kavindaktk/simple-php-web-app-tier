<html>
<head>
	<title>Data Submission Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<script>
//var inputVal = document.querySelector('MyPhrase').value;
var inputVal = document.getElementById("MyPhrase").value;
function test(inputVal){
	var inputVal = document.getElementById("MyPhrase").value;
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "http://54.224.123.176/myapi/public/create_phrase/data");
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.setRequestHeader("Accept", "application/json");
	xhr.onreadystatechange = function () {
		   if (xhr.readyState === 4) {
			         console.log(xhr.status);
				       console.log(xhr.responseText);
				    }};
		   var data = `{
		     "myPhrase":"` + inputVal + `"}`;

		   xhr.send(data);

}

</script>


</head>

<body>

    <h2>Inputs</h2>

      My Phrase:
      <input type="text" id="MyPhrase"  name="MyPhrase"> 
 
	<button onclick="test()">Save Data</button>
	
	<?PHP
	
	echo "This is test content generated through PHP code!"
	
	?>


</body>
</html>

