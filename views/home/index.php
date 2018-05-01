<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <p>
        HomeController<br>
        actionIndex<br>
    </p>
    <hr>

    <h4>
        <a href='/mvc_framework/first/'>First</a>
        &nbsp; <a href='/mvc_framework/second/'>Second</a>
    </h4>

    <div>
        <?php foreach ($homeList as $homeItem):?>
            <div>
                <h2><a href='/mvc_framework/home/<?php echo $homeItem['id'] ;?>'><?php echo $homeItem['title'].' # '.$homeItem['id'];?></a></h2>
                <p>Posted by <a href="#"><?php echo $homeItem['author_name'];?></a> on <?php echo $homeItem['date'];?>
                    &nbsp;&bull;&nbsp; <a href='/mvc_framework/home/<?php echo $homeItem['id'] ;?>'>Full article</a></p>
                <div>
                    <p><img src="/mvc_framework/template/images/<?php echo $homeItem['preview']; ?>" width="300" height="300" alt="picture" /></p>
                    <p><?php echo $homeItem['short_content'];?></p>
                </div>
            </div>
        <?php endforeach;?>
	</div>
</body>

<footer>
</footer>
</html>
