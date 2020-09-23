@include('Dosen.header')
	<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="font-family: Segoe UI">
				<li>
					<a href="{{ url('/Dosen') }}"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="{{ url('/requestDosen') }}" class="aBread">Status Request </a>
				</li>
			</ol>
		</div><!--/.row-->
	<div style="height: 555px;background-color: none;font-family: Segoe UI" >
		<div class="col-lg-12" style="margin-top: auto;">
			<h1 class="mt-5" style="display: flex;justify-content: center;">Status Request</h1>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-10" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0;display: flex;justify-content: center;margin-top: 2%;">
                    <div class="col-lg-12 mt-5" style="font-family: Segoe UI; margin: 5px;font-size: 2em;border: 1px black solid;min-height: 300px;">
                        <div class="col-lg-12" style="background: orange;color: white;font-weight: bold" >
                            Request Ditolak
                        </div>
                        <div class="col-lg-12" style="margin-top: 12px;">
                            <ul class="list-group" style="margin: 2px;">
                                @foreach ($ditolak as $item)
                                <li class="list-group-item" style="margin: 10px;font-size: 0.6em">
                                    {{ $item->matakuliah }}
                                    <Button data-toggle="modal" data-target="#pesan" data-pesan="{{ $item->pesan }}" class="btn btn-primary" style="float: right;padding: 2px;"><em class="fa fa-eye">&nbsp;&nbsp;lihat</em></Button>
                                  </li>    
                                @endforeach
                                
                              </ul>
                        </div>
                   </div>
                   <div class="col-lg-12 mt-5" style="font-family: Segoe UI;margin: 5px;font-size: 2em;border: 1px black solid;min-height: 300px;">
                    <div class="col-lg-12" style="background: green;color: white;font-weight: bold" >
                        Request Diterima
                        
                    </div>

                    <div class="col-lg-12" style="margin-top: 12px;">
                        <ul class="list-group" style="margin: 2px;">
                            @foreach ($diterima as $item)
                            <li class="list-group-item" style="margin: 10px;font-size: 0.6em">
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
 <!-- Modal edit -->
 <div class="modal fade" id="pesan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: left;font-family: Segoe UI;">Pesan</h4>
            </div>
            <div class="modal-body">
                <p class="statusMsg"></p>
                <div name="pesan" id="pesan" style="min-height: 100px;border: 1px solid black;border-radius: 6px;padding: 10px;font-size: 1.2em;">

                </div>
                                                           
            </div>
        </div>
		</div><!--/.row-->
    </div>	<!--/.main-->
@include('Dosen.footer')