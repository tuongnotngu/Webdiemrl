$query = mysql_query("select * from lop where namhoc=".$_REQUEST['namhoc']);

while($row = mysql_fetch_assoc($query))
{
	echo '<option value="'.$row['malop'].'">'.$row['tenlop']. '</option>';
}