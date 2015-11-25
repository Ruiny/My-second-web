<html>
<head>
    <title>Network website - @yield('title','Welcome!')</title>

    <style>
        .header{
            background-color: darkred;
        }
        .footer{
            background-color: greenyellow;
        }

    </style>
</head>
<body>
<div class="header">
    <ul>
        <li>Home</li>
        <li>Product</li>
        <li>Help</li>
    </ul>
</div>

<div class="container">
    @yield('content','')
</div>

<div class="footer">
    Copy right @2015-2025
</div>
</body>
</html>