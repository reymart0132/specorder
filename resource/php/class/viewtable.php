<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/specord/resource/php/class/core/init.php';
require_once 'config.php';

class viewtable extends config{


public function viewSO(){
  $con = $this->con();
  $sql = "SELECT * FROM `filelist`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table-dark table-bordered shadow display mb-3' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>File ID</th>";
  echo "<th>File Name</th>";
  echo "<th>Actions</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr class='bg-dark'>";
  echo "<td class='bg-dark'>$data[file_id]</td>";
  echo "<td style='font-size: 85%;'>$data[filename]</td>";

  echo "<td>
            <a href='./resource/uploads/$data[filename]' target='__new' class='btn btn-success btn-sm col-6 mt-1'><i class='fa fa-eye'></i>View File</a>
            <a href='./resource/uploads/$data[filename]' class='btn btn-danger btn-sm col-lg-6 mt-1' download><i class='fa fa-download'></i>Download File</a>
        </td>";
  echo "</tr>";
  }
  echo "</table>";

}
public function viewform9(){
  $con = $this->con();
  $sql = "SELECT * FROM `formn`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table-dark table-bordered shadow display mb-3' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>File ID</th>";
  echo "<th>File Name</th>";
  echo "<th>Actions</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr class='bg-dark'>";
  echo "<td class='bg-dark'>$data[id]</td>";
  echo "<td style='font-size: 85%;'>$data[fname]</td>";

  echo "<td>
            <a href='./resource/form9/$data[fname]' target='__new' class='btn btn-success btn-sm col-6 mt-1'><i class='fa fa-eye'></i>View File</a>
            <a href='./resource/form9/$data[fname]' class='btn btn-danger btn-sm col-lg-6 mt-1' download><i class='fa fa-download'></i>Download File</a>
        </td>";
  echo "</tr>";
  }
  echo "</table>";

}
public function checkF9(){
  $con = $this->con();
  $sql = "SELECT * FROM `formn`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);  
  $fnames = [];
  foreach($result as $data){
    $fnames[] =$data['fname'];
  }

  return $fnames;

}

public function viewGradlist(){
  $con = $this->con();
  $sql = "SELECT * FROM `filelist_grad`";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table-dark table-bordered shadow display mb-3' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>File ID</th>";
  echo "<th>File Name</th>";
  echo "<th>Actions</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr class='bg-dark'>";
  echo "<td class='bg-dark' >$data[file_id]</td>";
  echo "<td style='font-size: 85%;'>$data[filename]</td>";

  echo "<td>
            <a href='./resource/uploads/$data[filename]' target='__new' class='btn btn-info col-6 mt-1'>View File</a>
            <a href='./resource/uploads/$data[filename]' class='btn btn-primary col-6 mt-1'  download>Download File</a>
        </td>";
  echo "</tr>";
  }
  echo "</table>";

}



}
