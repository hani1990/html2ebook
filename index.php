<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<script src="http://send.mybanshu.com/static/js/jquery.min.js"></script>
<title>简书博客加工成电子书</title>
</head>
<body>
<h1>简书博客加工成电子书</h1>
<form method="POST" action="/cook.php">
            
            <table width="985" cellspacing="0" cellpadding="0" border="0" align="center" height="">
                <tbody><tr>
                    <td width="40%" valign="middle" align="right" height="50">书名：</td>
                    <td width="60%" valign="middle" align="left">
                        <input type="text" autofocus="" required="" value="简书成书" name="title" class="input-title">
                    </td>
                </tr>
                <tr>
                    <td width="40%" valign="middle" align="right" height="50">作者：</td>
                    <td width="60%" valign="middle" align="left">
                        <input type="text" required="" value="简书成书" name="author" class="input-title">
                    </td>
                </tr>
                <tr>
                    <td width="40%" valign="middle" align="right" height="50">网页：</td>
                    <td width="60%" valign="middle" align="left">
                        <input type="text" required="" name="url[]" class="input-title">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0);" class="addUrl">+添加网页</a>
                    </td>
                </tr>
                <tr id="actions">
                    <td valign="middle" align="center" colspan="2">
                    <input type="submit" style="width:120px; height:30px;background-color:#55CC99;border-radius:5px;-webkit-border-radius:5px;
    -moz-border-radius:5px;font-size:14px;font-family:'微软雅黑'; line-height:30px; margin:0; padding:0; color:#FFF; line-height:24px;" class="btn btn-default" value="立即提交">
                    </td>
                </tr>
            </tbody></table>
        </form>

</body>

<script charset="utf-8" type="text/javascript">
$(document).ready(function(){


$('.addUrl').click(function(){
    $('#actions').before($('<tr><td align=\"right\" valign=\"middle\" height=\"50\" width=\"40%\">网页：</td><td align=\"left\" valign=\"middle\" width=\"60%\"><input class=\"input-title\" type=\"text\" name=\"url[]\" required></td></tr>'));
});


});
</script>

</html>
