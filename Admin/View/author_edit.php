<div class="card--container">
    <h3 class="main-title">Author Edit</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div class="containerr" id="productContainer">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id" class="inputt" value="<?= $dm['id'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="inputt" value="<?= $dm['name'] ?>" required>
                    </div>
                    <button type="submit" class="btn" name="btn_editAuthor">Done</button>
                    <button type="submit" class="btn" name="btnCancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>