<?php include("header.php") ?>
        <?php
        $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
        ?>
        <h1>Dashboard</h1>
        <p>
            <a href="halaman_input.php">
                <input type="button" class="btn btn-primary" value="membuat halaman baru" />
            </a>
        </p>
        <from class="row g-2" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="masukkan kata kunci" name="katakunci"
                    value="<?php echo $katakunci ?>" />
            </div>
            <div class="col-auto">
                <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
            </div>
        </from>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>judul</th>
                    <th>kutipan</th>
                    <th class="col-2">aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, ducimus.</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                    <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-danger">Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
<?php include("footer.php") ?>
    