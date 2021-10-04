<!DOCTYPE html>
<html lang="en">
<head>
    <title>User View</title>
</head>
<body>

    <?php foreach($users->getUsers() as $user): ?>
    <?php echo $user->getName(); ?><br>
    <?php endforeach; ?>

</body>
</html>