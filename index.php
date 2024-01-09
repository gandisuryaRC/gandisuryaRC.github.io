<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perkenalan bootstrap</title>
    <?php require_once('_css.php'); ?>
</head>
<body>
<?php require_once('_header.php'); ?>
  <section class="w-100 p-4 pb-4">
  <div id="carouselExampleIndicators" class="carousel slide slidepic" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="picture1/patrickkk.jpg" class="d-block w-100" alt="...">
      </div>
       <div class="carousel-item">
          <img src="picture1/patrick2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="picture1/patrickhehe.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br><br>
    <center>
      <img src="picture1/wibu.jpg" class="pp" height="250px"></p>
      <h2>
        <a class="typewrite" data-period="2000" data-type="[ &quot;Hi, I am Gandi.&quot;, &quot;Im 16 yo.&quot;, &quot;Im a Gamer.&quot; ]"><span class="wrap"></span></a>
      </h2>
      <script type="text/javascript">
        var TxtType = function(el, toRotate, period) {
              this.toRotate = toRotate;
              this.el = el;
              this.loopNum = 0;
              this.period = parseInt(period, 10) || 2000;
              this.txt = '';
              this.tick();
              this.isDeleting = false;
          };
      
          TxtType.prototype.tick = function() {
              var i = this.loopNum % this.toRotate.length;
              var fullTxt = this.toRotate[i];
      
              if (this.isDeleting) {
              this.txt = fullTxt.substring(0, this.txt.length - 1);
              } else {
              this.txt = fullTxt.substring(0, this.txt.length + 1);
              }
      
              this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
      
              var that = this;
              var delta = 200 - Math.random() * 100;
      
              if (this.isDeleting) { delta /= 2; }
      
              if (!this.isDeleting && this.txt === fullTxt) {
              delta = this.period;
              this.isDeleting = true;
              } else if (this.isDeleting && this.txt === '') {
              this.isDeleting = false;
              this.loopNum++;
              delta = 500;
              }
      
              setTimeout(function() {
              that.tick();
              }, delta);
          };
      
          window.onload = function() {
              var elements = document.getElementsByClassName('typewrite');
              for (var i=0; i<elements.length; i++) {
                  var toRotate = elements[i].getAttribute('data-type');
                  var period = elements[i].getAttribute('data-period');
                  if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                  }
              }
              // INJECT CSS
              var css = document.createElement("style");
              css.type = "custom.css";
              css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
              document.body.appendChild(css);
          };	
        </script>
      <style type="text/css">
        .typewrite > .wrap { 
          border-right: 0.08em solid 
        }
      </style>
		</center>
	</div>

<br><br><br>
  <hr>
<center><h2 id="about">About Me</center>
  <br>
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Tentang Saya</h2>
          <p>Saya adalah seorang customer service specialist dengan pengalaman kerja lebih dari 3 tahun.
            Seorang problem solver kreatif dengan kemampuan interpersonal yang kuat. Berhasil membangun program retensi pelanggan baru yang telah meningkatkan customer loyalty sebesar 20%.
            Saya kini mencari posisi sebagai sebagai customer service supervisor untuk melanjutkan perkembangan karier ke bidang manajemen.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Hobi Saya</h2>
          <ol>
            <li>Main</li>
            <li>Turu</li> 
            <li>Dengerin musik</li> 
          </ol>
        </div>
      </div>
    </div>
<br><br>
<center>
<hr>
<h3 id="galeri" class="gal">Gallery</h3>
    <div class="album py-5 bg-white">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img src="picture1/roger.jpg">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm bg-dark">
              <img src="picture1/shirohige.jpg">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm bg-dark">
              <img src="picture1/kaido.jpg">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm bg-dark">
              <img src="picture1/bigmom.jpg">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm bg-dark">
              <img src="picture1/shanks.jpg">
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm bg-dark">
              <img src="picture1/kurohige.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
</center>
<br><br>
</section>
<?php require_once('_footer.php'); ?>
<?php require_once('_js.php'); ?>
</body>
</html>