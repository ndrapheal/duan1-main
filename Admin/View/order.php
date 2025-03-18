<div class="card--container">
            <h3 class="main-title">Order</h3>
        </div>
        <hr>
        <div class="main">
            <div class="table">
                <div class="table--header">
                    <div class="select--form">
                       
                        <form action="" method="get">
                        <input type="text" class="input" placeholder="OrderID">
                        <button class="add--new btn"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></button>
                        </form>
                    </div>
                </div>
                <div class="table--section">
                    <table>
                        <thead>
                            <tr>
                                <th>OrderID</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Discount</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dsdm as $dm):?>
                            <tr>
                                <td><?= $dm['id'] ?></td>
                                <td><span><?= $dm['ngay_dat'] ?></span></td>
                                <td>
                                    <img src="../User/view/layout/assets/images/<?= $dm['img']?>" alt="" class="product--img">
                                    <h5><?= $dm['user_name'] ?></h5>
                                    <small><?= $dm['email'] ?></small>
                                </td>
                                <td><?= $dm['pttt'] ?></td>
                                <td><?= $dm['status'] ?></td>
                                <td><?= $dm['voucher'] ?></td>
                                <td><?= $dm['tongthanhtoan'] ?></td>
                                <td>
                                <button class="btn"><a href="?mod=order&act=delete&id=<?= $dm['id'] ?>"><i class="fa-solid fa-trash"></i></a></button>
                                <button class="btn"><a href="?mod=order&act=edit&id=<?= $dm['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>