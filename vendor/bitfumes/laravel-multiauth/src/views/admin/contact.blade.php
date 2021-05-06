@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
	<div class="card p-5 m-5 cc-bg-blue">
	<div class="card p-3">
		<div class="display-4 text-muted text-center mb-2">Contacts</div>
		<div class="table-responsive-sm">
			<table id="example" class="table table-striped table-bordered">
				<thead>
	                <tr> 
	                    <th style="width: 8%">#</th>
	    				<th style="width: 20%">Name</th>	
	    				<th style="width: 30%">Email</th>	
	    				<th>Message</th>
	                </tr>
				</thead>
				<tbody>
					@foreach($contacts as $key => $contact)
					<tr>
	                    <td>{{ ++$key }}</td>
						<td>{{ $contact->name }}</td>
						<td>{{ $contact->email }}</td>
						<td>{{ $contact->reason }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection