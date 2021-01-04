<div class="container">
    <h1>Create post</h1>

    <form action="/blog/create" method="post">
        <div class='form-group'>
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class='form-group'>
            <label for="tag">Tag</label>
            <input type="text" class="form-control" name="tag" id="tag">
        </div>
        <div class='form-group'>
            <label for="description"><strong>Description: </strong></label>
            <input type="text" name='description' id="description" class="form-control">
        </div>
        <div class='form-group'>
            <label for="body"><strong>Body: </strong></label>
            <textarea name='body' id="body" class="form-control"></textarea>
        </div>
        <div class='form-group'>
            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </div>
    </form>
</div>