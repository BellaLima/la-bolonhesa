<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
        <h1 class="text-xl font-semibold">Cadastro de Tamanhos<span class="font-normal"> Preencha tudo corretamente</span></h1>
        <form id="form-tamanhocreate" action="<?php echo 'http://'.APP_HOST.'/tamanho/tamanhostore'; ?>" class="mt-6">

            <div class="mb-3">
                <label for="nome" class="block text-xs font-semibold text-gray-700 uppercase">NOME</label>
                <input id="nome" type="text" name="nome" placeholder="Medio" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="multiplicador" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">Multiplicador:</label>
                <input id="multiplicador" type="text" name="multiplicador" placeholder="0.78" autocomplete="multiplicador" class="multiplicador block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Cadastrar
            </button>
            <!-- <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p> -->
        </form>
    </div>
</div>