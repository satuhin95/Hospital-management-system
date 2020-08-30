<?php 


              $st = $admission->admission_date;
              $en = $admission->release_date;
              $start = strtotime($st);
              $end = strtotime($en);

              $days_between = ceil(abs($end - $start) / 86400);
              
?>