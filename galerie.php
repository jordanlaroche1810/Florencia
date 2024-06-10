<?php require_once "include/db.php"; ?>
<?php require_once "include/header.php"; ?>
    <section>
        <div class="container">
            <div class="row  m-b-50">
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2>Mes réalisations</h2>
                    </div>
                </div>
            </div>
            <!-- Portfolio Filter -->
            <nav class="grid-filter gf-outline" data-layout="#portfolio" data-default="ct-webdesign">
                <ul>
                    <li class="active"><a href="#" data-category="*">Toutes</a></li>
                    <li><a href="#" data-category=".ct-inspirations">Inspirations</a></li>
                    <li><a href="#" data-category=".ct-photographies">Photographies</a></li>
                    <li><a href="#" data-category=".ct-decorations">Décorations</a></li>
                    <li><a href="#" data-category=".ct-autres">Autres</a></li>
                </ul>
            </nav>
            <!-- end: Portfolio Filter -->
            <!-- Portfolio -->
            <div id="portfolio" class="grid-layout portfolio-3-columns grid-loaded" data-margin="0" style="margin: 0px; position: relative;">
                <!-- portfolio item -->
                <?php
                    $reqlist = $pdo->query("SELECT * FROM portfolio");
                    while ($list = $reqlist->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="portfolio-item img-zoom ct-<?= $list['category'] ?>" style="padding: 0px; position: absolute;">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="images/portfolio/<?= $list['picture']?>" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a href="portfolio-page-grid-gallery.html">
                                <h3><?= $list['title']?></h3>
                                <span><?= $list['description']?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                <!-- end: portfolio item -->
            <div class="grid-loader"></div></div>
            <!-- end: Portfolio -->
        </div>
    </section>
<?php require_once "include/footer.php"; ?>