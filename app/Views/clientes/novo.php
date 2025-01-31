<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Novo Cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/clientes" class="btn btn-success" style="margin-right:15px"><i class="nav-icon fas fa-backward"></i>  Voltar</a>
                        <li class="breadcrumb-item"><a href="/">Início</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
                        <li class="breadcrumb-item active"></i>Novo</li>
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
                            <h3 class="card-title">Dados Pessoais</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/clientes/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Nome</label>
                                            <input type="text" class="form-control" name="nome">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Data de Nascimento</label>
                                            <input type="date" class="form-control" name="data_de_nascimento">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Telefone</label>
                                            <input type="text" class="form-control" name="telefone">
                                        </div>
                                    </div>
                                     <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="">Endereço</label>
                                            <input type="text" class="form-control" name="endereco">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Limite de Crédito</label>
                                            <input type="text" class="form-control" name="limite_de_credito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->