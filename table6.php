<?php require_once("dbcon.php");?>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อ</th>
    <th>เวลา</th>
    <th>ผู้ใช้งาน</th>
    <th>pin</th>
  </tr>
  <?php
   $sql = "SELECT * FROM movie";
   

  $result = $conn ->query($sql);
 
  while($row = $result->fetch_assoc()) {
   ?>
 <tr>
 <td><?php echo $row['m_id'];?></td>
 <td><?php echo $row['m_name'];?></td>
 <td><?php echo $row['m_time'];?></td>
 <td><?php echo $row['u_nume'];?></td>
 <td><?php echo $row['pin'];?></td>
 
 </tr>
   
   <?php } ?>
 </table>