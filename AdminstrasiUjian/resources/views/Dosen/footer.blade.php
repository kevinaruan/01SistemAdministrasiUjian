

<div class="col-lg-12" style="margin-top: 20px;position: fixed;text-align: center; height: 35px; background: white;bottom:1px;width:100%;border-top:1px solid black; border-bottom: 1px solid black">
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
	$('#hapus').on('show.bs.modal', function(event){
		console.log("berhasillllll")
		var button =$(event.relatedTarget)
		var id = button.data('id')
		var modal = $(this)
		console.log(id)
		modal.find('.modal-content #id').val(id)

	});
	$('#pesan').on('show.bs.modal', function(event){
		console.log("berhasillllll")
		var button =$(event.relatedTarget)
		var id = button.data('pesan')
		var modal = $(this)
		console.log(id)
		modal.find('.modal-content #pesan').text(id);

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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	<script src="{{asset('/js/custom.js')}}"></script>
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		@if(Session::has('message'))
		 var type = "{{ Session::get('alert-type', 'success') }}";
		 toastr.success("{{ Session::get('message') }}");
	   @endif    
   </script>
	

