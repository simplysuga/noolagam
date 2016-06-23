<?php  $this->load->view('admin/includes/header'); ?>
 <!-- Full Width Column -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Return book to library </h3>
						</div>
          <div class="box box-info">
            <div class="box-header with-border">
              <?php echo validation_errors(); ?>
            </div>
            <!-- /.box-header -->
            <?php 
            foreach ($books as $book){
            		$tran_id = $book->tran_id;
            		$tran_book_title=$book->tran_book_title;
            		$tran_borrower_id=$book->tran_borrower_id;
            		$tran_borrower_name=$book->tran_borrower_name;
            		$tran_issued_date=$book->tran_issued_date;
            } 
              ?>
            <!-- form start -->
            <form class="form-horizontal" method='post' action="<?php base_url('admin/home/returnbk'); ?>">
              <div class="box-body">	
                 <div class="form-group">
	              <label for="book_id" class="col-sm-3 control-label">Book ID</label>
	              <div class="col-sm-3">
	                <input name="tran_book_id" type="text" class="form-control" id="ids" placeholder="Book Name" value="<?php if(isset($tran_book_id)){echo $tran_book_id;} ?>" disabled> 
	                 <input name="hidden_tran_id" type="hidden" class="form-control" value="<?php if(isset($tran_id)){echo $tran_id;} ?>">
	                 <input name="hidden_book_id" type="hidden" class="form-control" value="<?php if(isset($tran_book_id)){echo $tran_book_id;} ?>">
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="book_title" class="col-sm-3 control-label">Book Name</label>
	              <div class="col-sm-3">
	                <input name="tran_book_title" type="text" class="form-control" id="tran_book_title" placeholder="Book Name" value="<?php if(isset($tran_book_title)){echo $tran_book_title;} ?>" disabled>
	               <input name="hidden_book_title" type="hidden" class="form-control" id="tran_book_title"  value="<?php if(isset($tran_book_title)){echo $tran_book_title;} ?>" >
	              </div>
	              </div>
	              <div class="form-group">				                  
	              <label for="tran_borrower_id" class="col-sm-3 control-label">Borrower ID</label>
	              <div class="col-sm-3">
	                <input name="tran_borrower_id" type="text" class="form-control" id="author" placeholder="Borrower ID" value="<?php if(isset($tran_borrower_id)){echo $tran_borrower_id;} ?>" disabled>
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="tran_borrower_name" class="col-sm-3 control-label">Borrower Name</label>
	              <div class="col-sm-3">
	                <input name="tran_borrower_name" type="text" class="form-control" id="ownerid" placeholder="Borrower Name" value="<?php if(isset($tran_borrower_name)){echo $tran_borrower_name;} ?>" disabled>
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="tran_issued_date" class="col-sm-3 control-label">Issued Date</label>
	              <div class="col-sm-3">
	                <input name="tran_issued_date" type="date" class="form-control" id="ownername" placeholder="Book issued date" value="<?php if(isset($tran_issued_date)){echo $tran_issued_date;} ?>" disabled>
	              </div>
	              </div>
	              <div class="form-group">
	              <label for="tran_returned_date" class="col-sm-3 control-label">Return Date</label>
	              <div class="col-sm-3">
	              	<?php date_default_timezone_set('Asia/Kolkata'); ?>
	                <input name="tran_returned_date" type="date" class="form-control" id="ownername" placeholder="<?php echo date('Y-m-d'); ?>" value="<?php if(isset($tran_returned_date)){echo $tran_returned_date;} ?>" >
	              </div>
	              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Return book</button>
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
