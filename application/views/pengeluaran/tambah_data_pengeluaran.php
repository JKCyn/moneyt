<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH DATA PENGELUARAN</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="site/proses_add_pengeluaran" method="POST">
						 	

						
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Pengeluaran</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="pengeluaran"> 
								</div> 
							</div>


							<div class="form-group"> 
								<label class="col-sm-2 control-label">Total</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="total"> 
								</div> 
							</div>
							

						
							
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">SAVE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
							<a href="site/lihat_data_pengeluaran" class="btn btn-warning">KEMBALI</a>
							
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		