<div class="container">
    <h1>Update post</h1>
    
    <?php if($post): ?>
            <?php foreach ($post as $postItem): ?>
    <form action="/blog/update/<?= $postItem['id'] ?>" method="post">
        <div class='form-group'>
            <label for="title"><strong>Title</strong></label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $postItem['title'] ?>">
        </div>
        <div class='form-group'>
            <label for="tag"><strong>Tag</strong></label>
            <input type="text" class="form-control" name="tag" id="tag" value="<?= $postItem['tag'] ?>">
        </div>
        <div class='form-group'>
            <label for="description"><strong>Description: </strong></label>
            <input type="text" name='description' id="description" class="form-control" value="<?= $postItem['description'] ?>">
        </div>
        <div class='form-group'>
            <label for="body"><strong>Body: </strong></label>
            <textarea name='body' id="body" class="form-control"><?= $postItem['body'] ?></textarea>
        </div>
        <div class='form-group'>
            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </div>
    </form>
    <?php endforeach; ?>
            <?php endif; ?>
</div>