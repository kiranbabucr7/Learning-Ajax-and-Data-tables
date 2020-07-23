<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Add User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form id="form-add-user" action="" method="POST">
                <div class="modal-body mx-3">

                    <div class="md-form mb-5">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="text" id="defaultForm-username" name="username" minlength="2" class="form-control validate" required>
                      <label data-error="wrong" data-success="right" for="defaultForm-username">Your username</label>
                    </div>

                    <div class="md-form mb-4">
                      <i class="fas fa-lock prefix grey-text"></i>
                      <input type="number" id="defaultForm-number" name="number" class="form-control validate" required>
                      <label data-error="wrong" data-success="right" for="defaultForm-number">Your number</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" id="button-main" class="btn btn-success button-main" value="Add">
                </div>
                </form>
          </div>
      </div>
    </div>
    <div class="text-center">
      <button class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Add a user</button>
    </div>
    <table id="main-table" class="table table-bordered " style="width:100%;">
      <thead>
        <tr class="bg-info">
          <th>Username</th>
          <th>number</th>
          <th>action</th>
        </tr>
      </thead>
      <div class="modal fade modal-edit" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form id="form-edit-user" action="" method="POST">
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" name="new-username"  class="edit-unme form-control validate" minlength="2" required>
                    <label data-error="wrong" data-success="right">New username</label>
                  </div>
                  <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="number" name="new-number" class="edit-nmbr form-control validate" required>
                    <label data-error="wrong"  data-success="right" for="defaultForm-pass">New Number</label>
                  </div>
                </div> 
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit"  class="btn btn-info edit-button">Edit Details</button>
                </div>
              </form>  
          </div>
        </div>
      </div>
      <tbody id="mytable" >

      </tbody>

    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"><script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="scripts/mainscript.js"></script>

  </body>
</html>