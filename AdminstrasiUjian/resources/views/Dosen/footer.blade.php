<div class="col-lg-12" style="margin-top: 20px;position: fixed;text-align: center; height: 35px; background: white;bottom:1px;width:100%;border-top:1px solid black; border-bottom: 1px solid black">
	<p class="back-" style="font-family: Sagoe UI;"> @yield('martin') Copyright © Proyek PAP BAA Kelompok 1</p>
	
</div>

<script src=" {{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script src=" {{ asset('/js/bootstrap.min.js') }}"></script>
@yield('grafik')

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
	<script>
		Highcharts.chart('highChart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});
</script>

