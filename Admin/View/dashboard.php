
<main class="main--container">
            <div class="main--card">
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-pen-fancy"></i>
                        <a href="?mod=product&act=list">BOOK</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalAu = countBook();
                            echo $totalAu['totalb'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-users"></i>
                        <a href="?mod=review&act=list">REVIEW</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalPub = countReview();
                            echo $totalPub['totalr'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-users"></i>
                        <a href="?mod=blog&act=list">BLOG</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalPub = countBlog();
                            echo $totalPub['totalb'];
                        ?>
                    </span>
                </div>
            </div>
        </main>
        </div>
    </div>

</body>

</html>