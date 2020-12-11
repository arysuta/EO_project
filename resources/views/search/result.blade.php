@extends('layouts.coba')



@section('content')
<script type="text/javascript">

function users(q, search){
		var url = 'search/users?q=' + q + '&search=' + search;
		var message = "<p class='color-text-o'>tidak ditemukan petualangan yang sesuai...</p>";
		$.ajax({
			type:'get',
			url:url,
			success:function(data){
				if(data != ''){
					$('#users-list').html(data);
				}else{
					$('#users-list').html(message);
				}
			}
		})
	}
</script>
@endsection