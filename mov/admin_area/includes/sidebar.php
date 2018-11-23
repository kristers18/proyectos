<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Panel de administrador</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Perfil


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Reservas

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Clientes

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Categorias

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Cerrar sesión

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Tablero

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Productos

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Insertar Producto </a>
</li>

<li>
<a href="index.php?view_products"> Ver Producto</a>
</li>


</ul>

</li><!-- Products li Ends  -->
<!-- *******************Esto se comento ********************-->

<li><!-- Bundles Li Starts --->

<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Conferencias

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Insertar Conferencia </a>
</li>

<li>
<a href="index.php?view_bundles"> Ver Conferencia </a>
</li>

</ul>

</li><!-- Bundles Li Ends --->

<li><!-- relations li Starts -->

<a href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->

<i class="fa fa-fw fa-retweet"></i> Insertar relacion de las conferencias

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="relations" class="collapse"><!-- collapse Starts -->

<li>

<a href="index.php?insert_rel"> Insertar Relación </a>

</li>


<li>

<a href="index.php?view_rel"> Mostrar Relación</a>

</li>

</ul><!-- collapse Ends -->


</li><!-- relations li Ends -->

<li><!-- Icons Li Starts -->

<a href="#" data-toggle="collapse" data-target="#icons">

<i class="fa fa-fw fa-retweet"> </i> Iconos

<i class="fa fa-fw fa-caret-down" ></i>

</a>

<ul id="icons" class="collapse"><!-- Icons Ul Starts -->

<li>
<a href="index.php?insert_icon"> Insert Icono </a>
</li>


<li>
<a href="index.php?view_icons"> Ver Icono </a>
</li>

</ul><!-- Icons Ul Ends -->

</li><!-- Icons Li Ends -->


<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Conferencista

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Insertar Conferencista </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Ver Conferencista</a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Categoria

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Insertar Categoria</a>
</li>

<li>
<a href="index.php?view_p_cats"> Ver categoria </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Talleres

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Insertar Taller</a>
</li>

<li>
<a href="index.php?view_cats"> Ver Talleres</a>
</li>


</ul>

</li><!-- li Ends  -->


<li><!-- boxes section li Starts -->

<a href="#" data-toggle="collapse" data-target="#boxes"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows"></i> Anuncios

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="boxes" class="collapse">

<li>

<a href="index.php?insert_box"> Insertar Anuncio </a>

</li>


<li>

<a href="index.php?view_boxes"> Ver Anuncios </a>

</li>

</ul>

</li><!--boxes section li Ends -->

<!-- *******************Esto se comento ********************
<li>services section li Starts

<a href="#" data-toggle="collapse" data-target="#services">

<i class="fa fa-fw fa-briefcase"></i> Servicios

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="services" class="collapse">

<li>
<a href="index.php?insert_service"> Insertar Servicios</a>
</li>

<li>
<a href="index.php?view_services"> Ver Servicios </a>
</li>

</ul>

</li>services section li Ends -->


<!-- *******************Esto se comento ********************-->
<!-- <li>contact us li Starts

<a href="#" data-toggle="collapse" data-target="#contact_us">anchor Starts

<i class="fa fa-fw fa-pencil"> </i> Contacto

<i class="fa fa-fw fa-caret-down"></i>

</a>anchor Ends

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Editar Contacto </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Insertar Tipo de consulta</a>

</li>

<li>

<a href="index.php?view_enquiry"> Ver tipo de consulta </a>

</li>

</ul>

</li>contact us li Ends -->
<!-- *******************Esto se comento ********************-->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Editar pagina

</a>

</li><!-- about us li Ends -->

<!-- *******************Esto se comento ********************
<li>Coupons Section li Starts

<a href="#" data-toggle="collapse" data-target="#coupons">anchor Starts

<i class="fa fa-fw fa-arrows-v"></i> Cupones

<i class="fa fa-fw fa-caret-down"></i>

</a>anchor Ends

<ul id="coupons" class="collapse">ul collapse Starts

<li>
<a href="index.php?insert_coupon"> Insertar Cupon </a>
</li>

<li>
<a href="index.php?view_coupons"> Ver cupon</a>
</li>

</ul>ul collapse Ends

</li>Coupons Section li Ends -->

<li><!-- slide li Starts -->

<a href="#" data-toggle="collapse" data-target="#slides">

<i class="fa fa-fw fa-gear"></i> Mi carrusel 

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="slides" class="collapse">

<li>
<a href="index.php?insert_slide"> Insertar carrusel</a>
</li>

<li>
<a href="index.php?view_slides"> Ver carrusel </a>
</li>


</ul>

</li><!-- slide li Ends -->

<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Condiciones

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Insertar Condiciones </a> 
</li>

<li>
<a href="index.php?view_terms"> Ver Condiciones </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->
<!-- *******************Esto se comento ********************-->

<!-- <li>Edit Css li Starts

<a href="index.php?edit_css">

<i class="fa fa-fw fa-list"></i> Editar CSS

</a>

</li>Edit Css li Ends -->
<!-- *******************Esto se comento ********************-->

<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Ver Clientes

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Ver ordenes

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Ver Pagos

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Usuarios

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Insertar Usuarios </a>
</li>

<li>
<a href="index.php?view_users"> Ver Usuarios </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Editar Perfil</a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Cerrar Sesión

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>