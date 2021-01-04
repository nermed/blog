   <?php if($posts): ?>
            <?php foreach ($posts as $delItem): ?>
            <form action="/blog/post" method="post">
                <button class="btn btn-danger btn-delete" type="submit"><a href="/blog/delete/<?= $delItem['id'] ?>" class="mb-4">Delete</a></button>
            </form>
            <?php endforeach; ?>
            <?php endif; ?>
<!--<div class="delete-pop">
    <p>Etes-vous sûr?</p>
    <div class='row'>
        <button class='btn btn-seconday'>Refuser</button>
        <button class='btn btn-danger'>Accepter</button>
    </div>
</div>-->