<div class="card--container">
    <h3 class="main-title">Book</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div>
                <input type="text" class="input" placeholder="ID Product">
                <button class="add--new btn"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></button>
                <button class="add--new btn" id="addButton"><a href="?mod=product&act=add"><i class="fa-solid fa-plus">Add new</i></a></button>
            </div>
        </div>
        <div class="table--section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book</th>
                        <th>Name</th>
                        <th>Genre</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($dssp)): ?>
                    <?php foreach($dssp as $sp): ?>
                    <tr>
                        <td><?= $sp['id']?></td>
                        <td>
                            <img src="../User/view/layout/assets/images/product/<?= $sp['img']?>" alt="" class="product--img">
                            <h6><?= $sp['author_name']?></h6>
                            <small><?= $sp['publisher_name']?></small>
                        </td>
                        <td><?= $sp['book_name']?></td>
                        <td><?= $sp['genre_name']?></td>
                        <td><?= $sp['price1']?></td>
                        <td>
                            <button class="btn"><a href="?mod=product&act=delete&id=<?= $sp['id']?>"><i class="fa-solid fa-trash"></i></a></button>
                            <button class="btn"><a href="?mod=product&act=edit&id=<?= $sp['id']?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script src="../Admin/JS/edit_add.js"></script>
</body>
</html>