<head>
<h1 align="center">EPT3 Data Management tool</h1>
</head>



sql_connect('localhost', 'root', '');
mysql_select_db('testdb');

$sql = "SELECT tool FROM tools_data";
$result = mysql_query($sql);

echo "<select name='Tools'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['tool'] ."'>" . $row['responsible'] ."</option>";
}
echo "</select>";
