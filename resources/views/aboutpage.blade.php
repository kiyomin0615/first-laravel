<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>About 페이지</h1>
    <p>이름: {{ $name }}</p>
    <p>나이: {{ $age }}</p>
    <p>기술 스택</p>
    <ul>
        @foreach($stackList as $stack)
        <li>{{ $stack }}</li>
        @endforeach
    </ul>
    <a href="/">Home 페이지로 이동하기</a>
</body>
</html>
