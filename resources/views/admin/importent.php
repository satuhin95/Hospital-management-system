<?php 


              $st = $row->admission_date;
              $en = $row->release_date;
              $start = strtotime($st);
              $end = strtotime($en);

              $days_between = ceil(abs($end - $start) / 86400);
              echo $days_between;
?>