
<main class="main--container">
            <div class="main--card--2">
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <a href="?mod=order&act=list">ORDERS</a>
                    </div>
                    <span class="text--inner2">
                        <?php
                        include_once 'Model/category.php';
                            $totalOrder = countOrder();
                            echo $totalOrder['totalo'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-users"></i>
                        <a href="?mod=product&act=list">BOOKS</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalBook = countBook();
                            echo $totalBook['totalb'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-users"></i>
                        <a href="?mod=review&act=list">REVIEWS</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalReview = countReview();
                            echo $totalReview['totalr'];
                        ?>
                    </span>
                </div>
                <div class="cardd card--total">
                    <div class="card--inner">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <a href="?mod=order&act=list">TOTAL</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $total = countTotal();
                            echo $total['total'];
                        ?>
                        VND
                    </span>
                </div>
            </div>
        </main>
        </div>
    </div>

</body>

</html>