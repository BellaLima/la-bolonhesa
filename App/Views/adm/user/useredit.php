<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
        <h1 class="text-xl font-semibold">Editar Usuario<span class="font-normal"> Preencha tudo corretamente</span></h1>
        <form id="form-useredit" action="<?php echo 'http://'.APP_HOST.'/user/userupdate'; ?>" class="mt-6">

            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

            <div class="flex justify-between gap-3">
                <div class="w-1/2 mb-3 flex items-center pl-4 border border-gray-200 dark:border-gray-700">
                    <input <?php echo $usuario['nivel'] == 1 ? 'checked' : '' ?> id="type-user-1" type="radio" value="1" name="type-user" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="type-user-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900">Administrador</label>
                </div>
                <div class="w-1/2 mb-3 flex items-center pl-4 border border-gray-200 dark:border-gray-700">
                    <input <?php echo $usuario['nivel'] == 0 ? 'checked' : '' ?> id="type-user-2" type="radio" value="0" name="type-user" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="type-user-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900">Cliente</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="nome" class="block text-xs font-semibold text-gray-700 uppercase">NOME</label>
                <input id="nome" type="text" name="nome" placeholder="Paulo Tacca" value="<?php echo $usuario['nome']; ?>" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="paulo.tacca@fatec.sp.gov.br" value="<?php echo $usuario['email']; ?>" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="cpf" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">CPF:</label>
                <input id="cpf" type="text" name="cpf" placeholder="589.642.158-75" value="<?php echo $usuario['cpf']; ?>" autocomplete="cpf" class="cpf block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="telefone" class="block mt-2 text-xs font-semibold text-gray-700 uppercase">TELEFONE:</label>
                <input id="telefone" type="text" name="telefone" placeholder="(18) 99675-1896" value="<?php echo $usuario['telefone']; ?>" autocomplete="telefone" class="telefone block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            <div class="mb-3">
                <label for="senha" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Senha</label>
                <input id="senha" type="senha" name="senha" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            </div>

            
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Editar
            </button>
            <!-- <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p> -->
        </form>
    </div>
</div>