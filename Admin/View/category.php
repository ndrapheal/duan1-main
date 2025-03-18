
        <main class="main--container">
            <div class="main--card">
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-pen-fancy"></i>
                        <a href="?mod=category&act=listau">AUTHOR</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalAu = countAuthor();
                            echo $totalAu['totala'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <a href="?mod=category&act=listgenre">GENRE</a>
                    </div>
                    <span class="text--inner2">
                        <?php
                        include_once 'Model/category.php';
                            $totalGenre = countGenre();
                            echo $totalGenre['totalg'];
                        ?>
                    </span>
                </div>
                <div class="cardd">
                    <div class="card--inner">
                        <i class="fa-solid fa-users"></i>
                        <a href="?mod=category&act=listpub">PUBLISHER</a>
                    </div>
                    <span class="text--inner2">
                    <?php
                        include_once 'Model/category.php';
                            $totalPub = countPublisher();
                            echo $totalPub['totalp'];
                        ?>
                    </span>
                </div>
            </div>
        </main>
        </div>
    </div>

</body>

</html>