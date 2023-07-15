



    <div class="row d-sm-none">
    <h1 class="p-2 m-1 linea">Las mejores promociones</h1>



    <div class="mx-auto m-auto  ">
    <div class="pagination">

        <!-- Botones de páginas numeradas -->
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <button onclick="location.href='?page=<?php echo $i; ?>'" class="pagination-button <?php echo ($i == $current_page) ? 'active' : ''; ?>">
        <?php echo $i; ?>
      </button>
    <?php endfor; ?>
    </div>

    <!-- Mostrar los elementos de la página actual -->
    <div class="pagination">
    <!-- Botón de página anterior -->
    <?php if ($current_page > 1): ?>
      <button onclick="location.href='?page=<?php echo ($current_page - 1); ?>'" class="pagination-button">&lt;</button>
    <?php endif; ?>

            <div id="item" class="row m-auto d-flex" >
                <!-- obtener los valores de la consulta -->
                <?php while ($row = $items_result->fetch_assoc()): ?>

                <!-- contenedor de un producto -->
                <div class=" producto mx-auto row " >
                    <div class="card mb-4 product-wap rounded-0">
                        <!-- contenedor de imagen -->
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-producto img-fluid" src="data:image/png; base64, <?php echo base64_encode( $row['imagen']); ?>" alt="..." />
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-end justify-content-end">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success1 text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- contenedor de especificaciones -->
                        <div class="card-body">
                            <!-- nombre del producto -->
                            <h3 class="fw-bolder"><?php echo $row['nombre'] ?></h2>
                            <h5 class="d-none d-sm-block"><?php echo $row['descripcion']; ?></h5>

                            <!-- estrellas -->
                            <div class="rating d-flex align-items-center">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                                <p class=" m-2">4.8, reseñas (24)</p>
                            </div>
                            <h4>id:14578</h4>

                            <!-- precios del producto -->
                            <div class="d-flex">
                                <div>
                                    <h5 class="">Antes:<span class="text-decoration-line-through text-dark">$<?php echo $row['precio-regu'] ?></span></h5>
                                    <h2 class="">$<?php echo $row['precio-desc'] ?></h2>
                                    <h4 class="text-success1">Ahorras:$100.00</h4>
                                </div>
                                <!-- carrito -->
                                <div class=" border-top-0 bg-transparent carrito" >
                                    <button class="btn p-2 btn-success1 " data-id="<?php echo $row['id']; ?>" href="#">
                                        <i class="fa fa-lg fa-cart-plus text-white p-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <!-- Fin contenedor de especificaciones -->
                    </div>
                </div>
            <!-- Fin contenedor de un producto -->
                 
             <!-- Fin de la consulta -->
             <?php endwhile; ?>
    </div>
            <!-- Botón de página siguiente -->
            <?php if ($current_page < $total_pages): ?>
      <button onclick="location.href='?page=<?php echo ($current_page + 1); ?>'" class="pagination-button">&gt;</button>
    <?php endif; ?>
    </div>

</div>