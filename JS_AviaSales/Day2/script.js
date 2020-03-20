// получаем элементы со страницы
const formSearch = document.querySelector('.form-search'),
    inputCitiesFrom = formSearch.querySelector('.input__cities-from'), // можно писать document.querySelector но будем писать formSearch
    dropdownCitiesFrom = formSearch.querySelector('.dropdown__cities-from'),
    inputCitiesTo = formSearch.querySelector('.input__cities-to'),
    dropdownCitiesTo = formSearch.querySelector('.dropdown__cities-to'),
    inputDateDepart = formSearch.querySelector('.input__date-depart');

// данные
const citiesApi = 'http://api.travelpayouts.com/data/ru/cities.json',
    //citiesApi = 'dataBase/cities.json',
    proxy = 'https://cors-anywhere.herokuapp.com/',
    API_KEY = 'cb73d6b6791cd8a7bee9d7d27cbde528',
    calendar = 'http://min-prices.aviasales.ru/calendar_preload';

let city = [];

// функции
const getData = (url, callback) => {
    const request = new XMLHttpRequest();

    request.open('GET', url);

    request.addEventListener('readystatechange', () => {
        if (request.readyState !== 4) return;

        if (request.status === 200) {
            callback(request.response);
        } else {
            console.error(request.status);
        };
    });

    request.send();
};

const showCity = (input, list) => {
    list.textContent = '';

    if (input.value !== '') {
        const filterCity = city.filter((item) => {
            //if (item.name) {                // можно item.name !== null
                const fixItem = item.name.toLowerCase();
                return fixItem.includes(input.value.toLowerCase());
            //};  СДЕЛАЛИ ПРИ ВЫЗОВЕ ФУНКЦИИ getData см. ниже
        });

        filterCity.forEach((item) => {
            const li = document.createElement('li');
            li.classList.add('dropdown__city');
            li.textContent = item.name;
            //console.log(item); // для второго ДЗ 
            list.append(li);
        });
    }
};

const selectCity = (event, input, list) => {
    const target = event.target;
    if (target.tagName.toLowerCase() === 'li') {
        input.value = target.textContent;
        list.textContent = '';
    };
};

// обработчики событий
inputCitiesFrom.addEventListener('input', () => {
    showCity(inputCitiesFrom, dropdownCitiesFrom);
});

inputCitiesTo.addEventListener('input', () => {
    showCity(inputCitiesTo, dropdownCitiesTo);
});

dropdownCitiesFrom.addEventListener('click', (event) => {
    selectCity(event, inputCitiesFrom, dropdownCitiesFrom)
});

dropdownCitiesTo.addEventListener('click', (event) => {
    selectCity(event, inputCitiesTo, dropdownCitiesTo)
});

// Вызов функций
getData(proxy + citiesApi, (data) => {
//getData(citiesApi, (data) => {
    city = JSON.parse(data).filter((item) => {
        return item.name;
    });    
});
// вместо строк 81-86 можно записать:
// getData(proxy + citiesApi, data => city = JSON.parse(data).filter(item => item.name));

// домашнее задание
getData(proxy + calendar + '?origin=SVX&destination=KGD&depart_date=2020-05-25&one_way=true&token=' + API_KEY, (data) => {
    console.log(JSON.parse(data).best_prices.filter((item) => {
        return item.depart_date === '2020-05-25';
    }));
});
    