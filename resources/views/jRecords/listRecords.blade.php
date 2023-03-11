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
						list: false
					},
					name: {
						title: 'Name',
						width: '40%'
					},
					city: {
						title: 'city',
						width: '20%'
					},
                    Birth_date: {
						title: 'Birth date',
						width: '30%',
						type: 'date',
						create: false,
						edit: false
					},
                    status: {
						title: 'Status',
						width: '30%',
						
					},
					Record_Date: {
						title: 'Record date',
						width: '30%',
						type: 'date',
						create: false,
						edit: false
					}
				}
			});
			//Load data 
			
			$('#j_tables').jtable('load');
		});
	</script>
 
  </body>
</html>
