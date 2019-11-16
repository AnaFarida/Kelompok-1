    
<div class="section grey lighten-5">
    <div class="row">
      <div class="col xl4 l6 m10 s12 offset-xl4 offset-l3 offset-m1">
        <h3 class="light center-align blue-text" id="tester">Sign up form</h3>
        <div class="card">
          <div class="card-content">
            <form action="" method="POST">
              
              <ul class="stepper linear">
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
                        <label for="email">Your e-mail</label>
                      </div>
                    </div>
                    <div class="step-actions">
                      <button class="waves-effect waves-dark btn blue next-step step1" data-feedback="anyThing">Continue</button>
                      
                      <script>
                      $(document).ready(function(){
                      //validasi nama
                      
                      $('#nama').keyup(function() {
                      var value = $( this ).val();
                      
                      var regex = /^[a-z ]+$/;
                      if (regex.test(this.value) !== true) {
                      this.value = this.value.replace(/[^a-z ]+/, '');
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
                      $('.nama_usaha').text("Nama usaha Lengkap Harus Di Isi!!");
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
                      <button class="waves-effect waves-dark btn blue next-step" data-feedback="noThing">ENDLESS CALLBACK!</button>
                    </div>
                  </div>
                </li>
              </ul>
            </form>
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button
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