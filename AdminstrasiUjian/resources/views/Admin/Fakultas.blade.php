@include('Admin.header')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li>
                <a href="{{ url('/Admin') }}"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="{{ url('/Fakultas') }}" class="aBread">Fakultas</a>
            </li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12" style="background-color: none;height: 555px;">
            <div class="panel panel-default">
                <div class="panel panel-default">
                <div class="col-lg-12" style="font-family: Segoe UI;display: flex;justify-content: center;">
                    <h1>Data Fakultas</h1>
                </div>

                <div class="col-lg-12 mt-5" style="background-color: none;">
                <div class="col-lg-12" style="display: flex;justify-content: center;">
                    <a href="{{ url('/DataFakultas') }}" style="width: 100%;display: flex;justify-content: center;height: 100px;text-decoration: none;">
                 <button href="" class=" btn Fakultas" style="width: 60%;border: 1px solid gray;">
                     <h2>Fakultas</h2>
                 </button>		
                 </a>	 	

                </div>
                <div class="col-lg-12 mt-5" style="display: flex;justify-content: center;">
                    <a href="{{ url('/DataProdi') }}" style="width: 100%;display: flex;justify-content: center;height: 100px;text-decoration: none;">
                 <button href="" class=" btn Fakultas" style="width: 60%;border: 1px solid gray;">
                     <h2>Prodi</h2>
                 </button>		
                 </a>	 	
                </div>
                <div class="col-lg-12 mt-5" style="display: flex;justify-content: center;">
                    <a href="{{ url('/DataKelas') }}" style="width: 100%;display: flex;justify-content: center;height: 100px;text-decoration: none;">
                 <button href="" class=" btn Fakultas" style="width: 60%;border: 1px solid gray;">
                     <h2>Kelas</h2>
                 </button>		
                 </a>	 	
                </div>
                </div>
        </div>        
    </div>
</div>
</div>
</div>              
@include('Admin.footer')