<?php
	class WebHeaderCenterMenu
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexDisplay":
					echo 
						'<div class="header_center_menu">
							
							<div class="header_center_menu_main_title" style="min-width:90px;">
								<a href="/">
									<img src="" style="height:15px;width:25px;">
									HCMT100000000
								</a>
								<div class="pole_menu" style="min-width:100px;">
									<div class="h_c_m_s_t">
										<a href="">
											HCMT1E1
										</a>
										<div class="h_c_m_s_t_pole" style="left:100%!important;box-shadow:2px 0 3px rgb(150,150,150);margin:-5px 0 0 0;">
											<div style="padding:5px;width:460px;">
												<div class="h_c_m_s_t_pole_title">
													<div style="font-size:14px;">
														<a href="">
															Exp.Title
														</a>
													</div>														
													<div style="font-size:10px;">
														<div style="margin:6px;">
															<a href="">
																Exp.Link
															</a>
														</div>
														<div style="margin:6px;">
															<a href="">
																Exp.Link.
															</a>
														</div>
														<div style="margin:6px;">
															<a href="">
																Exp.Link.
															</a>
														</div>
													</div>
												</div>
												<div style="display:inline-block;text-align:right;">
													<div class="slideshow-container">
														<div class="mySlides fade">
															<a href="">
																<img title="Exp.Image1" src="" style="width:300px;height:200px;">
																<div style="font-size:10px;width:300px;">
																	Exp.Link
																</div>
															</a>
														</div>
														<div class="mySlides fade">
															<a href="">
																<img title="Exp.Image2" style="width:300px;height:200px;">
																<div style="font-size:10px;width:300px;">
																	Exp.Link
																</div>
															</a>
														</div>
														<div class="mySlides fade">
															<a href="">
																<img title="Exp.Image3" src="" style="width:300px;height:200px;">
																<div style="font-size:10px;width:300px;">
																	Exp.Link
																</div>
															</a>
														</div>
													</div>
													<div style="text-align:center">
													  <span class="dot"></span> 
													  <span class="dot"></span> 
													  <span class="dot"></span>
													</div>
												</div>
											</div>
											<script>
											var slideIndex = 0;
											showSlides();
											function showSlides() 
											{
												var i;
												var slides = document.getElementsByClassName("mySlides");
												var dots = document.getElementsByClassName("dot");
												for (i = 0; i < slides.length; i++) 
												{
													slides[i].style.display = "none";  
												}
												slideIndex++;
												if (slideIndex > slides.length) {slideIndex = 1}    
												for (i = 0; i < dots.length; i++) 
												{
													dots[i].className = dots[i].className.replace(" active", "");
												}
												slides[slideIndex-1].style.display = "block";  
												dots[slideIndex-1].className += " active";
												setTimeout(showSlides, 6000);
											}
											</script>
										</div>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT1E2
										</a>
										<div class="h_c_m_s_t_pole" style="left:100%!important;box-shadow:2px 0 3px rgb(150,150,150);margin:-31px 0 0 0;">
											test text
										</div>
									</div>
								</div>
							</div>
							
							<div class="header_center_menu_main_title" style="width:90px;">
								<a href="/">
									<img src="" style="height:15px;width:25px;">
									HCMT2
								</a>
								<div class="pole_menu" style="min-width:100px;">
									<div class="h_c_m_s_t">
										<a href="">
											HCMT2E1
											<div class="h_c_m_s_t_pole" style="left:100%!important;box-shadow:2px 0 3px rgb(150,150,150);margin:-5px 0 0 0;padding:5px;">
												<div style="display:inline-block;vertical-align:top;">
													Text 1
												</div>
												<div style="display:inline-block;">
													<img src="" style="height:100px;width:200px;">
												</div>
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT2E2
											<div class="h_c_m_s_t_pole" style="left:100%!important;box-shadow:2px 0 3px rgb(150,150,150);margin:-31px 0 0 0;padding:5px;">
												<div style="display:inline-block;vertical-align:top;">
													Text 1
												</div>
												<div style="display:inline-block;">
													<img src="" style="height:150px;width:100px;">
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							
							<div class="header_center_menu_main_title" style="width:90px;">
								<a href="">
									<img src="" style="height:15px;width:25px;">
									HCMT3
								</a>
								<div class="pole_menu" style="min-width:100px;">
									<div class="h_c_m_s_t">
										<a href="">
											HCMT3E1
										</a>	
										<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-5px 0 0 0;padding:5px;">
											<a href="">
												<div style="display:inline-block;font-size:8px;color:rgb(0,100,0);">
													TEST 1
												</div>
											</a>
											<a href="">
												<div style="display:block;font-size:13px;color:rgb(0,100,0);text-align:left;">
													<div class="punkt1">
													</div>
													TEST 2
												</div>
											</a>
											<a href="">
												<div style="display:block;font-size:13px;color:rgb(0,100,0);text-align:left;">
													<div class="punkt1">
													</div>
													TEST 3
												</div>
											</a>
											<a href="">
												<div style="display:block;font-size:13px;color:rgb(0,100,0);text-align:left;">
													<div class="punkt1">
													</div>
													TEST 4
												</div>
											</a>
											<a href="">
												<div style="display:block;font-size:13px;color:rgb(0,100,0);text-align:left;">
													<div class="punkt1">
													</div>
													TEST 5
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="header_center_menu_main_title" style="width:90px;">
								<a href="">
									HCMT4
									<img src="" style="height:15px;width:15px;">
								</a>
								<div class="pole_menu" style="min-width:100px;">
									<div class="h_c_m_s_t">
										<a href="">
											HCMT4E1
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-5px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT4E2
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-31px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT4E3
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-57px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT4E4
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-83px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											HCMT4E5
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-109px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
								</div>
							</div>
							
							<div class="header_center_menu_main_title" style="width:90px;">
								<a href="">
									HCMT4
									<img src="" style="height:15px;width:25px;">
								</a>
								<div class="pole_menu" style="min-width:100px;">
									<div class="h_c_m_s_t">
										<a href="">
											XXX 1
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-5px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
									<div class="h_c_m_s_t">
										<a href="">
											XXX 2
											<div class="h_c_m_s_t_pole" style="right:100%!important;box-shadow:-2px 0 3px rgb(150,150,150);margin:-31px 0 0 0;">
												test test test
											</div>
										</a>
									</div>
								</div>
							</div>
							
						</div>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
