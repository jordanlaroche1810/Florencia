<?php require_once "include/header.php"; ?>
<?php require_once "include/db.php"; ?>
    <section>
        <div class="container">
            <!-- post content -->
            <div class="row  m-b-50">
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2>Blog florencia</h2>
                    </div>
                </div>
            </div>
            <!-- Blog -->
            <div id="blog" class="grid-layout post-2-columns m-b-30 grid-loaded" data-item="post-item" style="margin: 0px -20px -20px 0px; position: relative; height: 2483.41px;">
                <!-- Post item-->
                <?php
                    $reqcount = $pdo->query("SELECT COUNT(*) FROM articles")->fetchColumn(); 
                    $reqlist = $pdo->query("SELECT * FROM articles");
                    while ($list = $reqlist->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="post-item border" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="articles?id=<?=$list['id']?>"> <img alt="" src="images/articles/<?= $list['picture']?>"> </a> <span class="post-meta-category"><a href=""><?= $list['category']?></a></span>
                        </div>
                        <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?= $list['created_at']?></span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="articles?id=<?=$list['id']?>"><?= $list['title']?></a></h2>
                            <?= $list['content']?>
                            <a href="articles?id=<?=$list['id']?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                <!-- end: Post item-->
            </div>
            <!-- end: Blog -->
        </div>
    </section>
<?php require_once "include/footer.php"; ?>