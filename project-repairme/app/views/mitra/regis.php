<div ng-app="myApp" ng-controller="myController"> 
  <div class="section grey lighten-5">
  <div class="row kelassemu">
    <div class="col xl4 l6 m10 s12 offset-xl4 offset-l3 offset-m1">
      <h3 class="light center-align blue-text" id="tester">Sign up form</h3>
      <div class="card">
        <div class="card-content">
          <form action="<?=BASEURL;?>/mitra/insertMitra" method="POST" enctype="multipart/form-data" name="formMitra">
            
            <ul class="stepper linear">

              <li class="step active step1M">
                <div class="step-title waves-effect waves-dark">Data Diri dan Usaha</div>
                <div class="step-content">
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="nama" name="nama" type="text" class="validate" required autofocus>
                      <label for="nama">Nama Lengkap</label>
                      <p class="nama" style="font-size: 12px; color: red;"></p>
                    </div>  
                    <div class="input-field col s12">
                      <input id="nama_usaha" name="nama_usaha" type="text" class="validate" ng-model="nama_usaha" required>
                      
                      <label for="nama_usaha">Nama Usaha</label>
                      <p class="nama_usaha" style="font-size: 12px; color: red;"></p>
                      
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="alamat" name="alamat" type="text" class="validate" required>
                      <label for="alamat">Alamat Lengkap Tempat Usaha</label>
                      <p class="alamat" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate" required>
                      <label for="email">Email</label>
                    </div>
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
                    $('.stepMap2').hide();
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

                    

                    $('.step1').click(function(){
                      
                      if ($('.step1M').attr('class') == 'step active step1M feedbacking') {
                         $('.stepMap2').show();
                      }
                    });
                    
                    });
                    </script>
                  </div>
                </div>
              </li>
                

              
              <li class="step active stepMap2">
                <div class="step-title waves-effect waves-dark">Lokasi Tempat Usaha</div>
                <div class="step-content">
                  <div class="row">
                    <div class="input-field col s12">
                      <div class="mapLokasi">
                        <div id="map">
                        <script>


                            var map = L.map('map').setView([-7.91346, 113.82145], 18);
                            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);
                           
                            //icon option

                            // var iconOptions = {
                            //   iconUrl : 'http://localhost/Kelompok-1/project-repairme/public/img/leaflet/marker-icon.png',
                            //   iconSize : [25,38]
                            // }

                            // var customIcon = L.icon(iconOptions);

                            // var markerOptions = {
                            //   title: "myLokasi",
                            //   clickable: true,
                            //   dragable: true,
                            //   icon: customIcon
                            // }
                            var popup = L.popup();
                            var lokasiLat;
                            var lokasiLong;
                            var marker = L.marker([-7.91346, 113.82145]).addTo(map);
                            function onMapClick(e) {
                              marker.setLatLng(e.latlng);
                              marker.bindPopup("You clicked the map at " + e.latlng.toString()).openPopup();
                                lokasiLat = e.latlng.lat;
                                lokasiLong = e.latlng.lng;
                                $('#lat').attr('value',lokasiLat);
                                $('#lng').attr('value',lokasiLong);
                            }
                              map.on('click', onMapClick);
                            
                        </script>
                        
                      </div>
                      </div>
                       <p class="map" style="font-size: 12px; color: red;">Pilih Lokasi Anda Dengan Menekan Area Peta!<p>
                    </div>
                  </div>
                      <input id="lat" name="lat" type="text" class="validate" value="true"  hidden>
                      <input id="lng" name="lng" type="text" class="validate" value="true" hidden>
  
                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step step2" data-feedback="anyThing">CONTINUE</button>
                    <button class="waves-effect waves-dark btn blue  previous-step">BACK</button>
                   
                    <script>
                        $(document).ready(function(){
                         $('.step2').hide();
                         $('#map').click(function(){
                          $('.step2').show();
                         });
                        });
                      </script>

                  </div>
                </div>
              </li>

              <li class="step">
                <div class="step-title waves-effect waves-dark">Unggah Foto KTP dan Tempat Usaha</div>
                <div class="step-content">
                 
                  <div class="row">
                    <div class="input-field col s12">
                      <p>foto KTP</p>
                      <input id="foto_ktp" name="foto_ktp" type="file" class="validate" required>
                      <p class="foto_ktp" style="font-size: 12px; color: red;"></p>
                    </div>
                  </div>
                 <div class="row">
                    <div class="input-field col s12">
                      <p>foto Tempat Usaha</p>
                      <input id="foto_usaha" name="foto_usaha" type="file" class="validate" required>
                      <p class="foto_usaha" style="font-size: 12px; color: red;"></p>
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
                          }else if(filename != 'jpeg' && filename != 'jpg' && filename != 'png'){
                            $('.foto_ktp').text('Format Gambar Tidak Benar!');
                            var kel = $(this).val(null);
                          }else{
                            $('.foto_ktp').text('');
                          }

                          });

                        $('#foto_usaha').on('change',function(){
                          var filename = this.files[0].name.split('.').pop();
                          if ((this).files[0].size > 2000000) {
                            $('.foto_usaha').text('Ukuran Gambar Tidak Boleh Melebihi 2MB!');
                            var kel = $(this).val(null);
                          }else if(filename != 'jpeg' && filename != 'jpg' && filename != 'png'){
                            $('.foto_usaha').text('Format Gambar Tidak Benar!');
                            var kel = $(this).val(null);
                          }else{
                            $('.foto_usaha').text('');
                          }

                          });

                      });

                    </script>

                  </div>
                </div>
              </li>
              
              <li class="step">
                <div class="step-title waves-effect waves-dark">Akun Masuk</div>
                <div class="step-content">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="username" name="username" type="text" class="validate" required>
                      <label for="username">Username</label>
                      <p class="username" style="font-size: 12px; color: red;"><p>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" name="password" type="password" class="validate" required>
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="password2" name="password2" type="password" class="validate" required>
                      <label for="password2">Konfirmasi Password</label>
                    </div>
                  </div>
                  <div class="step-actions">
                    <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                    <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>

                    <script>
                      $(document).ready(function(){
                        $('#username').keyup(function(){
                          var val = $(this).val().length;
                          var a = $(this).val();
                          $('.username').text(a.toLowerCase());
                          if (val == 0) {
                            alert('oke');
                          }
                        })
                      });
                    </script>

                  </div>
                </div>
              </li>


              <li class="step">
                <div class="step-title waves-effect waves-dark">Kirim Pendaftaran</div>
                <div class="step-content">
                  <label>
                    <input type="checkbox" id="syarat" required>
                  <span>Saya setuju dengan persyaratan dan mengikuti semua aturan yang berlaku.</span>
                  
                  </label>
                  <div class="step-actions">
                    <button type="submit" id="submit">KIRIM</button>
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