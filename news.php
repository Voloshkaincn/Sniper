<div class="content">
	<div class="container no-padding  mt-5">

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">Головна</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Новини</li>
		  </ol>
		</nav>

		<h1 class="content-title">Новини</h1>
		<p class="content-after-title">Будь завжди в курсі подій!</p>
	</div>
	<div class="container">
		<div class="row flex-wrap mt-4 mb-5">
			<?php for($i=0; $i<9; $i++) : ?>
				<div class="news__slide col-4 mb-5">
					<div class="news__slide-wrap">
						<div class="slide-img"">
							<img src="img/content/slide2.jpg" alt="img">
							<div class="img-label light-color">
								<span class="icon-clock main-color"></span> 21.06.17
							</div>
						</div>
						<a href="#" class="content-link">Супер-пейнтбол корпоратив на дністрі. Держслужбовці відривались на повну. Самий старший гравець 60 років</a>
						<p class="text">Супер-пейнтбол корпоратив на дністрі. Держслужбовці відривались на повну. Самий старший гравець 60 років...</p>
						<button class="btn__main-empty">Детальніше</button>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="pagination">
			<span class="pagination__prev pagination__arrows"><span class="icon-v-prev"></span></span>
			<ul class="pagination__list">
				<li class="pagination__item active">1</li>
				<li class="pagination__item">2</li>
				<li class="pagination__item">3</li>
				<li class="pagination__item">4</li>
				<li class="pagination__item">...</li>
				<li class="pagination__item">8</li>
				<li class="pagination__item">9</li>
			</ul>
			<span class="pagination__prev pagination__arrows"><span class="icon-v-next"></span></span>
		</div>
	</div>
	</div>
	