<script type='text/javascript'>
    alert('Hoşgendiniz"b191210003"'); 
</script>
<?php
               
    if($_POST['email']=='b191210003@sakarya.edu.tr' && $_POST['sifre']=='123')
    {
        echo " Hoşgeldiniz 'b191210003' "; return;
    }

    else header("Location:Login.html")
?>