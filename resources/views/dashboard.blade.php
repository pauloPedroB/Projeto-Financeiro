<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{$user->name}}</h1>
    <h3>Saldo: {{$balance}}</h3>
    @if(session('rn'))
        <form method="POST" action="/saldo">
            <h2>Registrar seu saldo bancário atual</h2>
            <label for="Valor">Saldo</label>
            <input type="number" name="value">
            <input type="submit">
        </form>
    @endif

    <form action="/positive">
        <h2>Registrar transferência recebida</h2>
        <label for="Valor">Valor</label>
        <input type="number" name="value" required>
        <input type="submit">
    </form>
    <form action="/negative">
        <h2>Registrar transferência paga</h2>
        <label for="Valor">Valor</label>
        <input type="number" name="value" required>
        <input type="submit">
    </form>
    <form>
        <h2>Registrar boleto a receber</h2>
        <label for="Valor">Valor</label>
        <input type="number" name="value" required>

        <label for="Data">Data</label>
        <input type="date" name="date" required>
        <input type="submit">
    </form>
    <form>
        <h2>Registrar transferência a pagar</h2>
        <label for="Valor">Valor</label>
        <input type="number" name="value" required>
        
        <label for="Data">Data</label>
        <input type="date" name="date" required>
        <input type="submit">
    </form>

    <div>
        
    </div>
</body>
</html>