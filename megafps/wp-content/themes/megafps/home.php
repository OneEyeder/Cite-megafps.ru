<?php
/*
Template Name: home
*/
?>

<?php get_header();?>

    <main>
        <div class="section1">
        <div class="Sbor">
            <h1 class="Sbor1">СОБИРАЕМ МОЩНЫЕ <br> ИГРОВЫЕ КОМПЬЮТЕРЫ</h1>
                <div class="section1__text">
                <p>
                    БЕЗ КОМПРОМИССОВ В ИГРЕ.<BR>
                    ПРЕВОСХОДСТВО В КАЖДОМ КАДРЕ
                </p>
                <p class="section_desc">Мощные игровые компьютеры обеспечивают потрясающую графику и плавный геймплей, делая миры игр более реалистичными. Они позволяют наслаждаться сложными эффектами и высокими деталями без задержек. Это усиливает погружение и удовольствие от игры.</p>
                </div>
        
        </div>
        </div>
        <div class="section2">
        <div class="Sbor2">
            <h1 class="Sbor3" id="sborka">ЗАКАЗЫВАЯ У НАС ВЫ ПОЛУЧИТЕ</h1>
                <div class="section2__text">
                <p>
                    1. ПОМОЩЬ С ВЫБОРОМ КОМПЛЕКТУЮЩИХ<BR>
                    2. БЫСТРУЮ СКОРОСТЬ СБОРКИ <BR>
                    3. НАСТРОЙКУ ОПЕРАЦИОННОЙ СИСТЕМЫ
                </p>
                <p class="section_desc1">Профессиональная помощь в выборе комплектующих, чтобы ваша система соответствовала всем вашим требованиям и ожиданиям.<br>
                Быстрая и качественная сборка, которая позволит вам наслаждаться играми в кратчайшие сроки.<br>
                Тщательная настройка операционной системы, обеспечивающая оптимальную работу и максимальную производительность вашего компьютера.
                </p>
                </div>
        </div>
        <div class="Feedback1">
            <a href="https://t.me/Luxpc1" class="button_feed">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>
        </div>
        
        <div class="section3">
            <h1 id="portfolio">ПРИМЕРЫ НАШИХ СБОРОК</h1>
        <div class="slider">
        <div class="slides">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/computer1.png" alt="Image 1">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/computer2.png" alt="Image 2">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/computer3.png" alt="Image 3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/computer4.png" alt="Image 4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/computer5.png" alt="Image 5">
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
        </div>
        
        // <script src="script.js"></script>

        <div class="section4">
    <div class="About__us">
        <h1>НЕМНОГО ПРО НАС <br> И ЧТО МЫ ДЕЛАЕМ</h1>
        <div class="text-with-icon">
            <p>РАБОТАЕМ БОЛЕЕ 5 ЛЕТ
            </p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon1.png" alt="Icon" class="icon">
        </div>
        <div class="text-with-icon">
            <p>СОБИРАЕМ ИНДИВИДУАЛЬНО</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon2.png" alt="Icon" class="icon">
        </div>
        <div class="text-with-icon">
            <p>У НАС ЦЕНА = КАЧЕСТВО
            </p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon3.png" alt="Icon" class="icon">
        </div>
        <div class="text-with-icon">
            <p>НАДЁЖНОСТЬ НА ВЫСШЕМ УРОВНЕ</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon4.png" alt="Icon" class="icon">
        </div>
        <p class="section_desc1">
        Работаем более 5 лет на рынке сборки ПК. Собираем компьютеры под <br> индивидуальные задачи, соблюдая баланс цены и качества, гарантируя<br> надежность на высшем уровне.
        </p>
    </div>
</div>

<div class="Sbor4">
            <h1 class="Sbor5" id="sborka">СОБИРАЕМ В ВАШЕМ ПРИСУТВИИ</h1>
                <div class="section3__text">
                <p>
                    СОЗВАНИВАЕМСЯ И ДОГОВАРИВАЕМСЯ О ВСТРЕЧЕ
                </p>
                <p class="section_desc2">Мы организуем личную встречу, вместе обговарием требования к компьютеру, заказываем комплектующие которые придут к вам в руки.
                    Когда комплектующие доставленны и находятся у вас договариемся о встрече и собираем компьютер, сборка возможна у вас дома или у нас в офисе.
                    После сборки комьютера настраиваем операционную систему и радуемся результату!<div class=""></div>
                </p>
                </div>
        </div>

        <div class="contact">
        <h1 id="contacts">Напишите нам</h1>


            <form id="contactForm" action="" method="post" class="form2">
                <input type="text" name="name" placeholder="Введите ваше имя" class="form-control"><br>
                <input type="tel" name="phone" placeholder="Введите ваш телефон" class="form-control"><br>
                <textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>

            <div id="response"></div> <!-- Контейнер для ответа -->



        </div>

    </main>

<?php get_footer(); ?>
