<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <p>
        FirstController<br>
        actionView<br>
        <?php echo $id; ?><br>

        <h4>
            <a href='/mvc_framework/home/'>Home</a>
            &nbsp; <a href='/mvc_framework/first/'>First</a>
            &nbsp; <a href='/mvc_framework/second/'>Second</a>
        </h4>

        <img src="/mvc_framework/template/images/<?php echo $firstItem['preview']; ?>" width="500" height="500" alt="picture" />
    </p>
</body>

<footer>
</footer>
</html>