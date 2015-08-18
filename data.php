<?php
echo $_POST['pwd'];
$result = mail("ps22@bk.ru","Theme","It's body////");
if ($result)
{
	echo "<p>Message sent</p>";
}
else
{
	echo "<p>Message unsent</p>";
}

?>