<div class="section font-semibold px-16 text-gray-800 fixed w-full top-0 flex header_section bg-red-500 shadow z-10">
  <div class="sub_head flex my-auto py-3">
    <a href="<?php echo 'http://'.APP_HOST.'/'; ?>"><div class="logo w-14"><img class="w-full" src="<?php echo 'http://'.APP_HOST.'/public/images/pizza-logo.png'; ?>" alt="" /></div></a>
    <div class="text ml-2 my-auto flex-none"><a href="<?php echo 'http://'.APP_HOST.'/'; ?>">Pizzaria La Bilonheza</a></div>
  </div>
  <div class="sub_head ml-auto flex space-x-8 my-auto">
    <div class="h_btns cursor-pointer hover:text-gray-100 px-4 py-2.5"><a href="<?php echo 'http://'.APP_HOST.'/'; ?>">Home</a></div>
    <div class="h_btns cursor-pointer hover:text-gray-100 px-4 py-2.5"><a href="<?php echo 'http://'.APP_HOST.'/pizza/index'; ?>">Pizza</a></div>
    <div class="h_btns cursor-pointer hover:text-gray-100 px-4 py-2.5"><a href="<?php echo 'http://'.APP_HOST.'/pizza/pedido'; ?>">Pedidos</a></div>
    <?php if(empty($_SESSION['loged'])){ ?><div class="h_btns cursor-pointer hover:text-gray-100 px-4 py-2.5"><a href="<?php echo 'http://'.APP_HOST.'/home/login'; ?>">Login</a></div> <?php } else { ?>
    <div class="h_btns cursor-pointer hover:text-gray-100 px-4 py-2.5">
      <a href="<?php echo 'http://'.APP_HOST.'/user/logout'; ?>" class="text-lg">
        <div class="flex space-x-2">
          <p>LOGOUT</p> 
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
</div>

