<?php
//footer
?>
<footer class="footer">
            <div class="container">
                <div class="footer_main d-md-flex flex-wrap justify-content-between">
                    <div class="footer_main-block footer_main-block--about">
                        <span class="brand">
                            <a class="logo d-inline-flex align-items-center" href="<?=URL?>/">
                                <span class="logo_media">
                                    <svg width="56px" height="37px" viewBox="0 0 56 37" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <title>Combined Shape</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill="currentColor" transform="translate(0.000000, -0.000000)">
                                                <g transform="translate(0.000000, 0.000000)">
                                                    <path
                                                        d="M37.9730366,0 L56,18.5 L37.9730366,37 L20.0419919,18.5 L25.8616371,12.5121359 L23.0545408,9.458807 L14.4823984,18.5 L30.1911192,35 L28,37 L23.0545408,32 L18.195333,37 L0,18.5 L18.195333,0 L36.0014273,18.5 L30.1911192,24.6483396 L32.9085797,27.4399418 L41.6203395,18.5 L25.8616371,2.43040321 L28,0 L32.9085797,5.20234095 L37.9730366,0 Z M17.9818927,4.43392989 L4.64144645,18.5147247 L17.9818927,32.5955195 L21.0810871,29.6079919 L10.1321127,18.5 L21.0810871,7.28442361 L17.9818927,4.43392989 Z M37.7101843,4.43392989 L35.2883953,7.44356982 L46.1323481,18.5 L35.2883953,29.7451953 L37.7101843,32 L51.3914285,18.5147247 L37.7101843,4.43392989 Z M28,14.5941371 L24.4227574,18.5 L28,22.3996382 L31.7636086,18.5147247 L28,14.5941371 Z"
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="logo_text">ФЛП Егоров Д.В.</span>
                            </a>
                        </span>
                        <p class="text">
                            Надежный партнер в сфере логистики. Мы предоставляем полный комплекс услуг по доставке грузов.&nbsp;Мы используем современные технологии и инновации для обеспечения высокого качества наших услуг.</p>
                    </div>
                    <div class="footer_main-block footer_main-block--nav">
                        <ul class="list d-flex flex-column">
                            <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/about">О нас</a>
                            </li>
                            <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/calculator">Калькулятор тарифов</a>
                            </li>
                          
                             <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/transportation_bulk_cargo">Перевозки насыпных грузов</a>
                            </li>
                          <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/transportation_liquid_cargo">Перевозки наливных грузов</a>
                            </li>
                             <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/transportation_complete_cargo">Перевозки комплектных грузов</a>
                            </li>
                             <li class="list-item">
                                <i class="icon-caret_right icon"></i>
                                <a class="link" href="<?=URL?>/transportation_project_cargo">Проектные перевозки</a>
                            </li>
                           
                        </ul>
                    </div>

                   <div class="footer_main-block footer_main-block--subscribe">
                        <h5 class="title">  <a class="link" href="<?=URL?>/contacts">Наши контакты</a></h5>
                      <b>Телефон</b>
                            <a class="main_info link link--bold" href="tel:+380674105077">+38 (067) 410-50-77</a>
                            <br><b>Telegram</b>
                            <a class="main_info link link--bold" href="https://t.me/DmitriyLogist">@DmitriyLogist</a>
                    </div>
                </div>

                <ul class="footer_info d-md-flex flex-wrap">
                    <li class="footer_info-block">
                        <div class="main">
                            <span class="main_label">Телефон</span>
                            <a class="main_info link link--bold" href="tel:+380674105077">+38 (067) 410-50-77</a>
                        </div>
                    </li>
                    <li class="footer_info-block footer_info-block--highlight">
                        <div class="main">
                            <span class="main_label">Адрес</span>
                            <span class="main_info">08130 Киевская область, с. Чайки, ул. Авиаконструктора Антонова 1</span>
                        </div>
                    </li>
                    <li class="footer_info-block">
                        <div class="main">
                            <span class="main_label">Email</span>
                            <a class="main_info link" href="mailto:<?=EMAIL?>"><?=EMAIL?></a>
                        </div>
                    </li>
                </ul>

                <p class="footer_copyrights">ФЛП Егоров Д.В <span id="currentYear"></span></p>
            </div>
        </footer>
              <script src="<?=URL?>/js/common.min.js"></script>
        <script src="<?=URL?>/js/index.min.js"></script>
       
         <script src="<?=URL?>/js/service.min.js"></script>
         
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script>
$(document).ready(function(){
    // Маска для номера телефону
    $('input[name="phone"]').inputmask("+38 (099) 999-99-99");

    $('#forma').on('submit', function(event) {
        event.preventDefault();

        let isValid = true;
        let errorMessage = '';

        const name = $('input[name="name"]').val().trim();
        const phone = $('input[name="phone"]').val().trim();
        const email = $('input[name="email"]').val().trim();
        const tema = $('input[name="tema"]').val().trim();
        const msg = $('textarea[name="msg"]').val().trim();

        // Перевірка ФІО
        if (!name) {
            isValid = false;
            errorMessage += 'Поле "ФИО" не должно быть пустым.\n';
        }

        // Перевірка телефону
        const phonePattern = /^\+38\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/;
        if (!phone.match(phonePattern)) {
            isValid = false;
            errorMessage += 'Телефон должен быть в формате +38(099)999-99-99.\n';
        }

        // Перевірка електронної пошти
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailPattern)) {
            isValid = false;
            errorMessage += 'Электронная почта имеет неверный формат.\n';
        }

        // Перевірка теми
        if (!tema) {
            isValid = false;
            errorMessage += 'Поле "Тема" не должно быть пустым.\n';
        }

        // Перевірка повідомлення
        if (!msg) {
            isValid = false;
            errorMessage += 'Поле "Сообщение" не должно быть пустым.\n';
        }

        if (!isValid) {
            $('#formMessage').removeClass('success').addClass('error').text(errorMessage).slideDown();
        } else {
            // Відправка даних форми через AJAX
            $.ajax({
                url: 'https://logisticstoukraine.com.ua//form.php',
                method: 'POST',
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    tema: tema,
                    msg: msg
                },
                success: function(response) {
                    $('#formMessage').removeClass('error').addClass('success').text('Ваше сообщение было успешно отправлено!').slideDown();
                    $('#forma')[0].reset(); // Очистити форму після успішної відправки
                },
                error: function() {
                    $('#formMessage').removeClass('success').addClass('error').text('Произошла ошибка при отправке сообщения. Попытайтесь еще раз.').slideDown();
                }
            });
        }
    });
});
</script>
    </body>
</html>