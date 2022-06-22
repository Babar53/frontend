<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ajax crud</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
  <h1 class="bg-dark text-light text-center">PHP advance crud</h1>
<div class="container">

<!-- bootstrap form modal -->

  <div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">adding or updating user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <!-- name -->
        <div class="form-group">
        <label>Name</label>
       <!--  <div class="input-group-preprend">
          <span class="input-group-text bg-dark text-light"><i class="fas fa-user-alt text-light"></i></span>
        </div> -->
      <input type="text" class="form-control" placeholder="Enter your username" id="username" name="username" required="required" autocomplete="off">
    </div>

   <!--  email -->

   <div class="form-group">
        <label>email</label>
       <!--  <div class="input-group-preprend">
          <span class="input-group-text bg-dark text-light"><i class="fas fa-user-alt text-light"></i></span>
        </div> -->
      <input type="text" class="form-control" placeholder="Enter your email" id="email" name="email" required="required" autocomplete="off">
    </div>

<!-- mobile -->

<div class="form-group">
        <label>Mobile</label>
       <!--  <div class="input-group-preprend">
          <span class="input-group-text bg-dark text-light"><i class="fas fa-user-alt text-light"></i></span>
        </div> -->
      <input type="text" class="form-control" placeholder="Enter your mobile" id="mobile" name="mobile" required="required" autocomplete="off">
    </div>

    <!-- photo -->

    <div class="form-group">
        <label>photo</label>
      <input type="file" class="form-control" name="photo" id="userphoto" required="required" autocomplete="off">
    </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" >Submit</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-10">
      </div>

      <!-- modal button -->

      <div class="col-2">
        <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">Add new user</button>
    </div>
  </div>
<!-- 
  table -->
  <table class="table" id="usertable">
    <thead class="table-dark">
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">operations</th>

    </thead>
    <tbody>
      <tr>
        <td>image</td>
        <td>mbk</td>
        <td>mbk@gmail.com</td>
        <td>6279395</td>
        <td>
          <span>edit</span>
          <span>view</span>
          <span>delete</span>

        </td>
      </tr>

    </tbody>
  </table>

  <!-- pagination -->
  <nav aria-label="page navigation example" id="pagination">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled"><a class="page-link" href="#">previous</a></li>
      <li class="page-item  active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
 
  </nav>

</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>