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
    <div class="h_btns">
    <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown hover <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
    </div>
    </div>
    <?php } ?>
  </div>
</div>


<button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown hover <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
      </li>
    </ul>
</div>