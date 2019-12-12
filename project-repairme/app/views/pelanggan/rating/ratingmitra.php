<!-- <div class="comment-form mt-30" style="width: 40%; position: absolute; top: 10%; right: 4%;">
      <h4 class="comment-form-title font-alt">Rating Mitra</h4>
      <form method="post">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" id="" type="text" name="name" placeholder="Name" value="<?= $_SESSION['login']['data']['nama']; ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <select class="form-control">
                <option selected="true" disabled="" hidden>List Mitra</option>
                <?php foreach ($data['mitra'] as $mitra):?>
                <option value="<?= $mitra['id_mitra']; ?>"><?= $mitra['nama_usaha']; ?></option>
                <?php endforeach; ?>
                
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <select class="form-control">
                <option selected="true" disabled="" hidden>Rating</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <textarea class="form-control" id="testimoni" name="testimoni" rows="4" placeholder="Isi Testimoni"></textarea>
            </div>
          </div>
          <div class="col-sm-12">
            <button class="btn btn-d btn-round btn-block" type="submit">Beri Rating</button>
          </div>
        </div>

      </form>
    </div> -->
    <!DOCTYPE html>
<html>
  <head>
    <title>jQuery Emoji Ratings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= BASEURL; ?>/rating-master/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="row">
      <div class="comment-form mt-30" style="width: 40%; position: absolute; top: 10%; right: 4%;">
        <h2 class="comment-form-title font-alt">Rating Mitra</h2>
        <form method="post">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label  for="name">Name</label>
              <input class="form-control" id="" type="text" name="name" placeholder="Name" value="<?= $_SESSION['login']['data']['nama']; ?>">
            </div>
            <div class="form-group">
              <label  for="mitra">List Mitra</label>
              <select class="form-control">
                <option selected="true" disabled="" hidden>List Mitra</option>
                <?php foreach ($data['mitra'] as $mitra):?>
                <option value="<?= $mitra['id_mitra']; ?>"><?= $mitra['nama_usaha']; ?></option>
                <?php endforeach; ?>
                
              </select>
            </div>
          <div class="form-group">
            <label for="comments">Testimoni</label>
            <textarea class="form-control" id="comments" name="comments"></textarea>
          </div>
          <div class="form-group" id="rating">
            <label for="rating">Rating</label>
          </div>
          <button class="btn btn-d btn-round btn-block" type="submit">Beri Rating
            <span class="review-text" style="display:none"><span id="starCount"></span> Review</span>
          </button>
        </form>
      </div>
    </div>





    <script src="<?= BASEURL; ?>/rating-master/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/rating-master/dist/jquery.emojiRatings.min.js"></script>
    <script>
      $("#rating").emojiRating({
        fontSize: 32,
        onUpdate: function(count) {
          $(".review-text").show();
          $("#starCount").html(count + " Star");
        }
      });
      $("#demo").submit( function(e) {
        e.preventDefault();

        var 
          name = $(this).find('#firstName').val() + ' ' + $(this).find('#lastName').val(),
          comments = $(this).find('#comments').val(),
          rating = $(this).find('.emoji-rating').val(),
          alert = 'Name: ' + name + '\nComments: ' + comments + '\nRating: ' + rating;

        window.alert(alert);
      });
    </script>
<div class="tutorial mt-70" style="position: absolute; right: 130%; width: 100%; top: 0%;" >
  <h4 class="font-alt mb-0">Tutorial</h4>
  <hr class="divider-w mt-10 mb-20">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Mengapa Memberi Rating?</a></h4>
      </div>
      <div class="panel-collapse collapse in" id="support1">
        <div class="panel-body">
          Dengan memberikan Penilaian kepada Mitra ,Maka Repairme akan dengan mudah memberikan anda solusi terbaik untuk mencari mitra terpercaya dan profesional ,sesuai dengan penilaian Pelanggan Repairme.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Bagaimana caranya? </a></h4>
      </div>
      <div class="panel-collapse collapse" id="support2">
        <div class="panel-body">Silahkan Pilih Mitra Yang akan di beri Rating dan berikan testimoni anda mengenai Pelayanan dan hasil perbaikan Mitra lalu Pilih Star untuk penilaian . 
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
