<!DOCTYPE html>
<html data-theme="dark">

<!-- Mirrored from sixelastudios.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 17:15:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div id="headThis">

    </div>
    <script>
        function getAm(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var strTime = ampm;
            return strTime;
        }

        function formatAMPM(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var strTime = hours;
            return strTime;
        }
        let AMp = parseInt(formatAMPM(new Date));
        let getAmVar = getAm(new Date);
        if (AMp == 12 && getAmVar == 'am') {
            console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
            document.querySelector('#headThis').innerHTML = `<link rel="stylesheet" href="assets/css/sixela.css" />`
        } else if (AMp == 12 && getAmVar == 'pm') {
            console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
            document.querySelector('#headThis').innerHTML = `<link rel="stylesheet" href="assets/css/sixela_dark.css" />`
        } else if ((AMp > 6 && getAmVar == 'am') || (AMp <= 4 && getAmVar == 'pm')) {
            console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
            document.querySelector('#headThis').innerHTML = `<link rel="stylesheet" href="assets/css/sixela_dark.css" />`
        } else {
            console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
            document.querySelector('#headThis').innerHTML = `<link rel="stylesheet" href="assets/css/sixela.css" />`
        }
    </script>
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Sixela Studio</title>
</head>

<body>