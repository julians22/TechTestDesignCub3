                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" class="form-control" disabled
                                                value="<?= $user['nama_lengkap']; ?>">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">No Telp</label>
                                            <input type="text" class="form-control" name="telepon" id="telepon" readonly value="<?= $user['no_telp']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="dokter">Pilih Dokter</label>
                                            <select id="dokter" class="custom-select">
                                                <option selected disabled>Pilih Dokter</option>
                                                <?php foreach($dokter as $dokter): ?>
                                                <option value="<?= $dokter['id']; ?>"><?= $dokter['nama_dokter']; ?> || <?= $dokter['spesialisasi']; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        
                                        <label for="tanggal">Tanggal Booking</label>
                                        <div class="input-group mb-3 date">
                                            <input type="text" class="form-control" name="tanggal" readonly id="tanggal" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"><i class="fas fa-th"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                            <label for="jamMasuk">Jam Masuk</label>
                                            <input type="text" name="jamMasuk" id="jamMasuk" class="form-control">
                                            </div>
                                            <div class="form-group col">
                                            <label for="jamKeluar">Jam Keluar</label>
                                            <input type="text" name="jamKeluar" readonly id="jamKeluar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="keluhan">Keluhan</label>
                                            <textarea class="form-control" name="keluhan" id="keluhan"></textarea>
                                        </div>
                                        <a href="#" id="booking" class="btn btn-success text-white">Booking!</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->