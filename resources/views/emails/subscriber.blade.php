<!DOCTYPE html>
@if ( $content["lang"] == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The-Company</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        header {
            background-color: #f2f2f2;
            color: #fff;
            padding: 20px;
        }
        
        .logo {
            max-width: 150px;
        }
        
        .mail-card {
            background-color: #f2f2f2;
            margin: 20px auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            text-align: center;
        }
        
        .mail-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .mail-body {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <img class="logo" src="{{asset('images/general/favicon.svg')}}" alt="Logo">
    </header>

    <div class="mail-card">
        <h1 class="mail-title">{{$content["title"]}}</h1>
        <p class="mail-body">{{$content["body"]}}</p>
    </div>
</body>
</html>
