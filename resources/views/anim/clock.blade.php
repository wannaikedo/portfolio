<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/anim/clock.css') }}" rel="stylesheet" />
    <title>Analog clock</title>
    <style>
        
    </style>
</head>
<body>
    <div class="clock">
        <div class="hour">
            <div class="hr" id="hr"></div>
        </div>
        <div class="min">
            <div class="mn" id="mn"></div>
        </div>
        <div class="sec">
            <div class="sc" id="sc"></div>
        </div>
    </div>
    <script type="text/javascript">
        const deg = 6;
        const hr = document.querySelector('#hr');
        const mn = document.querySelector('#mn');
        const sc = document.querySelector('#sc');
        setInterval(() => {
            let day = new Date();
            let hh = day.getHours() * 30;
            let mm = day.getMinutes() * deg;
            let ss = day.getSeconds() * deg;
            hr.style.transform = `rotateZ(${hh+(mm/12)}deg)`;
            mn.style.transform = `rotateZ(${mm}deg)`;
            sc.style.transform = `rotateZ(${ss}deg)`;
        });
    </script>
</body>
</html>