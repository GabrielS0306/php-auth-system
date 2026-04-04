<section class="table-section">
    <h2>
        <?php if ($ultimosUsuarios === true): ?>
            Últimos usuários registrados
        <?php endif; ?>
    </h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= htmlspecialchars($usuario['nome']) ?></td>
                    <td><?= htmlspecialchars($usuario['email']) ?></td>

                    <td>
                        <?php if($usuario['role'] === 'admin'): ?>
                            <span class="status done">Admin</span>
                        <?php else: ?>
                            <span class="status progress">Usuário</span>
                        <?php endif; ?>
                    </td>

                    <td id="funcoes-table-section">
                        <a href="#" title="Edição ainda não implementada">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="#" title="Exclusão ainda não implementada"
                            onclick="return confirm('Deseja excluir este usuário?')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if(empty($usuarios)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">
                        Nenhum usuário encontrado
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
