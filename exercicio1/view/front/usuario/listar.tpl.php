<div class="card text-center">
    <div class="card-header">
        <div class="float-end">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <select class="form-select" name="filtro">
                        <option value="">Selecione um Filtro</option>
                        <option value="username">Username</option>
                        <option value="zipcode">Zip Code</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" class="form-control" name="pesquisa">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                    <a href="index.php?module=usuario&action=listar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    <a href="index.php?module=usuario&action=inserir" class="btn btn-primary">Inserir</a>
                    <a href="index.php" class="btn btn-warning">Voltar</a>
                </div>
            </form>
        </div>
        <h5 class="card-title">Usuários</h5>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Zip Code</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>*</th>
        </tr>
        <?php foreach ($dados as $usuario) { ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['username']; ?></td>
                <td><?= $usuario['zipcode']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td><?= $usuario['password']; ?></td>
                <td>
                    <a href="?module=usuario&action=alterar&id=<?php echo $usuario['id']; ?>" class="btn btn-success btn-sm">Alterar</a>
                    <a href="?module=usuario&action=apagar&id=<?php echo $usuario['id']; ?>" class="btn btn-danger btn-sm">Apagar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>