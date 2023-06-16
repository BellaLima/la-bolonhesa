<nav class="font-sans flex flex-col text-center text-white sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-gray-900 shadow sm:items-baseline w-full">
  <div class="mb-2 sm:mb-0 font-semibold font-heading space-x-12">
    <a href="/home" class="text-2xl no-underline hover:text-blue-dark">Administrativo</a>
  </div>
  <div class="flex font-semibold font-heading space-x-12">
    <a href="<?php echo 'http://'.APP_HOST.'/admin/pedidolist'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">Pedidos</a>
    <a href="<?php echo 'http://'.APP_HOST.'/admin/pizzalist'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">Pizzas</a>
    <a href="<?php echo 'http://'.APP_HOST.'/admin/userlist'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">Usuarios</a>
    <a href="<?php echo 'http://'.APP_HOST.'/admin/categorialist'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">Categorias</a>
    <a href="<?php echo 'http://'.APP_HOST.'/admin/tamanholist'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">Tamanhos</a>
    <a href="<?php echo 'http://'.APP_HOST.'/user/logout'; ?>" class="text-lg hover:text-gray-200 no-underline hover:text-blue-dark ml-2">
      <div class="flex space-x-2">
        <p>LOGOUT</p> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
    </a>
  </div>
</nav>