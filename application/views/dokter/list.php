<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-md-6">

            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5>List Dokter</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Dokter</th>
                            <th>Spesialisasi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($dokter as $book): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $book['nama_dokter']; ?></td>
                                <td><?= $book['spesialisasi']; ?></td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->