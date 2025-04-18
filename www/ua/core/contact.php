<?php
  // CONTACTS SECTION
?>
<!-- contact section start -->
<link rel="stylesheet" href="<?=URL?>/css/index2.min.css" />

<section class="contact section">
    <div class="container d-xl-flex align-items-center justify-content-between">
        <div class="contact_header">
            <h2 class="contact_header-title">Скільки коштує перевезення?</h2>
            <p class="contact_header-text">Щоб отримати цінову пропозицію, напишіть нам або зв'яжіться з нами.</p>
            <div class="contact_header-wrapper">
                <h5 class="title">Телефонуйте для консультації</h5>
                <a class="link h3" href="tel:+380674105077">+38 (067) 410-50-77</a>
            </div>
        </div>
        <form id="forma" class="contact_form form">
            <div id="formMessage" class="message"></div>
            <div class="contact_form-row">
                <div class="column">
                    <label class="label" for="feedbackName">ПІБ</label>
                    <input class="field required" name="name" type="text" placeholder="Прізвище Ім`я по батькові" />
                </div>
                <div class="column">
                    <label class="label" for="feedbackTel">Телефон</label>
                    <input class="field required" name="phone" type="text" placeholder="Ваш телефон" />
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
                    <label class="label" for="feedbackMessage">Повідомлення</label>
                    <textarea class="field required" style="min-height: 145px;" name="msg" placeholder="Введіть повідомлення"></textarea>
                </div>
            </div>
            <button class="btn btn--regular" type="submit">Відправити</button>
        </form>
        
    </div>
</section>