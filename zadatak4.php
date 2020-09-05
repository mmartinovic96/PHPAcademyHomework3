<form action="zadatak4.php" method="POST" enctype="multipart/form-data">
<label for="img">Izaberi sliku:</label>
<input type="file" id="img" name="img" accept="image/jpeg,image/jpg,image/png" max="1mb">
<input type="submit">
</form>

<?php

move_uploaded_file($_FILES['img']['name'],$_SERVER);


var_dump($_SERVER);