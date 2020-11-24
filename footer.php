<script LANGUAGE="JavaScript">
    function HeureCheckEJS() {
        krucial = new Date;
        heure = krucial.getHours();
        if (heure < 10)
            heure0 = "0";
        else
            heure0 = "";
        if (heure >= 18) {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition');
            }, 1000)
            document.documentElement.setAttribute('data-theme', 'dark')
        } else {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition');
            }, 1000)
            document.documentElement.setAttribute('data-theme', 'light')
        }
    }
    window.onload = HeureCheckEJS;

    if (document.querySelector('.ClickMenu')) {
        document.querySelector('.ClickMenu').addEventListener('click', () => {
            let navChild = document.querySelectorAll('.nav-child');
            for (let i = 0; i < navChild.length; i++) {
                navChild[i].classList.toggle('d-none');
            }
            document.querySelector('.bg-sidebar').classList.toggle('bg-transparent')
            document.querySelector('.bg-sidebar').classList.toggle('border-0')
            document.querySelector('.drptoggle').classList.toggle('navAcces')
        })
        if (screen.width <= 786) {
            document.querySelector('.ClickMenu').clicked;
        }
    }
</script>
<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>


<script>
    $('.musicList').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.sliderPop').slick({
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '30px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.carousel-prev').click(function() {
        $(this).parent().find('.sliderPop').slick('slickPrev');
    });

    $('.carousel-next').click(function(e) {
        e.preventDefault();
        $(this).parent().find('.sliderPop').slick('slickNext');
    });
</script>
</body>

<!-- Mirrored from sixelastudios.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 17:16:06 GMT -->

</html>