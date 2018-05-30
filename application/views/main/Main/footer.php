<!--===== FOOTER SECTION =====-->
<footer id="footer" class="footer-section footer-dark-section">
		<div class="container">
			<div class="row wow fadeIn" data-wow-delay="0.2s">
				<div class="col-md-4 footer-text">
					<h4>Secret</h4>
					<p>This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism</p>
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="second" href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="third" href="#">
						<i class="fa fa-google-plus"></i>
					</a>
				</div>
				<!--col-md-4-->
				<div class="col-md-3 footer-nav">
					<h5>Quick Links</h5>
					<ul>
						<li>
							<a href="#">How it Works</a>
						</li>
						<li>
							<a href="#">Guarantee</a>
						</li>
						<li>
							<a href="#">Security</a>
						</li>
						<li>
							<a href="#">Exchange</a>
						</li>
						<li>
							<a href="#">Pricing</a>
						</li>
					</ul>
				</div>
				<!--col-md-3-->
				<div class="col-md-3 footer-nav">
					<h5>About</h5>
					<ul>
						<li>
							<a href="#">Market Overview</a>
						</li>
						<li>
							<a href="#">Technology Overview</a>
						</li>
						<li>
							<a href="#">Marketing Strategy</a>
						</li>
					</ul>
				</div>
				<!--col-md-3-->
				<div class="col-md-2 footer-contact">
					<h5>Contact us</h5>
					<p>
						info@gmail.com
						<br> info.com
						<br> 88 12345678
					</p>
				</div>
				<!--col-md-2-->
			</div>
			<!--row-->
		</div>
		<!--container-->
	</footer>

	<!-- Modal -->
	<div id="login-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="full-modal-content-wrapper">
						<div class="full-modal-content">
							<form method="POST" action="<?= base_url() ?>main/login">
								<i class="fa fa-user-circle full-modal-content-icon"></i>
								<input type="text" class="form-control full-modal-input" name="email" required placeholder="Please enter your email">
								<input type="password" class="form-control full-modal-input" name="password" required placeholder="Please enter your password">
								<a id="register-link" class="full-modal-link">do not have an account?</a>
								<input type="submit" value="login" class="btn btn-default full-modal-button">
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--============== END FOOTER SECTION ===============-->

	<!--===== JAVASCRIPT FILES =====-->
	<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>js/tether.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>js/owl-carousel.js"></script>
	<script src="<?=base_url()?>js/jquery-validator.js"></script>
	<script src="<?=base_url()?>js/waypoints.min.js"></script>
	<script src="<?=base_url()?>js/jquery.counterup.min.js"></script>
	<script src="<?=base_url()?>js/jquery.meanmenu.js"></script>
	<script src="<?=base_url()?>js/active-scroll-nav.js"></script>
	<script src="<?=base_url()?>js/wow.js"></script>
	<script src="<?=base_url()?>js/main.js"></script>
	<script src="<?=base_url()?>js/partical_space.js"></script>
	<script src="<?=base_url()?>js/partical.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
	<script src="<?=base_url()?>js/shattering_text.js"></script>
	<script>
		$(document).on('click', '#login-link', function (e) {

			var content = '<form method="POST" action="<?= base_url() ?>main/login">';
			content += '<i class="fa fa-user-circle full-modal-content-icon"></i>';
			content +=
				'<input type="email" class="form-control full-modal-input" name="email" required placeholder="Please enter your email">';
			content +=
				'<input type="password" class="form-control full-modal-input" name="password" required placeholder="Please enter your password">';
			content += '<a id="register-link" class="full-modal-link">do not have an account?</a>';
			content += '<input type="submit" value="login" class="btn btn-default full-modal-button">';
			content += '</form>';

			$(".full-modal-content").html(content);
		});

		$(document).on('click', '#register-link', function (e) {

			var content = '<form method="POST" action="<?= base_url() ?>main/register">';
			content += '<i class="fa fa-user-circle full-modal-content-icon"></i>';
			content +=
				'<input type="email" class="form-control full-modal-input" name="email" required placeholder="Please enter your email">';
			content +=
				'<input type="password" class="form-control full-modal-input" name="password" required placeholder="Please enter your password">';
			content +=
				'<input type="password" class="form-control full-modal-input" name="password2" required placeholder="Please confirm your password">';
			content +=
				'<input type="text" class="form-control full-modal-input" name="referral_code" placeholder="Please enter a referral code if any">';
			content += '<a id="login-link" class="full-modal-link">already have an account?</a>';
			content += '<input type="submit" value="register" class="btn btn-default full-modal-button">';
			content += '</form>';

			$(".full-modal-content").html(content);
		});

		/* ---- particles.js config ---- */

		particlesJS("particles-js", {
			"particles": {
				"number": {
					"value": 380,
					"density": {
						"enable": true,
						"value_area": 800
					}
				},
				"color": {
					"value": "#ffffff"
				},
				"shape": {
					"type": "circle",
					"stroke": {
						"width": 0,
						"color": "#ffffff"
					},
					"polygon": {
						"nb_sides": 5
					},
					"image": {
						"src": "img/github.svg",
						"width": 100,
						"height": 100
					}
				},
				"opacity": {
					"value": 0.5,
					"random": false,
					"anim": {
						"enable": false,
						"speed": 1,
						"opacity_min": 0.1,
						"sync": false
					}
				},
				"size": {
					"value": 3,
					"random": true,
					"anim": {
						"enable": false,
						"speed": 40,
						"size_min": 0.1,
						"sync": false
					}
				},
				"line_linked": {
					"enable": true,
					"distance": 150,
					"color": "#4286f4",
					"opacity": 0.4,
					"width": 1
				},
				"move": {
					"enable": true,
					"speed": 6,
					"direction": "none",
					"random": false,
					"straight": false,
					"out_mode": "out",
					"bounce": false,
					"attract": {
						"enable": false,
						"rotateX": 600,
						"rotateY": 1200
					}
				}
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": {
					"onhover": {
						"enable": true,
						"mode": "grab"
					},
					"onclick": {
						"enable": true,
						"mode": "push"
					},
					"resize": true
				},
				"modes": {
					"grab": {
						"distance": 140,
						"line_linked": {
							"opacity": 1
						}
					},
					"bubble": {
						"distance": 400,
						"size": 40,
						"duration": 2,
						"opacity": 8,
						"speed": 3
					},
					"repulse": {
						"distance": 200,
						"duration": 0.4
					},
					"push": {
						"particles_nb": 4
					},
					"remove": {
						"particles_nb": 2
					}
				}
			},
			"retina_detect": true
		});


		/* ---- stats.js config ---- */

		var count_particles, stats, update;
		stats = new Stats;
		stats.setMode(0);
		stats.domElement.style.position = 'absolute';
		stats.domElement.style.left = '0px';
		stats.domElement.style.top = '0px';
		document.body.appendChild(stats.domElement);
		count_particles = document.querySelector('.js-count-particles');
		update = function () {
			stats.begin();
			stats.end();
			if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
				count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
			}
			requestAnimationFrame(update);
		};
		requestAnimationFrame(update);

	</script>
</body>

</html>
