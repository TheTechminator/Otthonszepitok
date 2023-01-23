<!DOCTYPE html>
<html lang="hu">
	<head>
		<title>Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők</title>
	    <script type="application/ld+json">
	    {
	      "@context": "https://schema.org",
	      "@type": "LocalBusiness",
	      "image": [
	        "https://otthonszépítők.hu/img/scResult.jpg",
	        "https://otthonszépítők.hu/img/scResult2.jpg",
	        "https://otthonszépítők.hu/img/scResult3.jpg"
	       ],
	      "@id": "https://otthonszépítők.hu/lakasfelujitas-kecskemet/",
	      "name": "Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők",
	      "address": {
	        "@type": "PostalAddress",
	        "streetAddress": "Vacsihegy 61.",
	        "addressLocality": "Kecskemét",
	        "postalCode": "6000",
	        "addressCountry": "HU"
	      },
	      "geo": {
	        "@type": "GeoCoordinates",
	        "latitude": 46.93801106655209,
	        "longitude": 19.685728403229746
	      },
	      "url": "https://otthonszépítők.hu/lakasfelujitas-kecskemet/",
	      "telephone": "+36301640354",
	      "priceRange": "$",
	      "openingHoursSpecification": [
	        {
	          "@type": "OpeningHoursSpecification",
	          "dayOfWeek": [
	           "Monday",
	           "Tuesday",
	           "Wednesday",
	           "Thursday",
	           "Friday",
	           "Saturday"
	          ],
	          "opens": "9:00",
	          "closes": "18:00"
	        }
	      ]
	    }
	    </script>

		<link rel="icon" href="/img/icon3.png">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width">
		<!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"-->
		<meta name="description" content="Professzionális lakásfelújítás vagy korszerűsítés, megfizethető áron, Kecskemét és vonzáskörzetében!">
		<meta name="keywords" content="Lakásfelújítás, Kecskemét, Otthon, Építők, Szépítők, Otthon(sz)építők, Korszerűsítés, Felújítás, Kecskeméten">

		<meta property="og:title" content="Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők" />
		<meta property="og:url" content="https://xn--otthonszptk-ibb7cv6g.hu/" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://xn--otthonszptk-ibb7cv6g.hu/img/icons/logo2.jpg" />
		<meta property="og:description" content="Professzionális lakásfelújítás vagy korszerűsítés, megfizethető áron, Kecskemét és vonzáskörzetében!" />
		<meta property="og:locale" content="hu_HU" />

		<link rel="stylesheet" type="text/css" href="/css_edited/bootstrap.min.css">
		<link rel="stylesheet" href="/css_edited/font-awesome.min.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<link rel="stylesheet" href="/PhotoSwipe/photoswipe.css"> 
		<link rel="stylesheet" href="/PhotoSwipe/default-skin/default-skin.css">
		<link rel="stylesheet" type="text/css" href="/css/flipCardStyle.css">
		<link rel="stylesheet" type="text/css" href="/css/SwiperMenuStyle.css">
		<link rel="stylesheet" type="text/css" href="/css/formStyle.css">
		<link rel="stylesheet" type="text/css" href="/css/style_v1.0.5.css">

		<?php include($_SERVER['DOCUMENT_ROOT']."/img/gallery/IMGCOUNT.php"); ?>
	</head>
	<body>

		<?php include($_SERVER['DOCUMENT_ROOT']."/inc/logo.php"); ?>

		<?php 
			function isMobile() {
				return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
			}

			if(isMobile()){
				$IMGFOLDER = "imgMobile";
			} else {
				$IMGFOLDER = "imgWeb";
			}
		?>

		<div class="topbar">
			<div class="container">
				<div class="center">
					ÁRAJÁNLAT KÉRÉS:  <i class='fa fa-phone'></i><a href="tel:+36301640354">+36301640354</a>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-md bg-light navbar-light" id="myHeader">
			<div class="container">
				<a class="navbar-brand" id="cegNev" href="https://otthonszépítők.hu/lakasfelujitas-kecskemet/"><img src="/img/logo.svg" alt="Otthon(sz)építők"><span id="cegNeve">Otthon(sz)épít<span id="cegO">ő</span>k</span></a>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav ml-auto myNavBar">
						<li class="nav-item">
							<a class="nav-link" onclick="openNevjegy();">NÉVJEGYÜNK</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#galeria">GALÉRIA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#szolgaltatasaink">SZOLGÁLTATÁSAINK</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contactUsSection">KAPCSOLAT</a>
						</li>   
					</ul>
				</div>
				<div id="mySwiper" class="d-md-none">
					<div id="mySidenav" class="sidenav">
							<a href="javascript:void(0)" class="closebtn">&times;</a>

							<a class="nav-link" onclick="openNevjegy();"><i class="fa fa-address-card menuIcons"></i>NÉVJEGYÜNK</a>
							<a class="nav-link" href="#galeria"><i class="fa fa-photo menuIcons"></i>GALÉRIA</a>
							<a class="nav-link" href="#szolgaltatasaink"><i class="fa fa-briefcase menuIcons"></i>SZOLGÁLTATÁSAINK</a>
							<a class="nav-link" href="#contactUsSection"><i class="fa fa-envelope menuIcons"></i>KAPCSOLAT</a>
					</div>
					<div id="swipablePad"></div>
					<div class="leftNavOpenBtn"> 
						<span class="navbar-toggler-icon"></span>
					</div>
				</div>
			</div>
		</nav>

		<div id="nevjegyunk">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center">
						<div class="flip-card">
							<div class="flip-card-inner" id="nevjegyBelso">
								<div class="flip-card-front">
									<img src="/img/cardFront3.webp" alt="Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők">
								</div>
								<div class="flip-card-back">
									<img src="/img/cardBack3.webp" alt="Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="rolunk" style="background-image: url('/<?php echo $IMGFOLDER; ?>/bgBlur.webp');">
			<div class="rolunkContainer">
				<div class="container">
					<div id="kuldetesunk">
						<h3>A küldetésünk</h3>
						<p>
							Lehető leggyorsabban, mégis tökéletes minőségben végezzük el lakása felújítását és, vagy korszerűsítését. Keressen minket bizalommal, kérjen ingyenes felmérést és árajánlatot!
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="galleryContainer">
			<div class="container gallery" id="galeria">
				<div class="row justify-content-center">
					<div class="col-md-8 align-self-center">
						<div class="galleryText">
							<h2>Galéria</h2>

							<p>
								Tekintse meg néhány kiválasztott referenciamunkánkat, 
								hogy meggyőződhessen róla, milyen színvonalas szolgáltatást nyújtunk, kedves megrendelőinknek!
								<br><br><b> VELÜNK NEM TÉVED </b>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 align-self-center colGallery">
						<div class="swiper-container" id="gallerySwiperContainer">
							<div class="swiper-wrapper">
								<?php
									$index = 1;
									for ($i = $IMGCOUNT; $i > 0; $i--) {
										if (file_exists("img/gallery_tumb/img".$i.".webp")) {

											echo '<div class="swiper-slide">
												<img
													data-src="/img/gallery_tumb/img'.$i.'.webp"
													class="gallerySwiperImg swiper-lazy" onclick="loadGalleryFromIndex('.$index.')" alt="Lakásfelújítás Kecskemét és vonzáskörzetében - Otthon(sz)építők, referenciamunkáink">
												<div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>';

											$index++;
										}
									}
								?>
							</div>
							<div class="swiper-pagination"></div>

							<div class="swiper-button-next swiper-button-white"></div>
							<div class="swiper-button-prev swiper-button-white"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		    <div class="pswp__bg"></div>
		    <div class="pswp__scroll-wrap">
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>
		        <div class="pswp__ui pswp__ui--hidden">
		            <div class="pswp__top-bar">
		                <div class="pswp__counter"></div>
		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
		                <button class="pswp__button pswp__button--share" title="Share"></button>
		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
		                <!--button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button-->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>
		            </div>
		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div> 
		            </div>
		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>
		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>
		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="choseUS">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center" data-aos="fade-left">
						<h2>MIÉRT VÁLASSZ MINKET?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 align-self-center" data-aos="fade-left" id="choseUSCounter1AOS">
						<div class="container">
							<div class="row justify-content-sm-center">
								<div class="col-sm-8 choseUsImg">
									<div class="counters" id="choseUSCounter1">
										
									</div>
								</div>
							</div>
							<div class="row justify-content-sm-center">
								<div class="col-sm-12 align-self-center">
									<h3>ÉV TAPASZTALAT</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 align-self-center" data-aos="fade-left" id="choseUSCounter2AOS">
						<div class="container">
							<div class="row justify-content-sm-center">
								<div class="col-sm-8 choseUsImg">
									<div class="counters" id="choseUSCounter2">
										
									</div>
								</div>
							</div>
							<div class="row justify-content-sm-center">
								<div class="col-sm-12 align-self-center">
									<h3>ELÉGEDETTSÉGI GARANCIA</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 align-self-center" data-aos="fade-left" id="choseUSCounter3AOS">

						<div class="container">
							<div class="row justify-content-sm-center">
								<div class="col-sm-8 choseUsImg">
									<div class="counters" id="choseUSCounter3">
										
									</div>
								</div>
							</div>
							<div class="row justify-content-sm-center">
								<div class="col-sm-12 align-self-center">
									<h3>ELÉGEDETT ÜGYFÉL</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="munkak" id="szolgaltatasaink">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 align-self-center">
						<div class="munkakIntroText">
							<h2>Építkezik, Felújít?</h2>

							<p>
								Több éves tapasztalattal állunk kedves megrendelőink szolgálatára, az alábbi építőipari ágazatokban, Kecskemét és vonzáskörzetében. 
							</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Lakatos munkák
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Kőműves munkák
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Gipszkarto-<br>nozás
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Burkolás
							</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Tetőfedés és egyéb ács munkák
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Villany, víz, gáz, fűtés szerelés
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Nyílászáró beépítés és csere
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 align-self-center">
						<div class="csinaljuk">
							<p>
								Festés, mázolás, tapétázás
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="motivation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center">
						<h3>EGYÉB MUNKÁKAT IS ELVÁLLALUNK!</h3>
						<a href="#contactUsSection" class="motivationBT">KAPCSOLATFELVÉTEL</a>
					</div>
				</div>
			</div>
		</div>

		<div class="tudnivalok">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center">
						<h4>EGYÉB INFORMÁCIÓK: </h4>

						<h5>Áraink:</h5>
						<ul>
							<li>1. Óra hiba feltárással kisebb hibák kijavítását is beleértve: 4500Ft+áfa.</li>
							<li>Ezt követően minden megkezdett munkaóra: 3500Ft+áfa.</li>
						</ul>

						<p> 
							<i>Természetesen nagyobb munkát igénylő hibaelhárítás egyedi árajánlattal kerül árazásra.</i>
						</p>

						<p>
							Továbbá több szakemberrel ápolunk partneri viszonyt amenyibben a hibaelhárítás nagyobb felvonulást igényel, legyen szó víz villany gáz klíma szerelésről, építőipari munkákról.
						</p>

						<h1 style="font-size: 16px; font-weight: bold; margin-bottom: 16px;">Lakásfelújítás Kecskemét és vonzáskörzetében.</h1>

						<h2 style="font-size: 1.25rem; text-transform: none;">Otthonfelújítási támogatást szeretne igényelni?</h2>

						<p>
							Akkor a legjobb helyen van! Természetesen minden követelményt betartva, megbízási szerződéssel, teljesítési igazolással, számlával.
						</p>

						<p>
							<b>Egyéb információkért keressen minket bizalommal.</b>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="motivation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center">
						<h3>KERESSEN MINKET BIZALOMMAL!</h3>
						<a href="#contactUsSection" class="motivationBT">KAPCSOLATFELVÉTEL</a>
					</div>
				</div>
			</div>
		</div>

		<div id="contactUsSection" style="background-image: url('/<?php echo $IMGFOLDER; ?>/bgBlur.webp');">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="card contactFormCard">
							<div class="card-body"> 
								<h3>Üzenjen nekünk!</h3>
								<form id="kapcsolatUrlap">
									<i class="fa fa-user formIcon"></i>
									<div class="form">
										<input type="text" name="cName" id="cName" required>
										<label for="cName" class="labelName">
											<span class="contentName">
												Név:
											</span>
										</label>
									</div>
									<i class="fa fa-envelope formIcon"></i>
									<div class="form">
										<input type="text" name="cEmail" id="cEmail" required>
										<label for="cEmail" class="labelName">
											<span class="contentName">
												Email:
											</span>
										</label>
									</div>
									<i class="fa fa-phone formIcon"></i>
									<div class="form">
										<input type="text" name="cPhone" id="cPhone" required>
										<label for="cPhone" class="labelName">
											<span class="contentName">
												Telefon:
											</span>
										</label>
									</div>
									<i class="fa fa-tag formIcon"></i>
									<div class="form">
										<input type="text" name="cSubject" id="cSubject" required>
										<label for="cSubject" class="labelName">
											<span class="contentName">
												Tárgy:
											</span>
										</label>
									</div>
									<i class="fa fa-pencil formIcon"></i>
									<div class="areaForm">
										<textarea name="cMessage" id="cMessage" cols="30" rows="10" required></textarea>
										<label for="cMessage" class="areaLabelName">
											<span class="areaContentName">
												Üzenet:
											</span>
										</label>
									</div>
									<div class="btSendMessageHolder">
										<input type="submit" class="btSendMessage" name="btSubmit" value="KÜLDÉS">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="sikerult" onclick="closeSuccess(this);">
			<div>
				<img src="/img/success.svg" alt="Otthonszépítők"><br>
				Az üzenet sikeresen elküldve!
			</div>
		</div>

		<div class="d-block d-md-none mobilePhone">
			<a href="tel:+36301640354"><img src="/img/phone.svg" alt="Otthonszépítők"></a>
		</div>

		<div class="tevekenysegekFooter">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 style="font-size: 1.25rem; padding: 0.5rem 1rem;">SZOLGÁLTATÁSAINK: </h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<a class="nav-link footerLink" href="#szolgaltatasaink">Lakatos munkák</a>
						<a class="nav-link footerLink" href="#szolgaltatasaink">Tetőfedés és egyéb ács munkák</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a class="nav-link footerLink" href="#szolgaltatasaink">Kőműves munkák</a>
						<a class="nav-link footerLink" href="#szolgaltatasaink">Villany, víz, gáz, fűtés szerelés</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a class="nav-link footerLink" href="#szolgaltatasaink">Gipszkartonozás</a>
						<a class="nav-link footerLink" href="#szolgaltatasaink">Nyílászáró beépítés és csere</a>
					</div>
					<div class="col-lg-3 col-sm-6">
						<a class="nav-link footerLink" href="#szolgaltatasaink">Burkolás</a>
						<a class="nav-link footerLink" href="#szolgaltatasaink">Festés, mázolás, tapétázás</a>
					</div>
				</div>
			</div>

			<hr>
			<div class="container felhasznaltTartalmak">
				<div class="row">
					<div class="col-md-12">
						<h5>Elérhetőségeink:</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="szerzo">
							<a class="nav-link footerLink elerhetosegek" href='tel:+36301640354'>Telefon: +36301640354</a>
						</div>
						<div class="szerzo">
							<a class="nav-link footerLink elerhetosegek" href='mailto: lakasfelujitas.kecskemet@gmail.com'>Email: lakasfelujitas.kecskemet@gmail.com</a>
						</div>
						<div class="szerzo">
							<a class="nav-link footerLink elerhetosegek" href='https://www.facebook.com/lakasfelujitas.kecskemet' target="_about">Facebook: Otthon/sz/építők</a>
						</div>
					</div>
				</div>
			</div>

			<hr>
			<div class="container felhasznaltTartalmak">
				<div class="row">
					<div class="col-md-12">
						<h5>Felhasznált tartalmak:</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="szerzo">
							<a href='https://www.freepik.com/vectors/business'>Business vector created by starline - www.freepik.com</a>
						</div>
						<div class="szerzo">
							Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
						</div>
						<div class="szerzo">
							Icons made by <a href="https://smashicons.com/" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyrightFooter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						Készítette: <a href="mailto:egrikrisztofer10@gmail.com">A programozó</a><br>
						Minden jog fenntartva 2020-2021 ©
					</div>
				</div>
			</div>
		</div>

		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="/js/jquery-3.5.1.min.js"></script>
		<!--script src="/js/bootstrap.min.js"></script-->
		<script src="/PhotoSwipe/photoswipe.min.js"></script> 
		<script src="/PhotoSwipe/photoswipe-ui-default.min.js"></script>
		<script src="/js/SwiperMenu.js"></script>
		<script src="/js/countUp.js"></script>
		<script type="text/javascript">
			/*-----------------Swipermenu------------------*/
			var swiperem = new SwiperMenu("mySwiper");
			/*---------------------------------------------*/

			/*-----------------aos animations------------------*/
			AOS.init({
				once: true,
				offset: 200,
				duration: 1000,
			});
			/*-------------------------------------------------*/

			/*-----------------pswp items array------------------*/
			var items = [
				<?php
					for ($i = $IMGCOUNT; $i > 0; $i--) {
						if (file_exists("img/gallery/img".$i.".jpg")) {
							$image_info = getimagesize("img/gallery/img".$i.".jpg");
							echo "{ src: '/img/gallery/img".$i.".jpg', w: ".$image_info[0].", h: ".$image_info[1]." }, \n";
						}
					}
				?>
			];
			/*---------------------------------------------------*/
		</script>
		<script src="/js/script_v1.0.6.js"></script>
	</body>
</html>