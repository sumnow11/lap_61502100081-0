<?php require_once("dbcon.php");
if(isset($_GET['id'])){
    $result = $conn-> query("DELETE FROM movie WHERE m_id=".$_GET['id']);
    if($result){
        header("Location table6.php");
    }else{
        echo"ลบข้อมูลไม่สำเร็จ";
    }
  }
?>
<form action="." method="get">
<input type="text" name="search" id="search" placehotlder="ค้นหา">
<button type="submin" name="click">ค้นหา</button>
</form>
<button onclick="window.location='form_add.php';">เพิ่มข้อมูล</button>
<table style="width:100%" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลา</th>
    <th>ผู้ใช้งาน</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
   $sql = "SELECT * FROM movie";
   if(isset($_GET['click'])){
       $sql="SELECT * FROM movie WHERE m_name LIKE'%{$_GET['search']}%' ";
   }

  $result = $conn ->query($sql);
 
  while($row = $result->fetch_assoc()) {
   ?>
 <tr>
 <td><?php echo $row['m_id'];?></td>
 <td><?php echo $row['m_name'];?></td>
 <td><?php echo $row['m_time'];?></td>
 <td><?php echo $row['u_nume'];?></td>
 <td><?php echo $row['pin'];?></td>
 <td><a href="?delete=1&id=<?php echo $row['m_id'];?>">ลบ</a></td>
 </tr>
   
   <?php } ?>
 </table>