<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud App Using PHP-OOP, PdDO-MYSQL & AJAX</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ccaeda6036.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-code"></i>&nbsp;CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center text-danger font-weight-normal my-3">Crud App Using bootstrap5, PHP-OOP, PDO-MYSQL & AJAX, datatables, sweetalert2 </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h4 class="mt-2 text-primary">All Users In Database !</h4>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary m-2 float-end" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp; Add New User</button>
        <button type="button" class="btn btn-success m-2 float-end"><i class="fas fa-table fa-lg"></i>&nbsp; Export to Exel</button>


      </div>
    </div>
    <hr class="my-1">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-sm table-bordered">
              <thead class="table-light">
                <tr class="text-center">
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>


                </tr>
              </thead>
              <tbody class="table-group-divider">
                <?php

                for ($i = 1; $i <= 100; $i++) : ?>

                  <tr class="table-primary text-center">
                    <td scope="row"><?= $i ?></td>
                    <td>User<?= $i ?></td>
                    <td>Title<?= $i ?></td>
                    <td>User<?= $i ?>@title.com</td>
                    <td>212589632</td>
                    <td>
                      <a href="#" title="view details" class="text-success text-decoration-none">
                        <i class="fas fa-info-circle fa-lg"></i>
                      </a>&nbsp;&nbsp;
                      <a href="#" title="Edits" class="text-primary text-decoration-none">
                        <i class="fas fa-edit fa-lg"></i>
                      </a>&nbsp;&nbsp;
                      <a href="#" title="Delete" class="text-danger text-decoration-none">
                        <i class="fas fa-trash-alt fa-lg"></i>
                      </a>
                    </td>
                  </tr>
                <?php endfor; ?>
              </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div>

        </div>
      </div>


    </div>


  </div>
  <!-- The Modal -->
  <div class="modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post">
            <div class="col-md mb-3">
              <input type="text" class="form-control" id="" value="" placeholder="First name" required />
            </div>
            <div class="col-md mb-3">
              <input type="text" class="form-control" id="" value="" placeholder="Last name" required />
            </div>
            <div class="col-md mb-3">
              <input type="text" class="form-control" id="" value="" placeholder="Email" required />
            </div>
            <div class="col-md mb-3">
              <input type="text" class="form-control" id="" value="" placeholder="Phone" required />
            </div>


          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger col-md mb-3" data-bs-dismiss="modal">Add User</button>
        </div>

      </div>
    </div>
  </div>


  <!-- Latest compiled JavaScript -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    new DataTable("#example");
  </script>
</body>

</html>