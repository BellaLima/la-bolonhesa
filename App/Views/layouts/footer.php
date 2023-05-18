

<?php 
    if(!empty($data['script'])){
        foreach ($data['script'] as $s): 
?>
        <script src="<?php echo 'http://'.APP_HOST.'/public/js/'.$s.'.js'; ?>"></script>
<?php 
    endforeach; 
    }
?>
</body>
</html>