<head>
<h1 align="center">EPT3 Data Management tool</h1>
</head>

<body>
<?php
if(isset($_GET['msg'])) echo $_GET['msg'];
?>
<form action="add_data.php" method="POST">
<table width="18%" align="center">
   <tr><td><label for="tool">Tool Name : </label></td>
   <td><input type="text" id="tool" name="tool" /></td></tr>
   <tr><td><label for="responsible">Resposible : </label></td>
   <td><input type="text" id="responsible" name="responsible" /></td></tr>
   <tr><td></td>
   <td align="left"><input type="submit" value="Add Entry" />
   <input type="button" value="Back" onclick="history.back()"></td></tr>
</table>
</form>
</body>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "testdb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO tools_data (tool, responsible) VALUES ('$_POST[tool]', '$_POST[responsible]')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
