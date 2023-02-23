window.addEventListener('DOMContentLoaded', function () {
    const iconSearch = document.getElementById('s');
    const iconClose = document.querySelector('span.close');
    const boxSearch = document.querySelector('.search');
    const listLiElement = document.querySelectorAll('.menu ul li.sub-mn');
    const subUlElement = document.querySelector('.menu ul li > ul');
    const iconPluss = document.querySelectorAll('.name-step-item i');

    iconSearch.addEventListener('click', function (e) {
        if (!boxSearch.classList.contains('.show-s') && e.target.matches('#s')) {
            boxSearch.classList.add('show-s');
            e.target.style.display = 'none';
            iconClose.style.display = 'flex';
            iconClose.addEventListener('click', function (e) {
                if (e.target.matches('.close')) {
                    boxSearch.classList.remove('show-s');
                    e.target.style.display = 'none';
                    iconSearch.style.display = 'flex';
                }
            });
        }
    });

    [...listLiElement].forEach((item) =>
        item.addEventListener('mouseenter', function (e) {
            if (!e.target.classList.contains('.active')) {
                subUlElement.classList.add('active');
            }
        }),
    );
    subUlElement.addEventListener('mouseleave', function (e) {
        e.target.classList.remove('active');
    });

    // CLICK ICON PLUS
    iconPluss.forEach((item) =>
        item.addEventListener('click', function (e) {
            const contentStepItem = e.target.parentElement.nextElementSibling;
            const heightContentItem = contentStepItem.scrollHeight;
            contentStepItem.style.height = `${heightContentItem}px`;
            contentStepItem.classList.toggle('show');
            if (!contentStepItem.classList.contains('.show')) {
                contentStepItem.style.height = `0px`;
            }
        }),
    );
});
