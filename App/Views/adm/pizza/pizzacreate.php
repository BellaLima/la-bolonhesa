<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
        <h1 class="text-xl font-semibold">Cadastro de pizza<span class="font-normal"> Preencha tudo corretamente</span></h1>
        <form id="form-pizzacreate" action="<?php echo 'http://'.APP_HOST.'/pizza/pizzastore'; ?>" class="mt-6">

            <div class="mb-3">
                <label for="nome" class="block text-xs font-semibold text-gray-700 uppercase">NOME</label>
                <input id="nome" type="text" name="nome" placeholder="Calabresa" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="imagem" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Imagem:</label>
                <input id="imagem" type="file" name="imagem" autocomplete="imagem" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="categoria" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Categoria:</label>
                <select id="categoria" name="categoria" class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Selecione Uma Categoria</option>
                    <?php foreach($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria['id']; ?>" ><?php echo $categoria['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tamanho" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Tamanho:</label>
                <select id="tamanho" name="tamanho" class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Selecione um Tamanho</option>
                    <?php foreach($tamanhos as $tamanho) { ?>
                    <option value="<?php echo $tamanho['id']; ?>" ><?php echo $tamanho['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="descricao" class="block text-xs font-semibold text-gray-700 uppercase">Descricao</label>
                <textarea cols="40" rows="5" id="descricao" type="text" name="descricao" placeholder="descrição" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required ></textarea>
            </div>

            <div class="mb-3">
                <label for="preco_base" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Preço Base:</label>
                <input id="preco_base" type="text" name="preco_base" placeholder="R$ 5.000,00" autocomplete="preco_base" class="preco_base block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Cadastrar
            </button>
         </form>
    </div>
</div>