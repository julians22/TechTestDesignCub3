<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/timepicker/jquery.timepicker.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<script>
$(document).ready(function() {
    var jam = $('#jamMasuk');
    var tanggal = $('#tanggal');
    

    tanggal.datepicker({
        startView: 'days',
        defaultViewDate: 'today',
        todayBtn: "linked",
        clearBtn: true,
        orientation: "bottom auto",
        todayHighlight: true,
        updateViewDate: true,
        startDate: Date(),
        format: 'yyyy-mm-dd',
        daysOfWeekDisabled: "0,6"
    })

    var x
    $('#booking').on('click', function(e) {
        e.preventDefault();
        const namaLengkap = $('#nama').val();
        const noTelp = $('#telepon').val();
        const dokter = $('#dokter').val();
        const tanggalPilih = $('#tanggal').val();
        const jamMasuk = $('#jamMasuk').val();
        const jamKeluar = $('#jamKeluar').val();
        const keluhan = $('#keluhan').val();
        if (noTelp && dokter && jamMasuk) {
            $.ajax({
            url: '<?= base_url('booking/getJamList') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                nama: namaLengkap,
                no_telp: noTelp,
                dokter: dokter,
                tanggal: tanggalPilih,
                jam_masuk: jamMasuk,
                jam_keluar: jamKeluar,
                keluhan: keluhan,
            },
            success: function(response) {
                console.log(response);
                if (response == 'false') {
                    alert('Silahkan Pilih Jam Lain');
                }else if(response == 'falseTanggal'){
                    alert('pilih tanggal lain')    
                }else{
                    alert('Anda berhasil booking dokter');
                    window.location.href = "<?= base_url().$user['role'] ?>"
                }
            }
        });
        }else{
            alert ('Lengkapi Form')
        }
    });
    
    jam.timepicker({
        scrollDefault: 'now',
        minTime: '08:00',
        maxTime: '18:00',
        timeFormat: 'H:i',
        listWidth: 1,
        step: 60
    });
    

    jam.change(function() {
        const waktuPilih = tanggal.val().concat(',' + jam.val())
        const jamPilih = new Date(waktuPilih);
        const jamParse = jamPilih.getHours();
        const jamKeluar = new Date(jamPilih.setHours(jamParse + 1));
        $('#jamKeluar').val(jamKeluar.getHours() + ':00');
    });
});
</script>

</body>

</html>