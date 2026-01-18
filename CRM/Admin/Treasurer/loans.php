<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Loans | KFBCL - Mircofinance</title>

  <link rel="icon" href="../../../assets/favicon.ico">
  <link href="../../../assets/style.css" rel="stylesheet">
</head>

<body x-data="{ page: 'profile', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'loanTypeModal' : false, 'editLoanTypeModal': false , 'scrollTop': false, 'isProfileInfoModal': false,  'isProfileContactModal': false, 'isProfileNextKinModal': false, 'isProfileAddressModal': false }"
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
         class="fixed z-50 h-screen w-full bg-gray-900/50"></div>
    <!-- Small Device Overlay End -->

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

    <!-- ===== Main Content Start ===== -->
    <main>
      <div class="mx-auto max-w-(--breakpoint-2xl) p-4 pb-20 md:p-6 md:pb-6">
        <!-- Breadcrumb Start -->
        <div x-data="{ pageName: `Loans Dashboard` }">
          <div class="flex flex-wrap items-center justify-between gap-3 pb-6">
            <h2
                    class="text-xl font-semibold text-gray-800 dark:text-white/90"
                    x-text="pageName"
            ></h2>
            <nav>
              <ol class="flex items-center gap-1.5">
                <li>
                  <a
                          class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                          href="index.php"
                  >
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
                <li
                        class="text-sm text-gray-800 dark:text-white/90"
                        x-text="pageName"
                ></li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Content Start -->
        <div class="space-y-6">
          <!-- Overview -->
          <div class="col-span-12 dark:border-gray-800 dark:bg-white/[0.03] overflow-hidden rounded-2xl">
            <!-- Metric Group Two -->
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-4">
                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                      Loan Clients
                    </p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          2,750
                        </h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                          +20%
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
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                      Loan Types
                    </p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          6
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->

                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">New Applicants</p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">13</h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-error-50 px-2 py-0.5 text-theme-xs font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                          -1.59%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last month
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->

                  <!-- Metric Item Start -->
                  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                    <p class="text-theme-sm text-gray-500 dark:text-gray-400">Active Loans</p>

                    <div class="mt-3 flex items-end justify-between">
                      <div>
                        <h4 class="text-2xl font-bold text-gray-800 dark:text-white/90">
                          137
                        </h4>
                      </div>

                      <div class="flex items-center gap-1">
                        <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                          +7%
                        </span>

                        <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                          Vs last month
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Metric Item End -->
              </div>
            <!-- Metric Group Two -->
          </div>

          <!-- Loan Settings Content -->
          <div class="relative bg-white dark:border-gray-800 dark:bg-white/[0.03] overflow-hidden rounded-2xl">
            <!-- Tabbed content -->
              <div class="rounded-xl p-6 dark:border-gray-800 border" x-data="{ activeTab: 'loans-type' }">
                          <div class="border-b border-gray-200 dark:border-gray-800">
                            <nav class="-mb-px flex space-x-2 overflow-x-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-200 dark:[&::-webkit-scrollbar-thumb]:bg-gray-600 dark:[&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:h-1.5">
                              <button 
                                class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-offset-1 focus:ring-brand-500/20"
                                :class="activeTab === 'loans-type' 
                                  ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                @click="activeTab = 'loans-type'"
                              >
                                <!-- Bar Chart Icon -->
                                <svg class="size-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3 3C2.44772 3 2 3.44772 2 4V16C2 16.5523 2.44772 17 3 17H17C17.5523 17 18 16.5523 18 16V4C18 3.44772 17.5523 3 17 3H3ZM4 15V5H7V15H4ZM9 15V9H12V15H9ZM16 15H13V7H16V15Z" fill="currentColor"/>
                                </svg>
                                Loans Management
                              </button>
                              
                              <button 
                                class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-offset-1 focus:ring-brand-500/20"
                                :class="activeTab === 'calculator' 
                                  ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                @click="activeTab = 'calculator'"
                              >
                                <!-- Calculator Icon -->
                                <svg class="size-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5 2C3.34315 2 2 3.34315 2 5V15C2 16.6569 3.34315 18 5 18H15C16.6569 18 18 16.6569 18 15V5C18 3.34315 16.6569 2 15 2H5ZM4 6V5C4 4.44772 4.44772 4 5 4H15C15.5523 4 16 4.44772 16 5V15C16 15.5523 15.5523 16 15 16H5C4.44772 16 4 15.5523 4 15V6ZM6 7C5.44772 7 5 7.44772 5 8V13C5 13.5523 5.44772 14 6 14H14C14.5523 14 15 13.5523 15 13V8C15 7.44772 14.5523 7 14 7H6ZM7 9H9V11H7V9ZM11 9H13V11H11V9ZM7 12H9V13H7V12ZM11 12H13V13H11V12Z" fill="currentColor"/>
                                </svg>
                                Loan Calculator
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
                            <div x-show="activeTab === 'loans-type'">
                              <!-- Loan types table -->
                              <div class="col-span-12 xl:col-span-8">
                                <div class="overflow-hidden rounded-xl bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                                  <div class="flex flex-col justify-between gap-5 border-b border-gray-200 px-5 py-4 sm:flex-row lg:items-center dark:border-gray-800">
                                    <div>
                                      <h3 class="text-lg font-semibold text-gray-600 dark:text-white/90">
                                        Loan Types
                                      </h3>
                                      <p class="mt-1 text-gray-500 text-theme-sm dark:text-gray-400">
                                        Manage your system loan types
                                      </p>
                                    </div>
                                    <div class="hidden flex-col gap-3 sm:flex sm:flex-row sm:items-center">
                                      <button @click="loanTypeModal = true"
                                              class="shadow-theme-xs inline-flex flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M5 10.0002H15.0006M10.0002 5V15.0006" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        New Loan Type
                                      </button>
                                    </div>
                                  </div>
                                  <!-- Loan Types Table -->
                                  <div>
                                    <!-- Loan Types Table -->
                                    <div x-data="loanTypesTable()" x-init="init()" class="p-5">
                                      <div class="custom-scrollbar overflow-x-auto">
                                        <table class="w-full table-auto">
                                          <!-- table header start -->
                                          <thead>
                                            <tr class="border-b border-gray-200 dark:divide-gray-800 dark:border-gray-800">
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    LoanTypeID
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Type
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Interest Rate
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Repayment Type
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Created On
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                  <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                    Status
                                                  </p>
                                                </div>
                                              </th>
                                              <th class="p-4 whitespace-nowrap">
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
                                            <template x-for="loanType in paginatedLoans" :key="loanType.LoanTypeID">
                                              <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                                <!-- LoanTypeID -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="group flex items-center gap-3">
                                                    <h4 class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400" 
                                                        x-text="loanType.LoanTypeID">
                                                    </h4>
                                                  </div>
                                                </td>
                                                <!-- Type -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="loanType.Type">
                                                    </p>
                                                  </div>
                                                </td>
                                                <!-- Interest Rate -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="loanType.InterestRate">
                                                    </p>
                                                  </div>
                                                </td>
                                                <!-- Repayment Type -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="loanType.Repayment">
                                                    </p>
                                                  </div>
                                                </td>
                                                <!-- Created On -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="loanType.CreatedOn">
                                                    </p>
                                                  </div>
                                                </td>
                                                <!-- Status -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <template x-if="loanType.Status === 'Active'">
                                                      <p class="bg-success-50 text-theme-xs text-success-700 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                                        Active
                                                      </p>
                                                    </template>
                                                    <template x-if="loanType.Status === 'In-Active'">
                                                      <p class="bg-warning-50 text-theme-xs text-warning-700 dark:bg-warning-500/15 dark:text-warning-500 rounded-full px-2 py-0.5 font-medium">
                                                        In-Active
                                                      </p>
                                                    </template>
                                                    <template x-if="loanType.Status === 'Removed'">
                                                      <p class="bg-danger-50 text-theme-xs text-danger-700 dark:bg-danger-500/15 dark:text-danger-500 rounded-full px-2 py-0.5 font-medium">
                                                        Removed
                                                      </p>
                                                    </template>
                                                    <template x-if="loanType.Status === 'Under Review'">
                                                      <p class="bg-info-50 text-theme-xs text-info-700 dark:bg-info-500/15 dark:text-info-500 rounded-full px-2 py-0.5 font-medium">
                                                        Under Review
                                                      </p>
                                                    </template>
                                                  </div>
                                                </td>
                                                <!-- Actions -->
                                                <td class="p-4 whitespace-nowrap">
                                                  <div class="flex items-center col-span-2">
                                                    <button @click="editLoanTypeModal(loanType)"
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

                            <div x-show="activeTab === 'calculator'" style="display: none;">
                              <div class="mb-8">
                                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
                                  Loan Simulator
                                </h3>
                              </div>

                              <!-- Loan Calculator -->
                              <div class="space-y-8">
                                <div class="grid grid-cols-12 gap-4 md:gap-6">
                                  <div class="col-span-12 xl:col-span-5">
                                    <!-- ====== Map One Start -->
                                    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6">
                                      <div class="flex justify-between">
                                        <div>
                                          <h4 class="text-lg font-semibold text-gray-700 dark:text-white/90">
                                            Loan Calculator
                                          </h4>
                                        </div>
                                      </div>
                                      <div class="space-y-5">
                                        <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                                          <form x-data="loanCalculator()">
                                            <div class="-mx-2.5 flex flex-wrap gap-y-5">
                                              <div class="w-full px-2.5">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Loan Type
                                                </label>
                                                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                                                  <select x-model="loanType" @change="calculateLoan()" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-800 dark:text-white/90'">
                                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Select Loan Type</option>
                                                    <option value="personal" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Personal Loan</option>
                                                    <option value="business" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Business Loan</option>
                                                    <option value="emergency" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Emergency Loan</option>
                                                    <option value="education" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Education Loan</option>
                                                    <option value="vehicle" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Vehicle Loan</option>
                                                  </select>
                                                  <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                  </span>
                                                </div>
                                              </div>

                                              <div class="w-full px-2.5 xl:w-1/2">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Loan Amount
                                                </label>
                                                <div class="relative">
                                                  <input x-model="loanAmount" @input="calculateLoan()" type="number" min="1000" step="1000" placeholder="Enter loan amount" 
                                                  class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                  <span class="absolute top-1/2 left-0 flex h-11 w-[46px] -translate-y-1/2 items-center justify-center border-r border-gray-200 dark:border-gray-800">
                                                      <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1.1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"></path>
                                                      </svg>
                                                    </span>
                                                </div>
                                              </div>

                                              <div class="w-full px-2.5 xl:w-1/2">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Repayment Period
                                                </label>
                                                <div class="relative z-20 bg-transparent">
                                                  <select x-model="repaymentPeriod" @change="calculateLoan()" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                    <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Loan Duration</option>
                                                    <option value="1" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">1 Month</option>
                                                    <option value="3" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">3 Months</option>
                                                    <option value="6" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">6 Months</option>
                                                    <option value="9" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">9 Months</option>
                                                    <option value="12" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">12 Months</option>
                                                    <option value="24" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">24 Months</option>
                                                    <option value="36" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">36 Months</option>
                                                  </select>
                                                  <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                  </span>
                                                </div>
                                              </div>

                                              <div class="w-full px-2.5 xl:w-1/2">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Interest Rate
                                                </label>
                                                <div class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="interestRate + '%'">0.00%</div>
                                              </div>

                                              <div class="w-full px-2.5 xl:w-1/2">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Repayment Frequency
                                                </label>
                                                <div class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="repaymentFrequency">Monthly</div>
                                              </div>

                                              <div class="w-full px-2.5">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Estimated monthly payment
                                                </label>
                                                <div class="relative z-20 bg-transparent bg-gray-100 dark:bg-gray-800 rounded-lg p-4">
                                                  <div class="flex items-center gap-6">
                                                    <div>
                                                      <p class="text-lg font-semibold text-center text-gray-800 dark:text-white/90" x-text="'KES ' + formatCurrency(monthlyPayment)">KES 0.00</p>
                                                      <p class="text-theme-xs mt-0.5 text-center text-gray-500 dark:text-gray-400">
                                                        Monthly payment
                                                      </p>
                                                    </div>

                                                    <div class="w-px bg-gray-300 h-11 dark:bg-gray-700"></div>

                                                    <div>
                                                      <p class="text-lg font-semibold text-center text-gray-800 dark:text-white/90" x-text="'KES ' + formatCurrency(totalInterest)">KES 0.00</p>
                                                      <p class="text-theme-xs mt-0.5 text-center text-gray-500 dark:text-gray-400">
                                                        Total interest paid
                                                      </p>
                                                    </div>

                                                    <div class="w-px bg-gray-300 h-11 dark:bg-gray-700"></div>

                                                    <div>
                                                      <p class="text-lg font-semibold text-center text-gray-800 dark:text-white/90" x-text="'KES ' + formatCurrency(totalLoanAmount)">KES 0.00</p>
                                                      <p class="text-theme-xs mt-0.5 text-center text-gray-500 dark:text-gray-400">
                                                        Total cost of loan
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                              <!-- Additional Calculation Details -->
                                              <div class="w-full px-2.5">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                  Payment Schedule Details
                                                </label>
                                                <div class="relative z-20 bg-transparent bg-gray-50 dark:bg-gray-900 rounded-lg p-4">
                                                  <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                      <p class="text-sm text-gray-500 dark:text-gray-400">First Payment Date</p>
                                                      <p class="text-base font-semibold text-gray-800 dark:text-white/90" x-text="firstPaymentDate">-</p>
                                                    </div>
                                                    <div>
                                                      <p class="text-sm text-gray-500 dark:text-gray-400">Last Payment Date</p>
                                                      <p class="text-base font-semibold text-gray-800 dark:text-white/90" x-text="lastPaymentDate">-</p>
                                                    </div>
                                                    <div>
                                                      <p class="text-sm text-gray-500 dark:text-gray-400">Number of Payments</p>
                                                      <p class="text-base font-semibold text-gray-800 dark:text-white/90" x-text="numberOfPayments">0</p>
                                                    </div>
                                                    <div>
                                                      <p class="text-sm text-gray-500 dark:text-gray-400">Payment Day</p>
                                                      <p class="text-base font-semibold text-gray-800 dark:text-white/90">5th of every month</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                              <!-- Action Buttons -->
                                              <div class="w-full px-2.5 pt-4">
                                                <div class="flex justify-end items-center gap-3">
                                                  <button @click="resetCalculator()" type="button"
                                                    class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                                                    Clear
                                                  </button>
                                                  <button @click="simulateAutomation()" type="button"
                                                    class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
                                                    Simulate Automation
                                                  </button>
                                                </div>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- ====== Map One End -->
                                  </div>
                                  <div class="col-span-12 xl:col-span-7">
                                    <!-- Automated Repayment Schedule Start -->
                                    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6">
                                      <div class="flex justify-between">
                                        <div>
                                          <h3 class="text-lg font-semibold text-gray-700 dark:text-white/90">
                                            Automated Repayment Schedule
                                          </h3>
                                          <p class="mt-1 text-theme-sm text-gray-500 dark:text-gray-400">
                                            Detailed View of the Repayment Schedule
                                          </p>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                          <div class="flex items-center gap-1">
                                            <div class="h-2 w-2 rounded-full bg-brand-500"></div>
                                            <span>First Payment: </span>
                                            <span class="font-medium text-gray-700 dark:text-white/90" x-text="firstPaymentDate || '-'"></span>
                                          </div>
                                          <div class="h-4 w-px bg-gray-300 dark:bg-gray-600"></div>
                                          <div class="flex items-center gap-1">
                                            <div class="h-2 w-2 rounded-full bg-gray-400"></div>
                                            <span>Last Payment: </span>
                                            <span class="font-medium text-gray-700 dark:text-white/90" x-text="lastPaymentDate || '-'"></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="space-y-5 mt-6">
                                        <div class="max-w-full overflow-x-auto custom-scrollbar">
                                          <table class="w-full" id="repaymentScheduleTable">
                                            <thead>
                                            <tr class="border-t border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50">
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Date
                                                </p>
                                              </th>
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Repayment
                                                </p>
                                              </th>
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Principal Paid
                                                </p>
                                              </th>
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Interest Paid
                                                </p>
                                              </th>
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Total Interest paid
                                                </p>
                                              </th>
                                              <th class="px-6 py-3 text-left">
                                                <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                                  Balance
                                                </p>
                                              </th>
                                            </tr>
                                            </thead>
                                            <tbody id="repaymentScheduleBody">
                                            <!-- Empty state - will be replaced by JavaScript -->
                                            <tr class="border-t border-gray-100 dark:border-gray-800" id="emptyStateRow">
                                              <td colspan="6" class="px-6 py-12 text-center">
                                                <div class="flex flex-col items-center justify-center">
                                                  <svg class="h-12 w-12 text-gray-400 dark:text-gray-500 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                                                  </svg>
                                                  <p class="text-gray-500 dark:text-gray-400 text-sm">
                                                    Enter loan details to generate repayment schedule
                                                  </p>
                                                </div>
                                              </td>
                                            </tr>
                                            <!-- Payment rows will be inserted here by JavaScript -->
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Automated Repayment Schedule End -->
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div x-show="activeTab === 'clients'" style="display: none;">
                              <!-- Client list -->
                              <div class="space-y-8">
                                <!-- Table -->
                                <div class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
                                        x-data="invoiceTable()"
                                >
                                  <div class="flex items-center justify-between border-b border-gray-200 px-5 py-4 dark:border-gray-800">
                                    <div>
                                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                        Loan History
                                      </h3>
                                      <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Your most recent loan history
                                      </p>
                                    </div>
                                    <div class="flex gap-3.5">
                                      <div
                                              class="hidden h-11 items-center gap-0.5 rounded-lg bg-gray-100 p-0.5 lg:inline-flex dark:bg-gray-900"
                                      >
                                        <button
                                                @click="filterStatus = 'All'; currentPage = 1"
                                                :class="filterStatus === 'All' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                                                class="text-theme-sm h-10 rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
                                        >
                                          All
                                        </button>
                                        <button
                                                @click="filterStatus = 'Unpaid'; currentPage = 1"
                                                :class="filterStatus === 'Unpaid' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                                                class="text-theme-sm h-10 rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
                                        >
                                          Overdue
                                        </button>
                                        <button
                                                @click="filterStatus = 'Draft'; currentPage = 1"
                                                :class="filterStatus === 'Draft' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                                                class="text-theme-sm h-10 rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white"
                                        >
                                          Active
                                        </button>
                                        <button
                                                @click="filterStatus = 'Paid'; currentPage = 1"
                                                :class="filterStatus === 'Paid' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                                                class="text-theme-sm h-10 rounded-md px-3 py-2 font-medium hover:text-success-900 dark:hover:text-white"
                                        >
                                          Repaid
                                        </button>
                                      </div>
                                      <div class="hidden flex-col gap-3 sm:flex sm:flex-row sm:items-center">
                                        <button
                                                class="shadow-theme-xs flex w-full items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-[11px] text-sm font-medium text-gray-700 sm:w-auto dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400"
                                        >
                                          <svg
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  width="20"
                                                  height="20"
                                                  viewBox="0 0 20 20"
                                                  fill="none"
                                          >
                                            <path
                                                    d="M16.6671 13.3333V15.4166C16.6671 16.1069 16.1074 16.6666 15.4171 16.6666H4.58301C3.89265 16.6666 3.33301 16.1069 3.33301 15.4166V13.3333M10.0013 3.33325L10.0013 13.3333M6.14553 7.18708L9.99958 3.33549L13.8539 7.18708"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                            />
                                          </svg>
                                          Print
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="custom-scrollbar overflow-x-auto">
                                    <table class="w-full table-auto">
                                      <thead>
                                      <tr
                                              class="border-b border-gray-200 dark:divide-gray-800 dark:border-gray-800"
                                      >
                                        <th class="p-4 whitespace-nowrap">
                                          <div
                                                  class="flex w-full cursor-pointer items-center justify-between"
                                          >
                                            <div class="flex items-center gap-3">
                                              <label
                                                      class="flex cursor-pointer items-center text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                              >
                                        <span class="relative">
                                          <input
                                                  type="checkbox"
                                                  class="sr-only"
                                                  @change="toggleSelectAll"
                                                  :checked="isAllSelected"
                                          />
                                          <span
                                                  :class="isAllSelected ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'"
                                                  class="flex h-4 w-4 items-center justify-center rounded-sm border-[1.25px]"
                                          >
                                            <span :class="isAllSelected ? '' : 'opacity-0'">
                                              <svg
                                                      width="12"
                                                      height="12"
                                                      viewBox="0 0 12 12"
                                                      fill="none"
                                              >
                                                <path
                                                        d="M10 3L4.5 8.5L2 6"
                                                        stroke="white"
                                                        stroke-width="1.6666"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                />
                                              </svg>
                                            </span>
                                          </span>
                                        </span>
                                              </label>
                                              <p
                                                      class="text-theme-xs font-medium text-gray-700 dark:text-gray-400"
                                              >
                                                #Loan ID
                                              </p>
                                            </div>
                                          </div>
                                        </th>
                                        <th
                                                class="cursor-pointer p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                                @click="sort('customer')"
                                        >
                                          <div class="flex items-center gap-3">
                                            <p
                                                    class="text-theme-xs font-medium text-gray-700 dark:text-gray-400"
                                            >
                                              Type
                                            </p>
                                            <span class="flex flex-col gap-0.5">
                                      <svg
                                              :class="sortBy === 'customer' && sortDirection === 'asc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                fill="currentColor"
                                        />
                                      </svg>

                                      <svg
                                              :class="sortBy === 'customer' && sortDirection === 'desc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                          </div>
                                        </th>
                                        <th
                                                class="cursor-pointer p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                                @click="sort('creationDate')"
                                        >
                                          <div class="flex items-center gap-3">
                                            <p
                                                    class="text-theme-xs font-medium text-gray-700 dark:text-gray-400"
                                            >
                                              Loaned Date
                                            </p>
                                            <span class="flex flex-col gap-0.5">
                                      <svg
                                              :class="sortBy === 'creationDate' && sortDirection === 'asc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                fill="currentColor"
                                        />
                                      </svg>

                                      <svg
                                              :class="sortBy === 'creationDate' && sortDirection === 'desc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                          </div>
                                        </th>
                                        <th
                                                class="cursor-pointer p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                                @click="sort('dueDate')"
                                        >
                                          <div class="flex items-center gap-3">
                                            <p
                                                    class="text-theme-xs font-medium text-gray-700 dark:text-gray-400"
                                            >
                                              Due Date
                                            </p>
                                            <span class="flex flex-col gap-0.5">
                                      <svg
                                              :class="sortBy === 'dueDate' && sortDirection === 'asc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                fill="currentColor"
                                        />
                                      </svg>

                                      <svg
                                              :class="sortBy === 'dueDate' && sortDirection === 'desc' ? 'text-brand-500' : 'text-gray-300'"
                                              width="8"
                                              height="5"
                                              viewBox="0 0 8 5"
                                              fill="none"
                                              xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                                d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                fill="currentColor"
                                        />
                                      </svg>
                                    </span>
                                          </div>
                                        </th>
                                        <th
                                                class="p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                        >
                                          Fines
                                        </th>
                                        <th
                                                class="p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                        >
                                          Status
                                        </th>
                                        <th
                                                class="p-4 text-left text-xs font-medium text-gray-700 dark:text-gray-400"
                                        >
                                          <div class="relative">
                                            <span class="sr-only">Action</span>
                                          </div>
                                        </th>
                                      </tr>
                                      </thead>
                                      <tbody class="divide-x divide-y divide-gray-200 dark:divide-gray-800">
                                      <template x-for="invoice in paginatedInvoices" :key="invoice.id">
                                        <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                          <td class="p-4 whitespace-nowrap">
                                            <div class="group flex items-center gap-3">
                                              <label
                                                      class="flex cursor-pointer items-center text-sm font-medium text-gray-700 select-none dark:text-gray-400"
                                              >
                                              </label>
                                              <p
                                                      class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400"
                                                      x-text="invoice.number"
                                              ></p>
                                            </div>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                    <span
                                            class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                            x-text="invoice.customer"
                                    ></span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                            <p
                                                    class="text-sm text-gray-700 dark:text-gray-400"
                                                    x-text="invoice.creationDate"
                                            ></p>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                            <p
                                                    class="text-sm text-gray-700 dark:text-gray-400"
                                                    x-text="invoice.dueDate"
                                            ></p>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                            <p
                                                    class="text-sm text-gray-700 dark:text-gray-400"
                                                    x-text="invoice.total"
                                            ></p>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                    <span
                                            :class="invoice.status === 'Paid' ? 'bg-success-50 dark:bg-success-500/15 text-success-700 dark:text-success-500' : invoice.status === 'Unpaid' ? 'bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500' : 'bg-gray-100 text-gray-600 dark:bg-gray-500/15 dark:text-gray-400'"
                                            class="text-theme-xs rounded-full px-2 py-0.5 font-medium"
                                            x-text="invoice.status"
                                    ></span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap">
                                            <button onclick="window.location.href='view-client.php'"
                                                        class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
                                                >
                                                  View More
                                                </button>
                                          </td>
                                        </tr>
                                      </template>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div
                                          class="flex flex-col items-center justify-between border-t border-gray-200 px-5 py-4 sm:flex-row dark:border-gray-800"
                                  >
                                    <div class="pb-3 sm:pb-0">
                            <span class="block text-sm font-medium text-gray-500 dark:text-gray-400">
                              Showing
                              <span
                                      class="text-gray-800 dark:text-white/90"
                                      x-text="((currentPage - 1) * itemsPerPage) + (paginatedInvoices.length ? 1 : 0)"
                              ></span>
                              to
                              <span
                                      class="text-gray-800 dark:text-white/90"
                                      x-text="((currentPage - 1) * itemsPerPage) + paginatedInvoices.length"
                              ></span>
                              of
                              <span
                                      class="text-gray-800 dark:text-white/90"
                                      x-text="invoices.length"
                              ></span>
                            </span>
                                    </div>
                                    <div
                                            class="flex w-full items-center justify-between gap-2 rounded-lg bg-gray-50 p-4 sm:w-auto sm:justify-normal sm:bg-transparent sm:p-0 dark:bg-white/[0.03] dark:sm:bg-transparent"
                                    >
                                      <button
                                              class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                              @click="previousPage"
                                              :disabled="currentPage === 1"
                                              :class="currentPage === 1 ? 'opacity-50 cursor-not-allowed' : ''"
                                      >
                              <span>
                                <svg
                                        class="fill-current"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 9.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z"
                                          fill=""
                                  />
                                </svg>
                              </span>
                                      </button>

                                      <span
                                              class="block text-sm font-medium text-gray-700 sm:hidden dark:text-gray-400"
                                              x-text="'Page ' + currentPage + ' of ' + totalPages"
                                      ></span>

                                      <ul class="hidden items-center gap-0.5 sm:flex">
                                        <template x-for="page in visiblePages" :key="page">
                                          <li>
                                            <a
                                                    href="#"
                                                    @click.prevent="goToPage(page)"
                                                    :class="page === currentPage ? 'bg-brand-500 text-white' : 'hover:bg-brand-500 text-gray-700 hover:text-white dark:text-gray-400 dark:hover:text-white'"
                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium"
                                                    x-text="page"
                                            ></a>
                                          </li>
                                        </template>
                                        <template x-if="visiblePages[visiblePages.length-1] < totalPages">
                                          <li>
                                  <span
                                          class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 dark:text-gray-400"
                                  >...</span
                                  >
                                          </li>
                                        </template>
                                        <template x-if="visiblePages[visiblePages.length-1] < totalPages">
                                          <li>
                                            <a
                                                    href="#"
                                                    @click.prevent="goToPage(totalPages)"
                                                    class="hover:bg-brand-500 flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium text-gray-700 hover:text-white dark:text-gray-400 dark:hover:text-white"
                                                    x-text="totalPages"
                                            ></a>
                                          </li>
                                        </template>
                                      </ul>

                                      <button
                                              class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                                              @click="nextPage"
                                              :disabled="currentPage === totalPages"
                                              :class="currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : ''"
                                      >
                              <span>
                                <svg
                                        class="fill-current"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M17.4165 9.9986C17.4168 10.1909 17.3437 10.3832 17.197 10.53L12.2004 15.5301C11.9076 15.8231 11.4327 15.8233 11.1397 15.5305C10.8467 15.2377 10.8465 14.7629 11.1393 14.4699L14.8594 10.7472L3.33203 10.7472C2.91782 10.7472 2.58203 10.4114 2.58203 9.99715C2.58203 9.58294 2.91782 9.24715 3.33203 9.24715L14.854 9.24715L11.1393 5.53016C10.8465 5.23717 10.8467 4.7623 11.1397 4.4695C11.4327 4.1767 11.9075 4.17685 12.2003 4.46984L17.1578 9.43049C17.3163 9.568 17.4165 9.77087 17.4165 9.99715C17.4165 9.99763 17.4165 9.99812 17.4165 9.9986Z"
                                          fill=""
                                  />
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

        <!-- Content End -->
      </div>
    </main>
    <!-- ===== Main Content End ===== -->
  </div>
  <!-- ===== Content Area End ===== -->
</div>
<!-- ===== Page Wrapper End ===== -->

<!-- Modals -->
 <!-- Loan Types -->
  <div x-show="loanTypeModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="loanTypeModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="loanTypeModal = false"
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
            Loan Type
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Specify new loan type details.
          </p>
        </div>
        <form class="flex flex-col">
          <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
            <!-- Change Appointment Details Section -->
            <div class="space-y-6 mt-8">
                          <!-- Amount -->
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                <!-- Amount -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Amount
                  </label>
                  <div class="relative">
                    <input type="number" placeholder="Amount" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <span class="absolute top-1/2 left-0 flex h-11 w-[46px] -translate-y-1/2 items-center justify-center border-r border-gray-200 dark:border-gray-800">
                          <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="1.1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                          </svg>

                        </span>
                  </div>
                </div>
              </div>

              <!-- Amount -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Interest Rate -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Interest Rate (%)
                  </label>
                  <div class="relative">
                    <input type="number" placeholder="Interest Rate " class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>
                <!-- Repayment Type -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Repayment Scheme
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-800 dark:text-white/90'">
                      <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Repayment</option>
                      <option value="Daily" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Daily</option>
                      <option value="Weekly" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Weekly</option>
                      <option value="Monthly" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Monthly</option>
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
              <button @click="loanTypeModal = false" type="button"
                class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                Cancel
              </button>
              <button type="submit"
                      class="h-11 rounded-lg border border-success-500 bg-success-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-success-600 disabled:pointer-events-none disabled:opacity-50">
                Create Loan Type
              </button>
            </div>
          </div>
        </form>
      </div>
  </div>
  <!-- Edit Loan Type Modal -->
  <div x-show="$store.loanTypeData.editLoanTypeModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="$store.loanTypeData.editLoanTypeModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="$store.loanTypeData.editLoanTypeModal = false"
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
          Edit Loan Type
        </h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
          Editing: <span x-text="$store.loanTypeData.currentLoanType?.Type || ''" class="font-semibold"></span>
        </p>
      </div>
      <form class="flex flex-col">
        <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
          <!-- Change Appointment Details Section -->
          <div class="space-y-6 mt-8">
            <!-- Loan Type ID (Display only, not editable) -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Loan Type ID
                </label>
                <div class="relative">
                  <input type="text" 
                        x-model="$store.loanTypeData.currentLoanType?.LoanTypeID" 
                        readonly 
                        disabled
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-gray-100 bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder:text-white/30">
                  <span class="absolute top-1/2 left-0 flex h-11 w-[46px] -translate-y-1/2 items-center justify-center border-r border-gray-200 dark:border-gray-800">
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="1.1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                    </svg>
                  </span>
                </div>
              </div>
            </div>

            <!-- Loan Type Name -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Loan Type Name
                </label>
                <div class="relative">
                  <input type="text" 
                        x-model="$store.loanTypeData.currentLoanType?.Type" 
                        placeholder="Loan Type Name" 
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
            </div>

            <!-- Interest Rate and Repayment Type -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <!-- Interest Rate -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Interest Rate (%)
                </label>
                <div class="relative">
                  <input type="number" 
                        x-model="$store.loanTypeData.currentLoanType?.InterestRateNumber" 
                        placeholder="Interest Rate" 
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
              
              <!-- Repayment Type -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Repayment Scheme
                </label>
                <div class="relative z-20 bg-transparent">
                  <select x-model="$store.loanTypeData.currentLoanType?.Repayment" 
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="Daily" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Daily</option>
                    <option value="Weekly" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Weekly</option>
                    <option value="Monthly" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Monthly</option>
                  </select>
                  <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>

            <!-- Status -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Status
                </label>
                <div class="relative z-20 bg-transparent">
                  <select x-model="$store.loanTypeData.currentLoanType?.Status" 
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    <option value="Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Active</option>
                    <option value="In-Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">In-Active</option>
                    <option value="Under Review" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Under Review</option>
                    <option value="Removed" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Removed</option>
                  </select>
                  <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </div>
              </div>
              
              <!-- Created On (Display only) -->
              <div>
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                  Created On
                </label>
                <div class="relative">
                  <input type="text" 
                        x-model="$store.loanTypeData.currentLoanType?.CreatedOn" 
                        readonly 
                        disabled
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-gray-100 bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-800 dark:text-white/90 dark:placeholder:text-white/30">
                </div>
              </div>
            </div>

          </div>

          <!-- Action Buttons - Bottom Right -->
          <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
            <button @click="$store.loanTypeData.editLoanTypeModal = false" type="button"
              class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
              Cancel
            </button>
            <button type="submit"
                    class="h-11 rounded-lg border border-success-500 bg-success-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-success-600 disabled:pointer-events-none disabled:opacity-50">
              Update Loan Type
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

<script defer src="../../../assets/bundle.js"></script>
<!-- SCRIPTS -->
<script>
  function invoiceTable() {
    return {
      invoices: [
        {
          id: 1,
          number: "#323534",
          customer: "Lindsey Curtis",
          creationDate: "August 7, 2028",
          dueDate: "February 28, 2028",
          total: 999,
          status: "Paid",
        },
        {
          id: 2,
          number: "#323535",
          customer: "John Doe",
          creationDate: "July 1, 2028",
          dueDate: "January 1, 2029",
          total: 1200,
          status: "Unpaid",
        },
        {
          id: 3,
          number: "#323536",
          customer: "Jane Smith",
          creationDate: "June 15, 2028",
          dueDate: "December 15, 2028",
          total: 850,
          status: "Draft",
        },
        {
          id: 4,
          number: "#323537",
          customer: "Michael Brown",
          creationDate: "May 10, 2028",
          dueDate: "November 10, 2028",
          total: 1500,
          status: "Paid",
        },
        {
          id: 5,
          number: "#323538",
          customer: "Emily Davis",
          creationDate: "April 5, 2028",
          dueDate: "October 5, 2028",
          total: 700,
          status: "Unpaid",
        },
        {
          id: 6,
          number: "#323539",
          customer: "Chris Wilson",
          creationDate: "March 1, 2028",
          dueDate: "September 1, 2028",
          total: 1100,
          status: "Paid",
        },
        {
          id: 7,
          number: "#323540",
          customer: "Jessica Lee",
          creationDate: "February 20, 2028",
          dueDate: "August 20, 2028",
          total: 950,
          status: "Draft",
        },
        {
          id: 8,
          number: "#323541",
          customer: "David Kim",
          creationDate: "January 15, 2028",
          dueDate: "July 15, 2028",
          total: 1300,
          status: "Paid",
        },
        {
          id: 9,
          number: "#323542",
          customer: "Sarah Clark",
          creationDate: "December 10, 2027",
          dueDate: "June 10, 2028",
          total: 800,
          status: "Unpaid",
        },
        {
          id: 10,
          number: "#323543",
          customer: "Matthew Lewis",
          creationDate: "November 5, 2027",
          dueDate: "May 5, 2028",
          total: 1400,
          status: "Paid",
        },
        {
          id: 11,
          number: "#323544",
          customer: "Olivia Walker",
          creationDate: "October 1, 2027",
          dueDate: "April 1, 2028",
          total: 1200,
          status: "Draft",
        },
        {
          id: 12,
          number: "#323545",
          customer: "Daniel Hall",
          creationDate: "September 20, 2027",
          dueDate: "March 20, 2028",
          total: 1000,
          status: "Paid",
        },
        {
          id: 13,
          number: "#323546",
          customer: "Sophia Allen",
          creationDate: "August 15, 2027",
          dueDate: "February 15, 2028",
          total: 900,
          status: "Unpaid",
        },
        {
          id: 14,
          number: "#323547",
          customer: "James Young",
          creationDate: "July 10, 2027",
          dueDate: "January 10, 2028",
          total: 1600,
          status: "Paid",
        },
        {
          id: 15,
          number: "#323548",
          customer: "Ava Hernandez",
          creationDate: "June 5, 2027",
          dueDate: "December 5, 2027",
          total: 1050,
          status: "Draft",
        },
        {
          id: 16,
          number: "#323549",
          customer: "William King",
          creationDate: "May 1, 2027",
          dueDate: "November 1, 2027",
          total: 1150,
          status: "Paid",
        },
        {
          id: 17,
          number: "#323550",
          customer: "Mia Wright",
          creationDate: "April 20, 2027",
          dueDate: "October 20, 2027",
          total: 980,
          status: "Unpaid",
        },
        {
          id: 18,
          number: "#323551",
          customer: "Benjamin Lopez",
          creationDate: "March 15, 2027",
          dueDate: "September 15, 2027",
          total: 1250,
          status: "Paid",
        },
        {
          id: 19,
          number: "#323552",
          customer: "Charlotte Hill",
          creationDate: "February 10, 2027",
          dueDate: "August 10, 2027",
          total: 890,
          status: "Draft",
        },
        {
          id: 20,
          number: "#323553",
          customer: "Elijah Scott",
          creationDate: "January 5, 2027",
          dueDate: "July 5, 2027",
          total: 1350,
          status: "Paid",
        },
        {
          id: 21,
          number: "#323554",
          customer: "Amelia Green",
          creationDate: "December 1, 2026",
          dueDate: "June 1, 2027",
          total: 1020,
          status: "Unpaid",
        },
        {
          id: 22,
          number: "#323555",
          customer: "Lucas Adams",
          creationDate: "November 20, 2026",
          dueDate: "May 20, 2027",
          total: 1120,
          status: "Paid",
        },
        {
          id: 23,
          number: "#323556",
          customer: "Harper Nelson",
          creationDate: "October 15, 2026",
          dueDate: "April 15, 2027",
          total: 970,
          status: "Draft",
        },
        {
          id: 24,
          number: "#323557",
          customer: "Henry Carter",
          creationDate: "September 10, 2026",
          dueDate: "March 10, 2027",
          total: 1280,
          status: "Paid",
        },
        {
          id: 25,
          number: "#323558",
          customer: "Evelyn Mitchell",
          creationDate: "August 5, 2026",
          dueDate: "February 5, 2027",
          total: 1080,
          status: "Unpaid",
        },
      ],
      selected: [],
      sortBy: "number",
      sortDirection: "asc",
      currentPage: 1,
      itemsPerPage: 10,
      filterStatus: "All",
      toggleSelectAll() {
        if (this.isAllSelected) {
          this.selected = [];
        } else {
          this.selected = this.paginatedInvoices.map((i) => i.id);
        }
      },
      toggleRow(id) {
        if (this.selected.includes(id)) {
          this.selected = this.selected.filter((i) => i !== id);
        } else {
          this.selected.push(id);
        }
      },
      get isAllSelected() {
        return (
                this.paginatedInvoices.length > 0 &&
                this.paginatedInvoices.every((i) => this.selected.includes(i.id))
        );
      },
      sort(field) {
        if (this.sortBy === field) {
          this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
        } else {
          this.sortBy = field;
          this.sortDirection = "asc";
        }
      },
      get filteredInvoices() {
        if (this.filterStatus === "All") return this.invoices;
        return this.invoices.filter((i) => i.status === this.filterStatus);
      },
      get sortedInvoices() {
        return this.filteredInvoices.slice().sort((a, b) => {
          let valA = a[this.sortBy];
          let valB = b[this.sortBy];
          if (this.sortBy === "total") {
            valA = Number(valA);
            valB = Number(valB);
          }
          if (valA < valB) return this.sortDirection === "asc" ? -1 : 1;
          if (valA > valB) return this.sortDirection === "asc" ? 1 : -1;
          return 0;
        });
      },
      get paginatedInvoices() {
        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        return this.sortedInvoices.slice(start, end);
      },
      get totalPages() {
        return Math.ceil(this.invoices.length / this.itemsPerPage);
      },
      goToPage(page) {
        if (page >= 1 && page <= this.totalPages) {
          this.currentPage = page;
        }
      },
      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.currentPage++;
        }
      },
      previousPage() {
        if (this.currentPage > 1) {
          this.currentPage--;
        }
      },
      get visiblePages() {
        const pages = [];
        const maxVisible = 5;
        let start = Math.max(1, this.currentPage - Math.floor(maxVisible / 2));
        let end = Math.min(this.totalPages, start + maxVisible - 1);
        if (end - start + 1 < maxVisible) {
          start = Math.max(1, end - maxVisible + 1);
        }
        for (let i = start; i <= end; i++) {
          pages.push(i);
        }
        return pages;
      },
    };
  }
</script>

  <script>
    // loanTypesTable.js - Data binding and pagination functionality for loan types
    function loanTypesTable() {
      return {
        // Loan types sample data (6 records as requested)
        loanTypes: [
          { 
            LoanTypeID: "LNT202601", 
            Type: "Emergency Loan", 
            InterestRate: "12 %", 
            Repayment: "Weekly", 
            CreatedOn: "09:30 10-Jan-25", 
            Status: "Active" 
          },
          { 
            LoanTypeID: "LNT202602", 
            Type: "Personal Loan", 
            InterestRate: "15 %", 
            Repayment: "Monthly", 
            CreatedOn: "14:45 05-Jan-25", 
            Status: "Active" 
          },
          { 
            LoanTypeID: "LNT202603", 
            Type: "Business Loan", 
            InterestRate: "18 %", 
            Repayment: "Monthly", 
            CreatedOn: "11:20 03-Jan-25", 
            Status: "Active" 
          },
          { 
            LoanTypeID: "LNT202604", 
            Type: "Motor Vehicle Loan", 
            InterestRate: "14 %", 
            Repayment: "Monthly", 
            CreatedOn: "16:10 28-Dec-24", 
            Status: "Under Review" 
          },
          { 
            LoanTypeID: "LNT202605", 
            Type: "Education Loan", 
            InterestRate: "10 %", 
            Repayment: "Monthly", 
            CreatedOn: "10:15 25-Dec-24", 
            Status: "Active" 
          },
          { 
            LoanTypeID: "LNT202606", 
            Type: "Bursary Loan", 
            InterestRate: "8 %", 
            Repayment: "Monthly", 
            CreatedOn: "13:30 20-Dec-24", 
            Status: "In-Active" 
          }
        ],
        page: 1,
        itemsPerPage: 10,

        // Initialize function
        init() {
          console.log('Loan types table initialized');
        },

        // Computed properties for pagination
        get totalPages() {
          return Math.ceil(this.loanTypes.length / this.itemsPerPage);
        },

        get paginatedLoans() {
          const start = (this.page - 1) * this.itemsPerPage;
          const end = start + this.itemsPerPage;
          return this.loanTypes.slice(start, end);
        },

        get startEntry() {
          return (this.page - 1) * this.itemsPerPage + 1;
        },

        get endEntry() {
          const end = this.page * this.itemsPerPage;
          return end > this.loanTypes.length ? this.loanTypes.length : end;
        },

        // Pagination methods
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

        // Edit loan type modal function
        editLoanTypeModal(loanType) {
          // Create a copy of the loan type data for editing
          const loanTypeCopy = { ...loanType };
          
          // Extract just the number from InterestRate (remove " %")
          if (loanTypeCopy.InterestRate && typeof loanTypeCopy.InterestRate === 'string') {
            loanTypeCopy.InterestRateNumber = parseInt(loanTypeCopy.InterestRate.replace(' %', ''));
          } else {
            loanTypeCopy.InterestRateNumber = 0;
          }
          
          // Store the current loan type for editing
          if (Alpine.store('loanTypeData')) {
            Alpine.store('loanTypeData').currentLoanType = loanTypeCopy;
            Alpine.store('loanTypeData').editLoanTypeModal = true;
          }
        }
      };
    }

    // Store for loan type data and modal state
    function loanTypeStore() {
      return {
        // Modal states
        loanTypeModal: false,
        editLoanTypeModal: false,
        
        // Current loan type for editing
        currentLoanType: null,
        
        // Methods
        openNewLoanTypeModal() {
          this.loanTypeModal = true;
        },
        
        openEditLoanTypeModal(loanType) {
          this.currentLoanType = loanType;
          this.editLoanTypeModal = true;
        },
        
        // This method would be called when the Update button is clicked
        updateLoanType() {
          if (this.currentLoanType) {
            // Convert InterestRateNumber back to "X %" format
            if (this.currentLoanType.InterestRateNumber) {
              this.currentLoanType.InterestRate = `${this.currentLoanType.InterestRateNumber} %`;
            }
            
            console.log('Updating loan type:', this.currentLoanType);
            this.editLoanTypeModal = false;
            
            // Here you would typically update the data in your backend
            // For now, we'll just log it
            alert(`Loan type "${this.currentLoanType.Type}" would be updated`);
          }
        }
      };
    }

    // Initialize Alpine components
    document.addEventListener('alpine:init', () => {
      // Register the loanTypesTable component
      Alpine.data('loanTypesTable', loanTypesTable);
      
      // Register the loanType store
      Alpine.store('loanTypeData', loanTypeStore());
    });
  </script>

  <script>
        // loan-calculator.js - Loan Calculator Functionality
    function loanCalculator() {
      return {
        // Form fields
        loanType: '',
        loanAmount: 10000,
        repaymentPeriod: '12',
        
        // Calculation results
        interestRate: 0.00,
        repaymentFrequency: 'Monthly',
        monthlyPayment: 0.00,
        totalInterest: 0.00,
        totalLoanAmount: 0.00,
        
        // Payment schedule
        firstPaymentDate: '-',
        lastPaymentDate: '-',
        numberOfPayments: 0,
        
        // Initialize function
        init() {
          this.calculateLoan(); // Calculate initial values
        },
        
        // Format currency helper
        formatCurrency(amount) {
          return parseFloat(amount).toLocaleString('en-KE', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
          });
        },
        
        // Calculate first payment date (always 5th of next month)
        calculateFirstPaymentDate() {
          const now = new Date();
          let firstPayment = new Date(now.getFullYear(), now.getMonth() + 1, 5);
          
          // If today is after the 5th of the current month, show next month's 5th
          // If today is before or on the 5th, show this month's 5th (if still upcoming)
          if (now.getDate() <= 5) {
            // If today is on or before the 5th, check if this month's 5th has passed
            const currentMonthFifth = new Date(now.getFullYear(), now.getMonth(), 5);
            if (currentMonthFifth >= now) {
              firstPayment = currentMonthFifth;
            }
          }
          
          return firstPayment.toLocaleDateString('en-US', {
            day: 'numeric',
            month: 'short',
            year: 'numeric'
          });
        },
        
        // Calculate last payment date based on repayment period
        calculateLastPaymentDate() {
          const now = new Date();
          const monthsToAdd = parseInt(this.repaymentPeriod) || 0;
          const firstPaymentDate = new Date();
          
          // Set to 5th of next month as base
          firstPaymentDate.setMonth(firstPaymentDate.getMonth() + 1);
          firstPaymentDate.setDate(5);
          
          // Calculate last payment date
          const lastPayment = new Date(firstPaymentDate);
          lastPayment.setMonth(lastPayment.getMonth() + monthsToAdd - 1);
          
          return lastPayment.toLocaleDateString('en-US', {
            day: 'numeric',
            month: 'short',
            year: 'numeric'
          });
        },
        
        // Calculate interest rate based on loan type
        getInterestRateByType() {
          const rates = {
            'personal': 15.0,
            'business': 18.0,
            'emergency': 12.0,
            'education': 10.0,
            'vehicle': 14.0
          };
          
          return this.loanType ? (rates[this.loanType] || 12.0) : 12.0;
        },
        
        // Main calculation function
        calculateLoan() {
          // Get values
          const amount = parseFloat(this.loanAmount) || 0;
          const period = parseInt(this.repaymentPeriod) || 0;
          
          // Set interest rate based on loan type
          this.interestRate = this.getInterestRateByType();
          
          // Set repayment frequency (always monthly for now)
          this.repaymentFrequency = 'Monthly';
          this.numberOfPayments = period;
          
          // Calculate monthly interest rate
          const monthlyInterestRate = (this.interestRate / 100) / 12;
          
          // Calculate monthly payment using loan formula
          if (amount > 0 && period > 0 && monthlyInterestRate > 0) {
            // Formula: M = P * (r(1+r)^n) / ((1+r)^n - 1)
            const numerator = monthlyInterestRate * Math.pow(1 + monthlyInterestRate, period);
            const denominator = Math.pow(1 + monthlyInterestRate, period) - 1;
            
            this.monthlyPayment = amount * (numerator / denominator);
            this.totalLoanAmount = this.monthlyPayment * period;
            this.totalInterest = this.totalLoanAmount - amount;
          } else {
            // Simple interest calculation if no valid period
            this.monthlyPayment = amount / period;
            this.totalLoanAmount = amount;
            this.totalInterest = 0;
          }
          
          // Update payment dates
          this.firstPaymentDate = this.calculateFirstPaymentDate();
          this.lastPaymentDate = this.calculateLastPaymentDate();
        },
        
        // Reset calculator
        resetCalculator() {
          this.loanType = '';
          this.loanAmount = 10000;
          this.repaymentPeriod = '12';
          this.calculateLoan(); // Recalculate with reset values
        },
        
        // Simulate automation (placeholder for future functionality)
        simulateAutomation() {
          console.log('Simulate Automation clicked with data:', {
            loanType: this.loanType,
            loanAmount: this.loanAmount,
            repaymentPeriod: this.repaymentPeriod,
            interestRate: this.interestRate,
            monthlyPayment: this.monthlyPayment,
            totalInterest: this.totalInterest,
            totalLoanAmount: this.totalLoanAmount
          });
          
          // Show a success message
          alert('Loan simulation would be processed here. This feature will be implemented later.');
          
          // You can add more functionality here later
          // For example: API call, generating a payment schedule, etc.
        }
      };
    }

    // Initialize Alpine component
    document.addEventListener('alpine:init', () => {
  Alpine.data('loanCalculator', loanCalculator);
});
  </script>

</body>

</html>
