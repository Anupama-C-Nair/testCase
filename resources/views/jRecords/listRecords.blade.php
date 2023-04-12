<html>
  <head>
	<!-- Include jQuery -->
	<script src="{{asset('jquery\jquery.min.js')}}" type="text/javascript"></script>
<!-- Include jQuery UI -->
<script src={{  asset('jquery/jquery-ui.min.js') }} type="text/javascript"></script>
<link href="{{ asset('js/jtable/themes/metro/blue/jtable.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/jtable/jquery.jtable.min.js') }}" type="text/javascript"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
  <body>

	<div id="j_tables" style="width: 900px;"></div>
	<script type="text/javascript">
		$(document).ready(function () 
		{
		    //Prepare jTable
			$('#j_tables').jtable({
				title: 'Data from table',
				paging: true,
				sorting: true,
				ajaxSettings: {
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} 
				},
				actions:
				{   				
					listAction: '/list'	,
							
				},
			
				fields: {
					id: {
						key: true,
						create: false,
						edit: false,
						list: true
					},
					name: {
						title: 'Product Name',
						width: '40%',
						edit: false,
						list: true
					},
					quantity: {
						title: 'quantity',
						width: '20%',
						edit: false,
						list: true,
					},
                    rate: {
						title: 'rate',
						width: '30%',
						create: false,
						edit: false,
						list: true
					},
					Amount:{
						title:'Amount',
						edit: false,
						list: true,
						display: function(data){
							var _quantity  = data.record.quantity;
							var _rate = data.record.rate;
							return _quantity * _rate;
						}
					}
				}
			});
			//Load data 
			
			$('#j_tables').jtable('load');
		});
	</script>
 
  </body>
</html>
