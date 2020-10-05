@extends('Dosen.header')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="font-family: Segoe UI;">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
			<div class="col-lg-12" style="background-color: none;" >
					<div class="col-lg-12" style="text-align: center;margin-top: 5%;padding: 10px;">
						<div class="col-lg-9" style="height: 200px;">
							<div id="highChartGD7" class="col-lg-12"></div>
							
							
							
						</div>


						<div class="col-lg-3" style="min-height: 200px;padding-left: 20px;">
							<h1 class="page-header" style="font-size:1.3em;font-family: Segoe UI;float: left;"><em class="fa fa-history"></em>&nbsp; History</h1>
							<div class="col-lg-12" style="margin-top: 12px;">
								<p>Request Terkirim</p>
								<ul class="list-group" style="margin: 2px;">
									@foreach ($data as $item)
									<li class="list-group-item" style="margin: 10px;font-size: 1em">
										{{ $item->matakuliah }}
										<span class="badge btn-success" style="margin: 2px;;float: right;padding: 2px;"><em class="fa fa-check"></em></span>
									  </li>    
									@endforeach
									
								  </ul>
							</div>
						</div>
					</div>
	        </div>
            </div>
	</div>
</div>
</div>
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
	@include('Dosen.footer')
	