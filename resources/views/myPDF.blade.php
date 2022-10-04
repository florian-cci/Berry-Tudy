<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="height:202px; width:522px">
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