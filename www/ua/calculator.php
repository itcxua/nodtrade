<?php
$title='Калькулятор тарифів| "ФОП Єгоров Д.В."';
$desc="ФОП Єгоров Д.В. Логістичний калькулятор ціни перевезень. Оберіть тип авто точку завантаження та вивантаження та дізнайтесь ціну перевезення";
$key="перевезення насипних вантажів, зерновози Mercedes, DAF, MAN, IVECO,Перевезення в Румунію,Перевезення в Болгарію,Перевезення в Туреччину,Перевезення в Прибалтику,Перевезення в Словаччину,Перевезення в Угорщину,Перевезення в Польщу, перевезення наливних вантажів, доставка харчових олій, нафтопродуктів, хімічних речовин, проектна логістика, дистрибуція товарів, повне завантаження вантажного автомобіля, FTL, оптимізація логістики, індивідуальний підхід, сучасна логістика, страхування вантажів, підтримка 24/7, ФОП Єгоров Д.В., перевезення вантажів Київська область" ;
$css_name="calculator";
require_once 'core/config.php';
require_once 'core/head.php';
?> 
<style> 
.textcenter {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<header class="page">
    <div class="page_overlay"></div>
    <div class="container">
        <div class="page_card d-flex flex-column">
            <h1 class="page_card-title">Калькулятор тарифів</h1>
            <ul class="page_card-breadcrumbs breadcrumbs">
                <li class="page_card-breadcrumbs_item item">
                    <a class="link" href="<?=URL?>/ua">Головна</a>
                </li>
                <li class="page_card-breadcrumbs_item item">
                    <span class="current">Калькулятор тарифів</span>
                </li>
            </ul>
        </div>
    </div>
</header>

<main class="section">
    <section class="calculator">
        <div class="container">
            <div class="calculator_header">
                <h2 class="textcenter calculator_header-title">Форма розрахунку тарифу</h2>
                <p class="textcenter calculator_header-text">Щоб розрахувати тариф, заповніть необхідні дані</p>
            </div>
           <form class="calculator_form form" id="calculatorForm">
    <div class="calculator_form-row" style="flex-wrap: initial;gap:20px;">
        <div class="column">
            <label class="label" for="truckloadCalculator">ТИП АВТОМОБІЛЯ</label>
            <select id="truckloadCalculator">
                <option value="Тент">Тент</option>
                <option value="Зерновоз">Зерновоз</option>
                <option value="Цистерна">Цистерна</option>
            </select>
        </div>
        <div class="column">
            <label class="label" for="cityLoading">МІСТО ЗАВАНТАЖЕННЯ:</label>
            <input class="field required" type="text" id="cityLoading" placeholder="Введіть місто завантаження" />
        </div> 
        <div class="column">
            <label class="label" for="cityUnloading">МІСТО ВИВАНТАЖЕННЯ:</label>
            <input class="field required" type="text" id="cityUnloading" placeholder="Введіть місто вивантаження" />
        </div> 
        <div class="column">
            <label class="label" for="resultCalculator">ПІДСУМОК:</label>
            <div id="resultCalculator" class="result-text">0 грн</div>
        </div>
    </div>
    <div class="textcenter">
        <button class="btn btn--regular" type="button" onclick="calculate()">Розрахувати</button>
    </div>
</form>
        </div>
    </section>
    <div class="container">
        <section class="banner">
            <div class="container">
                <span class="banner_bg">
                    <picture>
                        <source data-srcset="/img/beck3.webp" srcset="/img/beck3.webp" />
                        <img class="lazy" data-src="/img/beck3.webp" src="/beck3.webp" alt="media" />
                    </picture>
                    <span class="banner_bg-overlay"></span>
                </span>
                <div class="banner_content">
                    <h3 class="banner_content-title">Наші послуги</h3>
                    <p class="banner_content-text">
                        <div style="color:#fff;">Наша компанія надає широкий спектр послуг з перевезення вантажів, включаючи перевезення сипких, наливних, палетних вантажів.</div>
                    </p>
                    <a class="banner_content-btn btn btn--split" href="<?=URL?>/services/ua">
                        <span class="main">Послуги</span>
                        <span class="icon-caret_right icon"></span>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <br><br>
    <?php require_once 'core/contact.php'; ?>
</main>

<script>
let prices = {};

// Загрузка цен из файла prices.json
fetch('https://logisticstoukraine.com.ua/prices.json')
    .then(response => response.json())
    .then(data => {
        prices = data;
    })
    .catch(error => console.error('Помилка завантаження цін:', error));

function calculate() {
    const type = document.getElementById('truckloadCalculator').value;
    const cityLoading = document.getElementById('cityLoading').value;
    const cityUnloading = document.getElementById('cityUnloading').value;
    const pricePerKm = prices[type];
    const resultElement = document.getElementById('resultCalculator');

    if (pricePerKm !== undefined && cityLoading && cityUnloading) {
        const apiKey = '5b3ce3597851110001cf6248866c4ecd92da466bbb0beb3ca96042de';

        // Функция для получения координат города
        function getCoordinates(cityName) {
            return fetch(`https://api.openrouteservice.org/geocode/search?api_key=${apiKey}&text=${encodeURIComponent(cityName)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.features && data.features.length > 0) {
                        const coords = data.features[0].geometry.coordinates;
                        return {
                            longitude: coords[0],
                            latitude: coords[1]
                        };
                    } else {
                        throw new Error(`Не вдалося отримати координати для міста ${cityName}`);
                    }
                });
        }

        // Получение координат для обоих городов
        Promise.all([getCoordinates(cityLoading), getCoordinates(cityUnloading)])
            .then(coordinates => {
                const [loadingCoords, unloadingCoords] = coordinates;
                const body = {
                    locations: [
                        [loadingCoords.longitude, loadingCoords.latitude],
                        [unloadingCoords.longitude, unloadingCoords.latitude]
                    ],
                    metrics: ['distance']
                };

                // Запрос на расчет расстояния
                return fetch(`https://api.openrouteservice.org/v2/matrix/driving-car`, {
                    method: 'POST',
                    headers: {
                        'Authorization': apiKey,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(body)
                });
            })
            .then(response => response.json())
            .then(data => {
                const distance = data.distances[0][1] / 1000; // Конвертация в километры
                const total = pricePerKm * distance;
                resultElement.textContent = total.toFixed(2) + ' грн';
            })
            .catch(error => {
                console.error('Помилка розрахунку відстані:', error);
                resultElement.textContent = 'Помилка розрахунку відстані';
            });
    } else {
        resultElement.textContent = 'Вкажіть коректні данні';
    }
}
</script>


<?php require_once 'core/foot.php'; ?>