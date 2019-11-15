
<!-- 
Materializecss Stepper v3.0.0-beta.1 - Igor Marcossi
https://github.com/Kinark/Materialize-stepper 
-->
<div class="section grey lighten-5">
   <div class="container">
      <div class="row">
         <div class="col xl4 l6 m10 s12 offset-xl4 offset-l3 offset-m1">
            <h3 class="light center-align blue-text">Sign up form</h3>

            <div class="card">
               <div class="card-content">

                  <ul data-method="GET" class="stepper linear">
                     <li class="step active">
                        <div class="step-title waves-effect waves-dark">Data Diri dan Usaha</div>
                        <div class="step-content">
                          
                           <div class="row">
                              <div class="input-field col s12">
                                 <input id="nama" name="nama" type="text" class="validate" required autofocus>
                                 <label for="nama">Nama Lengkap</label>
                                 <p></p>
                                 <p class="haha"></p>
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
                  
                      //var value = $('#nama').val();
                      $('#nama').keyup(function() {
                        var value = $( this ).val();
                        $( "p" ).text( value );
                        
                        var a = value.length;
                        $('.haha').text(a);
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
          
<button class="waves-effect waves-dark btn next-step">CONTINUE</button>
<button class="waves-effect waves-dark btn-flat previous-step">BACK</button
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
