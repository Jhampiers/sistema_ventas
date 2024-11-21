<div class="py-4" style="background-color:#413FB6;">
	<footer class="container">
		<div class="row gy-12">
			<!-- Contact Section -->
			<div class="col-12 col-sm-6 col-lg-3">
				<h5 class="text-white fw-bold mb-3">Contactanos</h5>
				<ul class="list-unstyled">
					<li><a href="" class="text-white text-decoration-none">Chatea con Nosotros</a></li>
					<li class="text-white">LLamanos al <a href="https://web.whatsapp.com/" class="text-white">(01)620-4806</a></li>
					<li><a href="" class="text-white text-decoration-none">Visitanos</a></li>
					<li><a href="https://www.google.com/maps/place/CORPORACIÓN+NOVATEC" class="text-white text-decoration-none">Av. Mariscal Castilla 45</a></li>
				</ul>
			</div>

			<!-- About Section -->
			<div class="col-12 col-sm-6 col-lg-3">
				<h5 class="text-white fw-bold mb-3">Acerca de NOVATEC</h5>
				<ul class="list-unstyled">
					<li><a href="" class="text-white text-decoration-none">Nosotros</a></li>
					<li><a href="" class="text-white text-decoration-none">tiendas</a></li>
					<li><a href="" class="text-white text-decoration-none">Visitanos</a></li>
					<li><a href="" class="text-white text-decoration-none">Libro de reclamaciones</a></li>
				</ul>
			</div>

			<!-- Customer Service Section -->
			<div class="col-12 col-sm-6 col-lg-3">
				<h5 class="text-white fw-bold mb-3">Atencion al cliente</h5>
				<ul class="list-unstyled">
					<li><a href="" class="text-white text-decoration-none">Preguntas frecuente</a></li>
					<li><a href="" class="text-white text-decoration-none">Tutorial de compra</a></li>
					<li><a href="" class="text-white text-decoration-none">Cambios y devoluciones</a></li>
					<li><a href="" class="text-white text-decoration-none">Terminos y condiciones</a></li>
				</ul>
			</div>

			<!-- Social Media Section -->
			<div class="col-12 col-sm-6 col-lg-3">
				<h5 class="text-white fw-bold mb-3">Siguenos en</h5>
				<div class="d-flex gap-3">
					<a href="https://www.facebook.com/" class="text-white">
						<i class="bi bi-facebook fs-4"></i>
					</a>
					<a href="https://www.youtube.com/" class="text-white">
						<i class="bi bi-youtube fs-4"></i>
					</a>
					<a href="https://www.instagram.com/" class="text-white">
						<i class="bi bi-instagram fs-4"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
</div>


</div>
</body>
<script src="<?php echo BASE_URL; ?>views/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>views/js/functions_login.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const coontainer = document.getElementById('coontainer');

	signUpButton.addEventListener('click', () => {
		coontainer.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		coontainer.classList.remove("right-panel-active");
	});
</script>

<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'));
	var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>

<script>
	function sumarcantidad() {
		var precio = document.getElementById('precio_p1').value;
		var cantidad = document.getElementById('cantidad_p1').value;
		var nueva_cantidad = parseInt(cantidad) + 1;
		document.getElementById('cantidad_p1').value = nueva_cantidad;
		calcular_subtotal(precio, nueva_cantidad);
	}

	function restarcantidad() {
		var precio = document.getElementById('precio_p1').value;
		var cantidad = document.getElementById('cantidad_p1').value;
		if (cantidad > 1) {
			var nueva_cantidad = parseInt(cantidad) - 1;
			document.getElementById('cantidad_p1').value = nueva_cantidad;
			calcular_subtotal(precio, nueva_cantidad);
		}

	}

	function calcular_subtotal(precio, cantidad) {
		var subtotal = precio * cantidad;
		document.getElementById('subtotal').innerHTML = 'S/. ' + subtotal;
	}
</script>

<script>
	const estrellas = document.querySelectorAll('.estrella');

	estrellas.forEach((estrella) => {
		estrella.addEventListener('click', () => {
			estrella.classList.toggle('active');
		});
	});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>