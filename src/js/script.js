
window.addEventListener('DOMContentLoaded', function() {
    //меню на мобильной версии
    const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu');

    function menuToggle() {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    }

    hamburger.addEventListener('click', () => {
        menuToggle();
    });
    //всплывающее окно
    const popupClose = document.querySelector('.popup_btn'),
        popup = document.querySelector('.popup'),
        popupOpen = document.querySelectorAll('.openModal');

    function closeModal(modal, animationClass, activeClass) {
        modal.classList.add(animationClass);
                document.body.classList.remove('overflow-hidden');
                setTimeout(() => {
                    modal.classList.remove(activeClass);
                    modal.classList.remove(animationClass);
                }, 300);
    }

    function openModal(modal, animationClass, activeClass) {
        document.body.classList.add('overflow-hidden');
                modal.classList.add(activeClass);
                modal.classList.add(animationClass);
                menuToggle();
                setTimeout(() => {
                    popup.classList.remove(animationClass);
                }, 300);
    }

    function modal(modal, button, animationClass, activeClass) {
        button.addEventListener('click', () => {
            if (modal.classList.contains(activeClass)=== false) {
                openModal(modal, animationClass, activeClass);
            } else {
                closeModal(modal, animationClass, activeClass);
            }
        });
    }

    modal(popup, popupClose, 'fadeOut', 'popup_active');
    popupOpen.forEach((item)=> {
        modal(popup, item, 'fadeIn', 'popup_active');
    });

    //отправка формы
    const ajaxSend = async (url ,data) => {
        const fetchResp = await fetch(url, {
            method: 'POST',
            body: data
        });
        if (!fetchResp.ok) {
            throw new Error(`Ошибка по адресу, статус ошибки ${fetchResp.status}`);
        }
        return await fetchResp.text();
    };

    const form = document.querySelector('.popup_form');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        ajaxSend('mailer/smart.php', formData)
            .then(() => {
                form.reset();
                closeModal(popup, 'fadeOut', 'popup_active');
            })
            .catch((err) => console.error(err));
    });

    //переключение слайдов
    const left = document.querySelector('#left'),
        carouselWrapper = document.querySelector('.carousel .container'),
        index = document.querySelector('.carousel__slide_num span'),
        right = document.querySelector('#right');
    let id = 1;

    function changeSlide(arrow) {
        arrow.addEventListener('click', () => {
            if (arrow === left) {
                id = id - 1; 
                if (id === 0 ) {
                    id = 4;
                }
            } else if (arrow === right) {
                id = id + 1; 
                if (id === 5 ) {
                    id = 1;
                }
            }
            const formData = new FormData();
            formData.append('id', id);
            document.querySelector('.carousel__text-content').classList.add('fadeOut');
            ajaxSend('php/carousel.php', formData)
            .then((res)=>{
                setTimeout(()=>{
                    carouselWrapper.innerHTML = res;
                    document.querySelector('.carousel__text-content').classList.add('fadeIn');
                }, 300);
                index.textContent = id;
            })
            .catch((err) => console.error(err));
        });
    }
    changeSlide(left);
    changeSlide(right);
});

