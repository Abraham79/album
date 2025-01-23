<!DOCTYPE html>
<html lang="en" class="no-js demo-4">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta id="testViewport" name="viewport" content="width=device-width, initial-scale=0.3;">
		<script>
			// orientation listener
			var mql = window.matchMedia("(orientation: portrait)");
			mql.addListener(handleOrientationChange);
			handleOrientationChange(mql);
			function handleOrientationChange(mql) {
			
			if (window.matchMedia("(orientation: landscape)").matches) 
			{ // LANDSCAPE mode
			/* IPHONE 6 */
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.53;'); 
			/* LG OPTIMUS L7 */
			//	if (screen.width > 319 && < 360) {
			//	var mvp = document.getElementById('testViewport');
			//	mvp.setAttribute('content','width=device-width, initial-scale=0.26;'); 
			//	}
			/* SONY XPERIA Z */
				if (screen.width == 360) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.42;'); 
				}
			/* IPAD */	
				if (screen.width > 700) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.8;');
				} 
				else {
			/* IPHONE 4 */
				if (screen.width < 360) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.38;');
				}
				}
				//else {
				//var mvp = document.getElementById('testViewport');
				//mvp.setAttribute('content','width=device-width, initial-scale=0.5;');
				//}
	
			} else { // PORTRAIT mode

			/* IPHONE 6 */
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.29;');
			/* LG OPTIMUS L7 */
			//if (screen.width > 319 && < 360) {
			//	var mvp = document.getElementById('testViewport');
			//	mvp.setAttribute('content','width=device-width, initial-scale=0.16;'); 
			//	}
			/* SONY XPERIA Z */
				if (screen.width == 360) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.27;'); 
				}
			/* IPAD */	
				if (screen.width > 700) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.6;');
				} else {
			/* IPHONE 4 */	
				if (screen.width < 360) {
				var mvp = document.getElementById('testViewport');
				mvp.setAttribute('content','width=device-width, initial-scale=0.22;');
				}
				}
				//else {
				//var mvp = document.getElementById('testViewport');
				//mvp.setAttribute('content','width=device-width, initial-scale=0.28;');
				//}
					
			
			}
			}
			</script>
		<title>Fotografía & Diseño - Propuesta de álbum</title>
		<meta name="description" content="Fotografía & Diseño - Propuesta de álbum" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<!-- custom demo style -->
		<link rel="stylesheet" type="text/css" href="css/f&d.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
			<div class="bb-custom-wrapper">
			
			
				<h3>Previsualiza aquí tu propuesta de álbum</h3>
	
				<div id="bb-bookblock" class="bb-bookblock">


				<?php
                    $filenum = count(glob(__DIR__."/images/"."*.jpg"));

                    for($i=1; $i<=$filenum; $i++){
						$num = sprintf('%02d',$i);
						echo '<div class="bb-item">'."\n";
                        echo '<img src="images/'.$num.'.jpg" alt="image'.$num.'"/>'."\n";
						echo '</div>'."\n";
                    };
				?>
				
					
					<div class="sombra">
					</div>
	
					
						
				</div><!--<div id="bb-bookblock" class="bb-bookblock">-->
			
			<span class="navigation">
				<nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
				</nav>
			</span>
			
			</div><!--</custom-wrapper>-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
	</body>
</html>