<!DOCTYPE html>
<html>
<head>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto+Mono:300,500");

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/257418/andy-holmes-698828-unsplash.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            min-width: 100vw;
            font-family: "Roboto Mono", "Liberation Mono", Consolas, monospace;
            color: rgba(255, 255, 255, 0.87);
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .container,
        .container>.row,
        .container>.row>div {
            height: 100%;
        }

        #countUp {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin-top: 1rem;
            border: 1px solid black;
        }

        #countUp .number {
            font-size: 4rem;
            font-weight: 500;
        }

        #countUp .number+.text {
            margin: 0 0 1rem;
        }

        #countUp .text {
            font-weight: 300;
            text-align: center;
        }
    </style>
    <title>503 Service Unavailable</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="xs-12 md-6 mx-auto">
                <div id="countUp">
                    <div class="number" data-count="503">503</div>
                    <div class="text">We are currently down</div>
                    <div class="text">This may not mean anything.</div>
                    <div class="text">We are probably working on something that has blown up.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
