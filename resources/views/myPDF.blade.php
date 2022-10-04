<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1 align="center">{{ $title }}</h1>
    <table align="center" style="width:100%">
        @foreach ($info as $item=>$value)
            @if ($item!="Inscription_User_ID" && $item!="created_at" && $item!="updated_at" && $item!="deleted_at")
                <tr>
                    <td>{{  ucfirst(str_replace(['_','Inscription_Legal1','Inscription_Legal2','Inscription'],[' ','Responsable légal 1','Responsable légal 2',' '],$item) )}}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endif
            
        @endforeach
    </table>
</body>
</html>