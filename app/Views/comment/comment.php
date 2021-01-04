<div class="container">
        <h2>Commentaires</h2>
        <form action="/comment/comment" method="post">
            <div class='form-group col-5'>
                <label for="nom"><strong>Nom: </strong></label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class='form-group col-5'>
                <label for="comment"><strong>Comment: </strong></label>
                <textarea name='comment' id="comment" class="form-control"></textarea>
            </div>
            <div class='form-group'>
                <button type="submit" class="btn btn-primary mt-4">Comment</button>
            </div>
        </form>
    </div>