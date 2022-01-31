<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="/siswa" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Siswa</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">DATABASE SISWA</h1>
  <p class="w3-xlarge"></p>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>PHP</h1>
      <h5 class="w3-padding-32">PHP adalah singkatan dari Hypertext Preprocessor, yaitu bahasa pemrograman yang sebenarnya mirip dengan JavaScript dan Python. Perbedaannya adalah, PHP sering kali digunakan untuk komunikasi sisi server, sedangkan JavaScript bisa digunakan untuk frontend dan backend. Sementara itu, Python hanya untuk sisi server (backend).</h5>

      <p class="w3-text-grey">Bahasa penulisan skrip adalah bahasa yang mengotomatiskan eksekusi task (tugas) dalam environment runtime khusus. Tugas ini mencakup menginstruksikan halaman statis (dibuat dengan HTML dan CSS) untuk melakukan tindakan tertentu dengan aturan yang sudah ditetapkan.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Java</h1>
      <h5 class="w3-padding-32">Java adalah bahasa pemrograman yang biasa digunakan untuk mengembangkan bagian back-end dari software, aplikasi Android, dan juga website.

        Java juga dikenal memiliki moto “Write Once, Run Anywhere”. Artinya, Java mampu dijalankan di berbagai platform tanpa perlu disusun ulang menyesuaikan platformnya. Misalnya, berjalan di Android, Linux, Windows, dan lainnya.</h5>

      <p class="w3-text-grey">Bahasa pemrograman Java pertama kali muncul dari sebuah project “The Green Project” di Sun Microsystem, sebuah perusahaan perangkat lunak di Amerika.

        Proyek itu dimotori oleh James Gosling, Patrick Naughton, Mike Sheridan, dan Bill Joy.  Awalnya, proyek bertujuan untuk menciptakan sebuah peralatan pintar. Namun, karena tak puas dengan hasil dari bahasa pemrograman C++ dan C, mereka memutuskan untuk membuat bahasa pemrograman sendiri yang lebih canggih lagi. </p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: be yourself and never surrender</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"><a href="https://www.facebook.com/karatachi.asta/">Doni Irawan</a></i>
    <i class="fa fa-instagram w3-hover-opacity"><a href="https://www.instagram.com/donirawan08/">Donirawan08</a></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"><a href="https://id.pinterest.com/donicyber5/_saved/">@donicyber5</a></i>
 </div>
 <p>Powered by <a href="#" target="_blank">Doni Irawan</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
