<section class="content-header">
      <h1>
       <?php echo $titulo ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $titulo ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

            <div class="row margin-bottom-20" >
            <div class="col-md-12 text-right">

            <a href="<?php echo base_url('admin/municipios/modulo')?>" title="Novo" class="btn btn-success"><i class="fa fa-plus-circle"></i> Novo</a>

            </div>
            </div>
            <table class="table table-bordered table_lista_data-table">
            <thead>
                <tr>
                    <td>Descrição</td>
                    <td>Estado</td>
                    <td class="text-center">Status</td>
                    <td class="text-right">Opções</td>
                </tr>
                </thead>

                <tbody>

                <?php
                foreach($municipios as $row){

                    echo '<tr>';
                    echo '<td>'. $row->descricao .'</td>';
                    echo '<td>'. $row->uf .'</td>';
                    echo '<td class="text-center">'. ($row->ind_inativacao ==1 ? '<span class="label label-success">Ativo</span>' : '<span class="label label-danger">Inativo</span>') .'</td>';
                    echo '<td class="text-right">';                    
                    echo '<a href="" title="Editar" class="btn btn-primary"><i class="fa fa-pencil"></i></a>';
                    echo ' <a href="" title="Excluir" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
                    echo '</td>';
                    echo '</tr>';

                }

                ?>
                </tbody>
            </table>
            
      </div>
    


  </div>
  
  </section>
