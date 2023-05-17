<?php
include_once ("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $category_id = $_GET['category_id'];
            $news = get_category_id($category_id);
            $category = get_name_category($category_id);
            ?>
            <h2><?=$category['title']?>:</h2>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-8">
            <?php foreach ($news as $new): ?>
                <div class="col-6">
                    <div class="card">
                        <img  src="<?=$new['img']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$new['title']?></h5>
                            <p class="card-text"><?=mb_substr($new['content'],0,200,'UTF-8').'...'?></p>
                            <a href="post.php?post_id=<?=$new['id']?>" class="btn btn-primary">Переглянути</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>