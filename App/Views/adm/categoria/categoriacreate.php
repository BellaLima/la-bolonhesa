<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
        <h1 class="text-xl font-semibold">Cadastro de Categoria<span class="font-normal"> Preencha tudo corretamente</span></h1>
        <form id="form-categoriacreate" action="<?php echo 'http://'.APP_HOST.'/categoria/categoriastore'; ?>" class="mt-6">

            <div class="mb-3">
                <label for="nome" class="block text-xs font-semibold text-gray-700 uppercase">NOME</label>
                <input id="nome" type="text" name="nome" placeholder="Medio" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="imagem" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Imagem:</label>
                <input id="imagem" type="file" name="imagem" placeholder="0.78" autocomplete="imagem" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Cadastrar
            </button>
         </form>
    </div>
</div>