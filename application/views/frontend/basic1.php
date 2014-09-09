<!-- Page Title -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="icon-shopping-cart page-title-icon"></i>
                <h2>Pesan</h2>
            </div>
        </div>
    </div>
</div>

<!-- Example row of columns -->
<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <div class="row-fluid">
                <legend>Formulir Basic</legend>
                <div class="well">
                    <?php echo form_open('order/basic'); ?>
                      
                       
                            <label>Nama Lengkap</label>
                            <input name="namalengkap" class="input-xxlarge" type="text" placeholder="nama lengakap anda">
                            <?php echo form_error('namalengkap'); ?>
                            <label>Alamat Pemesan</label>
                            <input name="alamat" class="input-xxlarge" type="text" placeholder=".contoh:Sewon,Timbulharjo,sewon,Bantul">
                            <?php echo form_error('alamat'); ?>
                            <label>Email</label>
                            <input name="email" class="input-xxlarge" type="text" placeholder=".contoh:ngunduhmantu@gmail.com">
                            <?php echo form_error('email'); ?>
                            <label>Nomor Telfon</label>
                            <input name="nomortelfon" class="input-xxlarge" type="text" placeholder=".no hp / no telp">
                            <?php echo form_error('nomortelfon'); ?>


                            <label>Nama Lengkap</label>
                            <input name="namalengkappria" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namalengkappria'); ?>
                            <label>Nama Panggilan</label>
                            <input name="namapanggilanpria" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namapanggilanpria'); ?>
                            <label>Nama Lengkap Ayah</label>
                            <input name="namaayahpria" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namaayahpria'); ?>
                            <label>Nama Lengkap Ibu</label>
                            <input name="namaibupria" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namaibupria'); ?>



                            <label>Nama Lengkap</label>
                            <input name="namalengkapwanita" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namalengkapwanita'); ?>
                            <label>Nama Panggilan</label>
                            <input name="namapanggilanwanita" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namapanggilanwanita'); ?>
                            <label>Nama Lengkap Ayah</label>
                            <input name="namaayahwanita" class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namaayahwanita'); ?>
                            <label>Nama Lengkap Ibu</label>
                            <input name="namaibuwanita"class="input-xxlarge" type="text" placeholder="">
                            <?php echo form_error('namaibuwanita'); ?>



                            <label>Ucapan</label>
                            <textarea name="ucapan" class="input-xxlarge"></textarea>
                            <label>Tanggal Akad Nikah</label>
                            <input name="tanggalnikah" class="input-xxlarge" type="text" placeholder="contoh: 2013-01-13 (Tahun-Bulan-Tanggal)">
                            <?php echo form_error('tanggalnikah'); ?>
                            <label>Waktu Akad Nikah</label>
                            <input name="waktunikah" class="input-xxlarge" type="text" placeholder="contoh: 07:00:00 ">
                            <?php echo form_error('waktunikah'); ?>
                            <label>Alamat Akad Nikah</label>
                            <input name="alamatnikah" class="input-xxlarge" type="text" placeholder="Alamat Lengkap ">
                            <?php echo form_error('alamatnikah'); ?>
                            <label>Tanggal Resepsi</label>
                            <input name="tanggalresepsi" class="input-xxlarge" type="text" placeholder="contoh: 2013-01-13 (Tahun-Bulan-Tanggal)">
                            <?php echo form_error('tanggalresepsi'); ?>
                            <label>Waktu Resepsi</label>
                            <input name="wakturesepsi" class="input-xxlarge" type="text" placeholder="contoh: 07:00:00 ">
                            <?php echo form_error('wakturesepsi'); ?>
                            <label>Alamat Resepsi</label>
                            <input name="alamatresepsi" class="input-xxlarge" type="text" placeholder="Alamat Lengkap">
                            <?php echo form_error('alamatresepsi'); ?>



                            <!--<label>foto</label>-->
                            <!--<p>*pilih foto yang akan di kirim kemudian extract dalam bentuk zip file terlebih dahulu kemudian upload di sini</p>-->
                            <!--<div name="foto" class="input-prepend input-append"><span class="add-on"><i class="icon-picture"></i></span><input type="file" name="userfile"></div>-->
                            <h4>Pastikan data yang Anda isi benar!</h4>
                            <hr>

                     
                      <div><input type="submit" value="Submit" /></div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!--
                        <div class="btn-group">
                            <button class="btn" id="prevtab" type="button">Prev</button>
                            <button class="btn" id="nexttab" type="button">Next</button>
                        </div>
        -->
        <div class="contact-address span5">
            <h4>Petunjuk</h4>
            <div>Cara Pemesanan Undangan Pernikahan Online Anda dan calon pasangan Anda dapat memesan sesuai dengan paket yang anda inginkan. Pilih salah satu paket yang tersedia, yang anda dan pasangan Anda inginkan.<br> Selanjutnya ikuti petunjuk berikut:
                <br> <br> 1. Isi data diri anda secara <b>lengkap</b> pada form yang sudah kami sediakan. <b>Form tersebut berada di sebelah Kiri Petunjuk ini</b>.
                <br> 2. Dalam waktu 1×24 jam kami akan menghubungi balik anda tentang Undangan Pernikahan Online anda.
                <br> 3. Anda membayarkan DP 70% melalui Rekening Bank BCA  No.Rek.: 0373116235  a/n Hendi Prasetya.
                <br> 4. Proses Desain Undangan Pernikahan Online selama 6 hari.
                <br> 5. Setelah Desain Undangan Pernikahan Online selesai kami akan konfirmasi pelunasan biaya, dan tanggal Undangan Online Pernikahan Anda terbit.
                <br> 6. Kami mulai menerbitkan/launching Undangan Pernikahan Online Anda setelah menerima kesepakatan tanggal terbit/launching dan pelunasan biaya.
                <br> <br> Apabila ada pertanyaan, anda dapat bertanya pada menu Kontak, bisa melalui form yang sudah disediakan di menu tersebut. Bisa juga langsung bertanya ke nomor dan Pin BB yang sudah disediakan di menu Kontak.
            </div>
        </div>
    </div>
</div>