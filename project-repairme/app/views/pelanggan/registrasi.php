

    <div class="main">

<div class="container">
    <div class="signup-content">
        <div class="signup-img">
            <img src="images/form-img.jpg" alt="">
            <div class="signup-img-content">
                <h2>Register now </h2>
                <p>while seats are available !</p>
            </div>
        </div>
        <div class="signup-form">
        <form action="<?=BASEURL;?>/pelanggan/insertpelanggan" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group">
                        <div class="form-input">
                            <label for="nama" class="required">Nama</label>
                            <input type="text" name="nama" id="nama" />
                        </div>
                        <div class="form-input">
                            <label for="email" class="required">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="form-input">
                            <label for="no_tlp" class="required">No telepon</label>
                            <input type="text" name="no_tlp" id="no_tlp" />
                        </div>
                        <div class="form-input">
                            <label for="alamat" class="required">Alamat</label>
                            <input type="text" name="alamat" id="alamat" />
                        </div>
                        <div class="form-input">
                            <label for="username" class="required">Username</label>
                            <input type="text" name="username" id="username" />
                        </div>
                        <div class="form-input">
                            <label for="password" class="required">password</label>
                            <input type="password" name="password" id="password" />
                        </div>
                        <div class="form-input">
                            <label for="confir" class="required">konfirmasi</label>
                            <input type="password" name="confir" id="confir" />
                        </div>
                <div class="form-submit">
                    <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                    <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                </div>
            </form>
        </div>
    </div>
</div>

</div>

