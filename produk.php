<?php

require_once 'data.php';
require_once 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font -->
  <!-- Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <!-- Playwrite IS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+FR+Moderne:wght@100..400&family=Playwrite+IS:wght@100..400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Oull Cake's</title>
</head>

<body>
  <!-- header section start -->
  <header>
    <div class="container">
      <div class="logo">
        <a href="#">OULL<span>cake's</span></a>
      </div>
      <nav class="navbar" id="nav-menu">
        <a href="index.html">Home</a>
        <a href="">Produk</a>
        <a href="index.html#about">Tentang Kami</a>
        <a href="index.html#contact">Kontak Kami</a>
      </nav>
      <button class="hamburger" id="hamburger" name="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
  <!-- header section end -->

  <!-- Contact floating -->
  <a href="formContact.php" target="_blank">
    <div class="btn-floating">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" id="whatsapp">
        <path fill="#25D366" d="M24 48c13.255 0 24-10.745 24-24S37.255 0 24 0 0 10.745 0 24s10.745 24 24 24Z"></path>
        <path fill="#FDFDFD" fill-rule="evenodd" d="M24.791 37.353h-.006c-2.388-.001-4.735-.6-6.82-1.738L10.4 37.6l2.025-7.395a14.246 14.246 0 0 1-1.905-7.135c.003-7.868 6.405-14.27 14.27-14.27 3.819.002 7.402 1.488 10.096 4.185a14.185 14.185 0 0 1 4.176 10.097c-.003 7.866-6.402 14.267-14.27 14.27Zm-6.475-4.321.433.257a11.844 11.844 0 0 0 6.037 1.653h.005c6.538 0 11.859-5.32 11.862-11.861a11.79 11.79 0 0 0-3.471-8.392 11.78 11.78 0 0 0-8.386-3.479c-6.543 0-11.864 5.321-11.867 11.861 0 2.241.626 4.424 1.814 6.313l.282.448-1.199 4.378 4.49-1.178Zm13.176-6.878c.25.12.417.201.489.321.089.149.089.863-.208 1.696s-1.722 1.593-2.407 1.695c-.614.092-1.392.13-2.246-.14a20.465 20.465 0 0 1-2.033-.752c-3.343-1.444-5.602-4.684-6.029-5.296-.03-.043-.05-.073-.063-.088l-.002-.004c-.189-.252-1.453-1.94-1.453-3.685 0-1.643.806-2.504 1.178-2.9l.07-.075a1.31 1.31 0 0 1 .95-.446c.238 0 .476.002.684.012.026.002.052.002.08.001.207 0 .467-.002.722.612.099.236.242.586.394.956.307.747.646 1.572.706 1.691.089.179.148.387.03.625l-.05.102c-.09.182-.156.316-.307.493-.06.07-.121.144-.183.22-.123.149-.245.298-.352.405-.179.177-.364.37-.157.727.209.357.924 1.525 1.984 2.47 1.14 1.017 2.13 1.447 2.632 1.664.098.043.178.077.236.106.356.179.564.15.772-.089.208-.238.892-1.041 1.13-1.398.237-.357.475-.297.802-.179.327.12 2.08.982 2.436 1.16l.195.096Z" clip-rule="evenodd"></path>
      </svg>
    </div>
  </a>

  <!-- Products list -->
  <div class="produk">
    <?php foreach ($products as $produk) : ?>
      <?php $deskLimit = limit($produk['deskripsi'], 7); ?>
      <div class="produk-card">
        <a href="detail-produk.php?id=<?= $produk['id']; ?>">
          <div class="produk-img">
            <img src="assets/img/menu/<?= $produk['gambar']; ?>" alt="">
          </div>
          <div class="info-produk">
            <p class="nama-produk"><?= $produk['nama']; ?></p>
            <p class="deskripsi"><?= $deskLimit; ?></p>
            <p class="harga">IDR <?= $produk['harga']; ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- Product list->

  <!-- Footer Start -->
  <footer>
    <div class="container">
      <div class="logo">
        <a href="#">OULL<span>cake's</span></a>
      </div>
      <div class="socials">
        <!-- {{-- instagram --}} -->
        <a href="https://instagram.com/Awaludn16" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white transition duration-300">
          <svg width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current">
            <title>Instagram</title>
            <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
          </svg>
        </a>
        <!-- {{-- tiktok --}} -->
        <a href="https://instagram.com/Awaludn16" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white transition duration-300">
          <svg width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current">
            <title>TikTok</title>
            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
          </svg>
        </a>
        <!-- {{-- x --}} -->
        <a href="https://instagram.com/Awaludn16" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white transition duration-300">
          <svg width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current">
            <title>X</title>
            <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
          </svg>
        </a>
        <!-- {{-- facebook --}} -->
        <a href="https://instagram.com/Awaludn16" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary-500 hover:bg-primary-500 hover:text-white transition duration-300">
          <svg width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current">
            <title>Facebook</title>
            <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
          </svg>
        </a>
      </div>
      <div class="links">
        <a href="#home">home</a>
        <a href="#products">products</a>
        <a href="#about">tentang kami</a>
        <a href="#contact">kontak kami</a>
      </div>
      <div class="credit">
        <p>Copyright &copy; 2024 OULLcake's.</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Script -->
  <script src="js/script.js"></script>
</body>

</html>