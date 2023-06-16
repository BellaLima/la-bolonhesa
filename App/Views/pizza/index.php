<section class="bg-white mt-10 md-10">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
        <?php foreach($pizzas as $pizza){?>
			<div class="lg:flex dark:bg-gray-800 mb-6 rounded-lg p-4 shadow-md">
                <img class="object-cover w-full  w-50 h-20 rounded-lg" src="<?php echo 'http://'.APP_HOST.'/public/images/uploads/'.$pizza['imagem']; ?>" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        <?php echo $pizza['nome']; ?>
                    </a>
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                    <?php 
                        foreach($categorias as $categoria){
                            if($categoria['id'] == $pizza['categoria_id']){
                                echo $categoria['nome'];
                            }
                        }
                    ?>
                    </a>
                    
                    <span class="text-sm text-gray-500 font-semibold dark:text-gray-300"><?php echo $pizza['descricao']; ?></span>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>