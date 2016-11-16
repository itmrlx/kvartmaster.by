<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<title>KvartMaster</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="wrapper header-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 menu-wr">
					<div class="row">
						<div class="col-xs-3 logo-container">
							<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="KvartMaster"></a>
						</div>
						<div class="col-xs-6 menu-container">
							<div class="burger-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<ul class="pro-menu">
								<li><a class="scroll" href="#about">О нас</a></li>
								<li><a class="scroll" href="#costs">Цены</a></li>
								<li><a class="scroll" href="#review">Отзывы</a></li>
								<li><a class="scroll" href="#blog">Блог</a></li>
							</ul>
						</div>
						<div class="col-xs-3 call-container">
							<a href="<?php the_field('price','option'); ?>" class="btn btn-download-price">Скачать прайс</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h1 class="header-title"><?php the_field('h_title1','option') ?></h1>
			<h2 class="header-title2"><?php the_field('h_title2','option') ?></h2>
			<div class="centered">
				<a href="#modalsimple" class="btn btn-primary fancybox" onclick="simpleTitle('Получить консультацию');">Получить консультацию</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 contacts-wr">
					<div class="row">
						<div class="col-xs-4">
							<div class="contacts-container">
								<div class="contacts">
									<span><?php the_field('h_time','option'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="contacts-container">
								<div class="contacts">
									<span><?php the_field('h_tel','option'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-4">
							<div class="contacts-container">
								<div class="contacts">
									<span><?php the_field('h_email','option'); ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- our command -->
	<div class="container our-command-container" id="about">
		<h3 class="title-hr"><span><span>Наша команда</span></span></h3>
		<div class="col-xs-4 people">
			<?php $img1 = get_field('com_img1','option'); ?>
			<img src="<?php echo $img1[sizes][thumbnail]; ?>" alt="<?php echo $img1[alt]; ?>">
			<div class="name"><span><?php the_field('com_name1','option'); ?></span></div>
			<div class="desc">
				<?php the_field('com_text1','option'); ?>
			</div>
		</div>
		<div class="col-xs-4 people">
			<?php $img2 = get_field('com_img2','option'); ?>
			<img src="<?php echo $img2[sizes][thumbnail]; ?>" alt="<?php echo $img2[alt]; ?>">
			<div class="name"><span><?php the_field('com_name2','option'); ?></span></div>
			<div class="desc">
				<?php the_field('com_text2','option'); ?>
			</div>
		</div>
		<div class="col-xs-4 people">
			<?php $img3 = get_field('com_img3','option'); ?>
			<img src="<?php echo $img3[sizes][thumbnail]; ?>" alt="<?php echo $img3[alt]; ?>">
			<div class="name"><span><?php the_field('com_name3','option'); ?></span></div>
			<div class="desc">
				<?php the_field('com_text3','option'); ?>
			</div>
		</div>
	</div>

	<!-- counter -->
	<div class="wrapper counter-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="counter-container">
						<span class="title"><?php the_field('num1','option'); ?></span>
						<span class="desc">Выполненых<br>проектов</span>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="counter-container">
						<span class="title"><?php the_field('num2','option'); ?></span>
						<span class="desc">Тонн стройматериалов<br>использовано</span>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="counter-container">
						<span class="title"><?php the_field('num3','option'); ?></span>
						<span class="desc">Довольных<br>клиентов</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- our costs -->
	<div class="container cost-wr" id="costs">
		<h3 class="title-hr"><span><span>Наши цены</span></span></h3>
		<div class="row">
			<div class="col-xs-12 costs">
				<div class="row">
					<div class="col-xs-3 first-block">
						<div class="title">Устройство потолков</div>
						<ul>
							<?php if( have_rows('list1','option') ): while ( have_rows('list1','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="col-xs-3 first-block">
						<div class="title">Монтаж и отделка стен</div>
						<ul>
							<?php if( have_rows('list2','option') ): while ( have_rows('list2','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="col-xs-3 first-block">
						<div class="title">Устройство полов</div>
						<ul>
							<?php if( have_rows('list3','option') ): while ( have_rows('list3','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="col-xs-3 first-block">
						<div class="title">Демонтажные работы</div>
						<ul>
							<?php if( have_rows('list4','option') ): while ( have_rows('list4','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 costs costs2">
				<div class="row">
					<div class="col-xs-3 last-block">
						<div class="title">Сантихнические работы</div>
						<ul>
							<?php if( have_rows('list5','option') ): while ( have_rows('list5','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="col-xs-3 last-block">
						<div class="title">Установка и отделка проемов и откосов</div>
						<ul>
							<?php if( have_rows('list6','option') ): while ( have_rows('list6','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="col-xs-3 last-block">
						<div class="title">Элекромонтажные работы</div>
						<ul>
							<?php if( have_rows('list7','option') ): while ( have_rows('list7','option') ) : the_row(); ?>
								<li><?php the_sub_field('name'); ?> <span class="cost-cost"><?php the_sub_field('cost'); ?></span></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="centered">
			<a href="<?php the_field('price','option'); ?>" class="btn btn-primary">Скачать прайс</a>
			<a href="#modal" class="btn btn-primary fancybox" onclick="raschetTitle('Расчитать за меня');">Расчитать за меня</a>
		</div>
	</div>

	<!-- portfolio -->
	<div class="wrapper portfolio-wr" id="review">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 portfolio-container">
					<!-- tabs -->
					<ul class="tabs-menu" id="nav-tab">
						<li><a class="one" href="#one">Проморолик</a></li>
						<li class="active"><a class="two" href="#two">Наши работы</a></li>
						<li><a class="three" href="#three">Отзывы о нас</a></li>
					</ul>
					<div class="tabs-container">
						<!-- tab one -->
						<div class="tabs-pane" id="one">
							<?php the_field('promo','option'); ?>
						</div>
						<!-- tab two -->
						<div class="tabs-pane active" id="two">
							<div class="image-portfolio row">
								<!-- image portfolio -->
								<?php if( have_rows('our_work','option') ): while ( have_rows('our_work','option') ) : the_row(); ?>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
												<?php $img1 = get_sub_field('ow_img1'); ?>
												<div class="image" style="background-image: url(<?php echo $img1[sizes][portfolio]; ?>);">
													<a href="<?php echo $img1[url]; ?>" class="fancybox" data-fancybox-group="portfolio-images" ></a>
												</div>
												<div class="title"><span><?php the_sub_field('ow_adres1'); ?></span></div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<?php $img2 = get_sub_field('ow_img2'); ?>
												<div class="image" style="background-image: url(<?php echo $img2[sizes][portfolio]; ?>);">
													<a href="<?php echo $img2[url]; ?>" class="fancybox" data-fancybox-group="portfolio-images" ></a>
												</div>
												<div class="title"><span><?php the_sub_field('ow_adres2'); ?></span></div>
											</div>
										</div>
									</div>
								<?php endwhile; endif; ?>
								<!-- / image portfolio -->
							</div>
						</div>
						<!-- tab three -->
						<div class="tabs-pane" id="three">
							<div class="image-portfolio-video row">
								<!-- video portfolio -->
								<?php $pcnt = 0; ?>
								<?php if( have_rows('our_work1','option') ): while ( have_rows('our_work1','option') ) : the_row(); ?>
									<div class="col-xs-4">
										<div class="row">
											<div class="col-xs-12">
												<?php $img1 = get_sub_field('ow_img1'); ?>
												<div class="image" style="background-image: url(<?php echo $img1[sizes][portfolio]; ?>);">
													<a href="#video<?=$pcnt?>" class="fancybox"></a>
												</div>
												<div class="title"><span><?php the_sub_field('ow_adres1'); ?></span></div>
											</div>
										</div>
										<?php $pcnt++; ?>
										<div class="row">
											<div class="col-xs-12">
												<?php $img2 = get_sub_field('ow_img2'); ?>
												<div class="image" style="background-image: url(<?php echo $img2[sizes][portfolio]; ?>);">
													<a href="#video<?=$pcnt?>" class="fancybox"></a>
												</div>
												<div class="title"><span><?php the_sub_field('ow_adres2'); ?></span></div>
											</div>
										</div>
										<?php $pcnt++; ?>
									</div>
								<?php endwhile; endif; ?>
								<!-- / video portfolio -->
							</div>
						</div>
					</div>
					<!-- / tabs -->
				</div>
			</div>
		</div>
	</div>

	<!-- raschet -->
	<div class="wrapper raschet">
		<div class="container">
			<div class="title"><?php the_field('r_text','option'); ?></div>
			<div class="centered"><a href="#modalsimple" class="btn btn-white fancybox" onclick="simpleTitle('Хочу так!');">Хочу так!</a></div>
		</div>
	</div>

	<!-- advantages -->
	<div class="wrapper advantages-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="advantages-block">
						<div class="title"><span><span>Чего у нас нет</span></span></div>
						<ul class="net">
							<?php if( have_rows('net','option') ): while ( have_rows('net','option') ) : the_row(); ?>
								<li><?php the_sub_field('net_text'); ?></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="advantages-block">
						<div class="title"><span><span>Что у нас есть</span></span></div>
						<ul class="da">
							<?php if( have_rows('da','option') ): while ( have_rows('da','option') ) : the_row(); ?>
								<li><?php the_sub_field('net_text'); ?></li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="centered">
				<a href="#modalsimple" class="btn btn-primary fancybox" onclick="simpleTitle('Убедитесь сами!');">Убедитесь сами!</a>
			</div>
		</div>
	</div>

	<!-- our blog -->
	<div class="container our-blog" id="blog">
		<div class="title-hr"><span><span>Наш блог</span></span></div>
		<div class="our-blog-slider">
			<?php $vcnt = 0; ?>
			<?php if( have_rows('blog','option') ): while ( have_rows('blog','option') ) : the_row(); ?>
				<?php $vcnt++; ?>
				<?php $img = get_sub_field('img'); ?>
				<a href="#videoblog<?=$vcnt?>" class="slide fancybox" style="background-image: url(<?php echo $img[sizes][portfolio]; ?>);">
					<div class="title"><span><?php the_sub_field('title'); ?></span></div>
				</a>
			<?php endwhile; endif; ?>
		</div>
	</div>

	<!-- footer -->
	<div class="wrapper footer-wr">
		<div class="container">
			<div class="col-xs-4 col-xs-offset-1">
				<form id="myform">
					<div class="title">Остались вопросы?</div>
					<div class="form-group">
						<input class="form-control name" name="name" type="text" placeholder="Ваше имя:" required />
					</div>
					<div class="form-group">
						<input class="form-control phone" name="tel" type="tel" placeholder="Ваш телефон:" required />
					</div>
					<div class="form-group">
						<textarea class="form-control message" rows="9" name="dopinfo" placeholder="Ваше сообщение:"></textarea>
					</div>
					<div class="form-group" style="display:none;">
						<label>for robots:</label>
						<input class="form-control" type="text" name="email" />
					</div>
					<div class="centered">
						<button type="submit" class="btn btn-primary">Задать вопросы</button>
					</div>
				</form>
			</div>
			<div class="col-xs-5 col-xs-offset-1 right-block">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="KvartMaster"></a>
				<div class="bd-block">
					<p><?php the_field('h_tel','option'); ?></p>
					<p><?php the_field('h_email','option'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<!-- copyright -->
	<div class="container copyright">
		<p class="webber">Разработка сайта<a href="http://webber.by" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
	</div>

	<!-- modal form -->
	<div id="modal" style="display: none;">
		<form id="fform" class="fform">
			<div class="raschet-title title">Форма обратной связи</div>
			<div class="form-group">
				<input class="form-control name" name="name" type="text" placeholder="Ваше имя:" required />
			</div>
			<div class="form-group">
				<input class="form-control phone" name="tel" type="tel" placeholder="Ваш телефон:" required />
			</div>
			<div class="form-group">
				<input class="form-control ploschad" name="ploschad" type="text" placeholder="Площадь объекта:" />
			</div>
			<div class="form-group">
				<textarea class="form-control message" rows="3" name="dopinfo" placeholder="Дополнительная информация:"></textarea>
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-primary">Отправить</button>
			</div>
		</form>
	</div>
	<!-- modal form simple -->
	<div id="modalsimple" style="display: none;">
		<form id="fform2" class="fform">
			<div class="simple-title title">Форма обратной связи</div>
			<div class="form-group">
				<input class="form-control name" name="name" type="text" placeholder="Ваше имя:" required />
			</div>
			<div class="form-group">
				<input class="form-control phone" name="tel" type="tel" placeholder="Ваш телефон:" required />
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-primary">Отправить</button>
			</div>
		</form>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-2.2.3-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<?php wp_footer(); ?>
	
	<!-- video portfolio -->
	<?php $pcnt = 0; ?>
	<?php if( have_rows('our_work1','option') ): while ( have_rows('our_work1','option') ) : the_row(); ?>
			<div id="video<?=$pcnt?>" style="display: none;"><?php the_sub_field('video1'); ?></div>
			<?php $pcnt++; ?>
			<div id="video<?=$pcnt?>" style="display: none;"><?php the_sub_field('video2'); ?></div>
			<?php $pcnt++; ?>
		</div>
	<?php endwhile; endif; ?>
	<!-- video blog -->
	<?php $vcnt = 0; ?>
	<?php if( have_rows('blog','option') ): while ( have_rows('blog','option') ) : the_row(); ?>
		<?php $vcnt++; ?>
		<div id="videoblog<?=$vcnt?>" style="display: none;">
			<?php the_sub_field('video'); ?>
		</div>
	<?php endwhile; endif; ?>
</body>
</html>
