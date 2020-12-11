@foreach($users as $user)
	<div class="row m-2">
		<div style="background-color: #cfcfcf; border-radius: 25px; width: 80; height: 80;"></div>
		<div class="ml-2 col-md-8">
			<b>{{ $user->first_name ." ". $user->last_name }}</b>
			<p>"journey is now"</p>
		</div>
		
	</div>
@endforeach