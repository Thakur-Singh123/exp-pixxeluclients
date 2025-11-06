<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome || VSK CELL Dharamshala</title>
        <link rel="stylesheet" href="{{ asset('public/vendor/fontawesome/css/all.min.css') }}">
        <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: #3C4D03;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }
        .welcome-box {
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(6px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
            background-color: #828961;
            color: #000;
        }
        h1 {
            font-size: 1.8rem;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #fff;
        }
        button {
            background: #6B8E23;
            color: #ffffff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
        }
        button:hover {
            background: #6B8E23;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        </style>
    </head>
    <body>
        <div class="welcome-box">
            <i class="fas fa-building" style="font-size:50px; color:#ffcc00;"></i>
            <h1>WELCOME<br>
                TO<br>
                VSK CELL<br>
                STN Headquarters Dharamshala, CANTT
            </h1>
            <button onclick="window.location.href='{{ url('data-bank-details-of-vsk-cell-dharamshala') }}'">Next</button>
        </div>
    </body>
</html>