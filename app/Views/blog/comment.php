<div class="container">
        <h2>Commentaires</h2>
        <form action="" method="post">
            <div class='form-group col-5'>
                <label for="nom"><strong>Nom: </strong></label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class='form-group col-5'>
                <label for="comment"><strong>Comment: </strong></label>
                <textarea name='comment' id="comment" class="form-control"></textarea>
            </div>
            <div class='form-group'>
                <button type="submit" class="btn btn-primary btn-comment mt-4">Comment</button>
            </div>
        </form>
        <ul class="mt-4 viewcomment" id="comment">
            <?php if($comments): ?>
                <?php foreach ($comments as $comment): ?>
                    <h5><?= $comment['nom'] ?></h5>
                    <p><?= $comment['comment'] ?></p>
                    <p><?= date('M d Y, H:m', strtotime($comment['created_at'])) ?></p>
                <?php endforeach; ?>
                <?php else: ?>
                    <p>Laissez un commentaire</p>
            <?php endif; ?>
        </ul>
    </div>