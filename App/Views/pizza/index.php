<section class="bg-white mt-10 md-10">
    <div class="container px-6 py-10 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-3">
        <?php for($cont = 0; $cont <= 9; $cont++) {?>
			<div class="lg:flex dark:bg-gray-800 mb-6 rounded-lg p-4 shadow-md">
                <img class="object-cover w-full h-56 rounded-lg lg:w-75" src="https://images.unsplash.com/photo-1593504049359-74330189a345?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        CALABRESA
                    </a>
                    
                    <span class="text-sm text-gray-500 font-semibold dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>