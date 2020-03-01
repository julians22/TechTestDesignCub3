<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
</head>

<body>

    <div class="container">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Admin My Doc</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?= base_url(); ?>admin">Booking List</a></li>
                    <li><a href="<?= base_url(); ?>auth/logout">Logout</a></li>
                </ul>
            </div>
        </nav>
        <h4>Booking List</h4>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dokter</th>
                    <th>Tanggal Booking</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Keluhan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; ?>
                    <?php foreach($booking_list as $book): ?>
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

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>