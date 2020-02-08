<?php

function countVokal($kata)
{

  $a = substr_count($kata, "a");
  $i = substr_count($kata, "i");
  $u = substr_count($kata, "u");
  $e = substr_count($kata, "e");
  $o = substr_count($kata, "o");

  $vocal = $a + $i + $u + $e + $o;

  return $vocal;
}

// Masukan Huruf Vokal
echo countVokal('Bagas');
