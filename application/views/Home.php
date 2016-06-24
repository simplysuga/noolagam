<?php  include('includes/header.php'); ?>

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"> 
              <h3 class="box-title"><a href=""><i class="fa fa-book"></i></a> நூல்<b>AGAM</b> - Book list </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="books" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Book ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Language</th>
                  <th>Available Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
               foreach ($data as $row)
                  {
                    echo "<tr>";
                    echo "<td>" . $row->book_id ."</td>";
                    echo "<td>" . $row->book_title . "</td>";
                    echo "<td>" . $row->book_author . "</td>";
                    echo "<td>" . $row->book_language . "</td>";
                    echo "<td>" . $row->book_available_status . "</td>";
                    echo "</tr>";
                  }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Book ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Language</th>
                  <th>Available Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>  

<?php  include ('includes/footer.php'); ?>