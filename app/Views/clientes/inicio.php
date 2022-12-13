<?= $this->include('header')  ?>
<!-- SE INCLUYE LA PLANTILLA -->

<div id="app" class="app">

    <div id="content" class="app-content">
        <div class="row">
            <div class="col-xs-12 col-md-12">

                <div id="" style="font-size:25px; font-weight:bold; text-align:center; margin: 10px auto;">Buscar cliente</div>
            </div>
            <div class="col-xl-6">
                <div class="form-group mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Cliente</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Buscar codigo, nombre, telefono...">
                </div>

            </div>
            <div class="col-xl-6">
                <div class="form-group mb-3">
                    <label class="form-label" for="exampleFormControlSelect1">Sociedad</label>

                    <select id="soc" name="soc" class="form-select">
                        <option value="Fib" <?php if (isset($_GET['bd']) and $_GET['bd'] == 'Fib') { ?>selected="selected" <?php } ?>>Fibremex</option>
                        <option value="Opt" <?php if (isset($_GET['bd']) and $_GET['bd'] == 'Opt') { ?>selected="selected" <?php } ?>>Optronics</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="bg-white bg-opacity-25 p-3 rounded-3">
            <div class="row">

                <div class="col-xl-3">
                    <p> <i class="fas fa-lg fa-fw me-2 fa-user-circle"></i>asasas</p>

                </div>

                <div class="col-xl-3">
                    <p> <i class="fas fa-lg fa-fw me-2 fa-building"></i>asasas</p>


                </div>

                <div class="col-xl-3">
                    <p> <i class="fas fa-lg fa-fw me-2 fa-phone"></i>asasas</p>


                </div>

                <div class="col-xl-3">
                    <p> <i class="fas fa-lg fa-fw me-2 fa-suitcase"></i>asasas</p>


                </div>
            </div>
        </div>
        <br><br>

        <div class="row">

            <div class="col-xl-2">

                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Dias de Crédito</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-shopping-cart fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>


            </div>

            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Límite de Crédito USD</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-signal fa-3x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>




            </div>

            <div class="col-xl-2">

                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Saldo USD</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-credit-card fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>

            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Última Compra</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-calendar fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Segmentación</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-compress fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Tipo de cartera</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-shopping-bag fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
        </div>
        <br><br>

        <div class="row">

            <div class="col-xl-2">

                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Dias de Crédito</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-shopping-cart fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>


            </div>

            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Límite de Crédito USD</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-signal fa-3x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>




            </div>

            <div class="col-xl-2">

                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Saldo USD</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-credit-card fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>

            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Última Compra</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-calendar fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Segmentación</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-compress fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
            <div class="col-xl-2">
                <a href="#" class="card text-decoration-none">
                    <div class="card-body d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                        <div class="flex-fill">
                            <div class="mb-1">Tipo de cartera</div>
                            <h2>0</h2>
                        </div>
                        <div class="opacity-5">
                            <i class="fa fa-shopping-bag fa-4x"></i>
                        </div>
                    </div>

                    <!-- card-arrow -->
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </a>



            </div>
        </div>
    </div>
</div>