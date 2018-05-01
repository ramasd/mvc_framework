<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <p>
        FirstController<br>
        actionIndex<br>
    </p>
    <hr>

    <h4>
        <a href='/mvc_framework/home/'>Home</a>
        &nbsp; <a href='/mvc_framework/second/'>Second</a>
    </h4>

    <div>
        <?php foreach ($firstList as $firstItem):?>
            <div>
                <h2><a href='/mvc_framework/first/<?php echo $firstItem['id'] ;?>'><?php echo $firstItem['title'].' # '.$firstItem['id'];?></a></h2>
                <p class="meta">Posted by <a href="#"><?php echo $firstItem['author_name'];?></a> on <?php echo $firstItem['date'];?>
                    &nbsp;&bull;&nbsp; <a href='/mvc_framework/first/<?php echo $firstItem['id'] ;?>'>Full article</a></p>
                <div>
                    <p><img src="/mvc_framework/template/images/<?php echo $firstItem['preview']; ?>" width="300" height="300" alt="picture" /></p>
                    <p><?php echo $firstItem['short_content'];?></p>
                </div>
            </div>
        <?php endforeach;?>
	</div>
</body>

<footer>
</footer>
</html>
