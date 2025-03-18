<div class="card--container">
    <h3 class="main-title">User Edit</h3>
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
                    <div class="form-group">
                        <label for="name">Username:</label>
                        <input type="text" id="name" name="username" class="inputt" value="<?= $dm['username'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="Email" id="email" name="email" class="inputt" value="<?= $dm['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="publication_date">Address:</label>
                        <input type="text" id="diachi" class="inputt" name="address" value="<?= $dm['diachi'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="stock_quantity">Password:</label>
                        <input type="text" id="password" class="inputt" name="password" value="<?= $dm['password'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="author_id">Phone:</label>
                        <input type="number" id="phone" name="phone" class="inputt" value="<?= $dm['dienthoai'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="publisher_id">Role:</label>
                        <input type="text" id="role" name="role" class="inputt" value="<?= $dm['role'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Diem tich luy:</label>
                        <input type="text" id="name" name="diemtichluy" class="inputt" value="<?= $dm['diem_tich_luy'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <img src="../Admin/image/<?= $dm['img'] ?>" alt="">
                        <input type="file" id="image" name="img" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn" name="btn_editUser">Done</button>
                    <button type="submit" class="btn" name="btnCancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>