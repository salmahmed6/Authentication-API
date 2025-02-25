<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    @if ($value > 20)
        <div style="background: orange">
          <h1>Value is greater than 20</h1>
        </div>
    @elseif ($value > 10)
        <div style="background: green">
            <h1>Value is greater than 10</h1>
        </div>
    @else
        <div style="background: red">
            <h1>Value is less than or equal 10</h1>
        </div>
    @endif
    <h1>Hello, {{ $renderName }}</h1>
    <p>
        asadfgdhjkllwifoduyfjkbvlkjsdgfh';lsfjcfjnuifhpaojdjnbfhjaskluwfkjdsbhfoiufh;lakdmansfdiohsfopqwermnfbfia;kdo9wefrnhsalkfjaghfklsdfjuewpoipasdjmakls;asfdj;flja;sifrkld;laf
    </p>

    @for($i =0; $i < 10;  $i++)
        <h1>The current value is {{ $i }}</h1>
    @endfor
</body>
</html>
