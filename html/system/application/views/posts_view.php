<p id="title"><?=$heading?></p>
<div id="content">
    <?php foreach($posts as $post):?>
    <div>
        <span>Freshness: <?=$post['timestamp']?> | By: <?=$post['username']?></span>
        <p id="post">
            <?=$post['content']?>
        </p>
    </div>
    <?php endforeach?>
</div>
