<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
</head>
<body>
<center>
    <h4>save</h4>
    <form action="upd" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        <table border="1">
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="username" value="<?= $row->username ?>"></td>
            </tr>
            <tr>
                <td>SEX</td>
                <td>
                    <input type="radio" name="sex" value="1" <?= $row->sex==1?'checked':'' ?> >男
                    <input type="radio" name="sex" value="0" <?= $row->sex==0?'checked':'' ?> >女
                </td>
            </tr>
            <tr>
                <td>HOBBY</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="篮球" <?= in_array('篮球', $row->hobby)?'checked':'' ?> >篮球
                    <input type="checkbox" name="hobby[]" value="足球" <?= in_array('足球', $row->hobby)?'checked':'' ?> >足球
                    <input type="checkbox" name="hobby[]" value="羽毛球" <?= in_array('羽毛球', $row->hobby)?'checked':'' ?> >羽毛球
                    <input type="checkbox" name="hobby[]" value="球球" <?= in_array('球球', $row->hobby)?'checked':'' ?> >球球
                </td>
            </tr>
            <tr>
                <td>AGE</td>
                <td>
                    <select name="age" id="">
                        <option value="">请选择</option>
                        <?php for($i=18;$i<=30;$i++): ?>
                            <option value="<?= $i ?>" <?= $row->age==$i?'selected':'' ?> ><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>