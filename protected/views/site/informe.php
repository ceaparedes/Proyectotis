<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<html>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input name="archivo" type="file" size="35" />
      <input name="enviar" type="submit" value="Upload File" />
      <input name="action" type="hidden" value="upload" />    
    </form>

</body>
</html>


