<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = $_POST['email'];
        echo $data;
    }
?>
<!DOCTYPE html>
<html>
<body>
<form action="http://localhost:63342/PHPPost/app.php?_ijt=pv0pc9jt4og5of1k7bavgsk5eb" method="post">
    <input type="email" name="email">
</form>
</body>
</html>
