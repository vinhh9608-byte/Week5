<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = "table">
        <tr>
            <th>Joke Text</th>
            <th>Joke Date</th>
            <th>Author</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
        <?php foreach($jokes as $joke): ?>
        <tr>
            <td>
            <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
            </td>
            <td>
                <?=htmlspecialchars($joke['jokedate'], ENT_QUOTES,'UTF-8')?>
            </td>
            <td>
                (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' );?>">
                <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
            </td>
            <td>
                (Category <a href="index.php?cate_id=<?=htmlspecialchars($joke['cate_id'], ENT_QUOTES, 'UTF-8' );?>">
                <?=htmlspecialchars($joke['category_name'], ENT_QUOTES, 'UTF-8'); ?></a>)
            </td>
            <td>
                <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>
            </td>
            <td>
                <img src="img/<?=htmlspecialchars($joke['img'], ENT_QUOTES,'UTF-8')?>" alt="">
            </td>
            <td>
            <form action="deletejoke.php" method="post">
                <input type="hidden" name="id" value="<?=$joke['id']?>">
                <input type="submit" value="Delete">
            </form>
            </td>
            <?php endforeach; ?>
    </table>
</body>
</html>
