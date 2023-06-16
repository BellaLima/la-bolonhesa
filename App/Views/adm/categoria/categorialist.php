<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <button class="block uppercase mx-auto mt-5 shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded"><a href="<?php echo 'http://'.APP_HOST.'/admin/categoriacreate/' ?>">Cadastrar Categoria</a></button>

    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">IMAGEM</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">NOME</th>
                <th scope="col" class="px-6 py-4 font-medium flex justify-end text-gray-900">AÇÕES</th>
            </tr>
        </thead>
        <?php 
            if(empty($categorias)){
        ?>
            <tbody>
                <tr class="border-b even:dark:bg-gray-700">
                    <td class="text-center border-b border-t mb-6 rounded-lg p-4 bg-gray-300 shadow-lg border-gray-dark bg-black-dark py-10" colspan="9">
                        <img class="w-1/2 md:w-[300px] mx-auto object-contain" src="<?php echo 'http://'.APP_HOST.'/public/images/no_data_found.png'; ?>" alt=""/>
                        <h6 class="text-black font-bold text-base text-center mt-3">Sem dados para exibir.</h6>
                        <p class="text-black text-center font-semibold text-xs">No momento, não há dados para exibir nesta lista.</p>
                    </td>
                </tr>
            </tbody>
        <?php 
            } else {
        ?>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php 
                // (new Debug())->dd($categorias);
            
                foreach($categorias as $categoria){
            ?>
                    <tr class="border-b border-black-light text-black hover:bg-gray-dark">
                        <td class="px-3 py-3 font-bold uppercase"><?php echo $categoria['nome']; ?></td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-20 h-20 hidden sm:table-cell">
                                        <img class="w-full h-full rounded-full"
                                            src="<?php echo 'http://'.APP_HOST.'/public/images/uploads/'.$categoria['imagem']; ?>"
                                            alt="" />
                                    </div>
                                </div>
                            </td>
                        <td class="px-3 py-3">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="<?php echo 'http://'.APP_HOST.'/categoria/categoriadelete/'.$categoria['id']; ?>">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                    x-tooltip="tooltip"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="<?php echo 'http://'.APP_HOST.'/admin/categoriaedit/'.$categoria['id']; ?>">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                                    x-tooltip="tooltip"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                    />
                                </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
            <?php 
                }
            ?>
            </tbody>
        <?php 
            }
         ?>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        
        </tbody>
    </table>
</div>