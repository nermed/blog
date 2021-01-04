<section>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php if($news): ?>
            <?php foreach ($news as $new): ?>
                <h3 class=""><?= $new['title'] ?></h3>
            <?php endforeach; ?>
            <?php else: ?>
                <p class='text-center'>No posts found</p>
            <?php endif; ?>
            </tbody>
        </table>
        <button class="btn btn-secondary modal-footer"><a href="/admin/create">Create a post</a></button>
    </div>
</section>