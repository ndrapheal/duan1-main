<div class="card--container">
    <h3 class="main-title">Book Add</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div class="containerr" id="productContainer">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id" class="inputt" placeholder="Nhập ID" value="<?= $sp['id'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="inputt" placeholder="Tên sách" value="<?= $sp['name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">ID Loai:</label>
                        <input type="text" id="name" name="idloaisach" class="inputt" placeholder="Tên sách" value="<?= $sp['idloaisach'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" id="price1" name="price" class="inputt" placeholder="Giá" value="<?= $sp['price1'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mota">Discription:</label>
                        <input type="text" id="mota" class="inputt" name="mota" placeholder="Mô tả" value="<?= $sp['mota'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="moi">New:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="moi" placeholder="Mới" value="<?= $sp['moi'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sale">Sale:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="giamgia" placeholder="Giảm giá" value="<?= $sp['giamgia'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="hinhthuc">View:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="view" placeholder="Hình thức" <?= $sp['hinhthuc'] ?> required>
                    </div>
                    <div class="form-group">
                        <label for="author_id">Author ID:</label>
                        <input type="text" id="author_id" name="idtacgia" class="inputt" placeholder="Mã tác giả" value="<?= $sp['idtacgia'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="publisher_id">Publisher ID:</label>
                        <input type="text" id="publisher_id" name="id_nxb" class="inputt" placeholder="Mã nhà xuất bản" value="<?= $sp['id_nxb'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="namxb">Nam XB:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="namxb" placeholder="Năm xuất bản" <?= $sp['namxb'] ?> required>
                    </div>
                    <div class="form-group">
                        <label for="ngonngu">language:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="ngonngu" placeholder="Ngôn ngữ" value="<?= $sp['ngonngu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="sotrang">Pages:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="sotrang" placeholder="Số trang" value="<?= $sp['sotrang'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="hinhthuc">Hinh thuc:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="hinhthuc" placeholder="Hình thức" value="<?= $sp['hinhthuc'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="hinhthuc">Short Discription:</label>
                        <input type="text" id="stock_quantity" class="inputt" name="motangan" placeholder="Mô tả ngắn" value="<?= $sp['motangan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn" name="btn_addProduct">Done</button>
                    <button type="submit" class="btn" name="btnCancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>