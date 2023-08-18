<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página formulário</title>
    <link rel="stylesheet" href="{{('assets/css/boots/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('assets/css/boots/gradiente.css')}}">
</head>

<body class="Fundo">

    <section class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
        <form class="firewatch text-white rounded-1 border-1 p-4" method="post" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" required>Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" required>Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
            </div>
            <div class="mb-3">
                <label for="ops" class="form-label" >Hobbie</label>
                <select name="form_ops" id="ops" class="form-control">
                    <option value="Nulo">------</option>
                    <option value="banana">banana</option>
                    <option value="flamengo">flamengo</option>
                    <option value="bicicleta">bicicleta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label" required>Data de nascimento</label>
                <input type="date" class="form-control" name="data" id="data" placeholder="Data de nascimento">
            </div>
            <label for="" class="form-label">Mensagem</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Mensagem</span>
                <textarea class="form-control" aria-label="With textarea" name="mensagem" ></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telefone</label>
                <input type="tel" name="telefone" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning text-light">Resetar</button>
        </form>
    </section>

</body>

</html>