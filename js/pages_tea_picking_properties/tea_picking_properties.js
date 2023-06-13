$(document).ready(() => {

    const rightMenu = document.getElementById('right-menu');
    const mainContainer = document.getElementById('main-container');
    const rightMenuItems = document.getElementsByClassName('right-menu_item');

    function getMarginTop_plus_Bottom(i,massiveItems) {
        let massiveItemStyles = window.getComputedStyle(massiveItems[i]); //gasim toate styles al class-ului
        let strWithPxMarginTop = massiveItemStyles.marginTop;  //000px
        let strWithPxMarginBottom = massiveItemStyles.marginBottom;  //000px
        let resultValueMarginTop = parseInt(strWithPxMarginTop.replace(/[^0-9]/g,''));  //gasim doar cifre
        let resultValueMarginBottom = parseInt(strWithPxMarginBottom.replace(/[^0-9]/g,''));  //gasim doar cifre
        //parseInt - convert from string to INT

        return resultValueMarginTop + resultValueMarginBottom;
    }

    let rightMenuHeight = 0;
    for (let i = 0; i < rightMenuItems.length; i++) {
        rightMenuHeight += rightMenuItems[i].offsetHeight + getMarginTop_plus_Bottom(i,rightMenuItems);
    }

    let mainContainerTop = mainContainer.offsetTop;       //height de la block pana sus
    let mainContainerHeight = mainContainer.offsetHeight; //height block
    let mainContainerBottom = (mainContainerHeight + mainContainerTop) - rightMenuHeight; //height block

    //Daca fereastra web se afla intre main-container atunci right-menu e fixed
    function finalRightMenuScroll(scrollTop)
    {
        if (scrollTop >= mainContainerBottom) {
            rightMenu.classList.remove('fixed');
            rightMenu.classList.add('bottom');
        } else {
            rightMenu.classList.remove('bottom');
            rightMenuFixed(scrollTop);
        }
    }
    function rightMenuFixed(scrollTop)
    {
        if (scrollTop >= mainContainerTop) {
            rightMenu.classList.add('fixed');
        } else {
            rightMenu.classList.remove('fixed');
        }
    }

    let scrollTopPx = window.scrollY;

    // finalRightMenuScroll(scrollTopPx);

    // window.addEventListener('scroll',() => {
    //     let scrollTopPx = window.scrollY;
    //     finalRightMenuScroll(scrollTopPx);  //menu din partea dreapta
    // });

    const teaContainers = [
        'white',
        'black',
        'green',
        'mixes',
        'oolong'
    ];
    const rightMenuItem = $('.right-menu_item');
    const rightMenuJQuery = $('#right-menu');

    $('#right-menu, #right-menu-container').on('click', (e) => {
        if (e.target.id === 'right-menu' && rightMenuJQuery.hasClass('fixed')) {
            rightMenuJQuery.removeClass('fixed');
        }
    })

    rightMenuItem.on('click',(e) => {
        if (rightMenuJQuery.hasClass('fixed'))
            setTimeout(rightMenuJQuery.removeClass('fixed'),5000);

        for (let i = 0; i < rightMenuItem.length; i++) {
            let forTitleContainer = $('#' + teaContainers[i] + '-container');
            forTitleContainer.addClass('none');

            if (e.target === $(rightMenuItem[i])[0]) {
                $(rightMenuItem[i]).addClass('font');
                forTitleContainer.removeClass('none');
            } else {
                $(rightMenuItem[i]).removeClass('font');
            }
        }
    });

    rightMenuItem.on('click',() => {
        mainContainerHeight = mainContainer.offsetHeight;
        mainContainerBottom = (mainContainerHeight + mainContainerTop) - rightMenuHeight;
        rightMenu.removeClass('bottom');
    });

    $('#right-menu-container #x-icon').on('click', () => {
        if (rightMenuJQuery.hasClass('fixed'))
            rightMenuJQuery.removeClass('fixed');
    })

    $('#fortitle-container .tea-icon').on('click', () => {
        if (!rightMenuJQuery.hasClass('fixed')) {
            rightMenuJQuery.addClass('fixed');
        }
    })

});