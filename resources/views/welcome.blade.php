<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
<body>
<div class="flex-center position-ref full-height">
Gerenciamento de funcionários
</body>
</html>
Salve o arquivo como "mostrar.blade.php" dentro da pasta "resources/views".
Ainda falta mudar no controller funcionários o texto que estava sendo mostrado dentro do
controller, pela exibição da view.
Veja como deve ficar o código:
public function mostrar()
{
return view('mostrar');
}
</html>
