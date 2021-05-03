<div class="table-responsive-sm">
                		<table id="example" class="table table-striped table-bordered">
                			<thead>
                                <tr> 
                                    <th>#</th>
                    				<th>Type</th>	
                    				<th>Proponent</th>	
                    				<th>From</th>	
                    				<th>To</th>	
                    				<th>Description</th>	
                    				<th>Latitude</th>	
                    				<th>Longitude</th>
                                    <th>Action</th>	
                                </tr>
                			</thead>
                			<tbody>
    							@foreach($maps as $key => $map)
                				<tr>
                                    <td>{{ ++$key }}</td>
                					<td>{{ $map->type }}</td>
                					<td>{{ $map->proponent }}</td>
                					<td>{{ $map->from }}</td>
                					<td>{{ $map->to }}</td>
                					<td>{{ $map->description }}</td>
                					<td>{{ $map->latitude }}</td>
                					<td>{{ $map->longitude }}</td>
                                    <td class="d-flex justify-content-between align-items-center">
										<a class="btn btn-primary btn-sm" href="{{url('/marker/'.$map->id)}}">
											<i class="far fa-eye"></i>
										</a>
										<a href="{{url('/edit/'.$map->id)}}" class="btn btn-warning btn-sm">
											<i class="far fa-edit"></i>
										</a>
										<a class="btn btn-danger btn-sm" href="{{url('/delete/'.$map->id)}}" >
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                    <span class="cord" data-latitude="{{ $map->latitude }}" data-longitude="{{ $map->longitude }}"></span>
                                    <span class="date" data-from="{{ $map->from }}" data-to="{{ $map->to }}"></span>
                				</tr>
    							@endforeach
                			</tbody>
                		</table>
            		</div>