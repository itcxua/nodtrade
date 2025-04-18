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

import initFilter from "./modules/filter";
import {initGallery} from "./modules/gallery";

document.addEventListener('DOMContentLoaded', () => {
    initFilter('.projects_gallery', '.projects_filters-filter', {
        itemSelector: '.projects_gallery-item'
    });
    initGallery('.projects_gallery-item');
})