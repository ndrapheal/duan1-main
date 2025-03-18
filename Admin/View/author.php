<div class="card--container">
    <h3 class="main-title">Author</h3>
</div>
<hr>
<div class="main">
    <div class="table">
        <div class="table--header">
            <div>
                <input type="text" class="input" placeholder="AuthorID">
                <button class="add--new btn"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></button>
                <button class="add--new btn" id="addButton"><a href="?mod=category&act=addau"><i class="fa-solid fa-plus">Add new</i></a></button>
            </div>
        </div>
        <div class="table--section">
            <table>
                <thead>
                    <tr>
                        <th>AuthorID</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dsdm as $dm) : ?>
                        <tr>
                            <td><?= $dm['id'] ?></td>
                            <td><?= $dm['name'] ?></td>
                            <td>
                                <button class="btn"><a href="?mod=category&act=deleteau&id=<?= $dm['id'] ?>"><i class="fa-solid fa-trash"></i></a></button>
                                <button class="btn"><a href="?mod=category&act=editau&id=<?= $dm['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
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