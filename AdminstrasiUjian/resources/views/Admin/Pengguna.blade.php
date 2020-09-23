@include('Admin.header')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li><a href="{{ url('/index') }}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active"><a href="{{ url('/DataPengguna') }}" class="aBread">Pengguna </a></li>
        </ol>
    </div>
    <div class="col-lg-12" style="background-color: none;height: 542px;">
        <div class="panel panel-default">
            <div class="col-lg-12" style="font-family: Segoe UI;display: flex;justify-content: center;">
                <h1>Data Pengguna</h1>
            </div>
            <div class="col-lg-12 mt-5" style="display: flex;justify-content: center;">
                <a href="{{ url('/dataDosen',['dosen']) }}" style="width: 100%;display: flex;justify-content: center;height: 100px;text-decoration: none;">
             <button href="" class=" btn Fakultas" style="width: 60%;border: 1px solid gray;">
                 <h2>Dosen</h2>
             </button>		
             </a>	 	
            </div>
            <div class="col-lg-12 mt-5" style="display: flex;justify-content: center;">
                <a href="{{ url('dataStaff',['staff']) }}" style="width: 100%;display: flex;justify-content: center;height: 100px;text-decoration: none;">
             <button href="" class=" btn Fakultas" style="width: 60%;border: 1px solid gray;">
                 <h2>Staff BAA</h2>
             </button>		
             </a>	 	
            </div>
</div>
    </div>
</div>
@include('Admin.footer')

