<?php
function timeStamp($session_time){
   $time_difference = time() - $session_time;

   $seconds = $time_difference;
   $minutes = round($time_difference / 60);
   $hours = round($time_difference / 3600);
   $days = round($time_difference / 86400);
   $weeks = round($time_difference / 604800);
   $months = round($time_difference / 2419200);
   $years = round($time_difference / 29030400);

   // Seconds
   if ($seconds <= 60) {
      echo "Agora Mesmo";
   } else if ($minutes <= 60) {
      if ($minutes == 1) {
         echo "1 minuto atrás";
      } else {
         echo "$minutes minutos atrás";
      }
   } else if ($hours <= 24) {
      if ($hours == 1) {
         echo "1 hora atrás";
      } else {
         echo "$hours horas atrás";
      }
   } else if ($days <= 7) {
      if ($days == 1) {
         echo "1 dia atrás";
      } else {
         echo "$days dias atrás";
      }
   } else if ($weeks <= 4) {
      if ($weeks == 1) {
         echo "1 semana atrás";
      } else {
         echo "$weeks semana atrás";
      }
   } else if ($months <= 12) {
      if ($months == 1) {
         echo "1 mes atrás";
      } else {
         echo "$months mes atrás";
      }
   } else {
      if ($years == 1) {
         echo "1 ano atrás";
      } else {
         echo "$years anos atrás";
      }
   }
}
