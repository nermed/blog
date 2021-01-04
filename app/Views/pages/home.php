<section>
    <div class="banner">
        <div class="container">
            <h1 class="title-banner">Accueil</h1>
            <p>Bienvenue sur notre blog</p>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4">
        <?php if($news): ?>
            <?php foreach ($news as $new): ?>
                <h2 class="text-primary"><?= $new['title'] ?></h2>
                <h5><?= $new['description'] ?></h5>
                <div class="pr-2">
                    <i class="fa fa-star"></i>
                    <strong><?= $new['tag'] ?></strong>
                </div>
                <p class="mb-0"><?= substr($new['body'], 0, 405) ?>...</p>
                <div class="row">
                    <p class="col-2 mb-1"><a href="/blog/<?= $new['id'] ?>" class="suite">Lire la suite ...</a></p>
                </div>
                <div class="row">
                    <p class="col-1 delete"><a href="#" value="<?= $new['id'] ?>" class="delete-post" id="del">Supprimer</a></p>
                    <p class="col-1 update" type="button"><a href="/blog/update/<?= $new['id'] ?>" class="update-post" >Update</a></p>
                </div>
                <?php $_GET['id'] = $new['id'] ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p class='text-center'>No posts found</p>
        <?php endif; ?>
    </div>
</section>