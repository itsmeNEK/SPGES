<table class="table table-bordered table-hover table-sm">
  <thead>
    <tr align="center">
      <th style="width: 10px">#</th>
      <th>Code</th>
      <th>Description</th>
      <th>Units</th>
    </tr>
  </thead>

  <tbody>

    <?php
      require('conn.php');
      $cursem = $_REQUEST['sem'];
      $cursy  = $_REQUEST['sy'];

      $result = mysqli_query($conn, "SELECT * from  tbl_subj_offered WHERE `semester` = '$cursem' AND `schoolyear` = '$cursy'");
        $i = 1;
        if(mysqli_num_rows($result) > 0 ){
          while($row = mysqli_fetch_array($result)){
            $subjCode = $row['subjCode'];
            $subjDesc = $row['subjDesc'];
            $subjUnit = $row['subjUnit'];
            echo
              "<tr>
                <td>$i</td>
                <td>$subjCode</td>
                <td>$subjDesc</td>
                <td>$subjUnit</td>
              </tr>
              ";
            $i++;
          };
          echo"
          <tr>
            <td colspan='4' align='center' style='color:red'>********** Nothing Follows ***********</tr>
          </td>";

        }else{
          echo
            "<tr>
              <td colspan='4' align='center' style='color:red'>********** Currently No Courses Being Offered ***********</tr>
            </td>";
        };
    ?>

  </tbody>
</table>
