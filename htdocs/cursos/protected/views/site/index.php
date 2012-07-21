<div id="masthead">

        <div class="container">

                <div id="masthead-carousel" class="carousel slide">

                        <div class="carousel-inner">
                                <div class="active item">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masthead/caja-hacking-cuantico.jpg" alt="" />

                                        <div class="masthead-details">

                                                <h2>Hacking SQLi!</h2>

                                                <p>Dicen que no hay mejor forma de aprender a defenderse de nuestro enemigo que aprendiendo de él mismo.</p>

                                                <p>En este curso tendremos un acercamiento a una de las técnicas más famosas sobre como vulnerar un sitio web.</p>

                                        </div> <!-- /masthead-details -->
                                </div> <!-- /item -->

                        </div> <!-- /carousel-inner -->

                        <a class="carousel-control left" href="#masthead-carousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#masthead-carousel" data-slide="next">&rsaquo;</a>

                </div> <!-- /masthead-carousel -->

        </div> <!-- /container -->

</div> <!-- /masthead -->


<div id='categories'>
    <div class='graybar'><i class='left'></i><h2>Seguridad informática</h2><i class='right'></i></div>
    <div class='clear'></div>
    <div class='row course-container'>
        <div class='grid-3'>
            <div class='course-item'>
                <h3><a href="#">Hacking SQLi</a></h3>
                <a class='thumbnail'>
                    <img src='<?php echo Yii::app()->baseUrl . Yii::app()->params[ 'course_upload' ] ?>/2_small.jpg' />
                </a>
                <p>Dicen que no hay mejor forma de aprender a defenderse de nuestro enemigo que aprendiendo de él mismo.</p>
                <div class='grid-1'><?php echo CHtml::link( '&nbsp;&nbsp;Ver más', array( '/' ), array( 'class' => 'icon-plus' ) ) ?></div>
                <div class='grid-1'><?php echo CHtml::link( '&nbsp;&nbsp;Comprar', array( '/' ), array( 'class' => 'icon-credit-card' ) ) ?></div>
            </div>
        </div>
    </div>
</div>
<!-- /categories -->