<?php
$pageName="user page"
?>
<!DOCTYPE html>
<html lang="en">

    <?php include_once './components/head/index.php' ?>
<body>
    <?php include_once './components/nav/index.php' ?>
    <main>
    <h1>user page</h1>
        <a href="/user/info?id=1">go to user 1</a>
        <a href="/user/info?id=2">go to user 2</a>
        <a href="/user/info?id=3">go to user 3</a>
    </main>
    <?php include_once './components/footer.php' ?>
</body>
</html>