<div class="section grey lighten-5">
  <div class="row">
    <div class="col xl4 l6 m10 s12 offset-xl4 offset-l3 offset-m1">
      <h3 class="light center-align blue-text" id="tester">Sign up form</h3>
      <div class="card">
        <div class="card-content">
          <form action="" method="POST" enctype="multipart/form-data">
            
            <ul class="stepper">
              <li class="step active">
                <div class="step-title waves-effect waves-dark">Data Diri dan Usaha</div>
                <div class="step-content">
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="nama" name="nama" type="text" class="validate" required autofocus>
                      <label for="nama">Nama Lengkap</label>
                      <p class="nama" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="nama_usaha" name="nama_usaha" type="text" class="validate" required>
                      <label for="nama_usaha">Nama Usaha</label>
                      <p class="nama_usaha" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="alamat" name="alamat" type="text" class="validate" required>
                      <label for="alamat">Alamat Lengkap</label>
                      <p class="alamat" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate" required>
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="no_telpon" name="no_telpon" type="text" class="validate" required>
                      <label for="no_telpon">No Telfon</label>
                    </div>
                  </div>
                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step step1" data-feedback="anyThing">Lanjut</button>
                    
                    <script>
                    $(document).ready(function(){
                    //validasi nama
                    
                    $('#nama').keyup(function() {
                    var value = $( this ).val();
                    
                    var regex = /^[a-z A-Z]+$/;
                    if (regex.test(this.value) !== true) {
                    this.value = this.value.replace(/[^a-z ]+/, '');
                    alert('Nama Pemilik tidak boleh mengandung angka atau simbol!!');
                    }
                    var nama = value.length;
                    if(nama == 0){
                    $('.nama').text("Nama Lengkap Harus Di Isi!!");
                    }else if(nama <= 5){
                    $('.nama').text("Nama Anda Hanya Terdiri dari " + nama + " huruf?");
                    }else{
                    $('.nama').text("");
                    }
                    });
                    $('#nama_usaha').keyup(function() {
                    var value = $( this ).val();
                    
                    var nama_usaha = value.length;
                    $('.nama_usaha').text(value);
                    if(nama_usaha == 0){
                    $('.nama_usaha').text("Nama usaha Harus Di Isi!!");
                    }else{
                    $('.nama_usaha').text("");
                    }
                    });
                    
                    
                    });
                    </script>
                  </div>
                </div>
              </li>
              <li class="step">
                <div class="step-title waves-effect waves-dark">Lokasi Tempat Usaha</div>
                <div class="step-content">
                


                  <div class="row">
                    <div class="input-field col s12">
                      <div id="map">
                        <script>
                            var map = L.map('map').setView([-7.91346, 113.82145], 13);
                            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);
                            var c = new L.Control.Coordinates();
                            c.addTo(map);

                            var ambilLokasi;
                            var lokasiLat;
                            var lokasiLong;
                            function onMapClick(e) {
                              c.setCoordinates(e); 
                              ambilLokasi = e;
                              lokasiLat = ambilLokasi.latlng.lat;
                              lokasiLong = ambilLokasi.latlng.lng;
                              
                            }
                            map.on('click', onMapClick);
                            $(map).on('click',function(){
                              $('#lat').attr('value',lokasiLat);
                              $('#lng').attr('value',lokasiLong);
                            });

                            
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="lat" name="lat" type="text" class="validate" required disabled >
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="lng" name="lng" type="text" class="validate" required disabled >
                    </div>
                  </div>

                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step step2" data-feedback="anyThing">CONTINUE</button>
                    <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                  </div>
                </div>
              </li>

              <li class="step">
                <div class="step-title waves-effect waves-dark">Unggah Foto KTP</div>
                <div class="step-content">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="foto_ktp" name="foto_ktp" type="file" class="validate" required>
                      <p class="foto_ktp" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step step3" data-feedback="anyThing">CONTINUE</button>
                    <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>

                    <script>
                      
                      $(document).ready(function(){
                        $('#foto_ktp').on('change',function(){
                          var filename = this.files[0].name.split('.').pop();
                          if ((this).files[0].size > 2000000) {
                            $('.foto_ktp').text('Ukuran Gambar Tidak Boleh Melebihi 2MB!');
                            var kel = $(this).val(null);
                          }else if(filename != 'jpeg' && filename != 'jpg' && filename != 'sql'){
                            $('.foto_ktp').text('Format Gambar Tidak Benar!');
                            var kel = $(this).val(null);
                          }else{
                            $('.foto_ktp').text('');
                          }

                          });

                      });

                    </script>

                  </div>
                </div>
              </li>
              
              <li class="step">
                <div class="step-title waves-effect waves-dark">Step 2</div>
                <div class="step-content">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" name="password" type="password" class="validate" required>
                      <label for="password">Your password</label>
                    </div>
                  </div>
                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                    <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                  </div>
                </div>
              </li>


              <li class="step">
                <div class="step-title waves-effect waves-dark">Callback</div>
                <div class="step-content">
                  End!!!!!
                  <div class="step-actions">
                    <button type="submit" id="submit" class="waves-effect waves-dark btn blue next-step">ENDLESS CALLBACK!</button>
                  </div>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function anyThing(destroyFeedback) {
setTimeout(function(){ destroyFeedback(true); }, 1500);
}
function noThing(destroyFeedback) {
setTimeout(function(){ destroyFeedback(true); }, 10000);
}
var stepperDiv = document.querySelector('.stepper');
console.log(stepperDiv);
var stepper = new MStepper(stepperDiv);
</script>