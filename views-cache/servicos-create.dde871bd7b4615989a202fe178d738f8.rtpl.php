<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Serviços
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/servicos">Serviços</a></li>
    <li class="active"><a href="/admin/servicos/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Serviço</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/servicos/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="nomeservico">Nome do Serviço</label>
              <input type="text" class="form-control" id="nomeservico" name="nomeservico" placeholder="Digite o nome do Serviço">
            </div>
            <div class="form-group">
              <label for="desservico">Descrição</label>
              <input type="text" class="form-control" id="desservico" name="desservico" placeholder="Descrição do Serviço">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->