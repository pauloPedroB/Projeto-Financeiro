<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        
            <img  src="/images/ctrol - white - text.png" alt="Ctrol - Logo">
        
    </header>
    
    <article>
        <h1>{{$user->name}}</h1>
        <h3>Saldo: <br> R$ {{$balance}}</h3>
    </article>
        @if(session('rn'))
           <section>
                <form method="POST" action="/registrar">
                    <h2>Registrar seu saldo bancário atual</h2>
                    <label for="Valor">Saldo:</label>
                    <input type="number" name="value">
                    <input class="btn" type="submit">
                </form>
           </section>
        @endif

    <main>
        <div class="transf">
           
            <form action="/positive">
                <h2>Registrar transferência recebida</h2>
                <label for="Valor">Valor:</label>
                <input type="number" name="value" placeholder="R$" required>
                <input class="btn" type="submit">
            </form>
            <form action="/negative">
                <h2>Registrar transferência paga</h2>
                <label for="Valor">Valor:</label>
                <input type="number" name="value" placeholder="R$" required>
                <input class="btn" type="submit">
            </form>
            <form action="/negative">
                <h2>Registrar transferência a pagar</h2>
                <label for="Valor">Valor:</label>
                <input type="number" name="value" placeholder="R$" required>
                
                <label for="Data">Data:</label>
                <input type="date" name="date" required>
                <input class="btn" type="submit">
            </form>
        </div>
        
        <section>
            <form action="/positive">
                <h2>Registrar boleto a receber</h2>
                <label for="Valor">Valor:</label>
                <input type="number" name="value" placeholder="R$" required>
        
                <label for="Data">Data:</label>
                <input type="date" name="date" required>
                <input class="btn" type="submit">
            </form>
        </section>
        <section>
            <form action="/balance" method="POST">
                @csrf
                <h2>Consultar saldo no dia:</h2>
                <label for="Data">Data:</label>
                <input type="date" name="date" required>
                <input class="btn" type="submit">
                <label>R$ {{$saldo}}</label>
            </form>
        </section>
    </main>

    
</body>
</html>