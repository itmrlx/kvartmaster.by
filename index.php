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
							<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="KvartMaster">
							<span>Минская строительная компания</span>
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
							</ul>
						</div>
						<div class="col-xs-3 call-container">
							<a href="<?php the_field('price','option'); ?>" class="btn btn-download-price">Скачать прайс</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container new-video-container">
			<div class="row">
				<div class="col-xs-12 title1">
					Электромонтаж без пыли. Любой сложности.<br>Гарантия 10 лет по договору.
				</div>
				<div class="col-xs-6 video video-left">
					Узнайте о нас за 2 минуты
				</div>
				<div class="col-xs-6 video">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/imP20Vri5n0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
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
		<div class="comand-slider">
			<?php if( have_rows('c_repeater', 'option') ):while ( have_rows('c_repeater', 'option') ) : the_row(); ?>
				<div class="col-xs-4 people">
					<?php $img1 = get_sub_field('c_photo'); ?>
					<img src="<?php echo $img1[sizes][thumbnail]; ?>" alt="<?php echo $img1[alt]; ?>">
					<div class="name"><span><?php the_sub_field('c_name'); ?></span></div>
					<div class="desc">
						<?php the_sub_field('c_desc'); ?>
					</div>
				</div>		
			<?php endwhile;endif; ?>
		</div>
	</div>

	<!-- counter -->
	<div class="wrapper counter-wr" id="review">
		<div class="container">
			<div class="title">Видео отзывы</div>
			<div class="rev-slider">
				<?php if( have_rows('rev_video','option') ):while ( have_rows('rev_video','option') ) : the_row(); ?>
					<div class="slide">
						<?php $revimg = get_sub_field('rev_img'); ?>
						<a href="<?php the_sub_field('rev_vid'); ?>" class="fancybox fancybox.iframe"><img src="<?php echo $revimg[sizes][portfolio]; ?>" alt="<?php echo $revimg[alt]; ?>"></a>
						<div class="desc"><?php the_sub_field('rev_desc'); ?></div>
					</div>
				<?php endwhile;endif; ?>
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
			<a href="<?php the_field('price','option'); ?>" class="btn btn-primary">Реальная стоимость</a>
			<a href="#modal" class="btn btn-primary fancybox" onclick="raschetTitle('Расчитать за меня');">Расчитать за меня</a>
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

	<script src="<?php bloginfo('template_url'); ?>/js/dist/jquery-2.2.3-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/jquery.fancybox-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/slick-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/script-dist.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
