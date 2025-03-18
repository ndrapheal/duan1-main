<div class="card--container">
    <h3 class="main-title">User</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div>
                <form action="?mod=user&act=search" method="post">
                    <input type="text" class="input" name="name" placeholder="UserID">
                    <button class="add--new btn" name="btn_search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

            </div>
        </div>
        <div class="table--section">
            <table>
                <thead>
                    <tr>
                        <th>UserID</th>
                        <th>User</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dsdm as $dm) : ?>
                        <tr>
                            <td><?= $dm['id'] ?></td>
                            <td>
                                <img src="../User/view/layout/assets/images/<?= $dm['img'] ?>" alt="" class="product--img">
                                <h5><?= $dm['username'] ?></h5>
                                <small><?= $dm['email'] ?></small>
                            </td>
                            <td><?= $dm['diachi'] ?></td>
                            <td><?= $dm['password'] ?></td>
                            <td><?= $dm['dienthoai'] ?></td>
                            <td><?= $dm['role'] ?></td>
                            <td>
                                <button class="btn"><a href="?mod=user&act=delete&id=<?= $dm['id'] ?>"><i class="fa-solid fa-trash"></i></a></button>
                                <button class="btn"><a href="?mod=user&act=edit&id=<?= $dm['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</body>

</html>