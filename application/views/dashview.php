<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css">
    <title>Main page</title>
</head>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  
  </div>

  <a class="nav-link" href="<?php echo base_url('index.php/category/viewcategory' ) ?>">Back</a>
  <h2>Content</h2>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/category/viewcategory' ) ?>">
        <span data-feather="file"></span>
        category
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url( 'index.php/units') ?>">
        <span data-feather="shopping-cart"></span>
        units
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/products')  ?>">
        <span data-feather="shopping-cart"></span>
        Product
      </a>
    </li>
   
  </ul>
</main>
</div>
</div>


</body>

</html>