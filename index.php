<?php include('header-landing.php') ?>
<div class="container-fluid bg-mobile-show">
  <div class="row">
    <div class="col-md-11">
      <div class="col-md-11 m-auto row">
        <div class="headBars col-md-4 text-center">
          <div class="col-md 12 text-center">
            <p class="title">RECORDS</p>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <p class="btn btn-head"><a class="Lien_header" href="records.php">View Musics</a></p>
          </div>
        </div>
        <div class="headBars col-md-4">
          <div class="col-md 12 text-center">
            <p class="title">PRODUCTION</p>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <p class="btn btn-head"><a class="Lien_header" href="javascript:;">View Videos</a></p>
          </div>
        </div>
        <div class="headBars col-md-4">
          <div class="col-md 12 text-center">
            <p class="title">SERVICES</p>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <p class="btn btn-head"><a class="Lien_header" href="javascript:;">View Services</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php include('sidebar.php') ?>
  </div>
  <div class="row p-down">
    <div class="col-md-9 m-auto row" id="musicPlayer">
      <div class="col-md-5">
        <div class="row align-items-center">
          <div class="col-1"></div>
          <div class="col-2 text-left">
            <i class="fas fa-volume-up fs-14 text-white"></i>
          </div>
          <div class="col-2 text-center">
            <i class="fas playerIcon fa-fast-forward fa-flip-horizontal"></i>
          </div>
          <div class="col-2 text-center">
            <i class="fas fa-play playerIcon"></i>
          </div>
          <div class="col-2 text-center">
            <i class="fas playerIcon fa-fast-forward"></i>
          </div>
          <div class="col-2 text-right">
            <i class="fas fa-cloud-upload-alt text-white"></i>
          </div>
          <div class="col-1"></div>
        </div>
        <div class="row align-items-center mt-4 pt-3">
          <div class="col-2">
            <strong class="text-white">00:00</strong>
          </div>
          <div class="col-8 text-center">
            <div id="loader">
              <?php
              for ($i = 0; $i < 30; $i++) {

              ?>
                <div class="square"></div>
              <?php } ?>
            </div>
          </div>
          <div class="col-2">
            <strong class="text-white">00:00</strong>
          </div>
          <div class="col-md-12 mt-4 text-center pt-3">
            <strong class="text-white">SNOW BLUF (ft) - #remake</strong>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="musicList">
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
          <div>
            <img src="images/musics/m1.jpg" class="img-slick" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---   <section>
            <div class="comming_soon"><p>Cooming soon ...</p></div>
        </section>
      -->
<!---  <footer class="footer">
          <p>&copy; Sixela Studio 2020</p>
        </footer>
        -->

<?php include('footer.php') ?>