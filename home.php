<?php
/**
 * Created by PhpStorm.
 * User: jtm
 * Date: 16/6/21
 * Time: 下午3:51
 */

require_once ("vendor/autoload.php");
LeanCloud\LeanClient::initialize("AxOSmPieMpG6SLOw07yhkW3l-gzGzoHsz","bnu0keL2tWM0OX9TfaeNTSEL","qU0UdECSyMgnlF6DrLidXcok");

use LeanCloud\LeanObject;
use LeanCloud\LeanFile;
use LeanCloud\CloudException;


$engine = new SlimEngine();
$app->add($engine);

    $url = "index.html";
    $obj = new LeanObject("Product");
    $obj->set("productName", $_POST["productName"]);
    $obj->set("grade", $_POST["productGrade"]);
    $obj->set("price", $_POST["productPrice"]);
    $obj->set("productDescription", $_POST["productDescription"]);
    try {


        if($_FILES["file"]["error"]>0)
        {
            $obj->save();
            echo  "file error";

        }else
        {

            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Stored in: " . $_FILES["file"]["tmp_name"]. "<br />";

            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
            $file = LeanFile::createWithLocalFile("upload/".$_FILES["file"]["name"]);
            //$file = LeanFile::createWithLocalFile($dir."/upload/".$_FILES["file"]["name"]);
            //$file = LeanFile::createWithUrl("test.gif", "http://ww3.sinaimg.cn/bmiddle/596b0666gw1ed70eavm5tg20bq06m7wi.gif");
            $file->save();
            $obj->set("imgPath", $file->getUrl());
            $obj->save();
            //$obj->set("imgPath",$file->getUrl());
            echo  $file->getUrl();

        }



        //Header("Location: $url");

    } catch (CloudException $ex) {
        // CloudException 会被抛出，如果保存失败
    }
?>
<html>
<head>
<meta http-equiv="refresh" content="2; url=index.html">
</head>
<body>
提交成功……
</body>
</html>
