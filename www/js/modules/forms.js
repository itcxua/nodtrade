/**
 * Rolso
 * Modern cargo, transport and logistics HTML Template. Exclusively built for transport, logistics, delivery, moving, and cargo websites.
 * Exclusively on https://1.envato.market/rolso-html
 *
 * @encoding        UTF-8
 * @version         1.0.0
 * @copyright       (C) 2018 - 2022 Merkulove ( https://merkulov.design/ ). All rights reserved.
 * @license         Envato License https://1.envato.market/KYbje
 * @contributors    Lilith Lamber (winter.rituel@gmail.com)
 * @support         help@merkulov.design
 **/
"use strict";

const emailRegExp = /^\w+([-]?\w+)*@\w+([-]?\w+)*(\.\w{2,3})+$/;

import {initModal} from "./modal";

const defaults = {
    toast: true,
    position: 'top-end',
    timer: 5000,
    customClass: {
        popup: 'alert_popup',
        title: 'alert_popup-title',
        htmlContainer: 'alert_popup-content',
        closeButton: 'alert_popup-close',
        container: 'alert_popup-container'
    }
}

async function sendForm(form) {
    let handler = form.getAttribute('action');
    const response = await fetch(
        handler,
        {
            method: 'POST',
            body: new FormData(form)
        }
    );
    if(response.ok) {
        form.reset();
    }
}

export function validateForm(target, fieldSelector = '.field') {
    const form = document.querySelector(target);
    const inputsArr = document.querySelectorAll(`${target} ${fieldSelector}`);
    const valid = elem => !elem.classList.contains('error');

    if (form) {
        let notificationText = '';

        form.addEventListener('submit', e => {
            e.preventDefault();
            for (let i = 0; i < inputsArr.length; i++) {
                const el = inputsArr[i];
                const value = el.value;
                if (el.classList.contains('required') && value === '') {
                    el.classList.add('error');
                } else if (el.dataset.type === 'email' && !emailRegExp.test(value)) {
                    el.classList.add('error');
                } else if (el.dataset.type === 'tel' && isNaN(+value)) {
                    el.classList.add('error');
                }

                el.addEventListener('input', () => {
                    el.classList.remove('error');
                });
            }

            if (Array.from(inputsArr).every(valid)) {
                inputsArr.forEach(el => {
                    el.classList.remove('error');
                })
                switch (form.dataset.type) {
                     case "order": {
                        notificationText = 'Наш менеджер свяжется с вами в ближайшее время..';
                        break
                    }
                    case "contacts": {
                        notificationText = 'Ваше сообщение отправлено. Мы ответим вам как можно скорее.';
                        break
                    }
                    case "reply": {
                        notificationText = 'Ваш комментарий ожидает модерации.';
                        break
                    }
                    case "search": {
                        notificationText = 'Ничего не найдено.';
                        break
                    }
                    case "subscription": {
                        notificationText = 'Подтверждение подписки отправлено на ваш адрес электронной почты.';
                        break
                    }
                }
                sendForm(form);
                initModal({...defaults, html: `<p class="main">${notificationText}</p>`});
            }
        })
    }
}

export function validate() {
    validateForm('[data-type="contacts"]');
    validateForm('[data-type="order"]');
    validateForm('[data-type="reply"]');
    validateForm('[data-type="subscription"]');
    validateForm('[data-type="search"]');
}