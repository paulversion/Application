<?php
/**
 * Created by PhpStorm.
 * User: paulversion
 * Date: 2016/5/5
 * Time: 22:40
 */
$this->title="测试文件";
?>
<?php
 echo $a;
?>
<?php //内部调用视图文件 ?>
<?=$this->render('inner_render')?>
