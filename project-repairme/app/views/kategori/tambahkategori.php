<div id="progress"></div>

<div class="center">

  <div id="tambah">

    <i id="progressButton" class="ion-android-arrow-forward next"></i>
    <p class="inputbarang" style="font-size: 12px; color: red;"></p>
    <div id="inputContainer">
      
      <input id="inputField" required autofocus />
      
      <label id="inputLabel"></label>

      <div id="inputProgress"></div>
      
      <form action="<?=BASEURL;?>/Kategori/insertbarang" method="POST" id="formKat" >
       <input type="text" id="merk" name="merk" hidden >
      <!-- <input type="email" id="email" name="email" hidden >
      <input type="text" id="alamat" name="alamat" hidden >
      <input type="text" id="no_tlp" name="no_tlp" hidden >
      <input type="text" id="username" name="username" hidden >
      <input type="password" id="password" name="password" hidden > -->
      </form>
    </div>

  </div>
