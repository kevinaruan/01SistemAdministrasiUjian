




<div class="col-lg-12" style="position: fixed;text-align: center; height: 35px; background: white;bottom:1px;width:100%;border-top:1px solid black; border-bottom: 1px solid black">
	<p class="back-" style="font-family: Sagoe UI;"> Copyright © Proyek PAP BAA Kelompok 1</p>
</div>

{{-- <div class="col-lg-12 mt-5" style="text-align: center;margin-bottom: 1%;background-color: white;border-bottom: 1px solid gray;background: red;">
</div>
</div>
	<p class="back-" style="text-align: center;font-family: Sagoe UI;"> Copyright © Proyek PAP BAA Kelompok 1</p>
</div> --}}
<script src=" {{ asset('/js/jquery-1.11.1.min.js') }}"></script>
	<script src=" {{ asset('/js/bootstrap.min.js') }}"></script>
<script>
	$('#edit').on('show.bs.modal', function(event){
		
		var button =$(event.relatedTarget)
		var title = button.data('test')
		var id = button.data('id')
		var modal = $(this)

		modal.find('.modal-body #nama').val(title)
		modal.find('.modal-body #id').val(id)

	});
	$('#editPengawas').on('show.bs.modal', function(event){
		var button =$(event.relatedTarget)
		var pengawas1 = button.data('pengawas1')
		var pengawas2 = button.data('pengawas2')
		var id = button.data('id')
		var modal = $(this)

		modal.find('.modal-body #namapengawas1').val(pengawas1)
		modal.find('.modal-body #namapengawas2').val(pengawas2)
		modal.find('.modal-body #id').val(id)

	});
	$('#hapus').on('show.bs.modal', function(event){
		console.log("berhasillllll")
		var button =$(event.relatedTarget)
		var id = button.data('id')
		var modal = $(this)
		console.log(id)
		modal.find('.modal-content #id').val(id)

	});
	$('#terima').on('show.bs.modal', function(event){
		console.log("berhasillllll")
		var button =$(event.relatedTarget)
		var id = button.data('id')
		var modal = $(this)
		console.log(id)
		modal.find('.modal-content #id').val(id)

	});

	$('#editPengguna').on('show.bs.modal', function(event){
		var button =$(event.relatedTarget)
		var id       = button.data('id')
		var nama     = button.data('nama')
		var username = button.data('username')
		var role     = button.data('role') 
		var modal = $(this)
		console.log(id);
		modal.find('.modal-body #id').val(id)
		modal.find('.modal-body #namaPengguna').val(nama)
		modal.find('.modal-body #username').val(username)
		modal.find('.modal-body #role').val(role)
		

	});
</script>
<script>
	@if(Session::has('message'))
	  var type = "{{ Session::get('alert-type', 'success') }}";
	  toastr.success("{{ Session::get('message') }}");
	@endif
  </script>
  <script type="text/javascript">
    function validate()
    {
	var error="";
	var name = document.getElementById( "name_of_user" );
	if( name.value == "" )
	{
	error = " You Have To Write Your Name. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	var email = document.getElementById( "email_of_user" );
	if( email.value == "" || email.value.indexOf( "@" ) == -1 )
	{
	error = " You Have To Write Valid Email Address. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	var password = document.getElementById( "password_of_user" );
	if( password.value == "" || password.value >= 8 )
	{
	error = " Password Must Be More Than Or Equal To 8 Digits. ";
	document.getElementById( "error_para" ).innerHTML = error;
	return false;
	}
	else
	{
	return true;
	}
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	<script src="{{asset('/js/custom.js')}}"></script>
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		@if(Session::has('message'))
		 var type = "{{ Session::get('alert-type', 'info') }}";
		 
		 switch(type){
			 case 'error':
			 toastr.error("{{ Session::get('message') }}");
			 break;
			 case 'success':
			 toastr.success("{{ Session::get('message') }}");
			 break;
		 }
	   @endif    
   </script>
	</body>
	</html>

