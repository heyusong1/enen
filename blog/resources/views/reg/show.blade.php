<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show</title>
</head>
<body>
<center>
    <h4>show</h4>
    <table border="1">
        <tr>

            <td>USERNAME</td>
            <td>SEX</td>
            <td>HOBBY</td>
            <td>AGE</td>
            <td>OPTION</td>
        </tr>
        @foreach ($data as $k => $v)
        <tr>

            <td>{{ $v->username }}</td>
            <td><?= $v->sex=='1'?'男':'女' ?></td>
            <td><?= $v->hobby ?></td>
            <td><?= $v->age ?></td>
            <td>
                <a href="deletes?id=<?= $v->id ?>">DEL</a>
                <a href="updates?id=<?= $v->id ?>">UPDATE</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $data->links() }}
</center>
</body>
</html>