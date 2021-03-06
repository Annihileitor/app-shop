@extends('layouts.app')
@section('title', 'Bienvenido a App Shop')
@section('body-class', 'product-page')


@section('content')
<div class="wrapper">

	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		
	</div>

	<div class="main main-raised">
		<div class="container">
			<div class="section ">
			<h2 class="title text-center">Registrar nuevo Producto</h2>
			<form method="POST" action="{{ url('/admin/products') }}">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group label-floating">
								<label class="control-label">Nombre del producto</label>
								<input type="text" class="form-control" name="name">
						</div>

					</div>
					<div class="col-sm-6">
						<div class="form-group label-floating">
							<label class="control-label">Precio del producto</label>
							<input type="number" step="0.01" class="form-control" name="price">
						</div>
						
					</div>


				</div>
				<div class="form-group label-floating">
						<label class="control-label">Descripción corta</label>
						<input type="text" class="form-control" name="description">
				</div>
				<textarea class="form-control" placeholder="Descripción extensa del producto" rows="5" name="long_description"></textarea>
				<button class="btn btn-primary">Registrar Producto</button>

			</form>
				

			</div>


			
		</div>

	</div>
	

</div>



@endsection
