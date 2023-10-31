<?php
function usuarioOk($usuario, $contraseña): bool
{

   $a = false;

   if (strlen($usuario) > 7 && $contraseña == strrev($usuario)) {
      $a = true;
   }

   return true;
}


function letraMasRepetida($str)
{
   $str = str_replace(' ', '', $str);

   $arr = array_count_values(str_split($str));
   $a = 0;
   $r = "";

   foreach ($arr as $k => $v) {
      if ($v > $a) {
         $a = $v;
         $r = $k;
      }
   }

   return $r;
}

function palabraMasRepetida($str)
{
   $palabras = explode(' ', $str);
   $cuentaPalabras = array_count_values($palabras);
   $a = 0;
   $r = "";

   foreach ($cuentaPalabras as $k => $v) {
      if ($v > $a) {
         $a = $v;
         $r = $k;
      }
   }

   return $r;
}
