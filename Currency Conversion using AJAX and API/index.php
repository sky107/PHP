<!-- Coded by :Siddharth Kumar Yadav (SKY) -->
<!-- &Believe me I typed the entire currencies :) -->
<!doctype html>
<html lang="en">

<head>
    <title>Currency Converter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap');
    body{
        font-family: 'IBM Plex Sans', sans-serif;
    }
    input {
        margin: 5px;
    }

    fieldset {
        margin: 0 auto;
        width: fit-content;
    }

</style>

<body>
    <div class="container">
        <fieldset>
            <legend>Currency Converter using PHP </legend>
            <table>
                <tr>
                    <td>Enter Amount</td>
                    <td><input type="text" name="amount" id="amount" placeholder="Please Enter the amount "></td>
                </tr>
                <tr>
                    <td>From Currency </td>
                    <td>&nbsp;
                        <select id="from">
                            <option value="INR">Indian Rupee</option>
                            <option value="AED">United Arab Emirates Dirham</option>
                            <option value="ARS">Argentine Peso</option>
                            <option value="AUD">Australian Dollar</option>
                            <option value="BGN">Bulgarian Lev</option>
                            <option value="BND">Brunei Dollar</option>
                            <option value="BOB">Bolivian Boliviano</option>
                            <option value="BRL">Brazilian Real</option>
                            <option value="CAD">Canadian Dollar</option>
                            <option value="CHF">Swiss Franc</option>
                            <option value="CLP">Chilean Peso</option>
                            <option value="CNY">Chinese Yuan Reninbi</option>
                            <option value="COP">Columbian Peso</option>
                            <option value="CZK">Czech Republic Koruna</option>
                            <option value="DKK">Danish Krone</option>
                            <option value="EGP">Egyptian Pound</option>
                            <option value="EUR">Euro</option>
                            <option value="FJD">Fijian Dollar</option>
                            <option value="GBP">British Pound Sterling</option>
                            <option value="HKD">Hong Kong Dollar</option>
                            <option value="HRK">Crotian Kuna</option>
                            <option value="HUF">Hungarian Forint</option>
                            <option value="IDR">Indonesian Rupiah</option>
                            <option value="ILS">Israeli New Sheqel</option>

                            <option value="JPY">Japanese Yen</option>
                            <option value="KES">Kenyan Shilling</option>
                            <option value="KRW">South Korean Won</option>
                            <option value="LTL">Lithuanian Litas</option>
                            <option value="MAD">Moroccan Dirham</option>
                            <option value="MXN">Mexican Peso</option>
                            <option value="MYR">Malaysian Ringgit</option>
                            <option value="NOK">Norwegian Krone</option>
                            <option value="NZD">New Zealand Dollar</option>
                            <option value="PEN">Peruvian Nuevo Sol</option>
                            <option value="PHP">Philipine Peso</option>
                            <option value="PKR">Pakistani Ruppe</option>
                            <option value="PLN">Polish Zloty</option>
                            <option value="RON">Romanina Leu</option>
                            <option value="RSD">Serbian Dinar</option>
                            <option value="RUB">Russian Ruble</option>
                            <option value="SAR">Saudi Riyal</option>
                            <option value="SEK">Swedish Krona</option>
                            <option value="SGD">Singapore Dollar</option>
                            <option value="THB">Thai Bhat</option>
                            <option value="TRY">Turkish Lira</option>
                            <option value="TWD">New Taiwan Dollar</option>
                            <option value="UAH">Ukrainian Hryvnia</option>
                            <option value="USD">US Dollar</option>
                            <option value="VEF">Venezuelan Bolivar Fuerte</option>
                            <option value="VND">Vitnamese Dong</option>
                            <option value="ZAR">South African Rand</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>To Currency </td>
                    <td>&nbsp;
                        <select id="to">
                            <option value="USD">US Dollar</option>
                            <option value="AED">United Arab Emirates Dirham</option>
                            <option value="ARS">Argentine Peso</option>
                            <option value="AUD">Australian Dollar</option>
                            <option value="BGN">Bulgarian Lev</option>
                            <option value="BND">Brunei Dollar</option>
                            <option value="BOB">Bolivian Boliviano</option>
                            <option value="BRL">Brazilian Real</option>
                            <option value="CAD">Canadian Dollar</option>
                            <option value="CHF">Swiss Franc</option>
                            <option value="CLP">Chilean Peso</option>
                            <option value="CNY">Chinese Yuan Reninbi</option>
                            <option value="COP">Columbian Peso</option>
                            <option value="CZK">Czech Republic Koruna</option>
                            <option value="DKK">Danish Krone</option>
                            <option value="EGP">Egyptian Pound</option>
                            <option value="EUR">Euro</option>
                            <option value="FJD">Fijian Dollar</option>
                            <option value="GBP">British Pound Sterling</option>
                            <option value="HKD">Hong Kong Dollar</option>
                            <option value="HRK">Crotian Kuna</option>
                            <option value="HUF">Hungarian Forint</option>
                            <option value="IDR">Indonesian Rupiah</option>
                            <option value="ILS">Israeli New Sheqel</option>
                            <option value="INR">Indian Rupee</option>
                            <option value="JPY">Japanese Yen</option>
                            <option value="KES">Kenyan Shilling</option>
                            <option value="KRW">South Korean Won</option>
                            <option value="LTL">Lithuanian Litas</option>
                            <option value="MAD">Moroccan Dirham</option>
                            <option value="MXN">Mexican Peso</option>
                            <option value="MYR">Malaysian Ringgit</option>
                            <option value="NOK">Norwegian Krone</option>
                            <option value="NZD">New Zealand Dollar</option>
                            <option value="PEN">Peruvian Nuevo Sol</option>
                            <option value="PHP">Philipine Peso</option>
                            <option value="PKR">Pakistani Ruppe</option>
                            <option value="PLN">Polish Zloty</option>
                            <option value="RON">Romanina Leu</option>
                            <option value="RSD">Serbian Dinar</option>
                            <option value="RUB">Russian Ruble</option>
                            <option value="SAR">Saudi Riyal</option>
                            <option value="SEK">Swedish Krona</option>
                            <option value="SGD">Singapore Dollar</option>
                            <option value="THB">Thai Bhat</option>
                            <option value="TRY">Turkish Lira</option>
                            <option value="TWD">New Taiwan Dollar</option>
                            <option value="UAH">Ukrainian Hryvnia</option>
                            <option value="VEF">Venezuelan Bolivar Fuerte</option>
                            <option value="VND">Vitnamese Dong</option>
                            <option value="ZAR">South African Rand</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>-------------------</td>
                    <td>------------------------------------------------</td>
                </tr>
            </table>
            <center>
                <div id="answer"> Created by Siddharth Kumar Yadav</div>
            </center>
        </fieldset>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        function Execute() {
            var from = $('#from').val();
            var to = $('#to').val();
            var amount = $('#amount').val();
            $.ajax({
                type: "POST",
                url: "process.php",
                data: {
                    from: from,
                    to: to,
                    amount: amount
                },
                success: function (response) {

                    $('#answer').html(response);

                }
            });

        }
        $('#amount').on("keyup", function () {
            Execute();
        })
        $('#from').on("input", function () {
            Execute();
        })

        $('#to').on("input", function () {
            Execute();
        })

    </script>


</body>

</html>
