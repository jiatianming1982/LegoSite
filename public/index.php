<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHP(LeanCloud)</title>
</head>
<body>

<div id="container" style="width:800px">

    <div id="header" style="background-color:#FFA500;">
        <h1 style="margin-bottom:0;">Main Title of Web Page</h1></div>

    <div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;">
        <b>提交数据</b><br>
        Product<br>
        Basket<br>
        User</div>

    <div id="content" style="background-color:#EEEEEE;height:200px;width:700px;float:left;">
        <form action="../home.php" method="post" enctype="multipart/form-data">

            <ul>
                <li>产品名称: <input type="text" name="productName"></li>
                <li>产品等级: <input type="text" name="productGrade"></li>
                <li>产品价格: <input type="text" name="productPrice"></li>
                <li>产品描述: <input type="text" name="productDescription"></li>
                <li>
                    <form >
                        <input name="file" type="file"  id="file" size="40" onchange="viewmypic(showimg,this.form.imgfile);" />
                        <br />
                        <img name="showimg" id="showimg" src="" style="display:none;" alt="预览图片" />
                    </form>
                </li>
                <li><input type="submit" value="提交到LeanCloud" ></li>
            </ul>
        </form>

        <script language="JavaScript" type="”text/javascript”" src="../home.php">
            function viewmypic(mypic,imgfile) {
            if (imgfile.value){
            mypic.src=imgfile.value;
            mypic.style.display="";
            mypic.border=1;
            }
            }

        </script>

    </div>

    <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
        这是我的PHP网站

    </div>

</div>

</body>

</html>
