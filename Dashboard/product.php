
<?php
require_once('connection.php');
include_once('includepage/haeder.php');
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="code.php" enctype="multipart/form-data">
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name:</label>
            <input type="text" name="pname" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Price:</label>
            <input type="number" name="pprice" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" name="pdes" id="message-text"></textarea>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Image:</label>
            <input type="file" name="pimg" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="psub" class="btn btn-primary">Add Product</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Product List
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add Product</button>
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Product Image</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Product Image</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $sql1 = mysqli_query($con,"SELECT * from product");
                      while($row = mysqli_fetch_array($sql1))
                      {
                    echo "<tr>
                      <td>$row[0]</td>
                      <td>$row[1]</td>
                      <td>$row[2]</td>
                      <td>$row[3]</td>
                      <td><img src='$row[4]' height='150px' width='250px'> </td>
                    </tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<?php
include_once('includepage/footer.php');
?>