		<?php require 'views/layout/includes/header.php'; ?>
        <?php require 'views/layout/navbar.view.php'; ?>
		<?php require 'views/layout/sidebar.view.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Profile Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8">

                            <!-- /.card -->

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Informacion Personal</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>Nombre:
                                                <input type="text" class="form-control" placeholder="Nombre">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>Apellido:
                                                <input type="text" class="form-control" placeholder="Apellido">
                                            </label>
                                        </div>


                                        <div class="col-3">
                                            <label>Fecha de nac.:
                                                <input type="date" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>Telefono:
                                                <input type="tel" class="form-control" placeholder="Telefono">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>Email:
                                                <input type="email" class="form-control" placeholder="Email">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>Cedula/Passaporte:
                                                <input type="text" class="form-control" placeholder="Cedula">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>Nacionalidad:
                                                <input type="text" class="form-control" placeholder="Nacionalidad">
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label style="width: 100%">Direccion:
                                                <input type="text" class="form-control" placeholder="Direccion">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Ciudad:
                                                <input type="text" class="form-control" placeholder="Ciudad">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Provincia:
                                                <input type="text" class="form-control" placeholder="Provincia">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Pais:
                                                <input type="text" class="form-control" placeholder="Pais">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Informacion Academica</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label style="width: 100%">Universidad:
                                                <input type="text" class="form-control" placeholder="Universidad">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Matricula:
                                                <input type="text" class="form-control" placeholder="Matricula">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Cuatrimestre:
                                                <input type="text" class="form-control" placeholder="Cuatrimestre">
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label style="width: 100%">Carrera:
                                                <input type="text" class="form-control" placeholder="Carrera">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Informacion Laboral</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="width: 100%">Posee capacitación en el área de su carrera?:
                                                <textarea class="form-control" placeholder="Especifique"></textarea>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label style="width: 100%">Esta empleado Actualmente:
                                                <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                            </label>
                                        </div>

                                        <h3 class="card-title">Disponibilidad:</h3>

                                        <div class="col-3">
                                            <label> Inmediata:
                                                <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>30 días deantelación
                                                <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Mis Intereses</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="width: 100%">Pasa tiempos:
                                                <input type="text" class="form-control" placeholder="Baseball, Basquetball, Voleibol">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label style="width: 100%">Acerca de mi:
                                                <textarea class="form-control" placeholder="Biografia"></textarea>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-body -->
                            </div>
                            <div class="card" >
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-2 offset-md-10">
                                        <button type="button" class="btn btn-block btn-primary">Guardar</button>
                                    </div>
                                </div>
                                </div>
                            </div>


                            <!-- /.card -->

                            <!-- Input addon -->

                            <!-- /.card -->
                            <!-- Horizontal Form -->

                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-info">
                                    <h3 class="widget-user-username">Alexander Pierce</h3>
                                    <h5 class="widget-user-desc">Estudiante de Ingenieria Electronica</h5>
                                </div>
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">3,200</h5>
                                                <span class="description-text">SALES</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 border-right">
                                            <div class="description-block">
                                                <h5 class="description-header">13,000</h5>
                                                <span class="description-text">FOLLOWERS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">35</h5>
                                                <span class="description-text">PRODUCTS</span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.widget-user -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Login Informacion</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label style="width: 100%">Username:
                                                <input type="text" class="form-control" placeholder="hcerda" disabled>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label >Password Viejo:
                                                <input type="text" class="form-control" placeholder="Password">
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label >Password Nuevo:
                                                <input type="text" class="form-control" placeholder="Repit Password">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4 offset-md-8">
                                        <button type="button" class="btn btn-block btn-primary">Cambiar Password</button>
                                    </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require 'views/layout/includes/footer.php'; ?>
