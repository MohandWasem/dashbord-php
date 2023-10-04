<?php 

$current="users";


include_once('design/navbar.php')?>

  <div id="wrapper">

<?php include_once('design/sidebar.php')?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">users</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>




        <?php 
       if($priv_user!=1){
        include ("404.php");
        exit();
       }

        if(!isset($_GET['users'])){
            include "includes/users/view.php";
        }elseif($_GET['users']=='add'){
            include "includes/users/add.php";
        }elseif($_GET['users']=='edit'){
          include "includes/users/edit.php";
        }
        
        ?>
<?php include_once('design/footer.php')?>
