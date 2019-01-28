<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Home</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- JQuery scripts and other -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
<script src="js/getdata.js"></script>
</head>
<body>
    
 <!-- The action button to render table rows -->
 <form name="table" class="card-body" method="post" id="ajax_form" action="" enctype="multipart/form-data">
 <div><button type="button" id="home_btn" class="btn btn-info" onclick=getdata() value="" style="display: true;">Get data from the two tables</button></div>
 </form>
 
 <!-- Bootstrap table template -->
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Profession</th>
      
    </tr>
  </thead>
  <tbody id="result_form">
  </tbody>
</table>
 
</body>

</html>