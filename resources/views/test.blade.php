<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
            <div>
                <ul style="float:left;">
                @foreach ($product as $p)
                    <li>Product: {{ $p }}</li>
                @endforeach
                </ul>
                <ul style="float:left;list-style: none;">
                @foreach ($price as $pr)
                    <li> {{ $pr }}.00</li>
                @endforeach
                </ul>
            </div>
    </body>
</html>
