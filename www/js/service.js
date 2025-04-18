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

import {initSwiperSlider} from "./modules/slider";

document.addEventListener('DOMContentLoaded', () => {
    initSwiperSlider('.content_about-media_main', {
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        thumbs:  document.querySelector('.content_about-media_thumbs').swiper,
        speed: 1200,
        loop: false,
    })


    initSwiperSlider('.content_about-media_thumbs', {
        slidesPerView: 2,
        spaceBetween: 10,
        slideToClickedSlide: true,
        watchSlidesProgress: true,
        allowTouchMove: false,
        loop: false,
        speed: 1200,
        breakpoints: {
            767.98: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1199.98: {
                spaceBetween: 20,
                slidesPerView: 4,
            }
        }
    })

    const thumbsSliderInstance = document.querySelector('.content_about-media_thumbs').swiper;
    const mainSliderInstance = document.querySelector('.content_about-media_main').swiper;

    thumbsSliderInstance.el.addEventListener('click', () => {
        mainSliderInstance.slideTo(thumbsSliderInstance.clickedIndex, 1200)
    })
})