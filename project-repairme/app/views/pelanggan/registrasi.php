<style>

body {
  margin: 0;
  background: #25A3FF;
  font-family: 'Roboto', sans-serif;
}

h1 {
  position: relative;
  color: #fff;
  opacity: 0;
  transition: .8s ease-in-out;
}

#progress {
  position: absolute;
  background: #0069ec;
  height: 100vh;
  width: 0;
  transition: width 0.2s ease-in-out;
}

.center {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

/******
  Form
 ******/

#register {
  background: #fff;
  position: relative;
  width: 410px;
  padding: 2px 15px 20px 15px;
  box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
  transition: transform .1s ease-in-out;
}

#register.close {
  width: 0;
  padding: 0;
  overflow: hidden;
  transition: .8s ease-in-out;
  box-shadow: 0 16px 24px 2px rgba(0,0,0,0);
}

.next {
  position: absolute;
  right: 20px;
  bottom: 10px;
  font-size: 40px;
  color: #25a3ff;
  float: right;
  cursor: pointer;
}
.next:hover {color: #333}
.wrong .next {color: #ff2d26}
.close .next {color: #fff}

#inputContainer {
  position: relative;
  opacity: 0;
  width: 350px;
  margin-top: 25px;
  transition: opacity .3s ease-in-out;
}

#inputContainer input {
  width: 100%;
  padding: 0 5px;
  border: none;
  font-size: 20px;
  font-weight: bold;
  outline: 0;
  background: transparent;
  box-shadow:none;
}

#inputLabel {
  position: absolute;
  pointer-events: none;
  top: 0;
  left: 0;
  font-size: 20px;
  font-weight: bold;
  padding: 0 5px;
  transition: .2s ease-in-out;
}

#inputContainer input:valid + #inputLabel {
  top: -15px;
  font-size: 11px;
  font-weight: normal;
  color: #9e9e9e;
}

#inputProgress {
  position: absolute;
  border-bottom: 2px solid #25a3ff;
  padding: 3px 0;
  width: 0;
  transition: width .6s ease-in-out;
}

.wrong #inputProgress {
  border-color: #ff2d26;
}
</style>

<div id="progress"></div>

<div class="center">

  <div id="register">

    <i id="progressButton" class="ion-android-arrow-forward next"></i>
    <p class="input" style="font-size: 12px; color: red;"></p>
    <div id="inputContainer">
      
      <input id="inputField" required autofocus />
      
      <label id="inputLabel"></label>

      <div id="inputProgress"></div>
      
      <form action="<?=BASEURL;?>/pelanggan/insertpelanggan" method="POST" id="formPel" >
      <input type="text" id="nama" name="nama" hidden >
      <input type="email" id="email" name="email" hidden >
      <input type="text" id="alamat" name="alamat" hidden >
      <input type="text" id="no_tlp" name="no_tlp" hidden >
      <input type="text" id="username" name="username" hidden >
      <input type="password" id="password" name="password" hidden >
      </form>
    </div>

  </div>

  <script>


  var questions = [
    {question:"masukkan nama lengkap anda !", pattern: /^[A-Za-z]+$/ },
    {question:"What's your email?", pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/},
    {question:"masukkan no telepon anda !"},
    {question:"masukkan alamat anda !"},
    {question:"username "},
    {question:"password ", type: "password", pattern: /^.{8,}$/}
  ]
  
  
  ;(function(){
  
    var tTime = 100  // transition transform time from #register in ms
    var wTime = 200  // transition width time from #register in ms
    var eTime = 1000 // transition width time from inputLabel in ms
  
    // init
    // --------------
    var position = 0
  
    putQuestion()
  
    progressButton.addEventListener('click', validate)
    inputField.addEventListener('keyup', function(e){
      transform(0, 0) // ie hack to redraw
      if(e.keyCode == 13) validate()
    })
  
    // functions
    // --------------
  
    // load the next question
    function putQuestion() {
      inputLabel.innerHTML = questions[position].question
      inputField.value = ''
      inputField.type = questions[position].type || 'text'  
      inputField.focus()
      showCurrent()
    }
    
      $(document).ready(function(){
      $('.next').on('click',function(){
        if (!inputField.value.match(questions[0].pattern)){
          $('.input').text('Pastikan Nama tidak memuat angka atau simbol!');  
         wrong();
         
       }
      });
    });

    // when all the questions have been answered
    function done() {
      
     

      // remove the box if there is no next question
      register.className = 'close'
      
      // add the h1 at the end with the welcome text
      var h1 = document.createElement('h1')
      
      $(document).ready(function(){
      var q1 = questions[0].value;
      var q2 = questions[1].value;
      var q3 = questions[2].value;
      var q4 = questions[3].value;
      var q5 = questions[4].value;
      var q6 = questions[5].value;
      $('#nama').attr('value',q1);
      $('#email').attr('value',q2);
      $('#alamat').attr('value',q3);
      $('#no_tlp').attr('value',q4);
      $('#username').attr('value',q5);
      $('#password').attr('value',q6);

      console.log($('#nama').val()+$('#email').val()+$('#alamat').val()+$('#no_tlp').val()+$('#username').val()+$('#password').val());
      
      });
      h1.appendChild(document.createTextNode('Selamat Datang ' + questions[0].value + '!'))
      setTimeout(function() {
        register.parentElement.appendChild(h1)     
        setTimeout(function() {h1.style.opacity = 1}, 50)
        $(document).ready(function(){
              function submit(){
              $('#formPel').submit();
              }
              setTimeout(submit, 4000);
            });
      }, eTime)
      

      
      
    }
  
    // when submitting the current question
    function validate() {
  
      // set the value of the field into the array
      questions[position].value = inputField.value
  
      // check if the pattern matches
      if (!inputField.value.match(questions[position].pattern || /.+/)) wrong()
      else ok(function() {
        
        // set the progress of the background
        progress.style.width = ++position * 100 / questions.length + 'vw'
  
        // if there is a new question, hide current and load next
        if (questions[position]) hideCurrent(putQuestion)
        else hideCurrent(done)
               
      })
  
    }
  
    // helper
    // --------------
  
    function hideCurrent(callback) {
      inputContainer.style.opacity = 0
      inputProgress.style.transition = 'none'
      inputProgress.style.width = 0
      setTimeout(callback, wTime)
    }
  
    function showCurrent(callback) {
      inputContainer.style.opacity = 1
      inputProgress.style.transition = ''
      inputProgress.style.width = '100%'
      setTimeout(callback, wTime)
    }
  
    function transform(x, y) {
      register.style.transform = 'translate(' + x + 'px ,  ' + y + 'px)'
    }
  
    function ok(callback) {
      register.className = ''
      setTimeout(transform, tTime * 0, 0, 10)
      setTimeout(transform, tTime * 1, 0, 0)
      setTimeout(callback,  tTime * 2)
    }
  
    function wrong(callback) {
      register.className = 'wrong'
      for(var i = 0; i < 6; i++) // shaking motion
        setTimeout(transform, tTime * i, (i%2*2-1)*20, 0)
      setTimeout(transform, tTime * 6, 0, 0)
      setTimeout(callback,  tTime * 7)
    }
  
  }())
  </script>