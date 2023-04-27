<?php
include dirname(__DIR__,1)."/Includes/header.inc.php";
include dirname(__DIR__,1)."/Views/modal/modalTemplate.php";
?>

<body>
    <div>
        <button id="modalBtn" class="modal" style="position: absolute;">Open Modal</button>
    </div>
</body>
<script>
    // When the user clicks on the button, open the modal
$('.modalBtn').on('click',function(){
    $('#modalTemplate').show();
});
</script>