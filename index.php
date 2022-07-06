<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<script src="https://kit.fontawesome.com/070248bca4.js" crossorigin="anonymous"></script>
		<title>Dimension by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
						
							<i class="fa-solid fa-recycle fa-2x fa-lg"></i>						
						</div>
						<div class="content">
							<div class="inner">
								<h1>Dimension</h1>
								<p>El mundo cambia con tu ejemplo, unidos podemos lograrlo</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#quienessomos">Nosotros</a></li>
								<li><a href="#queofrecemos">Que ofrecemos</a></li>
								<li><a href="#reciclaje">Importancia del reciclaje</a></li>
								<li><a href="#inscripcion">Inscribirse</a></li>
								<li><a href="#desinscripcion">Borrar inscripción</a></li>
								<li><a href="#modificatusdatos">Modificar datos</a></li>
								
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Quienes somos -->	
							<article id="quienessomos">
								<h2 class="major">Quienes somos</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" /></span>
								<p>Desde nuestro punto de vista es asignar, reciclar y valorizar los residuos de forma cualitativa y sostenible para que todos puedan contribuir a un mundo mejor.</a></p>
								<p>Ser el actor más verde en el mercado de reciclaje para la recogida, tratamiento y valorización de residuos. Priorizar los pilares del desarrollo sostenible: ambiental, social y económico y trabajar con respeto a los clientes, empleados y socios. </p>
								</article>

						<!-- Que ofrecemos -->
							<article id="queofrecemos">
								<h2 class="major">Que ofrecemos</h2>
								<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
								<p>Primero que nada los cursos en los cuales inculcamos educación sobre como reciclar y aprender a distinguir diferentes tipos de reciclaje. </p>
								<p>Que nos distingue, te ofrecemos paquetes completos, gratuitos y online de reciclaje sustentable,trabajamos independientemente de empresas que no contribuyen al medio ambiente y ofrecemos una experta consultoría,orientación a soluciones, rapidez Y desición. </p>
								<p>Todo esto se puede realizar desde la comodidad de tu casa; tenemos cursos con una duracion de 20 dias, donde te enviamos videos y actividades interactivas cada dos dias para que no pierdas la costumbre. Tambien te proponemos un reto semanal relacionado al tema que se este tratando. </p>
								<p>Una vez finalizado el curso, te va a llegar a tu mail la certificacion por haberlo terminado. </p>
							</article>

						<!-- Reciclaje -->
							<article id="reciclaje">
								<h2 class="major">Reciclaje</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>La recolección y el procesamiento de desechos de papel y cartón, vidrio o plástico supone crear nuevos productos basados en esos mismos materiales. Una nueva oportunidad para la Tierra, a la que se puede proteger si se entienden los beneficios del reciclaje, la manera correcta separar los residuos y los retos a los que se enfrenta esta actividad en los próximos años.</p>
							</article>
						<!-- Cursos -->
						<article id="inscripcion">
						<h2 class="major">Inscribite aqui</h2>
								<form action="php/consulta.php" id="contacto" method="POST" class="contacto">
								<div class="fields">
									<div class="field half">
										<label for="nombre">Nombre</label>
									<input type="text" name="nombre" placeholder="Martin ">
								</div>
									<div class="field half">
										<label for="apellido">Apellido</label>
                                 <input type="text" name="apellido" placeholder="Gallo">
								</div>
                                    <div class="field complete">
										<label for="correo">Email</label>
								 <input type="email" name="correo" placeholder="mgallo@mail.austral.edu.ar">
								</div>
									<div class="field">	
										<label for="mensaje">Mensaje</label>
                                 <textarea name="mensaje" placeholder= "Escriba aqui su mensaje"></textarea>
								</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Inscribirme" class="primary" /></li>
									<li><input type="reset" value="Borrar todo" /></li>
								</form>
							</article>

						<!-- Contacto -->
							<article id="desinscripcion">
							<h2 class="major">Borrar inscripción</h2>
							<p>Escribi el mismo mail con el que te inscribiste y se eliminara tu informacion automaticamente del sistema.</p>
								<form action="php/delete.php" id="contacto" method="POST" class="contacto">
								<div class="fields">
									<div class="field complete">
										<label for="correo">Mail</label>
									<input type="text" name="correo" placeholder="mgallo@mail.austral.edu.ar">
								</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Eliminar inscripción" class="primary" /></li>
									<li><input type="reset" value="Borrar todo" /></li>
								</form>
							</article>
						<!-- Modificacion -->
							<article id="modificatusdatos">
								<h2 class="major">Modifica tu informacion</h2>
								<p>Para poder realizar modificaciones en tu informacion personal, coloca tus datos actualizados pero utilizando el mismo mail que colocaste al inicio.</p>
								<form action="php/modificacion.php" id="contacto" method="POST" class="contacto">
								<div class="fields">
									<div class="field half">
										<label for="nombre">Nombre</label>
									<input type="text" name="nombre" placeholder="Martin ">
								</div>
									<div class="field half">
										<label for="apellido">Apellido</label>
                                 <input type="text" name="apellido" placeholder="Gallo">
								</div>
                                    <div class="field complete">
										<label for="correo">Email</label>
								 <input type="email" name="correo" placeholder="mgallo@mail.austral.edu.ar">
								</div>
									<div class="field">	
										<label for="mensaje">Mensaje</label>
                                 <textarea name="mensaje" placeholder= "Escriba aqui su mensaje"></textarea>
								</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Realizar cambios" class="primary" /></li>
									<li><input type="reset" value="Borrar todo" /></li>
									</p>
								</form>
							</article>









						   

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/ecologica.ar/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>	
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
				<ul><head></ul>
				<ul class="icons">
					<li><a href="https://twitter.com/EFEverde" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/clubdehuellaecologica/?hc_ref=ARRWG-IYCy-Ji64nNIhflyLj1tC_ZCXZVb_qrTFlB3r6CLS5FkCpFQO33vbYe-elQwY&ref=nf_target&__xts__[0]=68.ARBQYhVXZnzuX0HO6f3mjoHXh8HgEVO9zVyOAV-5n791JcRbKG194t2N2vwieIGBEzYT_62mv8x9UAklK4VoiI83HDQUFVAHA-eXbWTt07IGViKHwGy5NlpfhOlkSI9v5fPu6sD160rwMDQh6RlYg2Dqa24UT-jcSTi1SSuTIo345Kg4-FTUk523C6mLYRbgrWGlYIGZ3ad4fIxI2b6znhOQuD9_4WF11qtVW1W-V4N0k2IjoD4JaaOuCHhfJLTcowD5sSf-YmQbvyALYPfJvoLxqQrvLla5rOuzsO0MR-c7KuiI9r0SPp25Mbcd4NlL7rfoDnUmM6g" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.tiktok.com/@biofase" target="_blank" class="icon brands fa-tiktok"><span class="label">Tiktok</span></a></li>
					<li><a href="https://www.youtube.com/c/GOGREEN1" target="_blank" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
					<li><a href="https://www.instagram.com/ecologica.ar/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram+</span></a></li>
				</ul>
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script> 

	</body>
</html>
