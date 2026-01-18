<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Real Estate - KFBCL | Mircofinance</title>

  <link rel="icon" href="../../../assets/favicon.ico">
  <link href="../../../assets/style.css" rel="stylesheet">

</head>

<body x-data="{ page: 'profile', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false, 'addClientModal': false, 'addUnitModal' : false, 'editLoanTypeModal': false ,}"
      x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{'dark bg-gray-900': darkMode === true}">
<!-- ===== Preloader Start ===== -->
<div x-show="loaded"
     x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
     class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
  <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
</div>
<!-- ===== Preloader End ===== -->

<!-- ===== Page Wrapper Start ===== -->
<div class="flex h-screen overflow-hidden">
  <!-- ===== Sidebar Start ===== -->
  <aside :class="sidebarToggle ? 'translate-x-0 xl:w-[90px]' : '-translate-x-full'"
             class="sidebar fixed top-0 left-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-auto border-r border-gray-200 bg-white px-5 transition-all duration-300 xl:static xl:translate-x-0 dark:border-gray-800 dark:bg-black"
             @click.outside="sidebarToggle = false">
        <!-- SIDEBAR HEADER -->
        <div :class="sidebarToggle ? 'justify-center' : 'justify-between'"
             class="sidebar-header flex items-center gap-2 pt-8 pb-7">
          <a href="index.php">
            <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
              <img class="dark:hidden" src="../../../assets/src/images/logo/KFCBL-Logo-transparent.png" alt="Logo" />
              <img class="hidden dark:block" src="../../../assets/src/images/logo/KFCBL-Logo-transparent.png" alt="Logo"/>
            </span>

            <img class="logo-icon" :class="sidebarToggle ? 'xl:block' : 'hidden'" src="../../../assets/src/images/logo/logo-icon.svg" alt="Logo"/>
          </a>
        </div>
        <!-- SIDEBAR HEADER -->

        <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
          <!-- Sidebar Menu -->
          <nav x-data="{selected: $persist('Dashboard')}">
            <!-- Menu Group -->
            <div>
              <h3 class="mb-4 text-xs leading-[20px] text-gray-400 uppercase">
      <span class="menu-group-title"
            :class="sidebarToggle ? 'xl:hidden' : ''">
        MENU
      </span>
                <svg
                        :class="sidebarToggle ? 'xl:block hidden' : 'hidden'"
                        class="menu-group-icon mx-auto fill-current"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                          fill="currentColor"
                  />
                </svg>
              </h3>

              <ul class="mb-6 flex flex-col gap-1">
                <!-- Menu Item Dashboard -->
                <li>
                  <a href="index.php" @click="selected = (selected === 'Dashboard' ? '':'Dashboard')" class="menu-item group"
                     :class=" (selected === 'Dashboard') || (page === 'dashboard') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg :class="(selected === 'Dashboard') || (page === 'dashboard') ? 'menu-item-icon-active'  :'menu-item-icon-inactive'"
                         width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                            fill="currentColor"/>
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Dashboard</span>
                  </a>
                </li>

                <!-- Menu Item Appointments -->
                <li>
                  <a href="appointments.php" @click="selected = (selected === 'Appointments' ? '':'Appointments')" class="menu-item group"
                     :class="(selected === 'Appointments') || (page === 'appointments') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                      <path d="M16 3l0 4" />
                      <path d="M8 3l0 4" />
                      <path d="M4 11l16 0" />
                      <path d="M8 15h2v2h-2z" />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Appointments</span>
                  </a>
                </li>
              </ul>
            </div>

            <!-- Manage Group -->
            <div>
              <h3 class="mb-4 text-xs leading-[20px] text-gray-400 uppercase">
      <span class="menu-group-title"
            :class="sidebarToggle ? 'xl:hidden' : ''">MANAGE</span>
                <svg
                        :class="sidebarToggle ? 'xl:block hidden' : 'hidden'"
                        class="menu-group-icon mx-auto fill-current"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                          fill="currentColor"
                  />
                </svg>
              </h3>

              <ul class="mb-6 flex flex-col gap-1">
                <!-- Menu Item Users -->
                <li>
                  <a href="users.php" @click="selected = (selected === 'Users' ? '':'Users')" class="menu-item group"
                     :class=" (selected === 'Users') || (page === 'users') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Users</span>
                  </a>
                </li>

                <!-- Menu Item Bodaboda Group -->
                <li>
                  <a href="bodaboda.php" @click="selected = (selected === 'Bodaboda Group' ? '':'Bodaboda Group')" class="menu-item group"
                     :class=" (selected === 'Bodaboda Group') || (page === 'bodaboda') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                         stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-motorbike">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M5 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                      <path d="M19 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                      <path d="M7.5 14h5l4 -4h-10.5m1.5 4l4 -4" />
                      <path d="M13 6h2l1.5 3l2 4" />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Bodaboda Group</span>
                  </a>
                </li>

                <!-- Menu Item Loans -->
                <li>
                  <a href="loans.php" @click="selected = (selected === 'Loans' ? '':'Loans')" class="menu-item group"
                     :class="(selected === 'Loans') || (page === 'loans') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="24"
                         height="24"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.5"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                      <path d="M3 10l18 0" />
                      <path d="M7 15l.01 0" />
                      <path d="M11 15l2 0" />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Loans</span>
                  </a>
                </li>

                <!-- Menu Item Real-Estate -->
                <li>
                  <a href="real-estate.php" @click="selected = (selected === 'Real Estate' ? '':'Real Estate')" class="menu-item group"
                     :class="(selected === 'Real Estate') || (page === 'real estate') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M3 21l18 0" />
                      <path d="M9 8l1 0" />
                      <path d="M9 12l1 0" />
                      <path d="M9 16l1 0" />
                      <path d="M14 8l1 0" />
                      <path d="M14 12l1 0" />
                      <path d="M14 16l1 0" />
                      <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Real Estate</span>
                  </a>
                </li>
              </ul>
            </div>

            <!-- Settings Group -->
            <div>
              <h3 class="mb-4 text-xs leading-[20px] text-gray-400 uppercase">
             <span class="menu-group-title"
            :class="sidebarToggle ? 'xl:hidden' : ''">SETTINGS</span>
                <svg
                        :class="sidebarToggle ? 'xl:block hidden' : 'hidden'"
                        class="menu-group-icon mx-auto fill-current"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
                          fill="currentColor"
                  />
                </svg>
              </h3>

              <ul class="mb-6 flex flex-col gap-1">
                <!-- Menu Item Profile -->
                <li>
                  <a href="profile.php" @click="selected = (selected === 'Profile' ? '':'Profile')"
                     class="menu-item group"
                     :class=" (selected === 'Profile') && (page === 'profile') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg
                            :class="(selected === 'Profile') && (page === 'profile') ?  'menu-item-icon-active'  :'menu-item-icon-inactive'"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 14.1526 4.3002 16.1184 5.61936 17.616C6.17279 15.3096 8.24852 13.5955 10.7246 13.5955H13.2746C15.7509 13.5955 17.8268 15.31 18.38 17.6167C19.6996 16.119 20.5 14.153 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM17.0246 18.8566V18.8455C17.0246 16.7744 15.3457 15.0955 13.2746 15.0955H10.7246C8.65354 15.0955 6.97461 16.7744 6.97461 18.8455V18.856C8.38223 19.8895 10.1198 20.5 12 20.5C13.8798 20.5 15.6171 19.8898 17.0246 18.8566ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9991 7.25C10.8847 7.25 9.98126 8.15342 9.98126 9.26784C9.98126 10.3823 10.8847 11.2857 11.9991 11.2857C13.1135 11.2857 14.0169 10.3823 14.0169 9.26784C14.0169 8.15342 13.1135 7.25 11.9991 7.25ZM8.48126 9.26784C8.48126 7.32499 10.0563 5.75 11.9991 5.75C13.9419 5.75 15.5169 7.32499 15.5169 9.26784C15.5169 11.2107 13.9419 12.7857 11.9991 12.7857C10.0563 12.7857 8.48126 11.2107 8.48126 9.26784Z"
                              fill="currentColor"
                      />
                    </svg>
                    <span class="menu-item-text"
                          :class="sidebarToggle ? 'xl:hidden' : ''">Profile</span>
                  </a>
                </li>
              </ul>
            </div>

            <!-- Logout Item -->
            <div class="mt-auto">
              <ul class="flex flex-col gap-1">
                <li>
                  <a href="../../../index.php" @click="selected = (selected === 'Logout' ? '':'Logout')" class="menu-item group"
                     :class="(selected === 'Logout') ? 'menu-item-active' : 'menu-item-inactive'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                      <path d="M15 12h-12l3 -3" />
                      <path d="M6 15l-3 -3" />
                    </svg>
                    <span class="menu-item-text" :class="sidebarToggle ? 'xl:hidden' : ''">Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- Sidebar Menu -->
        </div>
  </aside>
  <!-- ===== Sidebar End ===== -->

  <!-- ===== Content Area Start ===== -->
  <div class="relative flex flex-1 flex-col overflow-x-hidden overflow-y-auto">
    <!-- Small Device Overlay Start -->
    <div :class="sidebarToggle ? 'block xl:hidden' : 'hidden'"
         class="fixed z-50 h-screen w-full bg-gray-900/50">
    </div>
    <!-- Small Device Overlay End -->

    <!-- ===== Main Content Start ===== -->
    <main>
      <!-- ===== Header Start ===== -->
      <header x-data="{menuToggle: false}"
                  class="sticky top-0 z-99999 flex w-full border-gray-200 bg-white xl:border-b dark:border-gray-800 dark:bg-gray-900">
            <div class="flex grow flex-col items-center justify-between xl:flex-row xl:px-6">
              <div class="flex w-full items-center justify-between gap-2 border-b border-gray-200 px-3 py-3 sm:gap-4 lg:py-4 xl:justify-normal xl:border-b-0 xl:px-0 dark:border-gray-800">
                <!-- Hamburger Toggle BTN -->
                <button :class="sidebarToggle ? 'xl:bg-transparent dark:xl:bg-transparent bg-gray-100 dark:bg-gray-800' : ''"
                        class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg border-gray-200 text-gray-500 xl:h-11 xl:w-11 xl:border dark:border-gray-800 dark:text-gray-400"
                        @click.stop="sidebarToggle = !sidebarToggle">
                  <svg
                          class="hidden fill-current xl:block"
                          width="16"
                          height="12"
                          viewBox="0 0 16 12"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0.583252 1C0.583252 0.585788 0.919038 0.25 1.33325 0.25H14.6666C15.0808 0.25 15.4166 0.585786 15.4166 1C15.4166 1.41421 15.0808 1.75 14.6666 1.75L1.33325 1.75C0.919038 1.75 0.583252 1.41422 0.583252 1ZM0.583252 11C0.583252 10.5858 0.919038 10.25 1.33325 10.25L14.6666 10.25C15.0808 10.25 15.4166 10.5858 15.4166 11C15.4166 11.4142 15.0808 11.75 14.6666 11.75L1.33325 11.75C0.919038 11.75 0.583252 11.4142 0.583252 11ZM1.33325 5.25C0.919038 5.25 0.583252 5.58579 0.583252 6C0.583252 6.41421 0.919038 6.75 1.33325 6.75L7.99992 6.75C8.41413 6.75 8.74992 6.41421 8.74992 6C8.74992 5.58579 8.41413 5.25 7.99992 5.25L1.33325 5.25Z"
                            fill=""
                    />
                  </svg>

                  <svg
                          :class="sidebarToggle ? 'hidden' : 'block xl:hidden'"
                          class="fill-current xl:hidden"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M3.25 6C3.25 5.58579 3.58579 5.25 4 5.25L20 5.25C20.4142 5.25 20.75 5.58579 20.75 6C20.75 6.41421 20.4142 6.75 20 6.75L4 6.75C3.58579 6.75 3.25 6.41422 3.25 6ZM3.25 18C3.25 17.5858 3.58579 17.25 4 17.25L20 17.25C20.4142 17.25 20.75 17.5858 20.75 18C20.75 18.4142 20.4142 18.75 20 18.75L4 18.75C3.58579 18.75 3.25 18.4142 3.25 18ZM4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75L12 12.75C12.4142 12.75 12.75 12.4142 12.75 12C12.75 11.5858 12.4142 11.25 12 11.25L4 11.25Z"
                            fill=""
                    />
                  </svg>

                  <!-- cross icon -->
                  <svg
                          :class="sidebarToggle ? 'block xl:hidden' : 'hidden'"
                          class="fill-current"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.21967 7.28131C5.92678 6.98841 5.92678 6.51354 6.21967 6.22065C6.51256 5.92775 6.98744 5.92775 7.28033 6.22065L11.999 10.9393L16.7176 6.22078C17.0105 5.92789 17.4854 5.92788 17.7782 6.22078C18.0711 6.51367 18.0711 6.98855 17.7782 7.28144L13.0597 12L17.7782 16.7186C18.0711 17.0115 18.0711 17.4863 17.7782 17.7792C17.4854 18.0721 17.0105 18.0721 16.7176 17.7792L11.999 13.0607L7.28033 17.7794C6.98744 18.0722 6.51256 18.0722 6.21967 17.7794C5.92678 17.4865 5.92678 17.0116 6.21967 16.7187L10.9384 12L6.21967 7.28131Z"
                            fill=""
                    />
                  </svg>
                </button>
                <!-- Hamburger Toggle BTN -->

                <a href="index.php" class="xl:hidden">
                  <img class="dark:hidden" src="../../../assets/src/images/logo/KFCBL-Logo-transparent.png" alt="Logo" />
                  <img
                          class="hidden dark:block"
                          src="../../../assets/src/images/logo/KFCBL-Logo-transparent.png"
                          alt="Logo"
                  />
                </a>

                <!-- Application nav menu button -->
                <button class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg text-gray-700 hover:bg-gray-100 xl:hidden dark:text-gray-400 dark:hover:bg-gray-800"
                        :class="menuToggle ? 'bg-gray-100 dark:bg-gray-800' : ''"
                        @click.stop="menuToggle = !menuToggle">
                  <svg
                          class="fill-current"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M5.99902 10.4951C6.82745 10.4951 7.49902 11.1667 7.49902 11.9951V12.0051C7.49902 12.8335 6.82745 13.5051 5.99902 13.5051C5.1706 13.5051 4.49902 12.8335 4.49902 12.0051V11.9951C4.49902 11.1667 5.1706 10.4951 5.99902 10.4951ZM17.999 10.4951C18.8275 10.4951 19.499 11.1667 19.499 11.9951V12.0051C19.499 12.8335 18.8275 13.5051 17.999 13.5051C17.1706 13.5051 16.499 12.8335 16.499 12.0051V11.9951C16.499 11.1667 17.1706 10.4951 17.999 10.4951ZM13.499 11.9951C13.499 11.1667 12.8275 10.4951 11.999 10.4951C11.1706 10.4951 10.499 11.1667 10.499 11.9951V12.0051C10.499 12.8335 11.1706 13.5051 11.999 13.5051C12.8275 13.5051 13.499 12.8335 13.499 12.0051V11.9951Z"
                            fill=""
                    />
                  </svg>
                </button>
                <!-- Application nav menu button -->

              </div>

              <div :class="menuToggle ? 'flex' : 'hidden'"
                   class="shadow-theme-md w-full items-center justify-between gap-4 px-5 py-4 xl:flex xl:justify-end xl:px-0 xl:shadow-none">
                <div class="2xsm:gap-3 flex items-center gap-2">
                </div>

                <!-- User Area -->
                <div
                        class="relative"
                        x-data="{ dropdownOpen: false }"
                        @click.outside="dropdownOpen = false"
                >
                  <a
                          class="flex items-center text-gray-700 dark:text-gray-400"
                          href="#"
                          @click.prevent="dropdownOpen = ! dropdownOpen"
                  >
                    

                    <span class="text-theme-sm mr-1 block font-medium"> Kamau Njunge </span>

                    <svg
                            :class="dropdownOpen && 'rotate-180'"
                            class="stroke-gray-500 dark:stroke-gray-400"
                            width="18"
                            height="20"
                            viewBox="0 0 18 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                              d="M4.3125 8.65625L9 13.3437L13.6875 8.65625"
                              stroke=""
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                      />
                    </svg>
                  </a>

                  <!-- Dropdown Start -->
                  <div x-show="dropdownOpen"
                       class="shadow-theme-lg dark:bg-gray-dark absolute right-0 mt-[17px] flex w-[260px] flex-col rounded-2xl border border-gray-200 bg-white p-3 dark:border-gray-800">
                    <div>
                      <span
                              class="text-theme-sm block font-medium text-gray-700 dark:text-gray-400"
                      >
                        Kamau Njunge
                      </span>
                      <span
                              class="text-theme-xs mt-0.5 block text-gray-500 dark:text-gray-400"
                      >
                        <a href="../../../cdn-cgi/l/email-protection.php" class="__cf_email__" data-cfemail="8ffdeee1ebe0e2fafceafdcfffe6e2e5e0a1ece0e2">[email&#160;protected]</a>
                      </span>
                    </div>

                    <ul
                            class="flex flex-col gap-1 border-b border-gray-200 pt-4 pb-3 dark:border-gray-800"
                    >
                      <li>
                        <a
                                href="profile.php"
                                class="group text-theme-sm flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
                        >
                          <svg
                                  class="fill-gray-500 group-hover:fill-gray-700 dark:fill-gray-400 dark:group-hover:fill-gray-300"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 14.1526 4.3002 16.1184 5.61936 17.616C6.17279 15.3096 8.24852 13.5955 10.7246 13.5955H13.2746C15.7509 13.5955 17.8268 15.31 18.38 17.6167C19.6996 16.119 20.5 14.153 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM17.0246 18.8566V18.8455C17.0246 16.7744 15.3457 15.0955 13.2746 15.0955H10.7246C8.65354 15.0955 6.97461 16.7744 6.97461 18.8455V18.856C8.38223 19.8895 10.1198 20.5 12 20.5C13.8798 20.5 15.6171 19.8898 17.0246 18.8566ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9991 7.25C10.8847 7.25 9.98126 8.15342 9.98126 9.26784C9.98126 10.3823 10.8847 11.2857 11.9991 11.2857C13.1135 11.2857 14.0169 10.3823 14.0169 9.26784C14.0169 8.15342 13.1135 7.25 11.9991 7.25ZM8.48126 9.26784C8.48126 7.32499 10.0563 5.75 11.9991 5.75C13.9419 5.75 15.5169 7.32499 15.5169 9.26784C15.5169 11.2107 13.9419 12.7857 11.9991 12.7857C10.0563 12.7857 8.48126 11.2107 8.48126 9.26784Z"
                                    fill=""
                            />
                          </svg>
                          Profile
                        </a>
                      </li>
                    </ul>
                    <a href="../../../index.php"
                            class="group text-theme-sm mt-3 flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
                    >
                      <svg
                              class="fill-gray-500 group-hover:fill-gray-700 dark:group-hover:fill-gray-300"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M15.1007 19.247C14.6865 19.247 14.3507 18.9112 14.3507 18.497L14.3507 14.245H12.8507V18.497C12.8507 19.7396 13.8581 20.747 15.1007 20.747H18.5007C19.7434 20.747 20.7507 19.7396 20.7507 18.497L20.7507 5.49609C20.7507 4.25345 19.7433 3.24609 18.5007 3.24609H15.1007C13.8581 3.24609 12.8507 4.25345 12.8507 5.49609V9.74501L14.3507 9.74501V5.49609C14.3507 5.08188 14.6865 4.74609 15.1007 4.74609L18.5007 4.74609C18.9149 4.74609 19.2507 5.08188 19.2507 5.49609L19.2507 18.497C19.2507 18.9112 18.9149 19.247 18.5007 19.247H15.1007ZM3.25073 11.9984C3.25073 12.2144 3.34204 12.4091 3.48817 12.546L8.09483 17.1556C8.38763 17.4485 8.86251 17.4487 9.15549 17.1559C9.44848 16.8631 9.44863 16.3882 9.15583 16.0952L5.81116 12.7484L16.0007 12.7484C16.4149 12.7484 16.7507 12.4127 16.7507 11.9984C16.7507 11.5842 16.4149 11.2484 16.0007 11.2484L5.81528 11.2484L9.15585 7.90554C9.44864 7.61255 9.44847 7.13767 9.15547 6.84488C8.86248 6.55209 8.3876 6.55226 8.09481 6.84525L3.52309 11.4202C3.35673 11.5577 3.25073 11.7657 3.25073 11.9984Z"
                                fill=""
                        />
                      </svg>

                      Logout
                    </a>
                  </div>
                  <!-- Dropdown End -->
                </div>
                <!-- User Area -->
              </div>
            </div>
      </header>
      <!-- ===== Header End ===== -->

          <div class="mx-auto max-w-(--breakpoint-2xl) p-4 pb-20 md:p-6 md:pb-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Real Estate` }">
              <div class="flex flex-wrap items-center justify-between gap-3 pb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
                <nav>
                  <ol class="flex items-center gap-1.5">
                    <li>
                      <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400" href="index.php">
                        Home
                        <svg
                                class="stroke-current"
                                width="17"
                                height="16"
                                viewBox="0 0 17 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                                  d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
                                  stroke=""
                                  stroke-width="1.2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </li>
                    <li class="text-sm text-gray-800 dark:text-white/90" x-text="pageName"></li>
                  </ol>
                </nav>
              </div>
            </div>

            <div class="space-y-6">
              <!-- real estate metrics -->
              <div class="col-span-12">
                <!-- Metric Group Two -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-4">
                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                      All Real Estate items
                    </p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          87
                        </h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                          +20%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last Year
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->

                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                      All Clients
                    </p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          53
                        </h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                          +4%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last year
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->

                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Units Sold</p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">53</h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-error-50 px-2 py-0.5 text-theme-xs font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                          -1.2%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last year
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->

                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Available Units</p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          34
                        </h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                          +7%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last year
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->
                </div>
                <!-- Metric Group Two -->
              </div>

              <!-- Units Settings Content -->
              <div class="relative bg-white dark:border-gray-800 dark:bg-white/[0.03] overflow-hidden">
                <!-- Tabbed content -->
                            <div class="rounded-xl p-6 border border-gray-200 dark:border-gray-800 border" x-data="{ activeTab: 'units' }">
                              <div class="border-b border-gray-200 dark:border-gray-800">
                                <nav class="-mb-px flex space-x-2 overflow-x-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-200 dark:[&::-webkit-scrollbar-thumb]:bg-gray-600 dark:[&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:h-1.5">
                                  <button 
                                    class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-offset-1 focus:ring-brand-500/20"
                                    :class="activeTab === 'units' 
                                      ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                      : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                    @click="activeTab = 'units'"
                                  >
                                    <!-- Bar Chart Icon -->
                                    <svg class="size-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C2.44772 3 2 3.44772 2 4V16C2 16.5523 2.44772 17 3 17H17C17.5523 17 18 16.5523 18 16V4C18 3.44772 17.5523 3 17 3H3ZM4 15V5H7V15H4ZM9 15V9H12V15H9ZM16 15H13V7H16V15Z" fill="currentColor"/>
                                    </svg>
                                    Real Estate Units
                                  </button>
                                
                                  <button 
                                    class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-offset-1 focus:ring-brand-500/20"
                                    :class="activeTab === 'clients' 
                                      ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                      : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                    @click="activeTab = 'clients'"
                                  >
                                    <!-- Calculator Icon -->
                                    <svg class="size-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5 2C3.34315 2 2 3.34315 2 5V15C2 16.6569 3.34315 18 5 18H15C16.6569 18 18 16.6569 18 15V5C18 3.34315 16.6569 2 15 2H5ZM4 6V5C4 4.44772 4.44772 4 5 4H15C15.5523 4 16 4.44772 16 5V15C16 15.5523 15.5523 16 15 16H5C4.44772 16 4 15.5523 4 15V6ZM6 7C5.44772 7 5 7.44772 5 8V13C5 13.5523 5.44772 14 6 14H14C14.5523 14 15 13.5523 15 13V8C15 7.44772 14.5523 7 14 7H6ZM7 9H9V11H7V9ZM11 9H13V11H11V9ZM7 12H9V13H7V12ZM11 12H13V13H11V12Z" fill="currentColor"/>
                                    </svg>
                                    Client List
                                  </button>

                                </nav>
                              </div>

                              <div class="pt-4">
                                <div x-show="activeTab === 'units'" style="display: none;">
                                  <!-- Real Estate Units-->
                                  <div class="space-y-8">
                                    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                                      <div class="flex flex-col gap-4 border-b border-gray-200 px-4 py-4 sm:px-5 lg:flex-row lg:items-center lg:justify-between dark:border-gray-800">
                                        <div class="flex-shrink-0">
                                          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                            Units
                                          </h3>
                                          <p class="text-sm text-gray-500 dark:text-gray-400">
                                            All your real estate units list
                                          </p>
                                        </div>
                                        <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                                          <div class="relative">
                                            <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z" fill=""></path>
                                              </svg>
                                            </span>
                                            <input type="text" placeholder="Search Unit..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden xl:w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                          </div>
                                          
                                          <div class="relative z-20 bg-transparent">
                                            <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                              <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Ownership</option>
                                              <option value="Acquired" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Acquired</option>
                                              <option value="Pending" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Pending</option>
                                              <option value="Under Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under Review</option>
                                            </select>
                                            <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                                              <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </span>
                                          </div>

                                          <div class="relative z-20 bg-transparent">
                                            <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                              <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Status</option>
                                              <option value="Available" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Available</option>
                                              <option value="Sold" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Sold</option>
                                              <option value="Under Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under Review</option>
                                              <option value="Unavailable" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Unavailable</option>
                                            </select>
                                            <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                                              <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </span>
                                          </div>

                                          <button class="text-theme-sm shadow-theme-xs inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                              <svg class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.1" d="M16.444 18H19a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h2.556M17 11V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4Z"/>
                                              </svg>

                                              Print
                                            </button>

                                          <button @click="addUnitModal = true"
                                                  class="shadow-theme-xs inline-flex flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                              <path d="M5 10.0002H15.0006M10.0002 5V15.0006" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Add Unit
                                          </button>

                                        </div>
                                      </div>
                                      <!-- Real Estate Units Table -->
                                      <div>
                                        <!-- Units Table -->
                                        <div x-data="propertiesTable()" x-init="init()">
                                          <div class="max-w-full overflow-x-auto custom-scrollbar">
                                            <table class="min-w-full">
                                              <!-- table header start -->
                                              <thead class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                                <tr>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <span class="block font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Lot No#
                                                      </span>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Lot
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Acquired
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        License Number
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Ownership
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Evaluation
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Status
                                                      </p>
                                                    </div>
                                                  </th>
                                                  <th class="px-6 py-3 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        Actions
                                                      </p>
                                                    </div>
                                                  </th>
                                                </tr>
                                              </thead>
                                              <!-- table header end -->

                                              <!-- table body start -->
                                              <tbody class="divide-x divide-y divide-gray-200 dark:divide-gray-800">
                                                <template x-for="property in paginatedProperties" :key="property.LotNo">
                                                  <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                                    <!-- Lot No -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="group flex items-center gap-3">
                                                        <h4 class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400" 
                                                            x-text="property.LotNo">
                                                        </h4>
                                                      </div>
                                                    </td>
                                                    <!-- Lot -->
                                                    <td class="px-6 py-3 whitespace-nowrap">
                                                      <div class="flex items-center gap-3">
                                                        <div>
                                                          <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400" x-text="property.Lot">
                                                          </span>
                                                          <span class="text-gray-500 text-theme-sm dark:text-gray-400" x-text="property.Location">
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <!-- Acquired -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="property.Acquired">
                                                        </p>
                                                      </div>
                                                    </td>
                                                    <!-- License Number -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="property.LicenseNumber">
                                                        </p>
                                                      </div>
                                                    </td>
                                                    <!-- Ownership -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <template x-if="property.Ownership === 'Acquired'">
                                                          <p class="bg-success-50 text-theme-xs text-success-700 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                                            Acquired
                                                          </p>
                                                        </template>
                                                        <template x-if="property.Ownership === 'Pending'">
                                                          <p class="bg-warning-50 text-theme-xs text-warning-700 dark:bg-warning-500/15 dark:text-warning-500 rounded-full px-2 py-0.5 font-medium">
                                                            Pending
                                                          </p>
                                                        </template>
                                                        <template x-if="property.Ownership === 'Under-Review'">
                                                          <p class="bg-info-50 text-theme-xs text-info-700 dark:bg-info-500/15 dark:text-info-500 rounded-full px-2 py-0.5 font-medium">
                                                            Under-Review
                                                          </p>
                                                        </template>
                                                      </div>
                                                    </td>
                                                    <!-- Evaluation -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="'KES ' + property.Evaluation">
                                                        </p>
                                                      </div>
                                                    </td>
                                                    <!-- Status -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <template x-if="property.Status === 'Available'">
                                                          <p class="bg-success-50 text-theme-xs text-success-700 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                                            Available
                                                          </p>
                                                        </template>
                                                        <template x-if="property.Status === 'Sold'">
                                                          <p class="bg-danger-50 text-theme-xs text-danger-700 dark:bg-danger-500/15 dark:text-danger-500 rounded-full px-2 py-0.5 font-medium">
                                                            Sold
                                                          </p>
                                                        </template>
                                                        <template x-if="property.Status === 'Under-Review'">
                                                          <p class="bg-info-50 text-theme-xs text-info-700 dark:bg-info-500/15 dark:text-info-500 rounded-full px-2 py-0.5 font-medium">
                                                            Under-Review
                                                          </p>
                                                        </template>
                                                        <template x-if="property.Status === 'Unavailable'">
                                                          <p class="bg-gray-50 text-theme-xs text-gray-700 dark:bg-gray-500/15 dark:text-gray-500 rounded-full px-2 py-0.5 font-medium">
                                                            Unavailable
                                                          </p>
                                                        </template>
                                                      </div>
                                                    </td>
                                                    <!-- Actions -->
                                                    <td class="p-4 whitespace-nowrap">
                                                      <div class="flex items-center col-span-2">
                                                        <button @click="editPropertyModal(property)"
                                                                class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                                          <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.1" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                          </svg>
                                                        </button>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                </template>
                                              </tbody>
                                              <!-- table body end -->
                                            </table>
                                          </div>
                                          <div class="border-t border-gray-200 px-5 py-4 dark:border-gray-800">
                                            <div class="flex justify-center pb-4 sm:hidden">
                                              <span class="block text-sm font-medium text-gray-500 dark:text-gray-400">
                                                Showing
                                                <span class="text-gray-800 dark:text-white/90" x-text="startEntry"></span>
                                                to
                                                <span class="text-gray-800 dark:text-white/90" x-text="endEntry"></span>
                                                of
                                                <span class="text-gray-800 dark:text-white/90" x-text="loanTypes.length"></span>
                                              </span>
                                            </div>

                                            <div class="flex items-center justify-between">
                                              <div class="hidden sm:block">
                                                <span class="block text-sm font-medium text-gray-500 dark:text-gray-400">
                                                  Showing
                                                  <span class="text-gray-800 dark:text-white/90" x-text="startEntry"></span>
                                                  to
                                                  <span class="text-gray-800 dark:text-white/90" x-text="endEntry"></span>
                                                  of
                                                  <span class="text-gray-800 dark:text-white/90" x-text="loanTypes.length"></span>
                                                </span>
                                              </div>
                                              <div class="flex w-full items-center justify-between gap-2 rounded-lg bg-gray-50 p-4 sm:w-auto sm:justify-normal sm:rounded-none sm:bg-transparent sm:p-0 dark:bg-gray-900 dark:sm:bg-transparent">
                                                <button
                                                  class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                                  :disabled="page === 1"
                                                  @click="goToPage(page - 1)">
                                                  <span>
                                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 8.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z"
                                                            fill="" />
                                                    </svg>
                                                  </span>
                                                </button>

                                                <span class="block text-sm font-medium text-gray-700 sm:hidden dark:text-gray-400">
                                                  Page <span x-text="page"></span> of <span x-text="totalPages"></span>
                                                </span>

                                                <ul class="hidden items-center gap-0.5 sm:flex">
                                                  <template x-for="n in totalPages" :key="n">
                                                    <li>
                                                      <a href="#" @click.prevent="goToPage(n)"
                                                        :class="page === n ? 'bg-brand-500 text-white' : 'hover:bg-brand-500 text-gray-700 dark:text-gray-400 hover:text-white dark:hover:text-white'"
                                                        class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium">
                                                        <span x-text="n"></span>
                                                      </a>
                                                    </li>
                                                  </template>
                                                </ul>

                                                <button
                                                  class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                                  :disabled="page === totalPages"
                                                  @click="goToPage(page + 1)">
                                                  <span>
                                                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M17.4165 9.9986C17.4168 10.1909 17.3437 10.3832 17.197 10.53L12.2004 15.5301C11.9076 15.8231 11.4327 15.8233 11.1397 15.5305C10.8467 15.2377 10.8465 14.7629 11.1393 14.4699L14.8594 10.7472L3.33203 10.7472C2.91782 10.7472 2.58203 10.4114 2.58203 9.99715C2.58203 9.58294 2.91782 9.24715 3.33203 9.24715L14.854 9.24715L11.1393 5.53016C10.8465 5.23717 10.8467 4.7623 11.1397 4.4695C11.4327 4.1767 11.9075 4.17685 12.2003 4.46984L17.1578 9.43049C17.3163 9.568 17.4165 9.77087 17.4165 9.99715C17.4165 9.99763 17.4165 9.99812 17.4165 9.9986Z"
                                                            fill="" />
                                                    </svg>
                                                  </span>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div x-show="activeTab === 'clients'" style="display: none;">
                                  <!-- Client list -->
                                  <div class="space-y-8" x-data="propertiesTable()" x-init="init()">
                                    <!-- Table -->
                                    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                                      <!-- Table Header -->
                                      <div class="flex flex-col gap-4 border-b border-gray-200 px-4 py-4 sm:px-5 lg:flex-row lg:items-center lg:justify-between dark:border-gray-800">
                                        <div class="flex-shrink-0">
                                          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                          Client List
                                          </h3>
                                          <p class="text-sm text-gray-500 dark:text-gray-400">
                                            Easily manage Real Estate Customers effortlessly.
                                          </p>
                                        </div>

                                        <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                                          <!-- Tab Navigation -->
                                          <div class="relative">
                                            <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z" fill=""></path>
                                              </svg>
                                            </span>

                                            <input type="text" placeholder="Search..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden xl:w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                          </div>

                                          <div class="hidden lg:block">
                                            <select x-model="statusFilter" @change="performFilter()" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                              <option value="All">All Clients</option>
                                              <option value="Active">Active Clients</option>
                                              <option value="Blacklisted">Blacklisted Clients</option>
                                            </select>
                                          </div>

                                          <div>
                                            <button class="text-theme-sm shadow-theme-xs inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                              <svg class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.1" d="M16.444 18H19a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h2.556M17 11V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4Z"/>
                                              </svg>

                                              Print
                                            </button>
                                          </div>
                                          <div>
                                            <button @click="addClientModal = true"
                                                    class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 inline-flex items-center justify-center gap-2 rounded-lg px-4 py-3 text-sm font-medium text-white transition">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M5 10.0002H15.0006M10.0002 5V15.0006" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              Add Client
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Clients Table -->
                                      <div class="max-w-full overflow-x-auto custom-scrollbar">
                                        <table class="min-w-full">
                                          <!-- table header start -->
                                          <thead class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                            <tr>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <div x-data="{checked: false}" class="flex items-center gap-3">
                                                    <div>
                                                      <span class="block font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                        #ClientID
                                                      </span>
                                                    </div>
                                                  </div>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Client
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    ID Number
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Joined On
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Phone
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Status
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="px-6 py-3 whitespace-nowrap">
                                                <div class="flex items-center justify-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Action
                                                  </p>
                                                </div>
                                              </th>
                                            </tr>
                                          </thead>
                                          <!-- table header end -->
                                          <!-- table body start -->
                                          <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                                            <template x-for="client in paginatedClients" :key="client.ClientID">
                                              <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                                <td class="p-4 whitespace-nowrap">
                                                  <span class="block font-medium text-gray-700 text-theme-sm dark:text-gray-400" x-text="client.ClientID">
                                                  </span>
                                                </td>
                                                <td class="px-6 py-3 whitespace-nowrap">
                                                  <div class="flex items-center gap-3">
                                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-brand-100">
                                                      <span class="text-xs font-semibold text-brand-500" x-text="getInitials(client.FirstName, client.LastName)"></span>
                                                    </div>
                                                    <div>
                                                      <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400" x-text="getFullName(client.FirstName, client.LastName)">
                                                      </span>
                                                      <span class="text-gray-500 text-theme-sm dark:text-gray-400" x-text="client.Email">
                                                      </span>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                  <p class="text-gray-700 text-theme-sm dark:text-gray-400" x-text="client.IDNumber">
                                                  </p>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                  <p class="text-gray-700 text-theme-sm dark:text-gray-400" x-text="client.RegisteredOn">
                                                  </p>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                  <p class="text-gray-700 text-theme-sm dark:text-gray-400" x-text="'+' + client.Phone">
                                                  </p>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                  <template x-if="client.Status === 'Active'">
                                                    <span class="bg-success-50 text-theme-xs text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                                      Active
                                                    </span>
                                                  </template>
                                                  <template x-if="client.Status === 'Pending'">
                                                    <span class="bg-warning-50 text-theme-xs text-warning-600 dark:bg-warning-500/15 dark:text-warning-500 rounded-full px-2 py-0.5 font-medium">
                                                      Pending
                                                    </span>
                                                  </template>
                                                  <template x-if="client.Status === 'Blacklisted'">
                                                    <span class="bg-error-50 text-theme-xs text-error-600 dark:bg-error-500/15 dark:text-error-500 rounded-full px-2 py-0.5 font-medium">
                                                      Blacklisted
                                                    </span>
                                                  </template>
                                                  <template x-if="client.Status === 'De-Activated'">
                                                    <span class="bg-gray-50 text-theme-xs text-gray-600 dark:bg-gray-500/15 dark:text-gray-500 rounded-full px-2 py-0.5 font-medium">
                                                      De-Activated
                                                    </span>
                                                  </template>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex justify-center">
                                                    <button 
                                                      onclick="window.location.href='view-landowner.php'" 
                                                      class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                                      <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.1" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                                      </svg>
                                                    </button>
                                                  </div>
                                                </td>
                                              </tr>
                                            </template>
                                          </tbody>
                                          <!-- table body end -->
                                        </table>
                                      </div>
                                      <div class="border-t border-gray-200 px-5 py-4 dark:border-gray-800">
                                        <div class="flex justify-center pb-4 sm:hidden">
                                          <span class="block text-sm font-medium text-gray-500 dark:text-gray-400">
                                            Showing
                                            <span class="text-gray-800 dark:text-white/90" x-text="clientStartEntry"></span>
                                            to
                                            <span class="text-gray-800 dark:text-white/90" x-text="clientEndEntry"></span>
                                            of
                                            <span class="text-gray-800 dark:text-white/90" x-text="clients.length"></span>
                                          </span>
                                        </div>

                                        <div class="flex items-center justify-between">
                                          <div class="hidden sm:block">
                                            <span class="block text-sm font-medium text-gray-500 dark:text-gray-400">
                                              Showing
                                              <span class="text-gray-800 dark:text-white/90" x-text="clientStartEntry"></span>
                                              to
                                              <span class="text-gray-800 dark:text-white/90" x-text="clientEndEntry"></span>
                                              of
                                              <span class="text-gray-800 dark:text-white/90" x-text="clients.length"></span>
                                            </span>
                                          </div>
                                          <div class="flex w-full items-center justify-between gap-2 rounded-lg bg-gray-50 p-4 sm:w-auto sm:justify-normal sm:rounded-none sm:bg-transparent sm:p-0 dark:bg-gray-900 dark:sm:bg-transparent">
                                            <button
                                              class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                              :disabled="clientPage === 1"
                                              @click="prevClientPage()">
                                              <span>
                                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 8.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z"
                                                        fill="" />
                                                </svg>
                                              </span>
                                            </button>

                                            <span class="block text-sm font-medium text-gray-700 sm:hidden dark:text-gray-400">
                                              Page <span x-text="clientPage"></span> of <span x-text="totalClientPages"></span>
                                            </span>

                                            <ul class="hidden items-center gap-0.5 sm:flex">
                                              <template x-for="n in totalClientPages" :key="n">
                                                <li>
                                                  <a href="#" @click.prevent="goToClientPage(n)"
                                                    :class="clientPage === n ? 'bg-brand-500 text-white' : 'hover:bg-brand-500 text-gray-700 dark:text-gray-400 hover:text-white dark:hover:text-white'"
                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium">
                                                    <span x-text="n"></span>
                                                  </a>
                                                </li>
                                              </template>
                                            </ul>

                                            <button
                                              class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                              :disabled="clientPage === totalClientPages"
                                              @click="nextClientPage()">
                                              <span>
                                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.4165 9.9986C17.4168 10.1909 17.3437 10.3832 17.197 10.53L12.2004 15.5301C11.9076 15.8231 11.4327 15.8233 11.1397 15.5305C10.8467 15.2377 10.8465 14.7629 11.1393 14.4699L14.8594 10.7472L3.33203 10.7472C2.91782 10.7472 2.58203 10.4114 2.58203 9.99715C2.58203 9.58294 2.91782 9.24715 3.33203 9.24715L14.854 9.24715L11.1393 5.53016C10.8465 5.23717 10.8467 4.7623 11.1397 4.4695C11.4327 4.1767 11.9075 4.17685 12.2003 4.46984L17.1578 9.43049C17.3163 9.568 17.4165 9.77087 17.4165 9.99715C17.4165 9.99763 17.4165 9.99812 17.4165 9.9986Z"
                                                        fill="" />
                                                </svg>
                                              </span>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

              <!-- Tabbed Contents -->

                <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
  
  <!-- ===== MODALS START ===== -->
   <!-- Units Add -->
  <div x-show="addUnitModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="addUnitModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="addUnitModal = false"
                class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
          <svg
                  class="fill-current"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
          >
            <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                    fill=""
            />
          </svg>
        </button>

        <div>
          <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
            New Real Estate Unit Entry
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Add a new realestate unit lot to your invetory
          </p>
        </div>
        <!-- Form -->
        <form class="flex flex-col">
          <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
            <!-- Change Property Details Section -->
            <div class="space-y-6 mt-8">
              <!-- Unit/Lot Name -->
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Unit/Lot name
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="Unit/Lot name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
              </div>

              <!-- Location -->
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Location
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="Unit/Lot Location" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
              </div>

              <!-- License Number and Valuation -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- License Number -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    License Number
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="Lot License ..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
                
                <!-- Valuation -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Valuation
                  </label>
                  <div class="relative">
                    <span class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          KES
                        </span>
                    <input type="number" placeholder="Valuation" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
              </div>

              <!-- Ownership and Status -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Ownership -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Ownership
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      <option value="Acquired" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Acquired</option>
                      <option value="Pending" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Pending</option>
                      <option value="Under Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under Review</option>
                    </select>
                    <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                      <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                  </div>
                </div>
                
                <!-- Status -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Status
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      <option value="Available" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Available</option>
                      <option value="Sold" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Sold</option>
                      <option value="Under Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under Review</option>
                      <option value="Unavailable" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Unavailable</option>
                    </select>
                    <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                      <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons - Bottom Right -->
            <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
              <button @click="$store.propertyData.editPropertyModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                Cancel
              </button>
              <button type="submit" class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
                Add Property
              </button>
            </div>
          </div>
        </form>
      </div>
  </div>
  
  <!-- Edit Units Modal -->
  <div x-show="$store.propertyData.editPropertyModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="$store.propertyData.editPropertyModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="$store.propertyData.editPropertyModal = false"
              class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
        <svg
                class="fill-current"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
        >
          <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                  fill=""
          />
        </svg>
      </button>

      <div class="px-2 pr-14">
        <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
          Edit Property
        </h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
          Editing: <span x-text="$store.propertyData.currentProperty?.Lot || ''" class="font-semibold"></span>
        </p>
      </div>
      
      <form class="flex flex-col">
        <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
          <!-- Change Property Details Section -->
          <div class="space-y-6 mt-8">
            <!-- Unit/Lot Name -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Unit/Lot name
                </label>
                <div class="relative">
                  <input type="text" 
                         x-model="$store.propertyData.currentProperty?.Lot" 
                         placeholder="Unit/Lot name" 
                         class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
            </div>

            <!-- Location -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Location
                </label>
                <div class="relative">
                  <input type="text" 
                         x-model="$store.propertyData.currentProperty?.Location" 
                         placeholder="Unit/Lot Location" 
                         class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
            </div>

            <!-- License Number and Valuation -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <!-- License Number -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  License Number
                </label>
                <div class="relative">
                  <input type="text" 
                         x-model="$store.propertyData.currentProperty?.LicenseNumber" 
                         placeholder="Lot License ..." 
                         class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
              
              <!-- Valuation -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Valuation
                </label>
                <div class="relative">
                  <span class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          KES
                        </span>
                  <input type="text" 
                         x-model="$store.propertyData.currentProperty?.Evaluation" 
                         placeholder="Valued @ ..." 
                         class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
            
              </div>
            </div>

            <!-- Ownership and Status -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <!-- Ownership -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Ownership
                </label>
                <div class="relative z-20 bg-transparent">
                  <select x-model="$store.propertyData.currentProperty?.Ownership" 
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="Acquired" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Acquired</option>
                    <option value="Pending" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Pending</option>
                    <option value="Under-Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under-Review</option>
                  </select>
                  <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </div>
              </div>
              
              <!-- Status -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Status
                </label>
                <div class="relative z-20 bg-transparent">
                  <select x-model="$store.propertyData.currentProperty?.Status" 
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="Available" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Available</option>
                    <option value="Sold" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Sold</option>
                    <option value="Under-Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under-Review</option>
                    <option value="Unavailable" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Unavailable</option>
                  </select>
                  <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- Action Buttons - Bottom Right -->
          <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
            <button @click="$store.propertyData.editPropertyModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
              Cancel
            </button>
            <button @click="$store.propertyData.editPropertyModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-error-700 shadow-theme-xs hover:bg-error-50 hover:text-error-800 disabled:pointer-events-none disabled:opacity-50 dark:border-error-700 dark:bg-gray-900 dark:text-error-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
              Delete
            </button>
            <button @click.prevent="$store.propertyData.updateProperty()" type="button" class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
              Update Property
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <!-- Add Client -->
  <div x-show="addClientModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="addClientModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="addClientModal = false"
                class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
          <svg
                  class="fill-current"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
          >
            <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z"
                    fill=""
            />
          </svg>
        </button>

        <div>
          <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
            New Client
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Add New Real Estate Client
          </p>
        </div>
        <!-- Form -->
        <form class="flex flex-col">
          <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
            <!-- Change Property Details Section -->
            <div class="space-y-6 mt-8">
              <!-- Client Name -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    First name
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="First name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>

                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Last name
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="Last name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
              </div>

              <!-- email -->
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Email
                  </label>
                  <div class="relative">
                        <span class="absolute top-1/2 left-0 -translate-y-1/2 border-r border-gray-200 px-3.5 py-3 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04175 7.06206V14.375C3.04175 14.6511 3.26561 14.875 3.54175 14.875H16.4584C16.7346 14.875 16.9584 14.6511 16.9584 14.375V7.06245L11.1443 11.1168C10.457 11.5961 9.54373 11.5961 8.85638 11.1168L3.04175 7.06206ZM16.9584 5.19262C16.9584 5.19341 16.9584 5.1942 16.9584 5.19498V5.20026C16.9572 5.22216 16.946 5.24239 16.9279 5.25501L10.2864 9.88638C10.1145 10.0062 9.8862 10.0062 9.71437 9.88638L3.07255 5.25485C3.05342 5.24151 3.04202 5.21967 3.04202 5.19636C3.042 5.15695 3.07394 5.125 3.11335 5.125H16.8871C16.9253 5.125 16.9564 5.15494 16.9584 5.19262ZM18.4584 5.21428V14.375C18.4584 15.4796 17.563 16.375 16.4584 16.375H3.54175C2.43718 16.375 1.54175 15.4796 1.54175 14.375V5.19498C1.54175 5.1852 1.54194 5.17546 1.54231 5.16577C1.55858 4.31209 2.25571 3.625 3.11335 3.625H16.8871C17.7549 3.625 18.4584 4.32843 18.4585 5.19622C18.4585 5.20225 18.4585 5.20826 18.4584 5.21428Z" fill="#667085"></path>
                          </svg>
                        </span>
                        <input type="text" placeholder="info@gmail.com" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      </div>
                </div>
              </div>

              <!-- Phone & ID -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Phone Number -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Phone
                  </label>
                  <div class="relative">
                    <input type="text" placeholder="Phone" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
                
                <!-- ID Number -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    ID Number
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <input type="text" placeholder="National ID." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
              </div>

              <!-- Ownership and Status -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Ownership -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    KRA Pin
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <input type="text" placeholder="KRA Pin ..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
                
                <!-- Status -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Status
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Status</option>
                      <option value="Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Active</option>
                      <option value="Pending" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Pending</option>
                      <option value="Blacklisted" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Blacklisted</option>
                      <option value="De-Activated" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">De-Activated</option>
                    </select>
                    <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                      <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons - Bottom Right -->
            <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
              <button @click="addClientModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                Cancel
              </button>
              <button type="submit" class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
                Add Client
              </button>
            </div>
          </div>
        </form>
      </div>
  </div>
   
  <script defer src="../../../assets/bundle.js"></script>

  <!-- SCRIPTS -->
  <script>
    // propertiesTable.js - Data binding and pagination functionality for properties
    function propertiesTable() {
      return {
        // Properties sample data (11 records as requested)
        properties: [
          { 
            LotNo: "LOTN202601", 
            Lot: "50 x 80 Muguga kwa Jane", 
            Location: "Kimuchu, Thika, Kiambu",
            Acquired: "11-Jan-2019",
            LicenseNumber: "KLL00123456",
            Ownership: "Acquired",
            Evaluation: "4,500,000.00",
            Status: "Available",
            AddedBy: "USR202401"
          },
          { 
            LotNo: "LOTN202602", 
            Lot: "100 x 100 Warehouse, Juja", 
            Location: "Juja, Kiambu",
            Acquired: "15-Mar-2020",
            LicenseNumber: "KLL00123457",
            Ownership: "Pending",
            Evaluation: " 8,200,000.00",
            Status: "Under-Review",
            AddedBy: "USR202402"
          },
          { 
            LotNo: "LOTN202603", 
            Lot: "1/4 Acre Residential", 
            Location: "Kiganjo, Thika",
            Acquired: "22-Jul-2018",
            LicenseNumber: "KLL00123458",
            Ownership: "Acquired",
            Evaluation: " 3,750,000.00",
            Status: "Sold",
            AddedBy: "USR202403"
          },
          { 
            LotNo: "LOTN202604", 
            Lot: "Commercial Plot Ruiru", 
            Location: "Ruiru, Kiambu",
            Acquired: "05-Apr-2021",
            LicenseNumber: "KLL00123459",
            Ownership: "Under-Review",
            Evaluation: " 12,000,000.00",
            Status: "Available",
            AddedBy: "USR202404"
          },
          { 
            LotNo: "LOTN202605", 
            Lot: "80 x 120 Industrial", 
            Location: "Thika Town",
            Acquired: "30-Nov-2017",
            LicenseNumber: "KLL00123460",
            Ownership: "Acquired",
            Evaluation: " 15,500,000.00",
            Status: "Unavailable",
            AddedBy: "USR202405"
          },
          { 
            LotNo: "LOTN202606", 
            Lot: "60 x 60 Apartments", 
            Location: "Gatuanyaga, Thika",
            Acquired: "18-Feb-2022",
            LicenseNumber: "KLL00123461",
            Ownership: "Acquired",
            Evaluation: " 6,800,000.00",
            Status: "Available",
            AddedBy: "USR202406"
          },
          { 
            LotNo: "LOTN202607", 
            Lot: "2 Acre Farm Land", 
            Location: "Tigoni, Limuru",
            Acquired: "09-Sep-2016",
            LicenseNumber: "KLL00123462",
            Ownership: "Pending",
            Evaluation: " 25,000,000.00",
            Status: "Available",
            AddedBy: "USR202407"
          },
          { 
            LotNo: "LOTN202608", 
            Lot: "Commercial Building", 
            Location: "CBD Thika",
            Acquired: "14-Dec-2020",
            LicenseNumber: "KLL00123463",
            Ownership: "Acquired",
            Evaluation: " 45,000,000.00",
            Status: "Sold",
            AddedBy: "USR202408"
          },
          { 
            LotNo: "LOTN202609", 
            Lot: "30 x 40 Residential", 
            Location: "Mangu, Thika",
            Acquired: "03-Aug-2019",
            LicenseNumber: "KLL00123464",
            Ownership: "Acquired",
            Evaluation: " 2,300,000.00",
            Status: "Available",
            AddedBy: "USR202409"
          },
          { 
            LotNo: "LOTN202610", 
            Lot: "100 x 150 Commercial", 
            Location: "Karatina, Nyeri",
            Acquired: "27-May-2021",
            LicenseNumber: "KLL00123465",
            Ownership: "Under-Review",
            Evaluation: " 18,750,000.00",
            Status: "Under-Review",
            AddedBy: "USR202410"
          },
          { 
            LotNo: "LOTN202611", 
            Lot: "Apartment Complex", 
            Location: "Juja Farm",
            Acquired: "11-Oct-2023",
            LicenseNumber: "KLL00123466",
            Ownership: "Acquired",
            Evaluation: " 32,000,000.00",
            Status: "Available",
            AddedBy: "USR202411"
          }
        ],
        // Clients sample data (10 records as requested)
        clients: [
          { 
            ClientID: "CLT202001", 
            FirstName: "James", 
            LastName: "Mwangi",
            Email: "james.mwangi@gmail.com",
            Phone: "254720123456",
            RegisteredOn: "12-Jan-2024",
            RegisteredBy: "USR2026001",
            IDNumber: "25456789",
            KRAPin: "A01245678L",
            Status: "Active"
          },
          { 
            ClientID: "CLT202002", 
            FirstName: "Sarah", 
            LastName: "Njeri",
            Email: "sarah.njeri@yahoo.com",
            Phone: "254723987654",
            RegisteredOn: "15-Jan-2024",
            RegisteredBy: "USR2026002",
            IDNumber: "25467890",
            KRAPin: "A01246789M",
            Status: "Pending"
          },
          { 
            ClientID: "CLT202003", 
            FirstName: "Peter", 
            LastName: "Kamau",
            Email: "p.kamau@hotmail.com",
            Phone: "254711234567",
            RegisteredOn: "18-Jan-2024",
            RegisteredBy: "USR2026003",
            IDNumber: "25478901",
            KRAPin: "A01247890N",
            Status: "Active"
          },
          { 
            ClientID: "CLT202004", 
            FirstName: "Grace", 
            LastName: "Wanjiku",
            Email: "grace.w@outlook.com",
            Phone: "254734567890",
            RegisteredOn: "20-Jan-2024",
            RegisteredBy: "USR2026004",
            IDNumber: "25489012",
            KRAPin: "A01248901O",
            Status: "Blacklisted"
          },
          { 
            ClientID: "CLT202005", 
            FirstName: "David", 
            LastName: "Ochieng",
            Email: "d.ochieng@gmail.com",
            Phone: "254722345678",
            RegisteredOn: "22-Jan-2024",
            RegisteredBy: "USR2026005",
            IDNumber: "25490123",
            KRAPin: "A01249012P",
            Status: "Active"
          },
          { 
            ClientID: "CLT202006", 
            FirstName: "Mary", 
            LastName: "Atieno",
            Email: "mary.atieno@yahoo.com",
            Phone: "254733456789",
            RegisteredOn: "25-Jan-2024",
            RegisteredBy: "USR2026006",
            IDNumber: "25501234",
            KRAPin: "A01250123Q",
            Status: "De-Activated"
          },
          { 
            ClientID: "CLT202007", 
            FirstName: "John", 
            LastName: "Kiplagat",
            Email: "j.kiplagat@gmail.com",
            Phone: "254744567890",
            RegisteredOn: "28-Jan-2024",
            RegisteredBy: "USR2026007",
            IDNumber: "25512345",
            KRAPin: "A01251234R",
            Status: "Active"
          },
          { 
            ClientID: "CLT202008", 
            FirstName: "Lucy", 
            LastName: "Muthoni",
            Email: "lucy.m@hotmail.com",
            Phone: "254755678901",
            RegisteredOn: "30-Jan-2024",
            RegisteredBy: "USR2026008",
            IDNumber: "25523456",
            KRAPin: "A01252345S",
            Status: "Pending"
          },
          { 
            ClientID: "CLT202009", 
            FirstName: "Michael", 
            LastName: "Ndung'u",
            Email: "m.ndungu@outlook.com",
            Phone: "254766789012",
            RegisteredOn: "02-Feb-2024",
            RegisteredBy: "USR2026009",
            IDNumber: "25534567",
            KRAPin: "A01253456T",
            Status: "Active"
          },
          { 
            ClientID: "CLT202010", 
            FirstName: "Esther", 
            LastName: "Nyambura",
            Email: "e.nyambura@gmail.com",
            Phone: "254777890123",
            RegisteredOn: "05-Feb-2024",
            RegisteredBy: "USR2026010",
            IDNumber: "25545678",
            KRAPin: "A01254567U",
            Status: "Active"
          }
        ],
        page: 1,
        itemsPerPage: 10,
        clientPage: 1,

        // Initialize function
        init() {
          console.log('Properties table initialized');
        },

        // Computed properties for pagination - Properties
        get totalPages() {
          return Math.ceil(this.properties.length / this.itemsPerPage);
        },

        get paginatedProperties() {
          const start = (this.page - 1) * this.itemsPerPage;
          const end = start + this.itemsPerPage;
          return this.properties.slice(start, end);
        },

        get startEntry() {
          return (this.page - 1) * this.itemsPerPage + 1;
        },

        get endEntry() {
          const end = this.page * this.itemsPerPage;
          return end > this.properties.length ? this.properties.length : end;
        },

        // Computed properties for pagination - Clients
        get totalClientPages() {
          return Math.ceil(this.clients.length / this.itemsPerPage);
        },

        get paginatedClients() {
          const start = (this.clientPage - 1) * this.itemsPerPage;
          const end = start + this.itemsPerPage;
          return this.clients.slice(start, end);
        },

        get clientStartEntry() {
          return (this.clientPage - 1) * this.itemsPerPage + 1;
        },

        get clientEndEntry() {
          const end = this.clientPage * this.itemsPerPage;
          return end > this.clients.length ? this.clients.length : end;
        },

        // Get initials for avatar
        getInitials(firstName, lastName) {
          return (firstName.charAt(0) + lastName.charAt(0)).toUpperCase();
        },

        // Get full name
        getFullName(firstName, lastName) {
          return `${firstName} ${lastName}`;
        },

        // Pagination methods - Properties
        prevPage() {
          if (this.page > 1) {
            this.page--;
          }
        },

        nextPage() {
          if (this.page < this.totalPages) {
            this.page++;
          }
        },

        goToPage(page) {
          if (page >= 1 && page <= this.totalPages) {
            this.page = page;
          }
        },

        // Pagination methods - Clients
        prevClientPage() {
          if (this.clientPage > 1) {
            this.clientPage--;
          }
        },

        nextClientPage() {
          if (this.clientPage < this.totalClientPages) {
            this.clientPage++;
          }
        },

        goToClientPage(page) {
          if (page >= 1 && page <= this.totalClientPages) {
            this.clientPage = page;
          }
        },

        // Edit property modal function
        editPropertyModal(property) {
          // Create a deep copy of the property data for editing
          const propertyCopy = JSON.parse(JSON.stringify(property));
          
          // Store the current property for editing
          if (Alpine.store('propertyData')) {
            Alpine.store('propertyData').currentProperty = propertyCopy;
            Alpine.store('propertyData').editPropertyModal = true;
            console.log('Opening edit modal for property:', propertyCopy);
          }
        }
      };
    }

    // Store for property data and modal state
    function propertyStore() {
      return {
        // Modal states
        propertyModal: false,
        editPropertyModal: false,
        
        // Current property for editing
        currentProperty: null,
        
        // Methods
        openNewPropertyModal() {
          this.propertyModal = true;
        },
        
        openEditPropertyModal(property) {
          this.currentProperty = property;
          this.editPropertyModal = true;
        },
        
        // This method would be called when the Update button is clicked
        updateProperty() {
          if (this.currentProperty) {
            console.log('Updating property:', this.currentProperty);
            
            // Here you would typically update the data in your backend
            // For now, we'll update it in the local array and show an alert
            alert(`Property "${this.currentProperty.LotNo}" has been updated successfully!`);
            
            // Close the modal
            this.editPropertyModal = false;
          }
        }
      };
    }

    // Initialize Alpine components
    document.addEventListener('alpine:init', () => {
      // Register the propertiesTable component
      Alpine.data('propertiesTable', propertiesTable);
      
      // Register the property store
      Alpine.store('propertyData', propertyStore());
    });
  </script>

</body>

</html>
