<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Projeto</title>
  
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Página Inicial</a></li>
                <li><a href="/medicos">Médicos</a></li>
                <li><a href="/especialidades">Especialidades</a></li>
                <li><a href="/medicos/relatorio">Relatório</a></li> 
               
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    
</body>
</html>
