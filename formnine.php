<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/specord/resource/php/class/core/init.php';
isLogin();
$viewtable = new viewtable();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEU S-O Portal</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <script src="vendor/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/css/dataTables.css">
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="vendor/js/dataTables/buttons.print.min.js"></script>
  <script src="https://kit.fontawesome.com/909c1a5e64.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="resource/css/table.css">

</head>
<body>

        <nav class="navbar navbar-light bg-dark shadow-sm slide-in-left">
          <a class="navbar-brand" href="https:/ceu.edu.ph/">
            <img src="resource/img/ceuwhite.png" height="70" class="d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
               <a href="specialorder.php" class="mr-3" style="color:#FFF;font-size:50%;letter-spacing:1px;text-transform:uppercase;"> <i class="fa-solid fa-file fa-2xs mr-1" style="color: #ffffff;"></i>Special Order Files</a>
          <a href="formnine.php" class="mr-3" style="color:#FFF;font-size:50%;letter-spacing:1px;text-transform:uppercase;border-bottom: 1px solid violet"> <i class="fa-solid fa-star fa-2xs mr-1" style="color: #ffffff;"></i>FORM-9</a>
          <a href="gradlist.php" class="mr-3" style="color:#FFF;font-size:50%;letter-spacing:1px;text-transform:uppercase"> <i class="fa-solid fa-graduation-cap fa-2xs mr-1" style="color: #ffffff;"></i>Graduation List Files</a>
          <a href="logout.php" style="color:#FFF;font-size:50%;letter-spacing:1px;text-transform:uppercase"><i class="fa-solid fa-right-from-bracket  fa-2xs mr-1" style="color: #ffffff;"></i> Logout</a>
        </nav>

        <div class="container-fluid container-main puff-in-center p-5">
          <?php $viewtable->viewform9(); ?>
        </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap-select.min.js"></script>
    <script>
    $(document).ready(function(){
      window.$('#scholartable').DataTable({
        dom: 'frtipB',
        buttons: [
            {
                extend: 'excelHtml5',
                className: 'btn btn-success',
                text: 'Excel',
                titleAttr: 'Export to Excel',
                title: 'Scholarship Report',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-primary',
                text: 'CSV',
                titleAttr: 'CSV',
                title: 'Scholarship Report',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            },
            {
                extend: 'pdfHtml5',
                className: 'btn btn-danger',
                text: 'PDF',
                titleAttr: 'PDF',
                title: 'Scholarship Report',
                orientation: 'landscape',
                pageSize: 'TABLOID',
                exportOptions: {
                    columns: ':not(:last-child)',
                }
            }
        ]
        });
    });
</script>
</body>
</html>
