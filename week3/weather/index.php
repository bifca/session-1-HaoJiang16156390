<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="text" style="text-align: center;">
    <h2>Weather Forecast</h2></div>
    <form action="" method="post" onsubmit="return false">
        <div class="form-group" >
            <label for="sel1"></label>
            <select class="form-control" id="sel1" name="city">
                <option value="">Please select a city</option>
                <option value="1791247">Wuhan</option>
                <option value="1796231">Shanghai</option>
                <option value="2038349">Beijing</option>
                <option value="7843642">Tokyo</option>
                <option value="4119617">London, England</option>
            </select>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>City ID</th>
                    <th>City Name</th>
                    <th>Country Code</th>
                    <th>Time Zone</th>
                    <th>Sunrise</th>
                    <th>Sunset</th>
                </tr>
                </thead>
                <tbody>
                <tr id="show1">

                </tr>
                </tbody>
            </table>

            <table class="table">
                <thead>
                <tr>

                    <th>Temperature</th>  
                    <th>Minimum temperature</th>
                    <th>Maximum temperature</th> 
                    <th>Humidity</th> 
                    <th>Dark clouds</th> 
                    <th>Wind speed</th> 
                    <th>Wind direction</th> 
                    <th>Data/Time</th> 
                </tr>
                </thead>
                <tbody id="show2">

                </tbody>
            </table>
        </div>
    </form>
</div>
<script>
    $('#sel1').change(function () {
        var city = $('#sel1 option:selected').val();
        if (city) {
            show(city);
        }
    });

    function show(city) {
        $.ajax({
            url: 'tq.php',
            timeout: 10000, // 超时时间 10 秒
            type: 'post',
            data: {
                city: city
            },
            async: false,
            cache: true,
            dataType: 'json',
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);
                if (data.cod == 200) {
                    $('#show1').html('');
                    var html1 = '';
                    html1 += "<td>" + data.city.id + "</td>";
                    html1 += "<td>" + data.city.name + "</td>";
                    html1 += "<td>" + data.city.country + "</td>";
                    html1 += "<td>" + data.city.timezone + "</td>";
                    html1 += "<td>" + timestampToTime(data.city.sunrise) + "</td>";
                    html1 += "<td>" + timestampToTime(data.city.sunset) + "</td>";
                    $('#show1').html(html1);
                    $('#show2').html('');
                    for (var i = 0; i < data.list.length; i++) {
                        var html2 = '';
                        html2 += "<tr>";
                       
                        html2 += "<td>" + data.list[i].main.temp + "</td>";
                        html2 += "<td>" + data.list[i].main.temp_min + "</td>";
                        html2 += "<td>" + data.list[i].main.temp_max + "</td>";
                        
                        html2 += "<td>" + data.list[i].main.humidity + "</td>";
                        
                        html2 += "<td>" + data.list[i].clouds.all + "</td>";
                        html2 += "<td>" + data.list[i].wind.speed + "</td>";
                        html2 += "<td>" + data.list[i].wind.deg + "</td>";
                        html2 += "<td>" + data.list[i].dt_txt + "</td>";
                        html2 += "</tr>";
                        $('#show2').append(html2);
                    }
                }
            },
            error: function (data) {
            }
        });
    }

    function timestampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        var Y = date.getFullYear() + '-';
        var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
        var D = (date.getDate() < 10 ? '0' + date.getDate() : date.getDate()) + ' ';
        var h = (date.getHours() < 10 ? '0' + date.getHours() : date.getHours()) + ':';
        var m = (date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()) + ':';
        var s = (date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds());
        return Y + M + D + h + m + s;
    }
</script>
</body>
</html>