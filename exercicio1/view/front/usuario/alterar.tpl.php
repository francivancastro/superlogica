<div class="card">
    <div class="card-header">
        <h5 class="card-title">Alterar Usuário</h5>
    </div>
    <form method="POST" action="?module=usuario&action=alterar&id=<?php echo $dados['id']; ?>">
        <div class="card-body">
        <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $dados['name']; ?>" required >
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Login</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $dados['username']; ?>" required >
            </div>
            <div class="mb-3">
                <label for="zipcode" class="form-label">CEP</label>
                <input type="text" class="form-control numerico" id="zipcode" name="zipcode" value="<?php echo $dados['zipcode']; ?>" required maxlength="9" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $dados['email']; ?>" required >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $dados['password']; ?>" required >
            </div>
        </div>
        <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a class="btn btn-warning" href="?module=usuario&action=listar">Voltar</a>
        </div>
    </form>
</div>