<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: skyblue;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background-image: url(https://cdn-u1-gnfi.imgix.net/post/large-jakarta-office-0fff67ba5f79837d89216084c7ff1bc9.jpg);
  font color: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: skyblue;
  height: 450px;
  width: 1000px;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: "";
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1 style="color: white;">Jalan-Jalan Jakarta</h1>
  <h2 style="color: white;">Membahas Seputar Jakarta</h2>
</div>

<div class="topnav">
  <a href="#">Sejarah</a>
  <a href="#">Modern</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Monumen Nasional</h2>
      <h5>Apakah Kalian Tahu Tentang Monas?</h5>
      <div class="fakeimg">
        <img src="https://idetrips.com/wp-content/uploads/2018/07/Monas-jakarta-tourism-go-id.jpg" height="100%" width="100%">
      </div>
      <h2>Monas</h2>
      <p>Monumen Nasional atau yang populer disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda. Pembangunan monumen ini dimulai pada tanggal 17 Agustus 1961 di bawah perintah presiden Sukarno dan dibuka untuk umum pada tanggal 12 Juli 1975. Tugu ini dimahkotai lidah api yang dilapisi lembaran emas yang melambangkan semangat perjuangan yang menyala-nyala. Monumen Nasional terletak tepat di tengah Lapangan Medan Merdeka, Jakarta Pusat. </p>
    </div>
    <div class="card">
      <h2>Museum Satria Mandala</h2>
      <h5>Yuk Intip Apa Saja Yang Ada di Sini!</h5>
      <div class="fakeimg">
        <img src="https://www.tagar.id/Asset/uploads2019/1567053473225-museum-satriamandala.jpg" height="100%" width="100%">
      </div>
      <h2>Satria Mandala</h2>
      <p>Museum Satria Mandala adalah museum sejarah perjuangan Tentara Nasional Indonesia yang terletak di Jalan Gatot Subroto, Jakarta Selatan. Museum yang diresmikan pada tahun 1972 oleh mantan Presiden Indonesia, Soeharto ini awalnya adalah rumah dari salah satu istri mantan Presiden Indonesia, Soekarno, yaitu istrinya yang bernama Ratna Sari Dewi Soekarno. Dalam museum ini dapat ditemui berbagai koleksi peralatan perang di Indonesia, dari masa lampau hingga modern seperti koleksi ranjau, rudal, torpedo, tank, meriam bahkan helikopter dan pesawat terbang (satu di antaranya adalah pesawat Cureng yang pernah diterbangkan oleh Marsekal Udara Agustinus Adisucipto). </p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Jakarta</h2>
      <div class="card">
        <img src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/java/dki-jakarta/Image1.jpg" height="100%" width="100%">
        <p>Jakarta adalah ibukota Indonesia..</p>
      </div>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="card"><p>Monumen Nasional</p>
        <img src="https://idetrips.com/wp-content/uploads/2018/07/Monas-jakarta-tourism-go-id.jpg" height="100%" width="100%">
      </div>
      <div class="card"><p>Satria Mandala</p>
        <img src="https://www.tagar.id/Asset/uploads2019/1567053473225-museum-satriamandala.jpg" height="100%" width="100%">
      </div>
      <div class="card"><p>Jakarta</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Jakarta_Car_Free_Day.jpg" height="100%" width="100%">
      </div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <img src="http://pluspng.com/img-png/instagram-png-instagram-png-logo-1455.png" alt="instagram" height="20px"><p>@muhamadrifkialdianto</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Enjoy Jakarta</h2>
</div>

</body>
</html>
