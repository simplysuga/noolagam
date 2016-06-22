<?php  $this->load->view('admin/includes/header'); ?>

 <!-- Full Width Column -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="row">
			<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><i class="fa fa-book"></i> Add a book in Library</h3>
				</div>
          <div class="box box-info">
            <div class="box-header with-border">
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method='post' action="<?php base_url('admin/home/addbook'); ?>">
              <div class="box-body">	
                 <div class="form-group">
	              <label for="book_title" class="col-sm-3 control-label">Name</label>
	              <div class="col-sm-3">
	                <input name="book_title" type="text" class="form-control" id="name" placeholder="Book Name" value="<?php if(isset($book_title)){echo $book_title;} ?>">
	              </div>
	              </div>
	              <div class="form-group">				                  
	              <label for="book_author" class="col-sm-3 control-label">Author</label>
	              <div class="col-sm-3">
	                <input name="book_author" type="text" class="form-control" id="author" placeholder="Book Author" value="<?php if(isset($book_author)){echo $book_author;} ?>" >
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="book_owner" class="col-sm-3 control-label">Owner ID</label>
	              <div class="col-sm-3">
	                <input name="book_owner_id" type="text" class="form-control" id="ownerid" placeholder="Book Owner ID" value="<?php if(isset($book_owner_id)){echo $book_owner_id;} ?>" >
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="book_owner_name" class="col-sm-3 control-label">Owner Name</label>
	              <div class="col-sm-3">
	                <input name="book_owner_name" type="text" class="form-control" id="ownername" placeholder="Book Owner Name" value="<?php if(isset($book_owner_name)){echo $book_owner_name;} ?>" >
	              </div>
	              </div>
	              <div class="form-group">
				  <label for="book_language" class="col-sm-3 control-label">Language</label>
	              <div class="col-sm-3">
	                <input name="book_language" type="text" class="form-control" id="name" placeholder="Book Language" value="<?php if(isset($book_language)){echo $book_language;} ?>" >
	              </div>
              	</div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Add book</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div> 
	<!-- /.content-wrapper -->

  <?php  $this->load->view('includes/footer'); ?>