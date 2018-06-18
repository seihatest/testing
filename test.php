
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        #button {
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            position: absolute;
            font-size: 1.5em;
            text-transform: uppercase;
            padding: 7px 20px;
            left: 50%;
            width: 200px;
            margin-left: -100px;
            top: 50%;
            border-radius: 10px;
            color: white;
            text-shadow: -1px -1px 1px rgba(0,0,0,0.8);
            border: 5px solid transparent;
            border-bottom-color: rgba(0,0,0,0.35);
            background: hsla(260, 100%, 50%, 1);
            cursor: pointer;
            outline: 0 !important;

            animation: pulse 1s infinite alternate;
            transition: background 0.4s, border 0.2s, margin 0.2s;
            text-align: center;
        }
        #button:hover {
            background: hsla(220, 100%, 60%, 1);
            margin-top: -1px;

            animation: none;
        }
        #button:active {
            border-bottom-width: 0;
            margin-top: 5px;
        }
        @keyframes pulse {
            0% {
                margin-top: 0px;
            }
            100% {
                margin-top: 6px;
            }
        }
    </style>
</head>
<body>
<br><br>

<a id="button" href="http://localhost/testing">Back</a>
</body>
</html>