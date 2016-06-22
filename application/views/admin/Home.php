<?php  $this->load->view('admin/includes/header'); ?>
 <!-- Full Width Column -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">List of books in Library</h3>
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
									<th>Owner ID</th>
									<th>Owner Name</th>
									<th>Availability</th>
									<th>Issue/Return</th>
									<th>Delete</th>
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
										echo "<td>" . $row->book_owner_id . "</td>";
										echo "<td>" . $row->book_owner_name . "</td>";
										$avail = $row->book_available_status;
										echo "<td>" . $avail . "</td>";

										if($avail=='No'){
											echo "<td> <small> <a href='" . base_url('admin/home/returnbk') . "/$row->book_id" . "' class='btn btn-warning btn-sm'> Return </a><small></td>";
										} 
										else { 
											echo "<td> <small> <a href='" . base_url('admin/home/issuebk') . "/$row->book_id" . "' class='btn btn-success btn-sm'> Issue... </a><small></td>";
									    }

										$del = base_url('admin/home/deletebook') . "/$row->book_id";
										echo "<td> <small> <a href='" . $del . "'class='btn btn-danger 
										btn-sm'>Delete</a><small></td>";  
										
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
									<th>Owner ID</th>
									<th>Owner Name</th>                  
									<th>Availability</th>
									<th>Issue/Return</th>
									<th>Delete</th>
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
