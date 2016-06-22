<?php  $this->load->view('admin/includes/header'); ?>
 <!-- Full Width Column -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title"><i class="fa fa-history"></i> Transaction History</h3>
						</div>

						<!-- /.box-header -->
						<div class="box-body">
							<table id="books" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>Transaction ID</th>
									<th>Book ID</th>
									<th>Book Name</th>
									<th>Borrower ID</th>
									<th>Borrower Name</th>
									<th>Issued Date</th>
									<th>Return Date</th>
								</tr>
								</thead>
								<tbody>
								<?php
							 foreach ($data as $row)
									{
										echo "<tr>";
										echo "<td>" . $row->tran_id ."</td>";
										echo "<td>" . $row->tran_book_id . "</td>";
										echo "<td>" . $row->tran_book_title . "</td>";
										echo "<td>" . $row->tran_borrower_id . "</td>";
										echo "<td>" . $row->tran_borrower_name . "</td>";
										echo "<td>" . $row->tran_issued_date . "</td>";
										echo "<td>" . $row->tran_returned_date . "</td>";
									}
								?>
								</tbody>
								<tfoot>
								<tr>
									<th>Transaction ID</th>
									<th>Book ID</th>
									<th>Book Name</th>
									<th>Borrower ID</th>
									<th>Borrower Name</th>
									<th>Issued Date</th>
									<th>Return Date</th>
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
	<!-- /.content-wrapper -->

	<?php  $this->load->view('includes/footer'); ?>