<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<!--Form Section Start -->
<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto  p-15" style="background-color: green;">
        <form action="./read.php" method="$_REQUEST" enctype="multipart/form-data">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color: orange; text-transform:uppercase;">Email address</label>
    <input name="email" type="email" placeholder="ENTER YOUR EMAIL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color: orange; text-transform:uppercase;">Password</label>
    <input name="password" type="password" placeholder="PASSWORD" class="form-control" id="exampleInputPassword1">
  </div>
  <!--<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
        </div>
    </div>
</section>
<!--//Form Section End -->
