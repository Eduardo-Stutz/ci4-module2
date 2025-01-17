<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <div class="card">
              <div class="card-header">
                <a href="/clientes/novo" class="btn btn-info"> Novo Cliente</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Cód.:</th>
                      <th>Nome</th>
                      <th>Data de Nascimento</th>
                      <th>Telefone</th>
                      <th>Endereço</th>
                      <th>Limnite de Crédito</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($clientes as $cliente):?>
                        <tr>
                            <td><?= $cliente['id_cliente']?></td>
                            <td><?= $cliente['nome'] ?></td>
                            <td><?= $cliente['data_de_nascimento'] ?></td>
                            <td><?= $cliente['telefone'] ?></td>
                            <td><?= $cliente['endereco'] ?></td>
                            <td><?= $cliente['limite_de_credito'] ?></td>
                            <td>
                              <a href="clientes/editar/<?= $cliente['id_cliente']?>" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            <!-- /.card -->


                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->