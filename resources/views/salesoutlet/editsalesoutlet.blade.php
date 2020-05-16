@extends('master')
 
@section('content')
 
	@foreach($salesoutlet as $o)
	<form action="../update" class="form" method="post">
		{{ csrf_field() }}
		<table class="table" width="25%" border="0">
			<tr>
				<td><input type="hidden" name="id" value="{{$o->id}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" required="required" value="{{$o->address}}"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="tel" id="phone" name="phone_number" placeholder="0123456789" pattern="[0-9]{11,15}" required="required" value="{{$o->phone_number}}"/>
			</tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	@endforeach
 
@endsection