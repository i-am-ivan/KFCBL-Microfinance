<!doctype html>
<html lang="en">

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />

  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />

      <title>View Landowner | KFBCL - Mircofinance</title>

      <link rel="icon" href="../../../assets/favicon.ico">
      <link href="../../../assets/style.css" rel="stylesheet">
  </head>

  <body x-data="{ page: 'profile', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false, 'isModalOpen': false, 'makeDepositModal': false,  'isProfileInfoModal': false,  'addUnitModal': false,  'isProfileContactModal': false, 'editPropertyModal': false, 'deactivateAccountModal': false,  'isProfileFinancialModal': false, 'isProfileAddVehicleModal': false}"
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
            <div x-data="{ pageName: `Landowner`}">
              <div class="flex flex-wrap items-center justify-between gap-3 pb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90" x-text="pageName"></h2>
                <nav>
                  <ol class="flex items-center gap-1.5">
                    <li>
                      <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400" href="real-estate.php">Real Estate Dashboard
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
            <!-- Breadcrumb End -->

            <div class="rounded-2xl border border-gray-200 bg-white p-5 lg:p-6 dark:border-gray-800 dark:bg-white/[0.03]">
              <h3 class="mb-5 text-lg font-semibold text-gray-800 lg:mb-7 dark:text-white/90">Landowner: #LO001</h3>

              <div class="mb-6 rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
                <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">

                  <div class="flex w-full flex-col items-center gap-6 xl:flex-row">
                    <div class="h-[78px] w-[78px] overflow-hidden rounded-full border border-gray-200 bg-gray-100 flex items-center justify-center dark:border-gray-800 dark:bg-gray-800">
                      <svg class="h-12 w-12 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                    </div>
                    <div class="order-3 xl:order-2">
                      <h4 class="mb-2 text-center text-lg font-semibold text-gray-800 xl:text-left dark:text-white/90">
                        James Mwangi
                      </h4>
                      <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Client: #LA001</p>
                        <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          <span class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-xs font-medium">Active</span>
                          Client since December 09, 2025 15:24
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col gap-3 sm:flex-row">
                     <button @click="isProfileNextOfKinModal = true" class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                            Print
                          </button>
                  </div>
                </div>
              </div>

              <div class="rounded-xl border border-gray-200 p-6 dark:border-gray-800" x-data="{ activeTab: 'personal' }">
                <div class="flex flex-col gap-6 sm:flex-row sm:gap-8">
                  <!-- Left Sidebar Menu -->
                  <div class="border-b border-gray-200 dark:border-gray-800">
                    <nav class="flex w-full flex-row sm:flex-col sm:space-y-2">
                      <button @click="activeTab = 'personal'"
                              :class="activeTab === 'personal' ? 'bg-brand-50 text-brand-600 dark:bg-brand-500/10 dark:text-brand-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700'"
                              class="inline-flex items-center gap-3 whitespace-nowrap rounded-lg px-3 py-2.5 text-sm font-medium transition-colors duration-200 ease-in-out sm:p-3">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Personal Information
                      </button>

                      <button @click="activeTab = 'assets'"
                              :class="activeTab === 'vehicles' ? 'bg-brand-50 text-brand-600 dark:bg-brand-500/10 dark:text-brand-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700'"
                              class="inline-flex items-center gap-3 whitespace-nowrap rounded-lg px-3 py-2.5 text-sm font-medium transition-colors duration-200 ease-in-out sm:p-3">
                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                        </svg>

                        Real Estate
                      </button>

                      <button @click="activeTab = 'financials'"
                              :class="activeTab === 'financials' ? 'bg-brand-50 text-brand-600 dark:bg-brand-500/10 dark:text-brand-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700'"
                              class="inline-flex items-center gap-3 whitespace-nowrap rounded-lg px-3 py-2.5 text-sm font-medium transition-colors duration-200 ease-in-out sm:p-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.8076 2C18.2218 2 18.5576 2.33579 18.5576 2.75V2.91898C19.3061 3.10815 19.8599 3.78601 19.8599 4.59323C19.8599 5.00744 19.5242 5.34323 19.1099 5.34323C18.6957 5.34323 18.3599 5.00744 18.3599 4.59323C18.3599 4.46796 18.2584 4.36641 18.1331 4.36641H17.7381C17.4714 4.36641 17.2553 4.58257 17.2553 4.84921C17.2553 5.05046 17.3801 5.2306 17.5686 5.30127L18.5734 5.67811C19.3473 5.96833 19.8599 6.70814 19.8599 7.53464C19.8599 8.39065 19.3175 9.11996 18.5576 9.39759V9.63372C18.5576 10.0479 18.2218 10.3837 17.8076 10.3837C17.3934 10.3837 17.0576 10.0479 17.0576 9.63372V9.46488C16.3092 9.2757 15.7553 8.59785 15.7553 7.79062C15.7553 7.37641 16.0911 7.04062 16.5053 7.04062C16.9195 7.04062 17.2553 7.37641 17.2553 7.79062C17.2553 7.91589 17.3568 8.01744 17.4821 8.01744H17.8771C18.1438 8.01744 18.3599 7.80129 18.3599 7.53464C18.3599 7.3334 18.2351 7.15326 18.0467 7.08259L17.0418 6.70575C16.268 6.41552 15.7553 5.67571 15.7553 4.84921C15.7553 3.99321 16.2977 3.2639 17.0576 2.98626V2.75C17.0576 2.33579 17.3934 2 17.8076 2Z" fill="#323544"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 3.25045C4.25736 3.25045 3.25 4.25781 3.25 5.50045V18.5005C3.25 19.7431 4.25736 20.7505 5.5 20.7505H5.83333C7.07597 20.7505 8.08333 19.7431 8.08333 18.5005V5.50045C8.08333 4.25781 7.07598 3.25045 5.83333 3.25045H5.5ZM4.75 5.50045C4.75 5.08624 5.08579 4.75045 5.5 4.75045H5.83333C6.24755 4.75045 6.58333 5.08624 6.58333 5.50045V18.5005C6.58333 18.9147 6.24755 19.2505 5.83333 19.2505H5.5C5.08579 19.2505 4.75 18.9147 4.75 18.5005V5.50045Z" fill="#323544"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.833 9.63424C10.5904 9.63424 9.58301 10.6416 9.58301 11.8842V18.5005C9.58301 19.7432 10.5904 20.7505 11.833 20.7505H12.1663C13.409 20.7505 14.4163 19.7432 14.4163 18.5005V11.8842C14.4163 10.6416 13.409 9.63424 12.1663 9.63424H11.833ZM11.083 11.8842C11.083 11.47 11.4188 11.1342 11.833 11.1342H12.1663C12.5806 11.1342 12.9163 11.47 12.9163 11.8842V18.5005C12.9163 18.9147 12.5806 19.2505 12.1663 19.2505H11.833C11.4188 19.2505 11.083 18.9147 11.083 18.5005V11.8842Z" fill="#323544"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.916 14.9223C15.916 13.6797 16.9234 12.6723 18.166 12.6723H18.4993C19.742 12.6723 20.7493 13.6797 20.7493 14.9223V18.5005C20.7493 19.7432 19.742 20.7505 18.4993 20.7505H18.166C16.9234 20.7505 15.916 19.7432 15.916 18.5005V14.9223ZM18.166 14.1723C17.7518 14.1723 17.416 14.5081 17.416 14.9223V18.5005C17.416 18.9147 17.7518 19.2505 18.166 19.2505H18.4993C18.9136 19.2505 19.2493 18.9147 19.2493 18.5005V14.9223C19.2493 14.5081 18.9136 14.1723 18.4993 14.1723H18.166Z" fill="#323544"/>
                        </svg>

                        Financials
                      </button>

                      <button @click="activeTab = 'settings'"
                              :class="activeTab === 'settings' ? 'bg-brand-50 text-brand-600 dark:bg-brand-500/10 dark:text-brand-400' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700'"
                              class="inline-flex items-center gap-3 whitespace-nowrap rounded-lg px-3 py-2.5 text-sm font-medium transition-colors duration-200 ease-in-out sm:p-3">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings
                      </button>
                    </nav>
                  </div>

                  <!-- Right Content Area -->
                  <div class="mb-8 relative flex-1">
                    <!-- Personal Information -->
                    <div x-show="activeTab === 'personal'">
                      <!-- Header: Title Left + Edit Button Right -->
                      <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
                          Personal Information
                        </h3>
                        <button @click="isProfileInfoModal = true"
                                class="shadow-theme-xs flex w-full items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 sm:w-auto dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                          <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0911 2.78206C14.2125 1.90338 12.7878 1.90338 11.9092 2.78206L4.57524 10.116C4.26682 10.4244 4.0547 10.8158 3.96468 11.2426L3.31231 14.3352C3.25997 14.5833 3.33653 14.841 3.51583 15.0203C3.69512 15.1996 3.95286 15.2761 4.20096 15.2238L7.29355 14.5714C7.72031 14.4814 8.11172 14.2693 8.42013 13.9609L15.7541 6.62695C16.6327 5.74827 16.6327 4.32365 15.7541 3.44497L15.0911 2.78206ZM12.9698 3.84272C13.2627 3.54982 13.7376 3.54982 14.0305 3.84272L14.6934 4.50563C14.9863 4.79852 14.9863 5.2734 14.6934 5.56629L14.044 6.21573L12.3204 4.49215L12.9698 3.84272ZM11.2597 5.55281L5.6359 11.1766C5.53309 11.2794 5.46238 11.4099 5.43238 11.5522L5.01758 13.5185L6.98394 13.1037C7.1262 13.0737 7.25666 13.003 7.35947 12.9002L12.9833 7.27639L11.2597 5.55281Z" fill=""></path>
                          </svg>
                          Edit
                        </button>
                      </div>

                      <!-- Details Grid Below -->
                      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                        <div>
                          <p class="mb-1 text-xs text-gray-500 dark:text-gray-400">Full Name</p>
                          <p class="text-sm font-medium text-gray-800 dark:text-white/90">Mr. James M. Mwangi</p>
                        </div>
                        <div>
                          <p class="mb-1 text-xs text-gray-500 dark:text-gray-400">Date of Birth</p>
                          <p class="text-sm font-medium text-gray-800 dark:text-white/90">20 Feb 1985</p>
                        </div>
                        <div>
                          <p class="mb-1 text-xs text-gray-500 dark:text-gray-400">Gender</p>
                          <p class="text-sm font-medium text-gray-800 dark:text-white/90">Male</p>
                        </div>
                        <div>
                          <p class="mb-1 text-xs text-gray-500 dark:text-gray-400">Role</p>
                          <p class="text-sm font-medium text-gray-800 dark:text-white/90">Rider</p>
                        </div>
                      </div>
                    </div>

                    <!-- Assets Table (already complete) -->
                    <div x-show="activeTab === 'assets'">

                    <div class="space-y-8">

                      <!-- Header: Title Left + Edit Button Right -->
                      <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
                          Real-Estate Assets
                        </h3>
                      </div>

                      <div class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]" x-data="clientUnitsTable()">
                        <div class="flex flex-col gap-4 border-b border-gray-200 px-4 py-4 sm:px-5 lg:flex-row lg:items-center lg:justify-between dark:border-gray-800">
                          <div class="flex-shrink-0">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Client Units</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">All your client real estate units list</p>
                          </div>

                          <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
                            <!-- Search -->
                            <div class="relative">
                              <form @submit.prevent>
                                <div class="relative">
                                  <span class="absolute -translate-y-1/2 pointer-events-none top-1/2 left-4">
                                    <svg class="fill-gray-500 dark:fill-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04199 9.37381C3.04199 5.87712 5.87735 3.04218 9.37533 3.04218C12.8733 3.04218 15.7087 5.87712 15.7087 9.37381C15.7087 12.8705 12.8733 15.7055 9.37533 15.7055C5.87735 15.7055 3.04199 12.8705 3.04199 9.37381ZM9.37533 1.54218C5.04926 1.54218 1.54199 5.04835 1.54199 9.37381C1.54199 13.6993 5.04926 17.2055 9.37533 17.2055C11.2676 17.2055 13.0032 16.5346 14.3572 15.4178L17.1773 18.2381C17.4702 18.531 17.945 18.5311 18.2379 18.2382C18.5308 17.9453 18.5309 17.4704 18.238 17.1775L15.4182 14.3575C16.5367 13.0035 17.2087 11.2671 17.2087 9.37381C17.2087 5.04835 13.7014 1.54218 9.37533 1.54218Z" fill=""></path>
                                    </svg>
                                  </span>
                                  <input 
                                    type="text" 
                                    x-model="searchQuery"
                                    @input="searchProperties()"
                                    placeholder="Search Lot Number/License ... " 
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-10 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-[42px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden xl:w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                                  >
                                </div>
                              </form>
                            </div>
                            <!-- Print -->
                            <!--buttons -->
                            <button class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">
                              <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                              </svg>
                              Print
                            </button>
                            <!-- Assign Unit Button -->
                            <button @click="addUnitModal = true" class="shadow-theme-xs inline-flex flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M5 10.0002H15.0006M10.0002 5V15.0006" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              Sell Real-Estate
                            </button>
                          </div>
                        </div>

                        <!-- Table -->
                        <div class="space-y-8">
                          <div>
                            <div class="max-w-full overflow-x-auto custom-scrollbar">
                              <table class="min-w-full">
                                <thead class="border-gray-100 border-y bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                  <tr>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Lot No#</p>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Lot</p>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap">
                                      <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">License Number</p>
                                    </th>
                                    <th class="px-6 py-3 whitespace-nowrap"><p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Evaluation</p></th>
                                    <th class="px-6 py-3 whitespace-nowrap"><p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Bought On</p></th>
                                    <th class="px-6 py-3 whitespace-nowrap"><p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Last Payment</p></th>
                                    <th class="px-6 py-3 whitespace-nowrap"><p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Status</p></th>
                                    <th class="px-6 py-3 whitespace-nowrap"><p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">Actions</p></th>
                                  </tr>
                                </thead>
                                <tbody class="divide-x divide-y divide-gray-200 dark:divide-gray-800">
                                  <template x-for="clientProperty in paginatedData" :key="clientProperty.id">
                                    <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                      <td class="p-4 whitespace-nowrap">
                                        <h4 class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400" x-text="getProperty(clientProperty.propertyId).lotNumber"></h4>
                                      </td>
                                      <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center gap-3">
                                          <div>
                                            <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400" x-text="getProperty(clientProperty.propertyId).title"></span>
                                            <span class="text-gray-500 text-theme-sm dark:text-gray-400" x-text="getProperty(clientProperty.propertyId).location"></span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="p-4 whitespace-nowrap">
                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="getProperty(clientProperty.propertyId).licenseNumber"></p>
                                      </td>
                                      <td class="p-4 whitespace-nowrap">
                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="formatPrice(getProperty(clientProperty.propertyId).rawPrice)"></p>
                                      </td>
                                      <td class="p-4 whitespace-nowrap">
                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="formatDate(clientProperty.purchaseDate)"></p>
                                      </td>
                                      <td class="p-4 whitespace-nowrap">
                                        <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="formatPrice(getLastPaymentAmount(clientProperty.id))"></p>
                                      </td>
                                      <td class="p-4 whitespace-nowrap">
                                        <span 
                                          :class="{
                                            'bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500': clientProperty.paymentStatus === 'fully_paid',
                                            'bg-warning-50 text-warning-600 dark:bg-warning-500/15 dark:text-warning-500': clientProperty.paymentStatus === 'installment' || clientProperty.paymentStatus === 'deposit_paid',
                                            'bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500': clientProperty.paymentStatus === 'overdue'
                                          }"
                                          class="rounded-full px-2 py-0.5 text-xs font-medium"
                                          x-text="formatStatus(clientProperty.paymentStatus)"
                                        ></span>
                                      </td>
                                      <td class="px-6 py-4">
                                        <div class="flex items-center col-span-2">
                                          <button @click="editPropertyModal = true" class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                            <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                              <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.1" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                            </svg>
                                          </button>
                                        </div>
                                      </td>
                                    </tr>
                                  </template>
                                </tbody>
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
                                  <span class="text-gray-800 dark:text-white/90" x-text="filteredClientProperties.length"></span>
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
                                    <span class="text-gray-800 dark:text-white/90" x-text="filteredClientProperties.length"></span>
                                  </span>
                                </div>
                                <div class="flex w-full items-center justify-between gap-2 rounded-lg bg-gray-50 p-4 sm:w-auto sm:justify-normal sm:rounded-none sm:bg-transparent sm:p-0 dark:bg-gray-900 dark:sm:bg-transparent">
                                  <button 
                                    class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200" 
                                    :disabled="page === 1" 
                                    @click="goToPage(page - 1)"
                                  >
                                    <span>
                                      <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 8.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z" fill=""></path>
                                      </svg>
                                    </span>
                                  </button>

                                  <span class="block text-sm font-medium text-gray-700 sm:hidden dark:text-gray-400">
                                    Page <span x-text="page"></span> of <span x-text="totalPages"></span>
                                  </span>

                                  <ul class="hidden items-center gap-0.5 sm:flex">
                                    <template x-for="n in totalPages" :key="n">
                                      <li>
                                        <a 
                                          href="#" 
                                          @click.prevent="goToPage(n)" 
                                          :class="page === n ? 'bg-brand-500 text-white' : 'hover:bg-brand-500 text-gray-700 dark:text-gray-400 hover:text-white dark:hover:text-white'" 
                                          class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium"
                                        >
                                          <span x-text="n"></span>
                                        </a>
                                      </li>
                                    </template>
                                  </ul>

                                  <button 
                                    class="shadow-theme-xs flex items-center gap-2 rounded-lg border border-gray-300 bg-white p-2 text-gray-700 hover:bg-gray-50 hover:text-gray-800 disabled:cursor-not-allowed disabled:opacity-50 sm:p-2.5 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200" 
                                    :disabled="page === totalPages" 
                                    @click="goToPage(page + 1)"
                                  >
                                    <span>
                                      <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4165 9.9986C17.4168 10.1909 17.3437 10.3832 17.197 10.53L12.2004 15.5301C11.9076 15.8231 11.4327 15.8233 11.1397 15.5305C10.8467 15.2377 10.8465 14.7629 11.1393 14.4699L14.8594 10.7472L3.33203 10.7472C2.91782 10.7472 2.58203 10.4114 2.58203 9.99715C2.58203 9.58294 2.91782 9.24715 3.33203 9.24715L14.854 9.24715L11.1393 5.53016C10.8465 5.23717 10.8467 4.7623 11.1397 4.4695C11.4327 4.1767 11.9075 4.17685 12.2003 4.46984L17.1578 9.43049C17.3163 9.568 17.4165 9.77087 17.4165 9.99715C17.4165 9.99763 17.4165 9.99812 17.4165 9.9986Z" fill=""></path>
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

                    <!-- Financials Table -->
                    <div x-show="activeTab === 'financials'">
                      <!-- Header: Title Left + Buttons Right -->
                      <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white/90">
                          Financials
                        </h3>

                        <div class="flex flex-col gap-3 sm:flex-row">
                          <button @click="makeDepositModal = true"
                                  class="flex items-center justify-center gap-2 rounded-lg border border-success-300 bg-success px-5 py-2.5 text-sm font-medium text-success-700 hover:bg-success-50 dark:border-success-700 dark:bg-success-800 dark:text-success-300 dark:hover:bg-success-700">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18h14M5 18v3h14v-3M5 18l1-9h12l1 9M16 6v3m-4-3v3m-2-6h8v3h-8V3Zm-1 9h.01v.01H9V12Zm3 0h.01v.01H12V12Zm3 0h.01v.01H15V12Zm-6 3h.01v.01H9V15Zm3 0h.01v.01H12V15Zm3 0h.01v.01H15V15Z"/>
                            </svg>
                            Make Payment
                          </button>
                          <button class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">
                            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                            </svg>
                            Print
                          </button>
                        </div>
                      </div>
                      <!-- Search + Tab Filter -->
                      <div class="flex flex-col gap-5 mb-6 sm:flex-row sm:justify-between">

                        <div class="w-full">
                          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                            Statistics
                          </h3>
                          <p class="mt-1 text-gray-500 text-theme-sm dark:text-gray-400">
                            Landowner financial transactions and summaries 
                          </p>
                        </div>

                        <div class="flex items-start w-full gap-3 sm:justify-end">
                          <div class="relative w-fit">
                            <div class="flatpickr-wrapper">
                              <div class="flatpickr-wrapper">
                                <input class="datepicker h-10 w-full max-w-11 rounded-lg border border-gray-200 bg-white py-2.5 pl-[34px] pr-4 text-theme-sm font-medium text-gray-700 shadow-theme-xs focus:outline-hidden focus:ring-0 focus-visible:outline-hidden dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 xl:max-w-fit xl:pl-11 flatpickr-input"
                                       placeholder="Select dates"
                                       data-class="flatpickr-right"
                                       readonly="readonly"
                                       type="text">
                                <div class="flatpickr-calendar rangeMode animate static flatpickr-right" tabindex="-1">
                                  <div class="flatpickr-months">
                                    <span class="flatpickr-prev-month">
                                      <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                    </span>
                                    <div class="flatpickr-month">
                                      <div class="flatpickr-current-month">
                                        <div class="numInputWrapper">
                                          <input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year">
                                          <span class="arrowUp"></span>
                                          <span class="arrowDown"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <span class="flatpickr-next-month">
                                      <svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
                                <span class="flatpickr-weekday">
                                  Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                                </span>
                              </div>
                            </div>
                                <div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="November 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 1, 2025" tabindex="-1">1</span><span class="flatpickr-day" aria-label="December 2, 2025" tabindex="-1">2</span><span class="flatpickr-day" aria-label="December 3, 2025" tabindex="-1">3</span><span class="flatpickr-day" aria-label="December 4, 2025" tabindex="-1">4</span><span class="flatpickr-day" aria-label="December 5, 2025" tabindex="-1">5</span><span class="flatpickr-day" aria-label="December 6, 2025" tabindex="-1">6</span><span class="flatpickr-day" aria-label="December 7, 2025" tabindex="-1">7</span><span class="flatpickr-day" aria-label="December 8, 2025" tabindex="-1">8</span><span class="flatpickr-day" aria-label="December 9, 2025" tabindex="-1">9</span><span class="flatpickr-day" aria-label="December 10, 2025" tabindex="-1">10</span><span class="flatpickr-day" aria-label="December 11, 2025" tabindex="-1">11</span><span class="flatpickr-day" aria-label="December 12, 2025" tabindex="-1">12</span><span class="flatpickr-day selected startRange" aria-label="December 13, 2025" tabindex="-1">13</span><span class="flatpickr-day inRange" aria-label="December 14, 2025" tabindex="-1">14</span><span class="flatpickr-day inRange" aria-label="December 15, 2025" tabindex="-1">15</span><span class="flatpickr-day inRange" aria-label="December 16, 2025" tabindex="-1">16</span><span class="flatpickr-day inRange" aria-label="December 17, 2025" tabindex="-1">17</span><span class="flatpickr-day inRange" aria-label="December 18, 2025" tabindex="-1">18</span><span class="flatpickr-day today selected endRange" aria-label="December 19, 2025" aria-current="date" tabindex="-1">19</span><span class="flatpickr-day" aria-label="December 20, 2025" tabindex="-1">20</span><span class="flatpickr-day" aria-label="December 21, 2025" tabindex="-1">21</span><span class="flatpickr-day" aria-label="December 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="December 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="December 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="December 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="December 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="December 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="January 7, 2026" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day nextMonthDay" aria-label="January 10, 2026" tabindex="-1">10</span></div></div></div></div></div></div><div class="flatpickr-calendar rangeMode animate static flatpickr-right" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">December </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
                            </div>
                            </div>
                              <div class="flatpickr-days" tabindex="-1">
                                <div class="dayContainer">
                                  <span class="flatpickr-day prevMonthDay" aria-label="November 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 1, 2025" tabindex="-1">1</span><span class="flatpickr-day" aria-label="December 2, 2025" tabindex="-1">2</span><span class="flatpickr-day" aria-label="December 3, 2025" tabindex="-1">3</span><span class="flatpickr-day" aria-label="December 4, 2025" tabindex="-1">4</span><span class="flatpickr-day" aria-label="December 5, 2025" tabindex="-1">5</span><span class="flatpickr-day" aria-label="December 6, 2025" tabindex="-1">6</span><span class="flatpickr-day" aria-label="December 7, 2025" tabindex="-1">7</span><span class="flatpickr-day" aria-label="December 8, 2025" tabindex="-1">8</span><span class="flatpickr-day" aria-label="December 9, 2025" tabindex="-1">9</span><span class="flatpickr-day" aria-label="December 10, 2025" tabindex="-1">10</span><span class="flatpickr-day" aria-label="December 11, 2025" tabindex="-1">11</span><span class="flatpickr-day" aria-label="December 12, 2025" tabindex="-1">12</span><span class="flatpickr-day selected startRange" aria-label="December 13, 2025" tabindex="-1">13</span><span class="flatpickr-day inRange" aria-label="December 14, 2025" tabindex="-1">14</span><span class="flatpickr-day inRange" aria-label="December 15, 2025" tabindex="-1">15</span><span class="flatpickr-day inRange" aria-label="December 16, 2025" tabindex="-1">16</span><span class="flatpickr-day inRange" aria-label="December 17, 2025" tabindex="-1">17</span><span class="flatpickr-day inRange" aria-label="December 18, 2025" tabindex="-1">18</span><span class="flatpickr-day today selected endRange" aria-label="December 19, 2025" aria-current="date" tabindex="-1">19</span><span class="flatpickr-day" aria-label="December 20, 2025" tabindex="-1">20</span><span class="flatpickr-day" aria-label="December 21, 2025" tabindex="-1">21</span><span class="flatpickr-day" aria-label="December 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="December 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="December 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="December 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="December 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="December 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="January 7, 2026" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day nextMonthDay" aria-label="January 10, 2026" tabindex="-1">10</span>
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="absolute inset-0 right-auto flex items-center pointer-events-none left-4">
                              <svg class="fill-gray-700 dark:fill-gray-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66683 1.54199C7.08104 1.54199 7.41683 1.87778 7.41683 2.29199V3.00033H12.5835V2.29199C12.5835 1.87778 12.9193 1.54199 13.3335 1.54199C13.7477 1.54199 14.0835 1.87778 14.0835 2.29199V3.00033L15.4168 3.00033C16.5214 3.00033 17.4168 3.89576 17.4168 5.00033V7.50033V15.8337C17.4168 16.9382 16.5214 17.8337 15.4168 17.8337H4.5835C3.47893 17.8337 2.5835 16.9382 2.5835 15.8337V7.50033V5.00033C2.5835 3.89576 3.47893 3.00033 4.5835 3.00033L5.91683 3.00033V2.29199C5.91683 1.87778 6.25262 1.54199 6.66683 1.54199ZM6.66683 4.50033H4.5835C4.30735 4.50033 4.0835 4.72418 4.0835 5.00033V6.75033H15.9168V5.00033C15.9168 4.72418 15.693 4.50033 15.4168 4.50033H13.3335H6.66683ZM15.9168 8.25033H4.0835V15.8337C4.0835 16.1098 4.30735 16.3337 4.5835 16.3337H15.4168C15.693 16.3337 15.9168 16.1098 15.9168 15.8337V8.25033Z" fill=""></path>
                              </svg>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="flex">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                          <thead class="bg-gray-50 dark:bg-gray-800">
                          <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">#TransactionID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Lot</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Amount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Payment</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400">Actions</th>
                          </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                              <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">#TRX001</td>
                              <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                  <div>
                                    <span class="text-theme-sm mb-0.5 block font-medium text-gray-700 dark:text-gray-400">50 x 80 Muguga kwa Jane</span>
                                    <span class="text-gray-500 text-theme-sm dark:text-gray-400">Kimuchu, Thika, Kiambu</span>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">15 Dec 2025</td>
                              <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">KES 2,000</td>
                              <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">M-Pesa</td>
                              <td class="px-6 py-4">
                                <span class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-xs font-medium">Completed</span>
                              </td>
                              <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                  <button class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                  </button>
                                </div>
                              </td>
                            </tr>
                          <!-- Add more rows as needed -->
                          </tbody>
                        </table>
                      </div>
                      <!-- Pagination (Bottom Right) -->
                      <div class="mt-6 flex justify-end">
                        <nav class="flex items-center gap-2">
                          <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700">
                            Previous
                          </button>
                          <button class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-medium text-gray">1</button>
                          <button class="rounded-lg border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700">Next</button>
                        </nav>
                      </div>
                    </div>

                    <!-- Settings (Notification toggles & preferences) -->
                    <div x-show="activeTab === 'settings'">
                      <h3 class="mb-4 text-xl font-medium text-gray-800 dark:text-white/90">Settings</h3>
                      <div class="grid grid-cols-1 gap-5 sm:grid-cols-1 xl:grid-cols-1">
                        <article class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/3">
                          <div class="relative p-5 pb-9">
                            <div class="gap-3">
                              <h3 class="mb-3 text-lg font-semibold text-gray-800 dark:text-white/90">
                                Membership Settings
                              </h3>
                              <p class="text-sm text-gray-500 dark:text-gray-400">
                                Manage Real Estate client account.
                              </p>
                            </div>
                          </div>
                          <div class="flex items-center justify-between border-t border-gray-200 p-5 dark:border-gray-800">
                            <div class="flex gap-3">
                              <div class="order-3 xl:order-2">
                                <h4 class="mb-2 text-center text-medium font-semibold text-gray-600 xl:text-left dark:text-white/90">
                                  Account Status
                                </h4>
                                <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                                  <p class="text-sm text-gray-500 dark:text-gray-400">Client #LO0001</p>
                                  <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                                  <p class="text-sm text-gray-500 dark:text-gray-400"><span class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-xs font-medium">Active</span> since December 09, 2025 15:24</p>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-col gap-3 sm:flex-row">
                              <div class="relative" x-data="{ isOptionSelected: false }">
                                <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                  <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Status</option>
                                  <option value="Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Active</option>
                                  <option value="Pending" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Pending</option>
                                  <option value="Blacklisted" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Blacklisted</option>
                                </select>
                                <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                                    <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                  </span>
                              </div>
                              <button @click="deactivateAccountModal = true"
                                      class="flex items-center justify-center gap-2 rounded-lg border border-success-300 bg-success px-5 py-2.5 text-sm font-medium text-success-700 hover:bg-success-50 dark:border-success-700 dark:bg-success-800 dark:text-success-300 dark:hover:bg-success-700">
                                Update Status
                              </button>
                              <button @click="deactivateAccountModal = true"
                                      class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-error-700 shadow-theme-xs hover:bg-error-50 hover:text-error-800 disabled:pointer-events-none disabled:opacity-50 dark:border-error-700 dark:bg-gray-900 dark:text-error-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                                De-Activate Account
                              </button>
                            </div>
                          </div>
                        </article>
                    </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->

    <!-- BEGIN MODAL -->
    <div x-show="isProfileInfoModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="isProfileInfoModal = false" class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="isProfileInfoModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
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
            Edit Personal Information
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Update Bodaboda self-help group details to keep profile up-to-date.
          </p>
        </div>
        <form class="flex flex-col">
          <div class="-mx-2.5 flex flex-wrap gap-y-5">
            <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
              <div class="-mx-2.5 flex flex-wrap gap-y-5">

                <!-- 2. Full Name - Horizontal Arrangement -->
                <div class="w-full">
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <!-- First Name -->
                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        First Name
                      </label>
                      <input type="text" placeholder="Enter first name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <!-- Middle Name -->
                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Last Name
                      </label>
                      <input type="text" placeholder="Enter last name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <!-- Last Name -->
                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Other Name
                      </label>
                      <input type="text" placeholder="Enter last name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </div>

                <div class="w-full ">
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <!-- 4. Gender Dropdown -->
                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Gender
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected && 'text-gray-800 dark:text-white/90'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Select Gender</option>
                          <option value="male" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Male</option>
                          <option value="female" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Female</option>
                          <option value="other" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Other</option>
                        </select>
                        <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                          <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                      </div>
                    </div>
                    <!-- 5. Date of Birth -->
                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Date of Birth
                      </label>

                      <div class="relative">
                        <div class="flatpickr-wrapper"><input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input" readonly="readonly"><div class="flatpickr-calendar animate static null arrowTop arrowLeft" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">December </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
                      <span class="flatpickr-weekday">
                        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                      </span>
                        </div>
                        </div>
                          <div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="November 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 1, 2025" tabindex="-1">1</span><span class="flatpickr-day" aria-label="December 2, 2025" tabindex="-1">2</span><span class="flatpickr-day" aria-label="December 3, 2025" tabindex="-1">3</span><span class="flatpickr-day" aria-label="December 4, 2025" tabindex="-1">4</span><span class="flatpickr-day" aria-label="December 5, 2025" tabindex="-1">5</span><span class="flatpickr-day" aria-label="December 6, 2025" tabindex="-1">6</span><span class="flatpickr-day" aria-label="December 7, 2025" tabindex="-1">7</span><span class="flatpickr-day" aria-label="December 8, 2025" tabindex="-1">8</span><span class="flatpickr-day" aria-label="December 9, 2025" tabindex="-1">9</span><span class="flatpickr-day" aria-label="December 10, 2025" tabindex="-1">10</span><span class="flatpickr-day" aria-label="December 11, 2025" tabindex="-1">11</span><span class="flatpickr-day" aria-label="December 12, 2025" tabindex="-1">12</span><span class="flatpickr-day" aria-label="December 13, 2025" tabindex="-1">13</span><span class="flatpickr-day" aria-label="December 14, 2025" tabindex="-1">14</span><span class="flatpickr-day" aria-label="December 15, 2025" tabindex="-1">15</span><span class="flatpickr-day" aria-label="December 16, 2025" tabindex="-1">16</span><span class="flatpickr-day" aria-label="December 17, 2025" tabindex="-1">17</span><span class="flatpickr-day" aria-label="December 18, 2025" tabindex="-1">18</span><span class="flatpickr-day" aria-label="December 19, 2025" tabindex="-1">19</span><span class="flatpickr-day" aria-label="December 20, 2025" tabindex="-1">20</span><span class="flatpickr-day today" aria-label="December 21, 2025" aria-current="date" tabindex="-1">21</span><span class="flatpickr-day" aria-label="December 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="December 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="December 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="December 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="December 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="December 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="January 7, 2026" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day nextMonthDay" aria-label="January 10, 2026" tabindex="-1">10</span></div></div></div></div></div></div>
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                              </svg>
                            </span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
            <button @click="isProfileInfoModal = false" type="button"
                    class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto">
              Close
            </button>
            <button type="button" class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
              Save Changes
            </button>
          </div>
        </form>
      </div>
    </div>

    <div x-show="isProfileContactModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="isProfileContactModal = false" class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="isProfileContactModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
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
          <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">Edit Contact Information</h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">Update Member Contact details to keep profile up-to-date.</p>
        </div>
        <form>
          <div class="-mx-2.5 flex flex-wrap gap-y-5">
            <!-- Member Email -->
            <div class="w-full px-2.5">
              <div class="relative">
                            <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.0415 7.06206V14.375C3.0415 14.6511 3.26536 14.875 3.5415 14.875H16.4582C16.7343 14.875 16.9582 14.6511 16.9582 14.375V7.06245L11.1441 11.1168C10.4568 11.5961 9.54348 11.5961 8.85614 11.1168L3.0415 7.06206ZM16.9582 5.19262C16.9582 5.19341 16.9582 5.1942 16.9582 5.19498V5.20026C16.957 5.22216 16.9458 5.24239 16.9277 5.25501L10.2861 9.88638C10.1143 10.0062 9.88596 10.0062 9.71412 9.88638L3.0723 5.25485C3.05318 5.24151 3.04178 5.21967 3.04177 5.19636C3.04176 5.15695 3.0737 5.125 3.1131 5.125H16.8869C16.925 5.125 16.9562 5.15494 16.9582 5.19262ZM18.4582 5.21428V14.375C18.4582 15.4796 17.5627 16.375 16.4582 16.375H3.5415C2.43693 16.375 1.5415 15.4796 1.5415 14.375V5.19498C1.5415 5.1852 1.54169 5.17546 1.54206 5.16577C1.55834 4.31209 2.25546 3.625 3.1131 3.625H16.8869C17.7546 3.625 18.4582 4.32843 18.4583 5.19622C18.4583 5.20225 18.4582 5.20826 18.4582 5.21428Z" fill=""></path>
                              </svg>
                            </span>
                <input type="email" placeholder="Email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
              </div>
            </div>
            <!-- Primary Phone -->
            <div class="w-full px-2.5 xl:w-1/2">
              <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Primary Phone
              </label>
              <input type="text" placeholder="Enter first name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>
            <!-- Primary Phone -->
            <div class="w-full px-2.5 xl:w-1/2">
              <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Secondary Phone
              </label>
              <input type="text" placeholder="Enter last name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
            </div>
          </div>
          <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
            <button @click="isProfileContactModal = false" type="button"
                    class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto">
              Close</button>
            <button type="button" class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">Save Changes</button>
          </div>
        </form>
      </div>
    </div>

    <div x-show="isProfileNextKinModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="isProfileNextKinModal = false" class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="isProfileNextKinModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
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
            Next of Kin Details
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Enter member next of kin details that are upto date.
          </p>
        </div>
        <div x-data="{
          currentStep: 1,
          steps: [
            { id: 1, title: 'Personal Information', completed: false },
            { id: 2, title: 'Contact Information', completed: false },
            { id: 3, title: 'Addresses', completed: false },
            { id: 4, title: 'Preview', completed: false }
          ],
          goToStep(step) {
            if (step >= 1 && step <= this.steps.length) {
              this.currentStep = step;
            }
          },
          nextStep() {
            if (this.currentStep < this.steps.length) {
              this.currentStep++;
              this.steps[this.currentStep - 2].completed = true;
            }
          },
          prevStep() {
            if (this.currentStep > 1) {
              this.currentStep--;
            }
          }
        }"
        >

          <!-- Progress Bar -->
          <div class="mb-8 px-4 sm:px-6">
            <div class="flex items-center justify-between">
              <div class="flex-1">
                <div class="flex items-center">
                  <!-- Progress Line -->
                  <div class="relative w-full">
                    <div class="absolute h-1 w-full bg-gray-200 dark:bg-gray-700"></div>
                    <div class="absolute h-1 bg-brand-500 transition-all duration-300"
                         :style="'width:' + ((currentStep - 1) / (steps.length - 1) * 100) + '%'"></div>
                  </div>
                </div>

                <!-- Step Indicators -->
                <div class="flex justify-between mt-4">
                  <template x-for="step in steps" :key="step.id">
                    <div class="flex flex-col items-center">
                      <div class="relative">
                        <!-- Step Circle -->
                        <div class="h-8 w-8 rounded-full border-2 flex items-center justify-center transition-all duration-300"
                             :class="step.id === currentStep
                       ? 'border-brand-500 bg-brand-50 dark:bg-brand-900/30'
                       : step.id < currentStep || step.completed
                       ? 'border-brand-500 bg-brand-500'
                       : 'border-gray-300 dark:border-gray-600'">

                          <!-- Step Number/Checkmark -->
                          <template x-if="step.id < currentStep || step.completed">
                            <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                          </template>
                          <template x-if="!(step.id < currentStep || step.completed)">
                    <span class="text-xs font-medium"
                          :class="step.id === currentStep
                            ? 'text-brand-500'
                            : 'text-gray-500 dark:text-gray-400'">
                      <span x-text="step.id"></span>
                    </span>
                          </template>
                        </div>
                      </div>

                      <!-- Step Title -->
                      <span class="mt-2 text-xs font-medium whitespace-nowrap"
                            :class="step.id === currentStep
                      ? 'text-brand-500'
                      : step.id < currentStep || step.completed
                      ? 'text-brand-500'
                      : 'text-gray-500 dark:text-gray-400'">
                <span x-text="step.title"></span>
              </span>
                    </div>
                  </template>
                </div>
              </div>
            </div>
          </div>

          <!-- Wizard Form -->
          <form class="flex flex-col">
            <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
              <div class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">

                <!-- Step 1: Personal Information -->
                <div x-show="currentStep === 1">
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Personal Information
                      </h4>
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        First Name
                      </label>
                      <input type="text" placeholder="Enter first name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Last Name
                      </label>
                      <input type="text" placeholder="Enter last name" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        National ID
                      </label>
                      <input type="text" placeholder="National ID No." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Date of Birth
                      </label>
                      <div class="relative">
                        <input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                          <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                          </svg>
                        </span>
                      </div>
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Relationship Type
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Father
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Mother
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Husband
                          </option>
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
                        Gender
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Male
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Female
                          </option>
                        </select>
                        <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                  <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step 2: Contact Information -->
                <div x-show="currentStep === 2">
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Contact Information
                      </h4>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email
                      </label>
                      <div class="relative">
                <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                  <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.0415 7.06206V14.375C3.0415 14.6511 3.26536 14.875 3.5415 14.875H16.4582C16.7343 14.875 16.9582 14.6511 16.9582 14.375V7.06245L11.1441 11.1168C10.4568 11.5961 9.54348 11.5961 8.85614 11.1168L3.0415 7.06206ZM16.9582 5.19262C16.9582 5.19341 16.9582 5.1942 16.9582 5.19498V5.20026C16.957 5.22216 16.9458 5.24239 16.9277 5.25501L10.2861 9.88638C10.1143 10.0062 9.88596 10.0062 9.71412 9.88638L3.0723 5.25485C3.05318 5.24151 3.04178 5.21967 3.04177 5.19636C3.04176 5.15695 3.0737 5.125 3.1131 5.125H16.8869C16.925 5.125 16.9562 5.15494 16.9582 5.19262ZM18.4582 5.21428V14.375C18.4582 15.4796 17.5627 16.375 16.4582 16.375H3.5415C2.43693 16.375 1.5415 15.4796 1.5415 14.375V5.19498C1.5415 5.1852 1.54169 5.17546 1.54206 5.16577C1.55834 4.31209 2.25546 3.625 3.1131 3.625H16.8869C17.7546 3.625 18.4582 4.32843 18.4583 5.19622C18.4583 5.20225 18.4582 5.20826 18.4582 5.21428Z" fill=""></path>
                  </svg>
                </span>
                        <input type="email" placeholder="Email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      </div>
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Primary Phone
                      </label>
                      <input type="text" placeholder="Primary Phone" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Secondary Phone
                      </label>
                      <input type="text" placeholder="Secondary Phone" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </div>

                <!-- Step 3: Addresses -->
                <div x-show="currentStep === 3">
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Address
                      </h4>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Street
                      </label>
                      <input type="text" placeholder="Street Address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        P.O.Box
                      </label>
                      <input type="text" placeholder="Postal Code" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Town
                      </label>
                      <input type="text"
                             placeholder="Residential Town"
                             class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        County
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            --Select County--
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Kiambu
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Machakos
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Murang'a
                          </option>
                        </select>
                        <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                  <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step 4: Preview -->
                <div x-show="currentStep === 4">
                  <div class="space-y-6">
                    <div class="w-full">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Preview Information
                      </h4>
                    </div>

                    <!-- Preview Sections -->
                    <div class="space-y-6">
                      <!-- Personal Info Preview -->
                      <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Personal Information</h5>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Full Name</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-fullname">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">National ID</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-national-id">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Date of Birth</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-dob">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Gender</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-gender">-</p>
                          </div>
                        </div>
                      </div>

                      <!-- Contact Info Preview -->
                      <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Contact Information</h5>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Email</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-email">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Primary Phone</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-primary-phone">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Secondary Phone</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-secondary-phone">-</p>
                          </div>
                        </div>
                      </div>

                      <!-- Address Preview -->
                      <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                        <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Address</h5>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Street Address</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-street">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Town</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-town">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">County</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-county">-</p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">P.O. Box</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200" id="preview-pobox">-</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center justify-between px-4 pt-6 border-t border-gray-200 dark:border-gray-700">
              <!-- Previous Button -->
              <button type="button"
                      @click="prevStep()"
                      x-show="currentStep > 1"
                      class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Previous
              </button>

              <!-- Spacer for when Previous button is hidden -->
              <div x-show="currentStep === 1" class="flex-1"></div>

              <!-- Next Button (for first 3 steps) -->
              <button type="button"
                      x-show="currentStep < 3"
                      @click="nextStep()"
                      class="bg-brand-500 hover:bg-brand-600 flex items-center justify-center gap-2 rounded-lg px-6 py-3 text-sm font-medium text-white">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </button>

              <!-- Preview Button (step 3 to 4) -->
              <button type="button"
                      x-show="currentStep === 3"
                      @click="nextStep()"
                      class="bg-brand-500 hover:bg-brand-600 flex items-center justify-center gap-2 rounded-lg px-6 py-3 text-sm font-medium text-white">
                Preview
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                </svg>
              </button>

              <!-- Save & Cancel Buttons (only on preview step) -->
              <div x-show="currentStep === 4" class="flex items-center gap-3">
                <button type="button"
                        @click="prevStep()"
                        class="flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-6 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                  Cancel
                </button>
                <button type="button"
                        @click="isModalOpen = true"
                        class="bg-brand-500 hover:bg-brand-600 flex items-center justify-center gap-2 rounded-lg px-6 py-3 text-sm font-medium text-white">
                  Save Changes
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Make Deposit Modal --> 
    <div x-show="makeDepositModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="makeDepositModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
        <!-- close btn -->
        <button @click="makeDepositModal = false"
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
            Make Payment
          </h4>
          <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
            Specify amount and deposit status.
          </p>
        </div>
        <form class="flex flex-col">
          <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
            <!-- Preview Report View (unchanged design) -->
            <div class="space-y-6">
              <div class="border border-gray rounded-2xl px-4 py-4 dark:border-gray-700">
                  <!-- License Number and Valuation -->
                  <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                    <!-- License Number -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        License/Lot Number
                      </label>
                      <div class="relative">
                        <input type="text" placeholder="Search License/Lot License ..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      </div>
                    </div>
                  </div>
              </div>

              <div>
                    <!-- Appointment Report Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6 mb-6">
                      <!-- Applicant Information Section -->
                      <div class="mb-8">
                        <div class="mb-4 md:mb-0">
                          <h4 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">50 x 80 Muguga kwa Jane</h4>
                          <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-1 xl:text-left">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Kimuchu, Thika, Kiambu</p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                              KES 4,500,000.00
                            </p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <span class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-xs font-medium">Available</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <!-- Change Appointment Details Section -->
            <div class="space-y-6 mt-8">
              <h5 class="text-lg font-medium text-gray-600 dark:text-white/90 mb-6">Payment Details</h5>

              <!-- Amount -->
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Amount -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Amount
                  </label>
                  <div class="relative">
                    <span class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          KES
                        </span>
                    <input type="number" placeholder="Amount" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                  </div>
                </div>

                <!-- Payment Type -->
                <div>
                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                    Method
                  </label>
                  <div class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-800 dark:text-white/90'">
                      <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400" selected="">Method</option>
                      <option value="Cash" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Cash</option>
                      <option value="MPesa" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">MPesa</option>
                      <option value="Bank" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Bank</option>
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
              <button class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                Close
              </button>
              <button type="submit"
                      class="h-11 rounded-lg border border-success-500 bg-success-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-success-600 disabled:pointer-events-none disabled:opacity-50">
                Make Payment
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div x-show="isModalOpen" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto modal z-99999" style="display: none;">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="isModalOpen = false" class="relative w-full max-w-[600px] rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-10">
        <!-- close btn -->
        <button @click="isModalOpen = false" class="absolute right-3 top-3 z-999 flex h-9.5 w-9.5 items-center justify-center rounded-full bg-gray-100 text-gray-400 transition-colors hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white sm:right-6 sm:top-6 sm:h-11 sm:w-11">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.04289 16.5413C5.65237 16.9318 5.65237 17.565 6.04289 17.9555C6.43342 18.346 7.06658 18.346 7.45711 17.9555L11.9987 13.4139L16.5408 17.956C16.9313 18.3466 17.5645 18.3466 17.955 17.956C18.3455 17.5655 18.3455 16.9323 17.955 16.5418L13.4129 11.9997L17.955 7.4576C18.3455 7.06707 18.3455 6.43391 17.955 6.04338C17.5645 5.65286 16.9313 5.65286 16.5408 6.04338L11.9987 10.5855L7.45711 6.0439C7.06658 5.65338 6.43342 5.65338 6.04289 6.0439C5.65237 6.43442 5.65237 7.06759 6.04289 7.45811L10.5845 11.9997L6.04289 16.5413Z" fill="currentColor"></path>
          </svg>
        </button>

        <div class="text-center">
          <div class="relative flex items-center justify-center z-1 mb-7">
            <svg class="fill-success-50 dark:fill-success-500/15" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M34.364 6.85053C38.6205 -2.28351 51.3795 -2.28351 55.636 6.85053C58.0129 11.951 63.5594 14.6722 68.9556 13.3853C78.6192 11.0807 86.5743 21.2433 82.2185 30.3287C79.7862 35.402 81.1561 41.5165 85.5082 45.0122C93.3019 51.2725 90.4628 63.9451 80.7747 66.1403C75.3648 67.3661 71.5265 72.2695 71.5572 77.9156C71.6123 88.0265 60.1169 93.6664 52.3918 87.3184C48.0781 83.7737 41.9219 83.7737 37.6082 87.3184C29.8831 93.6664 18.3877 88.0266 18.4428 77.9156C18.4735 72.2695 14.6352 67.3661 9.22531 66.1403C-0.462787 63.9451 -3.30193 51.2725 4.49185 45.0122C8.84391 41.5165 10.2138 35.402 7.78151 30.3287C3.42572 21.2433 11.3808 11.0807 21.0444 13.3853C26.4406 14.6722 31.9871 11.951 34.364 6.85053Z" fill="" fill-opacity=""></path>
            </svg>

            <span class="absolute -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
            <svg class="fill-success-600 dark:fill-success-500" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.9375 19.0004C5.9375 11.7854 11.7864 5.93652 19.0014 5.93652C26.2164 5.93652 32.0653 11.7854 32.0653 19.0004C32.0653 26.2154 26.2164 32.0643 19.0014 32.0643C11.7864 32.0643 5.9375 26.2154 5.9375 19.0004ZM19.0014 2.93652C10.1296 2.93652 2.9375 10.1286 2.9375 19.0004C2.9375 27.8723 10.1296 35.0643 19.0014 35.0643C27.8733 35.0643 35.0653 27.8723 35.0653 19.0004C35.0653 10.1286 27.8733 2.93652 19.0014 2.93652ZM24.7855 17.0575C25.3713 16.4717 25.3713 15.522 24.7855 14.9362C24.1997 14.3504 23.25 14.3504 22.6642 14.9362L17.7177 19.8827L15.3387 17.5037C14.7529 16.9179 13.8031 16.9179 13.2173 17.5037C12.6316 18.0894 12.6316 19.0392 13.2173 19.625L16.657 23.0647C16.9383 23.346 17.3199 23.504 17.7177 23.504C18.1155 23.504 18.4971 23.346 18.7784 23.0647L24.7855 17.0575Z" fill=""></path>
            </svg>
          </span>
          </div>

          <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90 sm:text-title-sm">
            Deposit Successful!
          </h4>
          <p class="text-sm leading-6 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet consectetur. Feugiat ipsum libero tempor
            felis risus nisi non. Quisque eu ut tempor curabitur.
          </p>

          <div class="flex items-center justify-center w-full gap-3 mt-7">
            <button
                    @click="isModalOpen = false"
                    type="button"
                    class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white rounded-lg bg-success-500 shadow-theme-xs hover:bg-success-600 sm:w-auto">
              Ok
            </button>
          </div>
        </div>
      </div>
    </div>

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
              Sell Unit to Landowner #LO001
            </h4>
            <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
              Specify unit/lot details below.
            </p>
          </div>
          <!-- Form -->
          <form class="flex flex-col">
            <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
              <!-- Change Property Details Section -->
              <div class="space-y-6 mt-8" x-data="propertySearch()">
              <!-- Search Property Details Section -->
              <div class="border border-gray rounded-2xl px-4 py-4 dark:border-gray-700">
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                  <!-- License Number Search with Autocomplete -->
                  <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                      License/Lot Number
                    </label>
                    <div class="relative">
                      <input 
                        type="text" 
                        x-model="searchQuery"
                        @input="searchProperties()"
                        @keydown.arrow-down.prevent="moveSelection(1)"
                        @keydown.arrow-up.prevent="moveSelection(-1)"
                        @keydown.enter.prevent="selectCurrent()"
                        @keydown.escape="showResults = false"
                        placeholder="Search License/Lot Number ..." 
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      >
                      
                      <!-- Search Results Dropdown -->
                      <div 
                        x-show="showResults && filteredProperties.length > 0"
                        @click.outside="showResults = false"
                        class="absolute z-50 w-full mt-1 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-lg max-h-60 overflow-auto"
                      >
                        <template x-for="(property, index) in filteredProperties" :key="property.id">
                          <button
                            @click="selectProperty(property)"
                            @mouseenter="currentIndex = index"
                            :class="{
                              'bg-blue-50 dark:bg-gray-700': index === currentIndex,
                              'bg-gray-50 dark:bg-gray-900': index !== currentIndex
                            }"
                            class="flex items-start justify-between w-full px-4 py-3 text-left hover:bg-blue-50 dark:hover:bg-gray-700 border-b border-gray-100 dark:border-gray-700 last:border-b-0"
                          >
                            <div class="flex-1">
                              <div class="font-medium text-gray-900 dark:text-white" x-text="property.title"></div>
                              <div class="text-sm text-gray-500 dark:text-gray-400 mt-1" x-text="property.location"></div>
                              <div class="flex items-center gap-2 mt-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300" x-text="property.price"></span>
                                <span 
                                  :class="{
                                    'bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500': property.status === 'Available',
                                    'bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500': property.status === 'Sold',
                                    'bg-warning-50 text-warning-600 dark:bg-warning-500/15 dark:text-warning-500': property.status === 'Reserved'
                                  }"
                                  class="rounded-full px-2 py-0.5 text-xs font-medium"
                                  x-text="property.status"
                                ></span>
                              </div>
                            </div>
                            <div class="text-xs text-gray-400 ml-2">
                              <span x-text="property.type"></span>
                            </div>
                          </button>
                        </template>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- Selected Property Preview Section -->
                <div x-show="selectedProperty" class="space-y-6">
                  <div>
                    <!-- Property Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6 mb-6">
                      <!-- Property Information Section -->
                      <div class="mb-8">
                        <div class="mb-4 md:mb-0">
                          <h4 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2" x-text="selectedProperty.title"></h4>
                          <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-1 xl:text-left">
                            <p class="text-sm text-gray-500 dark:text-gray-400" x-text="selectedProperty.location"></p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <p class="text-sm text-gray-500 dark:text-gray-400" x-text="selectedProperty.price"></p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <span 
                              :class="{
                                'bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500': selectedProperty.status === 'Available',
                                'bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500': selectedProperty.status === 'Sold',
                                'bg-warning-50 text-warning-600 dark:bg-warning-500/15 dark:text-warning-500': selectedProperty.status === 'Reserved'
                              }"
                              class="rounded-full px-2 py-0.5 text-xs font-medium"
                              x-text="selectedProperty.status"
                            ></span>
                          </div>
                        </div>
                        
                        <!-- Additional Property Details -->
                        <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">License No.</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="selectedProperty.licenseNumber"></p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Lot No.</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="selectedProperty.lotNumber"></p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Size</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="selectedProperty.size"></p>
                          </div>
                          <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Type</p>
                            <p class="text-sm font-medium text-gray-900 dark:text-white" x-text="selectedProperty.type"></p>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Clear Selection Button -->
                      <div class="flex justify-end">
                        <button
                          @click="clearSelection()"
                          class="text-sm text-error-600 hover:text-error-700 dark:text-error-400 dark:hover:text-error-300"
                        >
                          Clear Selection
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Checkout Section (Only shown when property is selected) -->
                <div x-show="selectedProperty" class="space-y-6">
                  <h5 class="text-lg font-medium text-gray-600 dark:text-white/90 mb-6">Payment Details</h5>
                  
                  <!-- Hidden inputs for selected property data -->
                  <input type="hidden" name="property_id" :value="selectedProperty.id">
                  <input type="hidden" name="property_price" :value="selectedProperty.rawPrice">
                  
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Amount -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Amount
                      </label>
                      <div class="relative">
                        <span class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          KES
                        </span>
                        <input 
                          type="number" 
                          :value="selectedProperty.rawPrice"
                          @input="updateAmount($event.target.value)"
                          placeholder="Amount" 
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        >
                      </div>
                    </div>

                    <!-- Payment Type -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Method
                      </label>
                      <div class="relative z-20 bg-transparent">
                        <select x-model="paymentMethod" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                          <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Select Method</option>
                          <option value="Cash" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Cash</option>
                          <option value="MPesa" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">MPesa</option>
                          <option value="Bank" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Bank</option>
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
              </div>
              <!-- Action Buttons - Bottom Right -->
              <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
                <button @click="$store.propertyData.editPropertyModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                  Cancel
                </button>
                <button type="submit" class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
                  Sell Property
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
    <!-- Units Add -->
    <div x-show="editPropertyModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
        <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
        <div @click.outside="editPropertyModal = false" class="flex no-scrollbar relative w-full max-w-[700px] flex-col overflow-y-auto rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-11">
          <!-- close btn -->
          <button @click="editPropertyModal = false"
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
              Edit Real Estate Unit
            </h4>
            <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
              Review client real-estate unit, update relevant details where necessary.
            </p>
          </div>
          <!-- Form -->
          <form class="flex flex-col">
            <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
              <!-- Change Property Details Section -->
              <div class="space-y-6 mt-8">
                <!-- Search Property Details Section -->
                <div class="border border-gray rounded-2xl px-4 py-4 dark:border-gray-700">
                  <!-- License Number and Valuation -->
                  <div class="grid grid-cols-1 lg:grid-cols-1 gap-6 mb-6">
                    <!-- License Number -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        License/Lot Number
                      </label>
                      <div class="relative">
                        <input type="text" placeholder="Search License/Lot License ..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Search Properties Results Section -->
                <div class="space-y-6">
                  <div>

                    <!-- Appointment Report Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-6 mb-6">
                      <!-- Applicant Information Section -->
                      <div class="mb-8">
                        <div class="mb-4 md:mb-0">
                          <h4 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">50 x 80 Muguga kwa Jane</h4>
                          <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-1 xl:text-left">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Kimuchu, Thika, Kiambu</p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                              KES 4,500,000.00
                            </p>
                            <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                            <span class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 text-xs font-medium">Available</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Checkout section -->
                <div class="space-y-6">
                  <h5 class="text-lg font-medium text-gray-600 dark:text-white/90 mb-6">Payment Details</h5>
                  <!-- Amount -->
                  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Amount -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Amount
                      </label>
                      <div class="relative">
                        <span class="absolute top-1/2 left-0 inline-flex h-11 -translate-y-1/2 items-center justify-center border-r border-gray-200 py-3 pr-3 pl-3.5 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                              KES
                            </span>
                        <input type="number" placeholder="Amount" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                      </div>
                    </div>

                    <!-- Payment Type -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Method
                      </label>
                      <div class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-800 dark:text-white/90'">
                          <option class="text-gray-700 dark:bg-gray-900 dark:text-gray-400" selected="">Method</option>
                          <option value="Cash" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Cash</option>
                          <option value="MPesa" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">MPesa</option>
                          <option value="Bank" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">Bank</option>
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
              </div>

              <!-- Action Buttons - Bottom Right -->
              <div class="flex justify-end items-center gap-3 pt-6 border-t border-gray-200 dark:border-gray-700 mt-8">
                <button @click="$store.propertyData.editPropertyModal = false" type="button" class="h-11 rounded-lg border border-gray-300 bg-transparent px-6 text-sm font-semibold text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-300">
                  Cancel
                </button>
                <button type="submit" class="h-11 rounded-lg border border-brand-500 bg-brand-500 px-6 text-sm font-semibold text-white shadow-theme-xs hover:bg-brand-600 disabled:pointer-events-none disabled:opacity-50">
                  Sell Property
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
    
    <div x-show="deactivateAccountModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto modal z-99999" style="display: none;">
      <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
      <div @click.outside="deactivateAccountModal = false" class="relative w-full max-w-[600px] rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-10">
        <!-- close btn -->
        <button @click="deactivateAccountModal = false" class="absolute right-3 top-3 z-999 flex h-9.5 w-9.5 items-center justify-center rounded-full bg-gray-100 text-gray-400 transition-colors hover:bg-gray-200 hover:text-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white sm:right-6 sm:top-6 sm:h-11 sm:w-11">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.04289 16.5413C5.65237 16.9318 5.65237 17.565 6.04289 17.9555C6.43342 18.346 7.06658 18.346 7.45711 17.9555L11.9987 13.4139L16.5408 17.956C16.9313 18.3466 17.5645 18.3466 17.955 17.956C18.3455 17.5655 18.3455 16.9323 17.955 16.5418L13.4129 11.9997L17.955 7.4576C18.3455 7.06707 18.3455 6.43391 17.955 6.04338C17.5645 5.65286 16.9313 5.65286 16.5408 6.04338L11.9987 10.5855L7.45711 6.0439C7.06658 5.65338 6.43342 5.65338 6.04289 6.0439C5.65237 6.43442 5.65237 7.06759 6.04289 7.45811L10.5845 11.9997L6.04289 16.5413Z" fill="currentColor"></path>
          </svg>
        </button>

        <div class="text-center">
          <div class="relative flex items-center justify-center z-1 mb-7">
            <svg class="fill-error-50 dark:fill-error-500/15" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M34.364 6.85053C38.6205 -2.28351 51.3795 -2.28351 55.636 6.85053C58.0129 11.951 63.5594 14.6722 68.9556 13.3853C78.6192 11.0807 86.5743 21.2433 82.2185 30.3287C79.7862 35.402 81.1561 41.5165 85.5082 45.0122C93.3019 51.2725 90.4628 63.9451 80.7747 66.1403C75.3648 67.3661 71.5265 72.2695 71.5572 77.9156C71.6123 88.0265 60.1169 93.6664 52.3918 87.3184C48.0781 83.7737 41.9219 83.7737 37.6082 87.3184C29.8831 93.6664 18.3877 88.0266 18.4428 77.9156C18.4735 72.2695 14.6352 67.3661 9.22531 66.1403C-0.462787 63.9451 -3.30193 51.2725 4.49185 45.0122C8.84391 41.5165 10.2138 35.402 7.78151 30.3287C3.42572 21.2433 11.3808 11.0807 21.0444 13.3853C26.4406 14.6722 31.9871 11.951 34.364 6.85053Z" fill="" fill-opacity=""></path>
            </svg>

            <span class="absolute -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
            <svg class="fill-error-600 dark:fill-error-500" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.9375 19.0004C5.9375 11.7854 11.7864 5.93652 19.0014 5.93652C26.2164 5.93652 32.0653 11.7854 32.0653 19.0004C32.0653 26.2154 26.2164 32.0643 19.0014 32.0643C11.7864 32.0643 5.9375 26.2154 5.9375 19.0004ZM19.0014 2.93652C10.1296 2.93652 2.9375 10.1286 2.9375 19.0004C2.9375 27.8723 10.1296 35.0643 19.0014 35.0643C27.8733 35.0643 35.0653 27.8723 35.0653 19.0004C35.0653 10.1286 27.8733 2.93652 19.0014 2.93652ZM24.7855 17.0575C25.3713 16.4717 25.3713 15.522 24.7855 14.9362C24.1997 14.3504 23.25 14.3504 22.6642 14.9362L17.7177 19.8827L15.3387 17.5037C14.7529 16.9179 13.8031 16.9179 13.2173 17.5037C12.6316 18.0894 12.6316 19.0392 13.2173 19.625L16.657 23.0647C16.9383 23.346 17.3199 23.504 17.7177 23.504C18.1155 23.504 18.4971 23.346 18.7784 23.0647L24.7855 17.0575Z" fill=""></path>
            </svg>
          </span>
          </div>

          <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90 sm:text-title-sm">
            De-activated Client Account!
          </h4>

          <div class="flex items-center justify-center w-full gap-3 mt-7">
            <button
                    onclick="window.location.href='real-estate.php'"
                    type="button"
                    class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white rounded-lg bg-error-500 shadow-theme-xs hover:bg-error-600 sm:w-auto">
              Ok
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL -->

  <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script defer src="../../../assets/bundle.js"></script>


  <!-- === SCRIPTS === -->
  <script>
    function clientUnitsTable() {
    return {
      searchQuery: '',
      page: 1,
      itemsPerPage: 2,
      
      // Property data
      properties: [
        {
          id: 1,
          title: '50 x 80 Muguga kwa Jane',
          location: 'Kimuchu, Thika, Kiambu',
          price: 'KES 4,500,000.00',
          rawPrice: 4500000,
          status: 'Available',
          licenseNumber: 'L-2023-001',
          lotNumber: 'LT-789',
          size: '50 x 80 ft',
          type: 'Residential'
        },
        {
          id: 2,
          title: '100 x 100 Industrial Plot',
          location: 'Mombasa Road, Nairobi',
          price: 'KES 12,000,000.00',
          rawPrice: 12000000,
          status: 'Available',
          licenseNumber: 'L-2023-002',
          lotNumber: 'LT-456',
          size: '100 x 100 ft',
          type: 'Commercial'
        },
        {
          id: 3,
          title: '1/4 Acre Farm Land',
          location: 'Limuru, Kiambu',
          price: 'KES 2,800,000.00',
          rawPrice: 2800000,
          status: 'Reserved',
          licenseNumber: 'L-2023-003',
          lotNumber: 'LT-123',
          size: '1/4 Acre',
          type: 'Agricultural'
        },
        {
          id: 4,
          title: 'Apartment Unit B12',
          location: 'Westlands, Nairobi',
          price: 'KES 8,500,000.00',
          rawPrice: 8500000,
          status: 'Sold',
          licenseNumber: 'L-2023-004',
          lotNumber: 'LT-321',
          size: '3 Bedrooms',
          type: 'Apartment'
        },
        {
          id: 5,
          title: 'Commercial Space Shop 5',
          location: 'CBD, Nakuru',
          price: 'KES 3,200,000.00',
          rawPrice: 3200000,
          status: 'Available',
          licenseNumber: 'L-2023-005',
          lotNumber: 'LT-654',
          size: '30 x 40 ft',
          type: 'Commercial'
        }
      ],
      
      // Client properties data
      clientProperties: [
        {
          id: 1,
          clientId: 101,
          propertyId: 1,
          purchaseDate: '2023-05-15',
          purchaseAmount: 4500000,
          paymentStatus: 'fully_paid',
          ownershipPercentage: 100,
          documentUrl: '/documents/client-101-property-1.pdf',
          notes: 'Direct cash purchase'
        },
        {
          id: 2,
          clientId: 102,
          propertyId: 2,
          purchaseDate: '2023-06-20',
          purchaseAmount: 12000000,
          paymentStatus: 'installment',
          ownershipPercentage: 100,
          documentUrl: '/documents/client-102-property-2.pdf',
          notes: 'Bank financing approved'
        },
        {
          id: 3,
          clientId: 103,
          propertyId: 3,
          purchaseDate: '2023-07-10',
          purchaseAmount: 2800000,
          paymentStatus: 'deposit_paid',
          ownershipPercentage: 100,
          documentUrl: '/documents/client-103-property-3.pdf',
          notes: 'Reserved with 30% deposit'
        },
        {
          id: 4,
          clientId: 104,
          propertyId: 5,
          purchaseDate: '2023-08-05',
          purchaseAmount: 3200000,
          paymentStatus: 'fully_paid',
          ownershipPercentage: 100,
          documentUrl: '/documents/client-104-property-5.pdf',
          notes: 'Corporate purchase'
        }
      ],
      
      // Client property payments data
      clientPropertyPayments: [
        {
          id: 1,
          clientPropertyId: 1,
          paymentDate: '2023-05-15',
          amount: 4500000,
          paymentMethod: 'Bank Transfer',
          referenceNumber: 'TRX-20230515-001',
          status: 'completed',
          receiptUrl: '/receipts/rcpt-001.pdf',
          recordedBy: 'admin01'
        },
        {
          id: 2,
          clientPropertyId: 2,
          paymentDate: '2023-06-20',
          amount: 3000000,
          paymentMethod: 'Cheque',
          referenceNumber: 'CHQ-789456',
          status: 'completed',
          receiptUrl: '/receipts/rcpt-002.pdf',
          recordedBy: 'admin02'
        },
        {
          id: 3,
          clientPropertyId: 2,
          paymentDate: '2023-07-15',
          amount: 3000000,
          paymentMethod: 'MPesa',
          referenceNumber: 'MP-7A8B9C',
          status: 'completed',
          receiptUrl: '/receipts/rcpt-003.pdf',
          recordedBy: 'admin01'
        },
        {
          id: 4,
          clientPropertyId: 2,
          paymentDate: '2023-08-15',
          amount: 3000000,
          paymentMethod: 'Cash',
          referenceNumber: 'CASH-0815',
          status: 'pending',
          receiptUrl: null,
          recordedBy: 'admin03'
        },
        {
          id: 5,
          clientPropertyId: 2,
          paymentDate: '2023-09-15',
          amount: 3000000,
          paymentMethod: 'Bank Transfer',
          referenceNumber: null,
          status: 'scheduled',
          receiptUrl: null,
          recordedBy: null
        },
        {
          id: 6,
          clientPropertyId: 3,
          paymentDate: '2023-07-10',
          amount: 840000,
          paymentMethod: 'MPesa',
          referenceNumber: 'MP-1B2C3D',
          status: 'completed',
          receiptUrl: '/receipts/rcpt-004.pdf',
          recordedBy: 'admin02'
        },
        {
          id: 7,
          clientPropertyId: 4,
          paymentDate: '2023-08-05',
          amount: 3200000,
          paymentMethod: 'Bank Transfer',
          referenceNumber: 'TRX-20230805-002',
          status: 'completed',
          receiptUrl: '/receipts/rcpt-005.pdf',
          recordedBy: 'admin01'
        }
      ],
      
      // Computed properties
      get filteredClientProperties() {
        if (!this.searchQuery.trim()) {
          return this.clientProperties;
        }
        
        const query = this.searchQuery.toLowerCase();
        return this.clientProperties.filter(clientProperty => {
          const property = this.getProperty(clientProperty.propertyId);
          return (
            property.lotNumber.toLowerCase().includes(query) ||
            property.licenseNumber.toLowerCase().includes(query) ||
            property.title.toLowerCase().includes(query) ||
            property.location.toLowerCase().includes(query)
          );
        });
      },
      
      get paginatedData() {
        const start = (this.page - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        return this.filteredClientProperties.slice(start, end);
      },
      
      get totalPages() {
        return Math.ceil(this.filteredClientProperties.length / this.itemsPerPage);
      },
      
      get startEntry() {
        return Math.min((this.page - 1) * this.itemsPerPage + 1, this.filteredClientProperties.length);
      },
      
      get endEntry() {
        return Math.min(this.page * this.itemsPerPage, this.filteredClientProperties.length);
      },
      
      // Methods
      init() {
        // Initialize component
      },
      
      searchProperties() {
        this.page = 1; // Reset to first page when searching
      },
      
      getProperty(propertyId) {
        return this.properties.find(p => p.id === propertyId) || {};
      },
      
      getLastPaymentAmount(clientPropertyId) {
        const payments = this.clientPropertyPayments
          .filter(p => p.clientPropertyId === clientPropertyId && p.status === 'completed')
          .sort((a, b) => new Date(b.paymentDate) - new Date(a.paymentDate));
        
        return payments.length > 0 ? payments[0].amount : 0;
      },
      
      formatPrice(amount) {
        return `KES ${amount.toLocaleString()}.00`;
      },
      
      formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
          day: '2-digit',
          month: 'short',
          year: 'numeric'
        });
      },
      
      formatStatus(status) {
        const statusMap = {
          'fully_paid': 'Sold',
          'installment': 'Installment',
          'deposit_paid': 'Deposit Paid',
          'overdue': 'Overdue'
        };
        return statusMap[status] || status;
      },
      
      goToPage(pageNumber) {
        if (pageNumber >= 1 && pageNumber <= this.totalPages) {
          this.page = pageNumber;
        }
      }
    }
  }
  </script>


</body>

</html>
