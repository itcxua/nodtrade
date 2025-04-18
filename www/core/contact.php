<?php
  // CONTACTS SECTION
?>
<!-- contact section start -->
<link rel="stylesheet" href="<?=URL?>/css/index2.min.css" />

<section class="contact section">
    <div class="container d-xl-flex align-items-center justify-content-between">
        <div class="contact_header">
            <h2 class="contact_header-title">Сколько стоит перевозка?</h2>
            <p class="contact_header-text">Чтобы получить ценовое предложение напишите нам или свяжитесь с нами.</p>
            <div class="contact_header-wrapper">
                <h5 class="title">Звоните для консультации</h5>
                <a class="link h3" href="tel:+380674105077">+38 (067) 410-50-77</a>
            </div>
        </div>
        <form id="forma" class="contact_form form">
            <div id="formMessage" class="message"></div>
            <div class="contact_form-row">
                <div class="column">
                    <label class="label" for="feedbackName">ФИО</label>
                    <input class="field required" name="name" type="text" placeholder="Ваше ФИО" />
                </div>
                <div class="column">
                    <label class="label" for="feedbackTel">Телефон</label>
                    <input class="field required" name="phone" type="text" placeholder="Ваш номер" />
                </div>
            </div>
            <div class="contact_form-row">
                <div class="column">
                    <label class="label" for="feedbackEmail">Email</label>
                    <input class="field required" type="text" name="email" placeholder="Email" />
                </div>
                <div class="column">
                    <label class="label" for="feedbackSubject">Тема</label>
                    <input class="field required" name="tema" type="text" placeholder="Тема" />
                </div>
            </div>
            <div class="contact_form-row">
                <div class="column">
                    <label class="label" for="feedbackMessage">Сообщение</label>
                    <textarea class="field required" style="min-height: 145px;" name="msg" placeholder="Введите сообщение"></textarea>
                </div>
            </div>
            <button class="btn btn--regular" type="submit">Отправить</button>
        </form>
        
    </div>
</section>