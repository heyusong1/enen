<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息表</title>
</head>
<body>
<center>
    <form action="add" method="post">
    	<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <table border="1">
            <tr>
                <td>内容</td>
                <td><textarea name="matt"></textarea></td>
            </tr>
            <tr>
                <td>是否提交</td>
                <td>
                    <input type="radio" name="open" value="1">提交
                    <input type="radio" name="open" value="0">不提交
                </td>
            </tr>
            <tr>
                <td>设定时间</td>
                <td>
                    <input type="text" id="time" value="选择时间" name="addtime" onClick="return Calendar('time');" class="text_time">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="reg"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
<script type="text/javascript" src="js/showdate.js"></script>