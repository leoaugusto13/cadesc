<section class="content-header">
    <h1>
        <?php echo $titulo ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php
        if (isset($navegacao)) {
            echo '<li><a href="' . base_url($navegacao['link']) . '" title="' . $navegacao['titulo'] . '">
                ' . $navegacao['titulo'] . '<a></li>';
        }
        ?>
        <li class="active"><?php echo $titulo ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">

            <div class="row margin-bottom-20">
                <div class="col-md-12 text-right">

                    <a href="<?php echo base_url('admin/usuarios') ?>" title="Voltar" class="btn btn-success"><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>



            <form action="<?php echo base_url('admin/usuarios/core') ?>" method="post" accept-charset="utf-8" class="form-horizontal">

                <?php
                errosValidacao();
                getMsg('msgCadastro');

                ?>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-8">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo ($dados != NULL ? $dados->username : set_value('nome')) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo ($dados != NULL ? $dados->email : set_value('email'))  ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-4">
                        <select name="status" class="form-control">

                            <?php if ($dados) { ?>
                                <option value="0" <?= ($dados->active == 0 ? 'selected=""' : ' ') ?>>Não</option>
                                <option value="1" <?= ($dados->active == 1 ? 'selected=""' : ' ') ?>>Sim</option>
                            <?php } else { ?>
                                <option value="0">Não</option>
                                <option value="1" selected="">Sim</option>
                            <?php } ?>

                        </select>
                    </div>
                </div>
                <?php if ($dados) { ?>
                    <input type="hidden" name="id_usuario" value="<?= $dados->id ?>">
                <?php } ?>

                <div class="form-group">
                    <div class="col-sm-offset col-sm-10">
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</section>