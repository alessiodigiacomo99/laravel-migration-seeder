<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach($courses as $corso)
            <div>
                <li>
                    Nome del corso: {{$corso->nome}}
                </li>
                <li>
                    Docente del corso: Prof.{{$corso->docente}}
                </li>
             </div>
        @endforeach
    </ul> 

</body>
</html>

<?php

