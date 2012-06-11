Welcome to the world of testing
<?php
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
?>
<p>
<?php
Yii::createWebApplication($config)->run();
?>
