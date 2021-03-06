
<section class="title">
    <header class="header container-fluid">
        <h3>Todo List</h3>
    </header>    
</section>
<section class="content" style="margin-top:20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button data-mode="new" type="button" class="btn btn-primary" data-toggle="modal" data-target="#workModal">Add work</button>
            </div>
            <div class="col-md-12 table-work">
                <?= require_once('view/works/table.php') ?>
            </div>
        </div> 
    </div>
    <?= require_once('view/modals/modal_work.php') ?>
    <?= require_once('view/modals/modal_error.php') ?>
    <footer class="footer">
        <div class="container-fluid">
            <a href="/index.php?controller=calendar">Work Management</a>
        </div>
    </footer>
</section>
<script src="../Js/main.js"></script>
