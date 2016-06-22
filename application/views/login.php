<?php  include('includes/header.php'); ?>

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-3">
        </div>
         <div class="col-md-6">
          <!-- Horizontal Form -->
          <br/>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Admin Login Form </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php base_url('books/login'); ?>">
              <div class="box-body">
                <div class="form-group">
                <div class="col-sm-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">User Name</label>
                  </div>
                  <div class="col-sm-5">
                    <input name="username" type="text" class="form-control" id="userid" placeholder="User Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                  <label for="inputPassword3" class="col-sm-6 control-label">Password</label>
                  </div>
                  <div class="col-sm-5">
                    <input name="passwords" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url();?>" class="btn btn-default"><i class="fa fa-home"> Home</i></a>
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        <div class="col-xs-3">
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