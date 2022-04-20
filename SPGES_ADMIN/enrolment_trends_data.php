<?php
  require "conn.php";

  $sql = mysqli_query($conn,"SELECT `semester`,`schoolyear` FROM `tbl_stdprofile`GROUP BY `schoolyear`,`semester` ORDER BY `schoolyear` DESC LIMIT 4");

    while($row = mysqli_fetch_array($sql)){
       $chart_data="";
      $sch[] = $row['schoolyear'];
      $reverse = array_reverse($sch);
    }

    $SResult = mysqli_query($conn, "SELECT * FROM tbl_semester");

    if(mysqli_num_rows($SResult) > 0){
      $ctr = mysqli_num_rows($SResult);
      while($row = mysqli_fetch_array($SResult)){
        $sem[]  =$row['semester'];
      }
    }


     for($i = 0; $i < $ctr;$i++){
       $select = mysqli_query($conn,"SELECT schoolyear,semester, COUNT(*) as Total FROM `tbl_stdprofile` WHERE `semester` = '$sem[$i]' GROUP BY `schoolyear` ORDER BY `schoolyear` DESC LIMIT 4");
         if (mysqli_num_rows($select) > 0){
           while ($srow = mysqli_fetch_array($select)){
             $data[$i][] = $srow['Total'];

           }

         }
         $len = count($data[$i]);
           if($len < 4){
             while ($len < 4){
             array_push($data[$i], "0");
               $len = count($data[$i]);
             }
           }

     }
      ?>

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">



          

      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">



                      var barChartCanvas = $('#barChart').get(0).getContext('2d')

                      var areaChartData = {
                        labels  : <?php echo json_encode($reverse); ?>,
                        datasets: [
                          {
                            label               : <?php echo json_encode($sem[1]); ?>,
                            backgroundColor     : 'rgba(60, 141, 188)',
                            borderColor         : 'rgba(60, 141, 188)',
                            pointRadius          : false,
                            pointColor          : '#3b8bba',
                            pointStrokeColor    : 'rgba(60, 141, 188)',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(60, 141, 188)',
                            data                : <?php echo json_encode($data[1]); ?>
                          },
                          {
                            label               : <?php echo json_encode($sem[0]); ?>,
                            backgroundColor     : 'rgba(0, 166, 90)',
                            borderColor         : 'rgba(0, 166, 90)',
                            pointRadius         : false,
                            pointColor          : 'rgba(0, 166, 90)',
                            pointStrokeColor    : '#c1c7d1',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(0, 166, 90)',
                            data                : <?php echo json_encode($data[0]); ?>
                          },
                          {
                            label               : <?php echo json_encode($sem[2]); ?>,
                            backgroundColor     : 'rgba(243, 156, 18)',
                            borderColor         : 'rgba(243, 156, 18)',
                            pointRadius         : false,
                            pointColor          : 'rgba(243, 156, 18)',
                            pointStrokeColor    : '#c1c7d1',
                            pointHighlightFill  : '#fff',
                            pointHighlightStroke: 'rgba(243, 156, 18)',
                            data                : <?php echo json_encode($data[2]); ?>
                          },
                        ]
                      }


                      var barChartData = $.extend(true, {}, areaChartData)
                      var temp0 = areaChartData.datasets[0]
                      var temp1 = areaChartData.datasets[1]
                      barChartData.datasets[0] = temp1
                      barChartData.datasets[1] = temp0

                      var barChartOptions = {
                        responsive              : true,
                        maintainAspectRatio     : false,
                        datasetFill             : false
                      }

                      new Chart(barChartCanvas, {
                        type: 'bar',
                        data: barChartData,
                        options: barChartOptions
                      })

        </script>
    </html>
