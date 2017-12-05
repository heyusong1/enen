<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
</head>
<body>
<center>
    <h4>reg</h4>
    <form action="add" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table border="1">
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>SEX</td>
                <td>
                    <input type="radio" name="sex" value="1">男
                    <input type="radio" name="sex" value="0">女
                </td>
            </tr>
            <tr>
                <td>HOBBY</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="篮球">篮球
                    <input type="checkbox" name="hobby[]" value="足球">足球
                    <input type="checkbox" name="hobby[]" value="羽毛球">羽毛球
                    <input type="checkbox" name="hobby[]" value="球球">球球
                </td>
            </tr>
            <tr>
                <td>AGE</td>
                <td>
                    <select name="age" id="">
                        <option value="">请选择</option>
                        <?php for($i=18;$i<=30;$i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
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