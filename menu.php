
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/mahruskh.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php   echo $_SESSION['nama'] ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="teste.php"><i class="fa fa-pie-chart"></i> <span>Gráfico</span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#modal-tambah-siswa"><i class="fa fa-plus"></i><span>Tambah Siswa</span></a></li>
		
		
		<li class="header">Cadastros</li>
			<li class="treeview">
			<a href="#"><i class="fa fa-link"></i>
				<span>Cadastros</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Estados</span></a></li>
				<li><a href="cidades.php"><i class="fa fa-dashboard"></i> <span>Cidades</span></a></li>
				<li><a href="bairros.php"><i class="fa fa-dashboard"></i> <span>Bairros</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Cadastros Gerais</span></a></li>
				<li><a href="produtos.php"><i class="fa fa-dashboard"></i> <span>Prod/Serv/Equip</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Preços</span></a></li>
				<li><a href="clientes.php"><i class="fa fa-dashboard"></i> <span>Clientes</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Proprietário</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Locais</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Agenciadores</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Fornecedores</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Textos</span></a></li>
			</ul>
			<a href="#"><i class="fa fa-link"></i>
				<span>Gerais</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Estados</span></a></li>
				<li><a href="cidades.php"><i class="fa fa-dashboard"></i> <span>Cidades</span></a></li>
				<li><a href="bairros.php"><i class="fa fa-dashboard"></i> <span>Bairros</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Cadastros Gerais</span></a></li>
				<li><a href="produtos.php"><i class="fa fa-dashboard"></i> <span>Prod/Serv/Equip</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Preços</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Clientes</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Proprietário</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Locais</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Agenciadores</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Fornecedores</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Textos</span></a></li>
			</ul>
			<a href="#"><i class="fa fa-link"></i>
				<span>Produtos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="produtos.php"><i class="fa fa-dashboard"></i> <span>Produtos</span></a></li>
				<li><a href="produtos.php"><i class="fa fa-dashboard"></i> <span>Serviços</span></a></li>
				<li><a href="produtos.php"><i class="fa fa-dashboard"></i> <span>Equipamentos</span></a></li>
			</ul>
			</li>
		
		<li class="header">Comercial</li>
			<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Situação de locais</span></a></li>
			<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Mapa de ocupação</span></a></li>
			<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Apoio às compras</span></a></li>
			<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Negócios</span></a></li>
			<li class="treeview">
			<a href="#"><i class="fa fa-link"></i>
				<span>Relatórios</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Colagem</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Disponibilidade</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Proposta de mídia</span></a></li>
			</ul>
			</li>
			<li class="treeview">
			<a href="#"><i class="fa fa-link"></i>
				<span>Gráficos</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Negócios x Clientes</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Negócios x Serviços</span></a></li>
				<li><a href="estados.php"><i class="fa fa-dashboard"></i> <span>Negócios x Período</span></a></li>
			</ul>
			</li>
      <!-- /.sidebar-menu -->
	  
	  
    </section>
    <!-- /.sidebar -->
  </aside>