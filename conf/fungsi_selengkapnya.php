<?php
function selengkapnya($konten){
  $i = strpos($konten, '<!--selengkapnya-->');
  if ($i !== false) {
   $i += strlen('<!--selengkapnya-->');
    return substr($konten, 0, $i);
  }
 else return $konten;
}
?>