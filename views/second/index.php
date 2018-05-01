<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <p>
        SecondController<br>
        actionIndex<br>
    </p>
    <hr>

    <h4>
        <a href='/mvc_framework/home/'>Home</a>
        &nbsp; <a href='/mvc_framework/first/'>First</a>
    </h4>

    <div>
        <?php foreach ($secondList as $secondItem):?>
            <div>
                <h2><a href='/mvc_framework/second/<?php echo $secondItem['id'] ;?>'><?php echo $secondItem['title'].' # '.$secondItem['id'];?></a></h2>
                <p>Posted by <a href="#"><?php echo $secondItem['author_name'];?></a> on <?php echo $secondItem['date'];?>
                    &nbsp;&bull;&nbsp; <a href='/mvc_framework/second/<?php echo $secondItem['id'] ;?>'>Full article</a></p>
                <div>
                    <p><img src="/mvc_framework/template/images/<?php echo $secondItem['preview']; ?>" width="300" height="300" alt="picture" /></p>
                    <p><?php echo $secondItem['short_content'];?></p>
                </div>
            </div>
        <?php endforeach;?>
	</div>
</body>

<footer>
</footer>
</html>
