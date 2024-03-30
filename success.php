<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #000;
            color: #0f0;
            text-align: center;
            padding: 50px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #ff0;
            font-size: 40px;
            text-transform: uppercase;
            letter-spacing: 5px;
        }
        h3 {
            color: #f00;
            font-size: 24px;
            margin-top: 20px;
        }
        p {
            color: #0f0;
            font-size: 18px;
            line-height: 1.5;
            margin-top: 30px;
        }
        .lottie-container {
            width: 300px;
            height: 300px;
            margin-top: 40px;
            position: relative;
        }
        .lottie {
            position: absolute;
            background-color: transparent;
            loop: true;
            autoplay: true;
        }

        .lottie4 {
            z-index: -1;
        }

    .lottie5 {
        z-index: -1;
    }
       
        .lottie2 { top: -50px; right: -200px; width: 150px; height: 150px; }
        .lottie3 { bottom: -50px; left: -200px; width: 200px; height: 200px; }
        .lottie4 { top: -350px; right: 350px; width: 400px; height: 400px; }
        .lottie5 { top: -350px; left: 350px; width: 350px; height: 350px; }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #000;
            color: #0f0;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            font-style: italic;
            border-top: 2px solid #0f0;
        }
        /* Media queries for adjusting lottie sizes on mobile devices */
        @media only screen and (max-width: 768px) {
            .lottie2 { width: 100px; height: 100px; top: -0px; right: -20px; }
            .lottie3 { width: 150px; height: 150px; bottom: -30px; left: -50px; }
            .lottie4 { width: 150px; height: 150px; top: -500px; right: 200px; }
            .lottie5 { width: 150px; height: 150px; top: -500px; left: 200px; }
        }
    </style>
</head>
<body>
    <h1>Alert!</h1>
    <h3>Your submission was successful.</h3>
    <p>I have your password now. <br> <br> Call Tom and tell him what you did.</p>
    <div class="lottie-container">
        <dotlottie-player src="https://lottie.host/02114dd9-9903-4a32-9b21-380172481f54/Ni0SOqZ9Rq.json" class="lottie" loop autoplay></dotlottie-player>
        <dotlottie-player src="https://lottie.host/4a736205-e607-4512-af69-3c2485b367a5/APTlq5OdQm.json" class="lottie lottie2" loop autoplay background="transparent"></dotlottie-player>
        <dotlottie-player src="https://lottie.host/db0ba436-162f-4f98-ac62-14d05c0fb7a1/m4B63p18PA.json" class="lottie lottie3" loop autoplay background="transparent"></dotlottie-player>
        <dotlottie-player src="https://lottie.host/5157c06c-ff42-4892-b5be-5339cd17bf1d/eEVAedzUsG.json" class="lottie lottie4" loop autoplay background="transparent"></dotlottie-player>
        <dotlottie-player src="https://lottie.host/5157c06c-ff42-4892-b5be-5339cd17bf1d/eEVAedzUsG.json" class="lottie lottie5" loop autoplay background="transparent"></dotlottie-player>
    </div>
    <footer>This is not an official website of Revolut. We are not affiliated with Revolut. Be cautious of scams.</footer>
</body>
</html>
