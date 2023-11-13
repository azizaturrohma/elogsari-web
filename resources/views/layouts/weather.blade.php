<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/weather.css">
</head>

<body>
    <div class="weather-container">

        <!-- Icon Weather -->
        @if(isset($weatherData['weather'][0]['icon']))
        <div class="weather-icon">
            <img src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="Weather Icon">
        </div>
        @endif

        <!-- Info Weather -->
        <div class="weather-info">
            @if(isset($weatherData['weather'][0]))
            <p>Cuaca : {{ $weatherData['weather'][0]['main'] }}</p>
            @else
            <p>Weather information not available</p>
            @endif

            @if(isset($weatherData['main']))
            <?php
            $temperatureCelsius = $weatherData['main']['temp'] - 273.15;
            $temperatureCelsius = number_format($temperatureCelsius, 2);
            ?>

            <p>Suhu : {{ $temperatureCelsius }} &#8451;</p>
            <p>Kelembaban : {{ $weatherData['main']['humidity'] }}%</p>
            @else
            <p>Temperature and humidity information not available</p>
            @endif
        </div>

        <!-- Info lokasi -->
        <div class="location-info">
            <div class="location">
                <a href="#" id="map-pin"><i data-feather="map-pin"></i></a>
                <p>Gombengsari, Kalipuro, Banyuwangi</p>
            </div>
            <div class="time">
                <a href="#" id="calendar"><i data-feather="calendar"></i></a>
                @if(isset($weatherData['dt']))
                <?php
                $dateTime = \Carbon\Carbon::createFromTimestamp($weatherData['dt']);
                ?>
                <p>{{ $dateTime->format('l, d F Y') }}</p>
                @else
                <p>Date and time information not available</p>
                @endif
            </div>
            <div class="time">
                <a href="#" id="clock"><i data-feather="clock"></i></a>
                @if(isset($weatherData['dt']))
                <?php
                $time = $dateTime->format('H:i:s');
                ?>
                <p>{{ $time }}</p>
                @else
                <p>Date and time information not available</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>
</body>

</html>