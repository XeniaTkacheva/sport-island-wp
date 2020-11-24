<?php
/*
Template Name: Page Contacts Template
 */
get_header();
?>
<main class="main-content">
    <div class="wrapper">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="index.html" class="breadcrumbs__link">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="contacts.html" class="breadcrumbs__link">Контакты</a>
            </li>
        </ul>
    </div>
    <section class="contacts">
        <div class="wrapper">
            <h1 class="contacts__h main-heading">Контакты</h1>
            <div class="map">
                <a href="#" class="map__fallback">
                    <img src="<?php echo esc_url(ORTI_IMG_DIR); ?>/map.jpg" alt="Карта клуба SportIsland">
                    <span class="sr-only"> Карта </span>
                </a>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12918.023513421984!2d8.621780245302888!3d47.028772116408156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478551e1c86781e9%3A0x31b77e4a9b0a7057!2zNjQyMyDQl9C10LXQstC10L0!5e1!3m2!1sru!2sch!4v1604418073072!5m2!1sru!2sch" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <p class="contacts__info">
                <span class="widget-address"> г. Москва, ул. Приречная 11 </span>
                <span class="widget-working-time"> Работаем с 09:00 до 20:00 </span>
                <a href="tel:88007003030" class="widget-phone"> 8 800 700 30 30 </a>
                <a href="mailto:sportisland@gmail.ru" class="widget-email">sportisland@gmail.ru</a>
            </p>
            <h2 class="page-heading contacts__h_form"> форма </h2>
            <form action="#" class="contacts__form contacts-form">
                <label class="contacts-form__label">
                    <span class="sr-only"> Имя </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваше имя">
                </label>
                <label class="contacts-form__label">
                    <span class="sr-only"> Телефон </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваш телефон">
                </label>
                <label class="contacts-form__label">
                    <span class="sr-only"> Почта </span>
                    <input type="text" class="contacts-form__input" placeholder="Ваша почта">
                </label>
                <label class="contacts-form__label contacts-form__label_textarea">
                    <span class="sr-only"> Комментарий </span>
                    <textarea name="" id="" cols="30" rows="10" class="contacts-form__textarea" placeholder="Ваше сообщение"></textarea>
                </label>
                <button class="contacts-form__btn btn"> Отправить </button>
            </form>
        </div>
    </section>
</main>

<?php

get_footer();

?>
