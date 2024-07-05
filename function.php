<?php

// function untuk menampilkan limit dari deskripsi produk
function limit($separator, $kata)
{
  $limit = explode(' ', $separator, $kata + 1);
  if (count($limit) > $kata) {
    array_pop($limit);
    $limit[] = '...';
  }
  return implode(' ', $limit);
}
