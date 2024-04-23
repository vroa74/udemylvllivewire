<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | {{$title ?? config('app.name')}} </title>
    @include("components.layouts.partial.styles")
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!--navbar  -->
    @include("components.layouts.partial.navbar")

    <!-- Main Sidebar Container -->
    @include("components.layouts.partial.sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include("components.layouts.partial.content-header")
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{ $slot }}


            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    @include("components.layouts.partial.footer")

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include("components.layouts.partial.scripts")
<script>
    document.addEventListener('livewire:init', ()=> {
        livewire.on('closeModal', () => {
            $('#exampleModal').modal('hide');
        });
    });
</body>
</html>
