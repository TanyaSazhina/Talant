
function testWebP(callback) {

    var webP = new Image();
    webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

    if (support == true) {
        document.querySelector('body').classList.add('webp');
    } else {
        document.querySelector('body').classList.add('no-webp');
    }
});
$('document').ready(function () {
    $('.preview__link,.close,.close-area, .plans__item-btn, .success__back').click(function (event) {
        $('.sign-up').toggleClass('active');
        $('.buy').toggleClass('active');
        $('body').toggleClass('lock');
        $('.success').toggleClass('active');
    });
    $('#cash').click(function () {
        $('.card__date-input').each(function () {
            if ($('#card').checked = true) {
                console.log(32);
                // Если поле не пустое удаляем класс-указание
                $(this).prop('required', true);
                $('.card__content').css('display', 'none');
            }
        });
    });
    $('#card').click(function () {
        $('.card__date-input').each(function () {
            if ($('#cash').checked = true) {
                console.log(33);
                // Если поле пустое добавляем класс-указание
                $(this).prop('required', false);
                $('.card__content').css('display', 'block');
            }
        });
    });
});
let cash = document.getElementById('cash');
let card = document.getElementById('card');
let methodCard = document.getElementsByClassName('method__card');
function check() {
    if (cash.checked = true) {
        methodCard.cssText = `
            display: none;
            `
    }
}

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: false,
    focusOnSelect: true,
});

const anchors = document.querySelectorAll('.advantages__item a[href*="#"] ,.footer__link a[href*="#"]')
for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()

        const blockID = anchor.getAttribute('href').substr(1)

        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}
window.onload = function () {
    crear_select();
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};


var li = new Array();
function crear_select() {
    var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
    var select_ = '';
    for (var e = 0; e < div_cont_select.length; e++) {
        div_cont_select[e].setAttribute('data-indx-select', e);
        div_cont_select[e].setAttribute('data-selec-open', 'false');
        var ul_cont = document.querySelectorAll("[data-indx-select='" + e + "'] > .cont_list_select_mate > ul");
        select_ = document.querySelectorAll("[data-indx-select='" + e + "'] >select")[0];
        if (isMobileDevice()) {
            select_.addEventListener('change', function () {
                _select_option(select_.selectedIndex, e);
            });
        }
        var select_optiones = select_.options;
        document.querySelectorAll("[data-indx-select='" + e + "']  > .selecionado_opcion ")[0].setAttribute('data-n-select', e);
        document.querySelectorAll("[data-indx-select='" + e + "']  > .icon_select_mate ")[0].setAttribute('data-n-select', e);
        for (var i = 0; i < select_optiones.length; i++) {
            li[i] = document.createElement('li');
            if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML) {
                li[i].className = 'active';
                document.querySelector("[data-indx-select='" + e + "']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
            };
            li[i].setAttribute('data-index', i);
            li[i].setAttribute('data-selec-index', e);
            // funcion click al selecionar 
            li[i].addEventListener('click', function () { _select_option(this.getAttribute('data-index'), this.getAttribute('data-selec-index')); });

            li[i].innerHTML = select_optiones[i].innerHTML;
            ul_cont[0].appendChild(li[i]);

        }; // Fin For select_optiones
    }; // fin for divs_cont_select
} // Fin Function 



var cont_slc = 0;
function open_select(idx) {
    var idx1 = idx.getAttribute('data-n-select');
    var ul_cont_li = document.querySelectorAll("[data-indx-select='" + idx1 + "'] .cont_select_int > li");
    var hg = 0;
    var slect_open = document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].getAttribute('data-selec-open');
    var slect_element_open = document.querySelectorAll("[data-indx-select='" + idx1 + "'] select")[0];
    if (isMobileDevice()) {
        if (window.document.createEvent) { // All
            var evt = window.document.createEvent("MouseEvents");
            evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            slect_element_open.dispatchEvent(evt);
        } else if (slect_element_open.fireEvent) { // IE
            slect_element_open.fireEvent("onmousedown");
        } else {
            slect_element_open.click();
        }
    } else {


        for (var i = 0; i < ul_cont_li.length; i++) {
            hg += ul_cont_li[i].offsetHeight;
        };
        if (slect_open == 'false') {
            document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open', 'true');
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style.height = hg + "px";
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.cssText = `
            transform: translate(0, -10px);
            transform: rotate(180deg);
        `;
        } else {
            document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open', 'false');
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.cssText = `
            transform: translate(0, 10px);
            transform: rotate(0deg);
        `;
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style.height = "0px";
        }
    }

} // fin function open_select

function salir_select(indx) {
    var select_ = document.querySelectorAll("[data-indx-select='" + indx + "'] > select")[0];
    document.querySelectorAll("[data-indx-select='" + indx + "'] > .cont_list_select_mate > ul")[0].style.height = "0px";
    document.querySelector("[data-indx-select='" + indx + "'] > .icon_select_mate").style.transform = 'rotate(0deg)';
    document.querySelectorAll("[data-indx-select='" + indx + "']")[0].setAttribute('data-selec-open', 'false');
}


function _select_option(indx, selc) {
    if (isMobileDevice()) {
        selc = selc - 1;
    }
    var select_ = document.querySelectorAll("[data-indx-select='" + selc + "'] > select")[0];

    var li_s = document.querySelectorAll("[data-indx-select='" + selc + "'] .cont_select_int > li");
    var p_act = document.querySelectorAll("[data-indx-select='" + selc + "'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
    var select_optiones = document.querySelectorAll("[data-indx-select='" + selc + "'] > select > option");
    for (var i = 0; i < li_s.length; i++) {
        if (li_s[i].className == 'active') {
            li_s[i].className = '';
        };
        li_s[indx].className = 'active';

    };
    select_optiones[indx].selected = true;
    select_.selectedIndex = indx;
    select_.onchange();
    salir_select(selc);
}

$('#sign-up__form').validate({
    focusCleanup: true,
    focusInvalid: false,

    rules: {
        name: {
            required: true
        },

        tel: {
            required: true,
        },

        email: {
            required: true,
            email: true
        },

        datetime: {
            required: true,
        },
    },

    messages: {
        name: {
            required: 'Введите имя*'
        },

        tel: {
            required: 'Введите номер телефона*',
        },

        email: {
            required: 'Введите почту*',
            email: 'Введите почту*',
        },

        datetime: {
            required: 'Введите дату и время*',
        }
    }
})
$('#buy__form').validate({
    focusCleanup: true,
    focusInvalid: false,

    rules: {
        name: {
            required: true
        },

        tel: {
            required: true,
        },

        email: {
            required: true,
            email: true
        },

        cardNumber: {
            required: true
        },

        cardDate: {
            required: true,
        },

        password: {
            required: true,
        }
    },

    messages: {
        name: {
            required: 'Введите имя*'
        },

        tel: {
            required: 'Введите номер телефона*',
        },

        email: {
            required: 'Введите почту*',
            email: 'Введите почту*',
        },
    }
})
$('#btn').click(function () {
    if ($('#card').is(':checked')) {
        $('.card__date-input').prop('required', true);
    }
})
