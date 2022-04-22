<?php
include "myHeader.php";
?>
<div class="container-fluid table-body">
    <div class="container overflow-auto shadow-lg p-3 bg-white rounded user-details-table">


        <div class="biodata-table">
            <h3>BIO DATA TABLE</h3>
            <table id="biodata-tbl" class="table"></table>
        </div>
        
        <div class="idcard-table">
            <h3>ID CARD TABLE</h3>
            <table id="idcard-tbl" class="table"></table>
        </div>

    </div>
</div>

<div class="load-form"></div>

<script type="module" src="js/table.js"></script>
</body>

</html>