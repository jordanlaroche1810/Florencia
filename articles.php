<?php require_once "include/header.php"; ?>
<?php require_once "include/db.php"; ?>
<?php
    $reqcount = $pdo->query("SELECT COUNT(*) FROM articles")->fetchColumn(); 
    $reqlist = $pdo->query("SELECT * FROM articles");
    
    $reqarticle = $pdo->query("SELECT * FROM articles WHERE id ='".$_GET["id"]."'");
	$article = $reqarticle->fetch(PDO::FETCH_ASSOC);	
?>
    <section>
        <div class="container">
            <div class="row" style="transform: none;">
                <!-- content -->
                <div class="content col-lg-12">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post single item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="<?= $article['alt']?>" src="images/articles/<?= $article['picture']?>">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2><?=$article['title']?></h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?= $article['created_at']?></span>
                                        <span class="post-meta-category"><i class="fa fa-tag"></i><?= $article['category']?></span>
                                    </div>
                                    <?= $article['content']?>
                                </div>
                            </div>
                        </div>
                        <!-- end: Post single item-->
                    </div>
                </div>
                <!-- end: content -->
            </div>
        </div>
    </section>
<?php require_once "include/footer.php"; ?>