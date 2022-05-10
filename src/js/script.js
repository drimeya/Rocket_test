
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
    const ajaxSend = async (formData) => {
        const fetchResp = await fetch('mailer/smart.php', {
            method: 'POST',
            body: formData
        });
        if (!fetchResp.ok) {
            throw new Error(`Ошибка по адресу, статус ошибки ${fetchResp.status}`);
        }
        return await fetchResp.text();
    };

    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);

            ajaxSend(formData)
                .then((response) => {
                    console.log(response);
                    form.reset(); // очищаем поля формы
                    closeModal(popup, 'fadeOut', 'popup_active');
                })
                .catch((err) => console.error(err));
        });
    });
});

