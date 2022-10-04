<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1 align="center">{{ $title }}</h1>
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
        @foreach ($info as $item=>$value)
            @if ($item!="Inscription_User_ID")
                <tr>
                    <td>{{  ucfirst(str_replace(['_',''],[' ',' '],$item) )}}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endif
            
        @endforeach
    </table>
</body>
</html>