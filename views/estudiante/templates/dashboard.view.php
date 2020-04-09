    	<?php require 'views/layout/includes/header.php'; ?>
        <?php require 'views/layout/navbar.view.php'; ?>
		<?php require 'views/layout/sidebar.view.php'; ?>

          <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Vistas de curriculo</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">820</span> <span>Visitors
                                                Over Time</span>
                                        </p>
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success"> <i class="fas fa-arrow-up"></i>
                                                12.5%
                                            </span> <span class="text-muted">Since last week</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="visitors-chart" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2"> <i class="fas fa-square text-primary"></i> This Week
                                        </span> <span> <i class="fas fa-square text-gray"></i> Last
                                            Week
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Posiciones</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-sm"> <i class="fas fa-download"></i>
                                        </a> <a href="#" class="btn btn-tool btn-sm"> <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Area de negocio</th>
                                                <th>Vancante</th>
                                                <th>Descripcion</th>
                                                <th>Mostrar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo BASE_URL?>dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Telecominicaciones</td>
                                                <td>Supervisor</td>
                                                <td>Supervisar el area de Ventas</td>
                                                <td><a href="#" class="text-muted"> <i class="fas fa-search"></i>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo BASE_URL?>dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Another Product</td>
                                                <td>$29 USD</td>
                                                <td><small class="text-warning mr-1"> <i class="fas fa-arrow-down"></i> 0.5%
                                                    </small> 123,234 Sold</td>
                                                <td><a href="#" class="text-muted"> <i class="fas fa-search"></i>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo BASE_URL?>dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Amazing Product</td>
                                                <td>$1,230 USD</td>
                                                <td><small class="text-danger mr-1"> <i class="fas fa-arrow-down"></i> 3%
                                                    </small> 198 Sold</td>
                                                <td><a href="#" class="text-muted"> <i class="fas fa-search"></i>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo BASE_URL?>dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Perfect Item <span class="badge bg-danger">NEW</span></td>
                                                <td>$199 USD</td>
                                                <td><small class="text-success mr-1"> <i class="fas fa-arrow-up"></i> 63%
                                                    </small> 87 Sold</td>
                                                <td><a href="#" class="text-muted"> <i class="fas fa-search"></i>
                                                    </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Salario segun su carrera</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success"> <i class="fas fa-arrow-up"></i>
                                                33.1%
                                            </span> <span class="text-muted">Since last month</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="sales-chart" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2"> <i class="fas fa-square text-primary"></i> This year
                                        </span> <span> <i class="fas fa-square text-gray"></i> Last
                                            year
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require 'views/layout/includes/footer.php'; ?>