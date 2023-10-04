<?php include_once('design/navbar.php')?>

  <div id="wrapper">

<?php include_once('design/sidebar.php')?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">products</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
<?php
if(!isset($_GET['products'])){
    include "includes/products/view.php";
}elseif($_GET['products']=="add"){
    include "includes/products/add.php";

}elseif($_GET['products']=="edit"){
  include "includes/products/edit.php";
}

?>

<?php include_once('design/footer.php')?>
