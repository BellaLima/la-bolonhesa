
<!-- This is an example component -->
<div class=" bg-gray-900">
    <div class="max-w-2xl mx-auto text-white py-10">
        <div class="mt-5 text-center">
            <h3 class="text-3xl mb-3"> A Melhor Pizzaria da Regiao </h3>
            <p> Venha logo Saboriar nossas deliciosa Pizza </p>
        </div>
        <div class="mt-10 flex flex-col md:flex-row md:justify-between items-center text-sm text-gray-400">
            <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; Pedro Emanuel, 2023. </p>
            <div class="order-1 md:order-2">
                <span class="px-2">About us</span>
                <span class="px-2 border-l">Contact us</span>
                <span class="px-2 border-l">Privacy Policy</span>
            </div>
        </div>
    </div>
</div>

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