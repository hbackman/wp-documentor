<?php defined('ABSPATH') || exit; ?>

<?php if (false): ?>
  <header class="bg-white h-16 px-4 flex flex-row items-center border-b border-[#ebebeb]">
    <button id="wpdocumentor-navigation-toggle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </button>
  </header>
<?php else: ?>
  <div class="bg-white h-16 p-4 border-b border-[#ebebeb] z-50 top-0 md:hidden" style="position:sticky;">
    <button id="wpdocumentor-navigation-toggle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
<?php endif; ?>