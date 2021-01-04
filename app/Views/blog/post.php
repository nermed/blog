<section>
    <div class="container mt-4">
        <article class="blog-post">
        <?php if($posts): ?>
            <?php foreach ($posts as $post): ?>
            <h2><?= $post['title'] ?></h2>
            <div class="row">
            <h5><?= $post['description'] ?></h5>
            <div class= "row">
                <div class="details col-3">
                    <strong>Publié le :</strong> <?= date('d M Y', strtotime($post['created_at'])) ?>
                </div>
                <div class="pr-2">
                    <i class="fa fa-star"></i>
                    <?= $post['tag'] ?>
                </div>
            </div>
                
            </div>
            <p><?= $post['body'] ?></p>
            <div class="row">
                
                <p class="like">Si tu as aimé l'article, mettez un</p>
            <i class="fa fa-thumbs-up likes"></i>
        </div>
            <div class="container">
        <h2>Commentaires</h2>
        <form action="" method="post" id = 'form'>
            <div class='form-group col-5'>
                <label for="nom"><strong>Nom: </strong></label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class='form-group col-5'>
                <label for="comment"><strong>Comment: </strong></label>
                <textarea name='comment' id="comment" class="form-control comment-input"></textarea>
            </div>
            <div class='form-group'>
                <button type="submit" class="btn btn-primary btn-comment mt-4" id="btn-comment">Comment</button>
                <p aria-hidden="true" class="text-danger fade">Vous ne pouvez plus commenter</p>
            </div>
        </form>
        
    </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </article>
    </div>
</section>
<section>
    <div class="container mt-4 comments">
        
    </div>
    
</section>