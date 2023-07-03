
// Technology We Use Slider
const techWeUse = document.querySelector('.techweuse');
if (techWeUse) {
    const slider = tns({
        container: '.techweuse',
        items: 5,
        autoWidth: false,
        autoplayButtonOutput: false,
        autoplayTimeout: 1000,
        speed: 400,
        loop: true,
        controls: false,
        navPosition: 'bottom',
        autoplay: true,
        mouseDrag: true,
        edgePadding: 5,
        nav: true,
        responsive: {
            "0": {
                "items": 1
            },
            "367": {
                "items": 2,
                "gutter": 40,
            },
            "539": {
                "items": 3,
                "gutter": 50,
            },
            "550": {
                "items": 3,
                "gutter": 45,
            },
            "800": {
                "items": 4,
                "gutter": 20,
            },
            "991": {
                "items": 5,
                "gutter": 30,
            },
            "1199": {
                "items": 6,
                "gutter": 28,
            },

        },
    });
}

// Technology We Use Slider End

// Technology We Use Slider
const ourClint = document.querySelector('.oc-slider');
if (ourClint) {
    const slider = tns({
        container: '.oc-slider',
        items: 2,
        autoWidth: false,
        autoplayButtonOutput: false,
        autoplayTimeout: 2000,
        speed: 400,
        gutter: 20,
        loop: true,
        controls: false,
        navPosition: 'bottom',
        autoplay: true,
        mouseDrag: true,
        edgePadding: 5,
        nav: true,
        responsive: {
            "0":{
                "items": 1
            },
            "350": {
                "items": 3
            },
            "650": {
                "items": 3
            },
            "850": {
                "items": 4
            },
            "1000": {
                "items": 4
            },

        },
    });
}

// Technology We Use Slider End


// What client say Slider
const clientSay = document.querySelector('.wocs-slider');
if (clientSay) {
    const slider = tns({
        container: '.wocs-slider',
        items: 3,
        autoWidth: false,
        autoplayButtonOutput: false,
        autoplayTimeout: 4000,
        speed: 400,
        gutter: 0,
        arrowKeys: true,
        loop: true,
        controls: false,
        navPosition: 'bottom',
        autoplay: false,
        mouseDrag: true,
        edgePadding: 0,
        nav: true,
        responsive: {
            "250": {
                "items": 1
            },
            "650": {
                "items": 2
            },
            "850": {
                "items": 3
            },
            "1000": {
                "items": 3
            },

        },
    });

    // Get previous and next arrow elements
    var prevButton = document.querySelector('.slider__prev');
    var nextButton = document.querySelector('.slider__next');

    // Add event listeners for previous and next buttons
    prevButton.addEventListener('click', function () {
        slider.goTo('prev');
    });

    nextButton.addEventListener('click', function () {
        slider.goTo('next');
    });
}










// What client say Slider End


