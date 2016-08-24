@if(Session::has('save'))
	<script>
		Materialize.toast('{{ Session::get('save') }}', 5000, 'rounded')
	 </script>
@endif
@if(Session::has('delete'))
	<script>
		Materialize.toast('{{ Session::get('delete') }}', 5000, 'rounded')
	 </script>
@endif
@if(Session::has('update'))
	<script>
		Materialize.toast('{{ Session::get('update') }}', 5000, 'rounded')
	 </script>
@endif
@if(Session::has('error'))
	<script>
		Materialize.toast('{{ Session::get('error') }}', 5000, 'rounded')
	 </script>
@endif
@if(Session::has('ingreso'))
	<script>
		Materialize.toast('{{ Session::get('ingreso') }}', 5000, 'rounded')
	 </script>
@endif
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
	<script>
		Materialize.toast('{{ $error }}', 5000, 'rounded')
	 </script>
	@endforeach
@endif