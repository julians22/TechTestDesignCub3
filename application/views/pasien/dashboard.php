<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row-lg">
        <div class="alert alert-success" role="alert">
            Selamat datang <?= $user['role'].' <strong>'.$user['nama_lengkap'].'</strong>'; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header">
        <h5>List Booking Dokter Anda</h5>
    </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Dokter</th>
                    <th>Tanggal Booking</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Keluhan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($booking as $book): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $book['nama_dokter']; ?></td>
                            <td><?= $book['tanggal_booking']; ?></td>
                            <td><?= substr($book['jam_masuk'],0,-3); ?></td>
                            <td><?= substr($book['jam_keluar'],0,-3); ?></td>
                            <td><?= $book['keluhan']; ?></td>
                            <td>Action</td>
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->