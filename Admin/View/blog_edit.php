<div class="card--container">
    <h3 class="main-title">Blog Edit</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div class="containerr" id="productContainer">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">BlogID:</label>
                        <input type="text" id="id" name="id" class="inputt" value="<?= $dm['blog_id'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id">BlogID:</label>
                        <input type="text" id="id" name="id" class="inputt" value="<?= $dm['blog_id'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" id="name" name="title" class="inputt" value="<?= $dm['title'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Content:</label>
                        <input type="text" id="name" name="content" class="inputt" value="<?= $dm['content'] ?>" required>
                    </div>
                    <button type="submit" class="btn" name="btn_editBlog">Done</button>
                    <button type="submit" class="btn" name="btnCancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>