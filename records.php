<?php include('header.php') ?>
<div class="switch">
    
</div>
<script>
    if (AMp == 12 && getAmVar == 'am') {
        console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
        document.querySelector('.switch').innerHTML = `<?php include('recordNight.php') ?>`
    } else if (AMp == 12 && getAmVar == 'pm') {
        console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
        document.querySelector('.switch').innerHTML = `<?php include('recordDay.php') ?>`
    } else if ((AMp > 6 && getAmVar == 'am') || (AMp <= 4 && getAmVar == 'pm')) {
        console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
        document.querySelector('.switch').innerHTML = `<?php include('recordDay.php') ?>`
    } else {
        console.log('hours =>', AMp, 'Am/Pm =>', getAmVar)
        document.querySelector('.switch').innerHTML = `<?php include('recordNight.php') ?>`
    }
</script>
<?php include('footer.php') ?>