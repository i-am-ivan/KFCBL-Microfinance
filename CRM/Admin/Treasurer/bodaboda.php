<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Bodaboda - KFBCL | Mircofinance</title>

  <link rel="icon" href="../../../assets/favicon.ico">
  <link href="../../../assets/style.css" rel="stylesheet">

</head>

<body x-data="{ page: 'profile', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'loanTypeModal' : false, 'editLoanTypeModal': false , 'sidebarToggle': false, 'scrollTop': false, 'withdrawModal': false, 'newLoanTypeModal': false, 'editLoanTypeModal': false, 'newStageModal': false, 'editStageModal': false}"
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
          <div x-data="{ pageName: `Bodaboda Self-Help Group` }">
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
              <!-- Quick Stats -->
              <div class="col-span-12">
                <!-- Metric Group Two -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-4">
                <!-- Metric Item Start -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                  <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                    All Members
                  </p>

                  <div class="mt-3 flex items-end justify-between">
                    <div>
                      <h4 class="text-xl font-bold text-gray-500 dark:text-white/90">
                        1,209
                      </h4>
                    </div>

                    <div class="flex items-center gap-1">
                      <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                        +20%
                      </span>

                      <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                        Vs last year.
                      </span>
                    </div>
                  </div>
                </div>
                <!-- Metric Item End -->

                <!-- Metric Item Start -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                  <p class="text-theme-sm text-gray-500 dark:text-gray-400">
                    Active Loans
                  </p>

                  <div class="mt-3 flex items-end justify-between">
                    <div>
                      <h4 class="text-xl font-bold text-gray-500 dark:text-white/90">
                        123
                      </h4>
                    </div>

                    <div class="flex items-center gap-1">
                      <span class="flex items-center gap-1 rounded-full bg-success-50 px-2 py-0.5 text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                        +4%
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
                  <p class="text-theme-sm text-gray-500 dark:text-gray-400">Cashflow</p>

                  <div class="mt-3 flex items-end justify-between">
                    <div>
                      <h4 class="text-xl font-semibold text-gray-500 dark:text-white/90">KES 35,000.00</h4>
                    </div>

                    <div class="flex items-center gap-1">
                      <span class="flex items-center gap-1 rounded-full bg-error-50 px-2 py-0.5 text-theme-xs font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                        -1.59%
                      </span>

                      <span class="text-theme-xs text-gray-500 dark:text-gray-400">
                        Vs Yesterday
                      </span>
                    </div>
                  </div>
                </div>
                <!-- Metric Item End -->

                <!-- Metric Item Start -->
                <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                  <p class="text-theme-sm text-gray-500 dark:text-gray-400">Wallet</p>

                  <div class="mt-3 flex items-end justify-between">
                    <div>
                      <h4 class="text-xl font-semibold text-gray-500 dark:text-white/90">
                        KES 235,850.00
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

                <!-- Tabbed Management -->
                <div class="rounded-xl border border-gray-200 p-6 bg-white dark:border-gray-800 dark:bg-white/[0.03]" x-data="{ activeTab: 'members' }">
                  <div class="border-b border-gray-200 dark:border-gray-800">
                    <nav class="-mb-px flex space-x-2 overflow-x-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-200 dark:[&::-webkit-scrollbar-thumb]:bg-gray-600 dark:[&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:h-1.5">
                      <!-- Members -->
                      <button class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                              x-bind:class="activeTab === 'members' ? 'text-brand-500 border-brand-500 dark:text-brand-400 dark:border-brand-400' : 'bg-transparent text-gray-500 border-transparent hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                              x-on:click="activeTab = 'members'">
                        <svg class="fill-current" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.13768 5.60156C7.92435 5.60156 6.94074 6.58517 6.94074 7.79851C6.94074 9.01185 7.92435 9.99545 9.13768 9.99545C10.351 9.99545 11.3346 9.01185 11.3346 7.79851C11.3346 6.58517 10.351 5.60156 9.13768 5.60156ZM5.44074 7.79851C5.44074 5.75674 7.09592 4.10156 9.13768 4.10156C11.1795 4.10156 12.8346 5.75674 12.8346 7.79851C12.8346 9.84027 11.1795 11.4955 9.13768 11.4955C7.09592 11.4955 5.44074 9.84027 5.44074 7.79851ZM5.19577 15.3208C4.42094 16.0881 4.03702 17.0608 3.8503 17.8611C3.81709 18.0034 3.85435 18.1175 3.94037 18.2112C4.03486 18.3141 4.19984 18.3987 4.40916 18.3987H13.7582C13.9675 18.3987 14.1325 18.3141 14.227 18.2112C14.313 18.1175 14.3503 18.0034 14.317 17.8611C14.1303 17.0608 13.7464 16.0881 12.9716 15.3208C12.2153 14.572 11.0231 13.955 9.08367 13.955C7.14421 13.955 5.95202 14.572 5.19577 15.3208ZM4.14036 14.2549C5.20488 13.2009 6.78928 12.455 9.08367 12.455C11.3781 12.455 12.9625 13.2009 14.027 14.2549C15.0729 15.2906 15.554 16.5607 15.7778 17.5202C16.0991 18.8971 14.9404 19.8987 13.7582 19.8987H4.40916C3.22695 19.8987 2.06829 18.8971 2.38953 17.5202C2.6134 16.5607 3.09442 15.2906 4.14036 14.2549ZM15.6375 11.4955C14.8034 11.4955 14.0339 11.2193 13.4153 10.7533C13.7074 10.3314 13.9387 9.86419 14.0964 9.36432C14.493 9.75463 15.0371 9.99545 15.6375 9.99545C16.8508 9.99545 17.8344 9.01185 17.8344 7.79851C17.8344 6.58517 16.8508 5.60156 15.6375 5.60156C15.0371 5.60156 14.493 5.84239 14.0964 6.23271C13.9387 5.73284 13.7074 5.26561 13.4153 4.84371C14.0338 4.37777 14.8034 4.10156 15.6375 4.10156C17.6792 4.10156 19.3344 5.75674 19.3344 7.79851C19.3344 9.84027 17.6792 11.4955 15.6375 11.4955ZM20.2581 19.8987H16.7233C17.0347 19.4736 17.2492 18.969 17.3159 18.3987H20.2581C20.4674 18.3987 20.6323 18.3141 20.7268 18.2112C20.8129 18.1175 20.8501 18.0034 20.8169 17.861C20.6302 17.0607 20.2463 16.088 19.4714 15.3208C18.7379 14.5945 17.5942 13.9921 15.7563 13.9566C15.5565 13.6945 15.3328 13.437 15.0824 13.1891C14.8476 12.9566 14.5952 12.7384 14.3249 12.5362C14.7185 12.4831 15.1376 12.4549 15.5835 12.4549C17.8779 12.4549 19.4623 13.2008 20.5269 14.2549C21.5728 15.2906 22.0538 16.5607 22.2777 17.5202C22.5989 18.8971 21.4403 19.8987 20.2581 19.8987Z" fill=""></path>
                        </svg>
                        Members
                      </button>

                      <!-- Stages -->
                      <button class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                              x-bind:class="activeTab === 'stages' ? 'text-brand-500 border-brand-500 dark:text-brand-400 dark:border-brand-400' : 'bg-transparent text-gray-500 border-transparent hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                              x-on:click="activeTab = 'stages'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M3 21l18 0"></path>
                          <path d="M9 8l1 0"></path>
                          <path d="M9 12l1 0"></path>
                          <path d="M9 16l1 0"></path>
                          <path d="M14 8l1 0"></path>
                          <path d="M14 12l1 0"></path>
                          <path d="M14 16l1 0"></path>
                          <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                        </svg>
                        Stages
                      </button>

                      <!-- New Applicants -->
                      <button class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                              x-bind:class="activeTab === 'new-applicants' ? 'text-brand-500 border-brand-500 dark:text-brand-400 dark:border-brand-400' : 'bg-transparent text-gray-500 border-transparent hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                              x-on:click="activeTab = 'new-applicants'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/>
                          <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                          <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                          <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"/>
                        </svg>
                        New Applicants
                      </button>

                      <!-- Loan Settings -->
                      <button class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                              x-bind:class="activeTab === 'loan-settings' ? 'text-brand-500 border-brand-500 dark:text-brand-400 dark:border-brand-400' : 'bg-transparent text-gray-500 border-transparent hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                              x-on:click="activeTab = 'loan-settings'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"/>
                          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                        </svg>
                        Loan Settings
                      </button>

                      <!-- Analytics -->
                      <button class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                              x-bind:class="activeTab === 'analytics' ? 'text-brand-500 border-brand-500 dark:text-brand-400 dark:border-brand-400' : 'bg-transparent text-gray-500 border-transparent hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                              x-on:click="activeTab = 'analytics'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                          <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                          <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                          <path d="M4 20l14 0"/>
                        </svg>
                        Analytics
                      </button>
                    </nav>
                  </div>

                  <div class="pt-4 dark:border-gray-800">
                    <!-- Members Tab Content -->
                    <div x-show="activeTab === 'members'" style="display: none;" x-data="memberTableFull()">
                      <!-- Members content here -->
                      <div class="flex flex-col justify-between gap-5 border-b border-gray-200 px-5 py-4 sm:flex-row lg:items-center dark:border-gray-800">
                        <div>
                          <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                            Bodaboda Members
                          </h3>
                          <p class="text-sm text-gray-500 dark:text-gray-400">
                            List of all bodaboda members
                          </p>
                        </div>

                        <div class="hidden flex-col gap-3 sm:flex sm:flex-row sm:items-center">
                          <div class="relative flex-1 sm:flex-auto">
                            <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z" fill=""></path>
                              </svg>
                            </span>
                            <input type="text"
                                   x-model="searchQuery"
                                   @input="performSearch()"
                                   placeholder="Search"
                                   class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden sm:w-[300px] sm:min-w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                          </div>

                          <div class="hidden lg:block">
                            <select x-model="statusFilter"
                                    @change="performFilter()"
                                    class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                              <option value="All">All Members</option>
                              <option value="Active">Active Members</option>
                              <option value="Suspended">Suspended Members</option>
                              <option value="Blacklisted">Blacklisted Members</option>
                            </select>
                          </div>

                          <div>
                            <button @click="printMembersReport()"
                                    class="hover:text-dark-900 shadow-theme-xs relative flex h-11 items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-3 whitespace-nowrap text-gray-700 transition-colors hover:bg-gray-100 hover:text-gray-700 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <rect x="7" y="13" width="10" height="8" rx="2" />
                              </svg>
                              Print
                            </button>
                          </div>
                        </div>
                      </div>
                      <!-- Members Table -->
                      <div>
                        <div class="custom-scrollbar overflow-x-auto">
                          <table class="w-full table-auto">
                            <thead>
                              <tr class="border-b border-gray-200 dark:divide-gray-800 dark:border-gray-800">
                              <th class="p-4 whitespace-nowrap">
                                <div class="flex w-full items-center gap-3" @click="sortBy('memberId')">
                                  <p class="text-theme-xs font-medium text-gray-500 dark:text-gray-400">
                                    #MemberID
                                  </p>
                                  <span class="flex flex-col gap-0.5">
                                      <svg :class="sort.key === 'appointmentDate' && sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                           width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                                  d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                  fill="currentColor" />
                                      </svg>
                                      <svg :class="sort.key === 'appointmentDate' && !sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                           width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                                  d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                  fill="currentColor" />
                                      </svg>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Member
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Role
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                <div class="flex cursor-pointer items-center gap-3" @click="sortBy('phone')">
                                  <p class="text-theme-xs font-medium text-gray-500 dark:text-gray-400">
                                    Phone
                                  </p>
                                  <span class="flex flex-col gap-0.5">
                                      <svg :class="sort.key === 'appointmentDate' && sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                           width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                                  d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                  fill="currentColor" />
                                      </svg>
                                      <svg :class="sort.key === 'appointmentDate' && !sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                           width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                                  d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                  fill="currentColor" />
                                      </svg>
                                  </span>
                                </div>
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Joined
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Last Contribution
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Status
                              </th>
                              <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                Action
                              </th>
                            </tr>
                            </thead>
                            <tbody class="divide-x divide-y divide-gray-200 dark:divide-gray-800">
                              <template x-for="row in paginatedRows" :key="row.id">
                                <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                  <td class="p-4 whitespace-nowrap">
                                    <div class="group flex items-center gap-3">
                                      <a href="view-member.php"
                                         class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400"
                                         x-text="row.memberId"></a>
                                    </div>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <div>
                                    <span class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                          x-text="row.member"></span>
                                      <p class="text-xs text-gray-500 dark:text-gray-400" x-text="row.memberEmail"></p>
                                    </div>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-700 dark:text-gray-400" x-text="row.role"></span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <p class="text-sm text-gray-700 dark:text-gray-400 truncate max-w-[200px]" x-text="row.phone" :title="row.phone"></p>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <p class="text-sm text-gray-700 dark:text-gray-400 truncate max-w-[200px]" x-text="row.joined" :title="row.joined"></p>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <div>
                                      <p class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                         x-text="row.lastContribution"></p>
                                      <p class="text-xs text-gray-500 dark:text-gray-400" x-text="row.lastContributionDate"></p>
                                    </div>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                     <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
                                           :class="{
                                            'bg-success-100 text-success-600 dark:bg-success-900/30 dark:text-success-400': row.status === 'Active',
                                            'bg-warning-100 text-warning-600 dark:bg-warning-900/30 dark:text-warning-400': row.status === 'Suspended',
                                            'bg-error-100 text-error-600 dark:bg-error-900/30 dark:text-error-400': row.status === 'Blacklisted'
                                        }"
                                               x-text="row.status.charAt(0).toUpperCase() + row.status.slice(1)">
                                    </span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap">
                                    <button onclick="window.location.href='view-member.php'" class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                      <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.1" d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.441 1.559a1.907 1.907 0 0 1 0 2.698l-6.069 6.069L10 19l.674-3.372 6.07-6.07a1.907 1.907 0 0 1 2.697 0Z"></path>
                                      </svg>
                                    </button>
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
                                  <span class="text-gray-800 dark:text-white/90" x-text="rows.length"></span>
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
                                      <span class="text-gray-800 dark:text-white/90" x-text="rows.length"></span>
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
                                                        d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 9.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z"
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

                    <div x-show="activeTab === 'stages'" style="display: none;">
                      <div class="grid grid-cols-12 gap-4 md:gap-6">
                        <div class="col-span-12 xl:col-span-8">
                          <div class="relative rounded-2xl border border-gray-200 justify-between gap-2 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6">
                            <div class="mb-8">
                              <div class="flex flex-col gap-5 mb-6 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                  <h3 class="text-lg font-semibold text-gray-600 dark:text-white/90">
                                    Stages
                                  </h3>
                                  <p class="mt-1 text-gray-500 text-theme-sm dark:text-gray-400">
                                    Manage all your stages
                                  </p>
                                </div>
                                <div class="flex gap-3">
                                  <button @click="$dispatch('open-new-stage-modal')"
                                          class="shadow-theme-xs inline-flex flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M5 10.0002H15.0006M10.0002 5V15.0006" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Add Stage
                                  </button>
                                </div>
                              </div>

                              <div class="flex">
                                <!-- Table Container -->
                                <div class="max-w-full overflow-x-auto custom-scrollbar" x-data="stageTable()">
                                  <table class="w-full">
                                    <!-- table header start -->
                                    <thead>
                                      <tr>
                                      <th class="px-6 py-3 whitespace-nowrap first:pl-0">
                                        <div class="flex items-center">
                                          <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                            #StageID
                                          </p>
                                        </div>
                                      </th>
                                      <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                            Location
                                          </p>
                                        </div>
                                      </th>
                                      <th class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                          <p class="font-medium text-gray-500 text-theme-xs dark:text-gray-400">
                                            Established
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
                                    <tbody class="py-3 divide-y divide-gray-100 dark:divide-gray-800">
                                      <template x-for="stage in currentItems" :key="stage.id">
                                      <tr>
                                        <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                                          <div class="flex items-center col-span-2">
                                            <div class="flex items-center gap-3">
                                              <div>
                                                <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="stage.stageId">
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                                          <div class="flex items-center col-span-2">
                                            <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="stage.location">
                                            </p>
                                          </div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                                          <div class="flex items-center col-span-2">
                                            <p class="text-xs font-sm text-gray-700 dark:text-gray-400" x-text="stage.established">
                                            </p>
                                          </div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                                          <div class="flex items-center col-span-2">
                                            <p :class="stage.status === 'Active' ? 'bg-success-50 text-theme-xs text-success-700 dark:bg-success-500/15 dark:text-success-500' : 'bg-error-50 text-theme-xs text-error-600 dark:bg-error-500/15 dark:text-error-500'"
                                               class="rounded-full px-2 py-0.5 font-medium" x-text="stage.status">
                                            </p>
                                          </div>
                                        </td>
                                        <td class="px-6 py-3 whitespace-nowrap first:pl-0">
                                          <div class="flex items-center col-span-2">
                                            <!-- FIXED: Dispatch event to open modal and pass data -->
                                            <button @click="$dispatch('open-edit-modal', { stage: stage })"
                                                    class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                              <svg class="w-[28px] h-[28px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.1" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                              </svg>
                                            </button>
                                          </div>
                                        </td>
                                      </tr>
                                    </template>
                                    </tbody>
                                    <!-- table body end -->
                                  </table>

                                  <!-- Pagination -->
                                  <div class="flex items-center justify-between px-6 py-4 border-t border-gray-200 dark:border-gray-800">
                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                      Showing <span x-text="startIndex"></span> to <span x-text="endIndex"></span> of <span x-text="stages.length"></span> Stage Locations
                                    </div>
                                    <div class="flex items-center space-x-2">
                                      <button @click="prevPage()" :disabled="currentPage === 1"
                                              class="px-3 py-1.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                                        Previous
                                      </button>

                                      <template x-for="page in totalPages" :key="page">
                                        <button @click="goToPage(page)"
                                                :class="page === currentPage ? 'bg-brand-500 text-white border-brand-500' : 'bg-white text-gray-700 border-gray-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700'"
                                                class="px-3 py-1.5 text-sm font-medium border rounded-lg hover:bg-gray-50 dark:hover:bg-white/[0.03]">
                                          <span x-text="page"></span>
                                        </button>
                                      </template>

                                      <button @click="nextPage()" :disabled="currentPage === totalPages"
                                              class="px-3 py-1.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                                        Next
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

                    <!-- New Members Tab Content -->
                    <div x-show="activeTab === 'new-applicants'" style="display: none;">
                      <!-- New Members content here -->
                       <div class="rounded-xl p-6 dark:border-gray-800" x-data="{ activeTab: 'new-members' }">
                          <div class="border-b border-gray-200 dark:border-gray-800">
                            <nav class="-mb-px flex space-x-2 overflow-x-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-200 dark:[&::-webkit-scrollbar-thumb]:bg-gray-600 dark:[&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:h-1.5">
                              <button 
                                class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'new-members' 
                                  ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                @click="activeTab = 'new-members'"
                              >
                                New Members Application
                                <span 
                                  class="inline-flex items-center justify-center rounded-full px-2 py-0.5 text-center text-xs font-medium"
                                  :class="activeTab === 'new-members' 
                                    ? 'bg-brand-50 text-brand-500 dark:bg-brand-500/15 dark:text-brand-400' 
                                    : 'bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-400'"
                                >
                                  8
                                </span>
                              </button>
                              
                              <button 
                                class="inline-flex items-center gap-2 border-b-2 px-2.5 py-2 text-sm font-medium transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'add-member' 
                                  ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' 
                                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-700'"
                                @click="activeTab = 'add-member'"
                              >
                                Add a member
                              </button>
                            </nav>
                          </div>

                          <div class="pt-4 dark:border-gray-800">
                            <div x-show="activeTab === 'new-members'">
                              <div>
                                <!-- Members content here -->
                                <div class="flex flex-col justify-between gap-5 border-b border-gray-200 px-5 py-4 sm:flex-row lg:items-center dark:border-gray-800">
                                  <div>
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                      Membership applications
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                      Manage new member applications
                                    </p>
                                  </div>

                                  <div class="hidden flex-col gap-3 sm:flex sm:flex-row sm:items-center">
                                    <div class="relative flex-1 sm:flex-auto">
                                      <span class="absolute top-1/2 left-4 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z" fill=""></path>
                                        </svg>
                                      </span>
                                      <input type="text"
                                            x-model="searchQuery"
                                            @input="performSearch()"
                                            placeholder="Search"
                                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-4 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden sm:w-[300px] sm:min-w-[300px] dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                    </div>

                                    <div>
                                      <button @click="printMembersReport()"
                                              class="hover:text-dark-900 shadow-theme-xs relative flex h-11 items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-3 whitespace-nowrap text-gray-700 transition-colors hover:bg-gray-100 hover:text-gray-700 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                          <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                          <rect x="7" y="13" width="10" height="8" rx="2" />
                                        </svg>
                                        Print
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <!-- Members Table -->
                                <div>
                                  <div class="custom-scrollbar overflow-x-auto">
                                    <table class="w-full table-auto">
                                      <thead>
                                        <tr class="border-b border-gray-200 dark:divide-gray-800 dark:border-gray-800">
                                        <th class="p-4 whitespace-nowrap">
                                          <div class="flex w-full items-center gap-3" @click="sortBy('memberId')">
                                            <p class="text-theme-xs font-medium text-gray-500 dark:text-gray-400">
                                              #ApplicantID
                                            </p>
                                            <span class="flex flex-col gap-0.5">
                                                <svg :class="sort.key === 'appointmentDate' && sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                                    width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                            fill="currentColor" />
                                                </svg>
                                                <svg :class="sort.key === 'appointmentDate' && !sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                                    width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                            fill="currentColor" />
                                                </svg>
                                            </span>
                                          </div>
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Applicant
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Role
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          <div class="flex cursor-pointer items-center gap-3" @click="sortBy('phone')">
                                            <p class="text-theme-xs font-medium text-gray-500 dark:text-gray-400">
                                              Phone
                                            </p>
                                            <span class="flex flex-col gap-0.5">
                                                <svg :class="sort.key === 'appointmentDate' && sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                                    width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z"
                                                            fill="currentColor" />
                                                </svg>
                                                <svg :class="sort.key === 'appointmentDate' && !sort.asc ? 'text-gray-800 dark:text-gray-400' : 'text-gray-300'"
                                                    width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z"
                                                            fill="currentColor" />
                                                </svg>
                                            </span>
                                          </div>
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Registered
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Membership Fee
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Status
                                        </th>
                                        <th class="p-4 text-left text-xs font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                          Action
                                        </th>
                                      </tr>
                                      </thead>
                                      <tbody class="divide-x divide-y divide-gray-200 dark:divide-gray-800">
                                        <template x-for="row in paginatedRows" :key="row.id">
                                          <tr class="transition hover:bg-gray-50 dark:hover:bg-gray-900">
                                            <td class="p-4 whitespace-nowrap">
                                              <div class="group flex items-center gap-3">
                                                <a href="new-member-application.php"
                                                  class="text-theme-xs font-medium text-gray-700 group-hover:underline dark:text-gray-400"
                                                  x-text="row.memberId"></a>
                                              </div>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <div>
                                              <span class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                                    x-text="row.member"></span>
                                                <p class="text-xs text-gray-500 dark:text-gray-400" x-text="row.memberEmail"></p>
                                              </div>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <span class="text-sm text-gray-700 dark:text-gray-400" x-text="row.role"></span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <p class="text-sm text-gray-700 dark:text-gray-400 truncate max-w-[200px]" x-text="row.phone" :title="row.phone"></p>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <p class="text-sm text-gray-700 dark:text-gray-400 truncate max-w-[200px]" x-text="row.joined" :title="row.joined"></p>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <div>
                                                <p class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                                  x-text="row.lastContribution"></p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400" x-text="row.lastContributionDate"></p>
                                              </div>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
                                                    :class="{
                                                      'bg-success-100 text-success-600 dark:bg-success-900/30 dark:text-success-400': row.status === 'Active',
                                                      'bg-warning-100 text-warning-600 dark:bg-warning-900/30 dark:text-warning-400': row.status === 'Suspended',
                                                      'bg-error-100 text-error-600 dark:bg-error-900/30 dark:text-error-400': row.status === 'Blacklisted'
                                                  }"
                                                        x-text="row.status.charAt(0).toUpperCase() + row.status.slice(1)">
                                              </span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                              <button onclick="window.location.href='new-member-application.php'" class="shadow-theme-xs inline-flex h-9 w-9 items-center justify-center rounded-lg border border-gray-300 text-gray-500 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                                                <svg class="w-[22px] h-[22px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                  <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.1" d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.441 1.559a1.907 1.907 0 0 1 0 2.698l-6.069 6.069L10 19l.674-3.372 6.07-6.07a1.907 1.907 0 0 1 2.697 0Z"></path>
                                                </svg>
                                              </button>
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
                                            <span class="text-gray-800 dark:text-white/90" x-text="rows.length"></span>
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
                                                <span class="text-gray-800 dark:text-white/90" x-text="rows.length"></span>
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
                                                                  d="M2.58203 9.99868C2.58174 10.1909 2.6549 10.3833 2.80152 10.53L7.79818 15.5301C8.09097 15.8231 8.56584 15.8233 8.85883 15.5305C9.15183 15.2377 9.152 14.7629 8.85921 14.4699L5.13911 10.7472L16.6665 10.7472C17.0807 10.7472 17.4165 10.4114 17.4165 9.99715C17.4165 9.58294 17.0807 9.24715 16.6665 9.24715L5.14456 9.24715L8.85919 5.53016C9.15199 5.23717 9.15184 4.7623 8.85885 4.4695C8.56587 4.1767 8.09099 4.17685 7.79819 4.46984L2.84069 9.43049C2.68224 9.568 2.58203 9.77087 2.58203 9.99715C2.58203 9.99766 2.58203 9.99817 2.58203 9.99868Z"
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

                            <div x-show="activeTab === 'add-member'" style="display: none;">
                              <div>
                                <div class="flex justify-center">
                                  <div class="w-full max-w-4xl"> <!-- Centered but not full screen -->
                                    <h3 class="mb-6 text-center text-xl font-medium text-gray-800 dark:text-white/90">
                                      Add a Member
                                    </h3>
                                    <!-- Add a member form -->
                                    <div
                                            x-data="{
                                                currentStep: 1,
                                                steps: [
                                                  { id: 1, title: 'Personal Information', completed: false },
                                                  { id: 2, title: 'Address', completed: false },
                                                  { id: 3, title: 'Contact Information', completed: false },
                                                  { id: 4, title: 'Next of Kin', completed: false },
                                                  { id: 5, title: 'Documents', completed: false },
                                                  { id: 6, title: 'Preview', completed: false }
                                                ],
                                                formData: {
                                                  personal: {
                                                    firstName: '',
                                                    lastName: '',
                                                    nationalId: '',
                                                    dob: '',
                                                    relationship: '',
                                                    gender: ''
                                                  },
                                                  address: {
                                                    street: '',
                                                    pobox: '',
                                                    town: '',
                                                    county: ''
                                                  },
                                                  contact: {
                                                    email: '',
                                                    primaryPhone: '',
                                                    secondaryPhone: ''
                                                  },
                                                  nextOfKin: {
                                                    firstName: '',
                                                    lastName: '',
                                                    nationalId: '',
                                                    kinDob: '',
                                                    relationship: '',
                                                    gender: ''
                                                  },
                                                  documents: {
                                                    nationalIdFront: null,
                                                    nationalIdBack: null
                                                  }
                                                },
                                                previewData: {
                                                  fullName: '-',
                                                  nationalId: '-',
                                                  dob: '-',
                                                  gender: '-',
                                                  email: '-',
                                                  primaryPhone: '-',
                                                  secondaryPhone: '-',
                                                  street: '-',
                                                  town: '-',
                                                  county: '-',
                                                  pobox: '-',
                                                  nextOfKinName: '-',
                                                  nextOfKinId: '-',
                                                  nextOfKinRelationship: '-'
                                                },
                                                updatePreview() {
                                                  // Personal Info
                                                  this.previewData.fullName = `${this.formData.personal.firstName} ${this.formData.personal.lastName}`.trim() || '-';
                                                  this.previewData.nationalId = this.formData.personal.nationalId || '-';
                                                  this.previewData.dob = this.formData.personal.dob || '-';
                                                  this.previewData.gender = this.formData.personal.gender || '-';

                                                  // Contact Info
                                                  this.previewData.email = this.formData.contact.email || '-';
                                                  this.previewData.primaryPhone = this.formData.contact.primaryPhone || '-';
                                                  this.previewData.secondaryPhone = this.formData.contact.secondaryPhone || '-';

                                                  // Address
                                                  this.previewData.street = this.formData.address.street || '-';
                                                  this.previewData.town = this.formData.address.town || '-';
                                                  this.previewData.county = this.formData.address.county || '-';
                                                  this.previewData.pobox = this.formData.address.pobox || '-';

                                                  // Next of Kin
                                                  this.previewData.nextOfKinName = `${this.formData.nextOfKin.firstName} ${this.formData.nextOfKin.lastName}`.trim() || '-';
                                                  this.previewData.nextOfKinId = this.formData.nextOfKin.nationalId || '-';
                                                  this.previewData.nextOfKinRelationship = this.formData.nextOfKin.relationship || '-';
                                                },
                                                handleInputChange(section, field, value) {
                                                  this.formData[section][field] = value;
                                                  this.updatePreview();
                                                },
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
                                                },
                                                handleFileUpload(field, event) {
                                                  const file = event.target.files[0];
                                                  if (file) {
                                                    this.formData.documents[field] = file;
                                                    // Update preview if needed
                                                    this.updatePreview();
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
                                            <div class="mt-4 flex justify-between">
                                              <template x-for="step in steps" :key="step.id">
                                                <div class="flex flex-col items-center">
                                                  <div class="relative">
                                                    <!-- Step Circle -->
                                                    <div class="flex h-8 w-8 items-center justify-center rounded-full border-2 transition-all duration-300"
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
                                                  <input type="text"
                                                        x-model="formData.personal.firstName"
                                                        @input="handleInputChange('personal', 'firstName', $event.target.value)"
                                                        placeholder="Enter first name"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Last Name
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.personal.lastName"
                                                        @input="handleInputChange('personal', 'lastName', $event.target.value)"
                                                        placeholder="Enter last name"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    National ID
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.personal.nationalId"
                                                        @input="handleInputChange('personal', 'nationalId', $event.target.value)"
                                                        placeholder="National ID No."
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Date of Birth
                                                  </label>
                                                  <div class="relative">
                                                    <input type="text"
                                                          x-model="formData.personal.dob"
                                                          @input="handleInputChange('personal', 'dob', $event.target.value)"
                                                          placeholder="Select date"
                                                          class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                    <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                                      <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                                                      </svg>
                                                    </span>
                                                  </div>
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Gender
                                                  </label>
                                                  <div class="relative z-20 bg-transparent">
                                                    <select x-model="formData.personal.gender"
                                                            @change="handleInputChange('personal', 'gender', $event.target.value)"
                                                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                      <option value="">Select Gender</option>
                                                      <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
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

                                            <!-- Step 2: Addresses -->
                                            <div x-show="currentStep === 2">
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
                                                  <input type="text"
                                                        x-model="formData.address.street"
                                                        @input="handleInputChange('address', 'street', $event.target.value)"
                                                        placeholder="Street Address"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    P.O.Box
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.address.pobox"
                                                        @input="handleInputChange('address', 'pobox', $event.target.value)"
                                                        placeholder="Postal Code"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Town
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.address.town"
                                                        @input="handleInputChange('address', 'town', $event.target.value)"
                                                        placeholder="Residential Town"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    County
                                                  </label>
                                                  <div class="relative z-20 bg-transparent">
                                                    <select x-model="formData.address.county"
                                                            @change="handleInputChange('address', 'county', $event.target.value)"
                                                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                      <option value="">--Select County--</option>
                                                      <option value="Kiambu">Kiambu</option>
                                                      <option value="Machakos">Machakos</option>
                                                      <option value="Murang'a">Murang'a</option>
                                                      <option value="Nairobi">Nairobi</option>
                                                      <option value="Mombasa">Mombasa</option>
                                                      <option value="Kisumu">Kisumu</option>
                                                      <option value="Nakuru">Nakuru</option>
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

                                            <!-- Step 3: Contact Information -->
                                            <div x-show="currentStep === 3">
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
                                                    <input type="email"
                                                          x-model="formData.contact.email"
                                                          @input="handleInputChange('contact', 'email', $event.target.value)"
                                                          placeholder="Email address"
                                                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 pl-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                  </div>
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Primary Phone
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.contact.primaryPhone"
                                                        @input="handleInputChange('contact', 'primaryPhone', $event.target.value)"
                                                        placeholder="Primary Phone"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Secondary Phone
                                                  </label>
                                                  <input type="text"
                                                        x-model="formData.contact.secondaryPhone"
                                                        @input="handleInputChange('contact', 'secondaryPhone', $event.target.value)"
                                                        placeholder="Secondary Phone"
                                                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Step 4: Next of Kin Information -->
                                            <div x-show="currentStep === 4">
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

                                                  <div class="w-full px-2.5">
                                                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                      Email
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
                                                      Phone Number
                                                    </label>
                                                    <input type="text" placeholder="Phone" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
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

                                            <!-- Step 5: Documents -->
                                            <div x-show="currentStep === 5">
                                              <div class="-mx-2.5 flex flex-wrap gap-y-5">
                                                <div class="w-full px-2.5">
                                                  <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                                                    Documents
                                                  </h4>
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    National ID Front Side
                                                  </label>
                                                  <div class="relative">
                                                    <input type="file"
                                                          @change="handleFileUpload('nationalIdFront', $event)"
                                                          accept="image/*,.pdf"
                                                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                    <div class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                                      Upload front side of National ID (JPG, PNG or PDF)
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="w-full px-2.5 xl:w-1/2">
                                                  <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    National ID Back Side
                                                  </label>
                                                  <div class="relative">
                                                    <input type="file"
                                                          @change="handleFileUpload('nationalIdBack', $event)"
                                                          accept="image/*,.pdf"
                                                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                                                    <div class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                                      Upload back side of National ID (JPG, PNG or PDF)
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="w-full px-2.5">
                                                  <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800/50">
                                                    <h5 class="mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Uploaded Documents</h5>
                                                    <div class="space-y-2">
                                                      <div class="flex items-center justify-between">
                                                        <span class="text-sm text-gray-600 dark:text-gray-400">National ID Front:</span>
                                                        <span x-text="formData.documents.nationalIdFront ? formData.documents.nationalIdFront.name : 'Not uploaded'"
                                                              :class="formData.documents.nationalIdFront ? 'text-green-600 dark:text-green-400' : 'text-gray-500'"
                                                              class="text-sm font-medium"></span>
                                                      </div>
                                                      <div class="flex items-center justify-between">
                                                        <span class="text-sm text-gray-600 dark:text-gray-400">National ID Back:</span>
                                                        <span x-text="formData.documents.nationalIdBack ? formData.documents.nationalIdBack.name : 'Not uploaded'"
                                                              :class="formData.documents.nationalIdBack ? 'text-green-600 dark:text-green-400' : 'text-gray-500'"
                                                              class="text-sm font-medium"></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Step 6: Preview -->
                                            <div x-show="currentStep === 6">
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
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.fullName"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">National ID</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.nationalId"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Date of Birth</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.dob"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Gender</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.gender"></p>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <!-- Contact Info Preview -->
                                                  <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Contact Information</h5>
                                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Email</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.email"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Primary Phone</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.primaryPhone"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Secondary Phone</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.secondaryPhone"></p>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <!-- Address Preview -->
                                                  <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Address</h5>
                                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Street Address</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.street"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Town</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.town"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">County</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.county"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">P.O. Box</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.pobox"></p>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <!-- Next of Kin Preview -->
                                                  <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Next of Kin Information</h5>
                                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Full Name</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.nextOfKinName"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">National ID</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.nextOfKinId"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">Relationship</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200" x-text="previewData.nextOfKinRelationship"></p>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <!-- Documents Preview -->
                                                  <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800/50">
                                                    <h5 class="mb-4 font-medium text-gray-700 dark:text-gray-300">Documents</h5>
                                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">National ID Front</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200"
                                                          x-text="formData.documents.nationalIdFront ? formData.documents.nationalIdFront.name : 'Not uploaded'"
                                                          :class="formData.documents.nationalIdFront ? 'text-green-600 dark:text-green-400' : 'text-gray-500'"></p>
                                                      </div>
                                                      <div>
                                                        <p class="text-sm text-gray-500 dark:text-gray-400">National ID Back</p>
                                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200"
                                                          x-text="formData.documents.nationalIdBack ? formData.documents.nationalIdBack.name : 'Not uploaded'"
                                                          :class="formData.documents.nationalIdBack ? 'text-green-600 dark:text-green-400' : 'text-gray-500'"></p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- Navigation Buttons -->
                                        <div class="flex items-center justify-between border-t border-gray-200 px-4 pt-6 dark:border-gray-700">
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

                                          <!-- Next Button (for first 4 steps) -->
                                          <button type="button"
                                                  x-show="currentStep < 5"
                                                  @click="nextStep()"
                                                  class="flex items-center justify-center gap-2 rounded-lg bg-brand-500 px-6 py-3 text-sm font-medium text-white hover:bg-brand-600">
                                            Next
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                          </button>

                                          <!-- Preview Button (step 5 to 6) -->
                                          <button type="button"
                                                  x-show="currentStep === 5"
                                                  @click="nextStep()"
                                                  class="flex items-center justify-center gap-2 rounded-lg bg-brand-500 px-6 py-3 text-sm font-medium text-white hover:bg-brand-600">
                                            Preview
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                            </svg>
                                          </button>

                                          <!-- Save & Cancel Buttons (only on preview step) -->
                                          <div x-show="currentStep === 6" class="flex items-center gap-3">
                                            <button type="button"
                                                    onclick="window.location.href='bodaboda.php'"
                                                    class="flex items-center justify-center gap-2 rounded-lg bg-brand-500 px-6 py-3 text-sm font-medium text-white hover:bg-brand-600">
                                              Add Member
                                            </button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                    </div>

                    <div x-show="activeTab === 'loan-settings'">
                      
                      <!-- Loan Settings Content -->
                      <div class="relative ">
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
                            </nav>
                          </div>

                          <div class="pt-4 dark:border-gray-800">
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
                                  Loan Calculator
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                  Loan Calculator simulation
                                </p>
                              </div>

                              <!-- Loan Calculator -->
                              <div class="space-y-8">
                                <div class="grid grid-cols-12 gap-4 md:gap-6">
                                  <div class="col-span-12 xl:col-span-5">
                                    <!-- ====== Map One Start -->
                                    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] sm:p-6">
                                      <div class="flex justify-between">
                                        <div>
                                          <h3 class="text-lg font-semibold text-gray-700 dark:text-white/90">
                                            Loan Calculator
                                          </h3>
                                          <p class="mt-1 text-theme-sm text-gray-500 dark:text-gray-400">
                                            Check loan repayment simulation automation.
                                          </p>
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

                          </div>
                        </div>
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

  <!-- ===== Modals Start ===== -->
  <!-- BEGIN MODALS -->
  <div x-show="withdrawModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="withdrawModal = false" class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="withdrawModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
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
        <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">Withdraw from Wallet</h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">Enter the amount you wish to withdraw.</p>
      </div>
      <form class="flex flex-col">
        <div class="custom-scrollbar h-[450px] overflow-y-auto px-2">
          <div class="mt-7">
            <h5 class="mb-5 text-lg font-medium text-gray-800 dark:text-white/90 lg:mb-6">Withdraw</h5>

            <div class="grid grid-cols-1 gap-x-6 gap-y-5 lg:grid-cols-2">
              <div class="col-span-2 lg:col-span-1">
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Amount</label>
                <input type="text" placeholder="Enter Amount ..."
                       class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"/>
              </div>

              <div class="col-span-2 lg:col-span-1">
                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Confirm Password</label>
                <input type="password" placeholder="Confirm Password"
                       class="dark:bg-dark-900 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-hidden focus:ring-3 focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800"/>
              </div>
            </div>
          </div>
        </div>
        <div class="flex items-center gap-3 px-2 mt-6 lg:justify-end">
          <button @click="withdrawModal = false" type="button"
                  class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-error-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] sm:w-auto">
            Cancel</button>
          <button type="button" class="flex w-full justify-center rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600 sm:w-auto">Withdraw</button>
        </div>
      </form>
    </div>
  </div>
  <!-- New user -->
  <div x-show="newLoanTypeModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="newLoanTypeModal = false"
         class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="newLoanTypeModal = false"
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
          New User
        </h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
          Create a new system user.
        </p>
      </div>

      <div x-data="appointmentWizard()" class="flex flex-col h-full px-2 pr-14">
        <!-- Progress Bar -->
        <div class="mb-8 px-4 sm:px-6">
          <div class="flex items-center justify-between mb-2">
            <div class="flex-1">
              <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                <div class="h-full bg-brand-500 transition-all duration-300"
                     :style="`width: ${(currentStep / 4) * 100}%`"></div>
              </div>
            </div>
          </div>
          <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 1}">New User details</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 2}">Addresses</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 3}">Next of Kin</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 4}">Preview </span>
          </div>
        </div>

        <!-- Step Indicator -->
        <div class="px-4 pb-4">
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Step <span x-text="currentStep"></span> of 4
          </p>
        </div>

        <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
          <!-- Step 1: User Information -->
          <div x-show="currentStep === 1" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Personal Info
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
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Others
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
                        Date of Birth
                      </label>

                      <div class="relative">
                        <div class="flatpickr-wrapper"><input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input" readonly="readonly"><div class="flatpickr-calendar animate static null" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">January </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="httpwww.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                        </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day today" aria-label="January 7, 2026" aria-current="date" tabindex="-1">7</span><span class="flatpickr-day" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day" aria-label="January 10, 2026" tabindex="-1">10</span><span class="flatpickr-day" aria-label="January 11, 2026" tabindex="-1">11</span><span class="flatpickr-day" aria-label="January 12, 2026" tabindex="-1">12</span><span class="flatpickr-day" aria-label="January 13, 2026" tabindex="-1">13</span><span class="flatpickr-day" aria-label="January 14, 2026" tabindex="-1">14</span><span class="flatpickr-day" aria-label="January 15, 2026" tabindex="-1">15</span><span class="flatpickr-day" aria-label="January 16, 2026" tabindex="-1">16</span><span class="flatpickr-day" aria-label="January 17, 2026" tabindex="-1">17</span><span class="flatpickr-day" aria-label="January 18, 2026" tabindex="-1">18</span><span class="flatpickr-day" aria-label="January 19, 2026" tabindex="-1">19</span><span class="flatpickr-day" aria-label="January 20, 2026" tabindex="-1">20</span><span class="flatpickr-day" aria-label="January 21, 2026" tabindex="-1">21</span><span class="flatpickr-day" aria-label="January 22, 2026" tabindex="-1">22</span><span class="flatpickr-day" aria-label="January 23, 2026" tabindex="-1">23</span><span class="flatpickr-day" aria-label="January 24, 2026" tabindex="-1">24</span><span class="flatpickr-day" aria-label="January 25, 2026" tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2026" tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2026" tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2026" tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2026" tabindex="-1">29</span><span class="flatpickr-day" aria-label="January 30, 2026" tabindex="-1">30</span><span class="flatpickr-day" aria-label="January 31, 2026" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="February 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="February 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="February 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="February 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="February 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="February 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="February 7, 2026" tabindex="-1">7</span></div></div></div></div></div></div>
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                              </svg>
                            </span>
                      </div>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email
                      </label>
                      <input type="email" placeholder="Enter email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        National ID
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Phone
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 2: User Address Details -->
          <div x-show="currentStep === 2" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Address Information
                      </h4>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Street/Residence
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        City/Town
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        County
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 3: User Next of Kin Information -->
          <div x-show="currentStep === 3" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Next of Kin Personal Info
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
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Date of Birth
                      </label>

                      <div class="relative">
                        <div class="flatpickr-wrapper"><input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input" readonly="readonly"><div class="flatpickr-calendar animate static null" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">January </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="httpwww.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
                            <span class="flatpickr-weekday">
                              Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                            </span>
                        </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day today" aria-label="January 7, 2026" aria-current="date" tabindex="-1">7</span><span class="flatpickr-day" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day" aria-label="January 10, 2026" tabindex="-1">10</span><span class="flatpickr-day" aria-label="January 11, 2026" tabindex="-1">11</span><span class="flatpickr-day" aria-label="January 12, 2026" tabindex="-1">12</span><span class="flatpickr-day" aria-label="January 13, 2026" tabindex="-1">13</span><span class="flatpickr-day" aria-label="January 14, 2026" tabindex="-1">14</span><span class="flatpickr-day" aria-label="January 15, 2026" tabindex="-1">15</span><span class="flatpickr-day" aria-label="January 16, 2026" tabindex="-1">16</span><span class="flatpickr-day" aria-label="January 17, 2026" tabindex="-1">17</span><span class="flatpickr-day" aria-label="January 18, 2026" tabindex="-1">18</span><span class="flatpickr-day" aria-label="January 19, 2026" tabindex="-1">19</span><span class="flatpickr-day" aria-label="January 20, 2026" tabindex="-1">20</span><span class="flatpickr-day" aria-label="January 21, 2026" tabindex="-1">21</span><span class="flatpickr-day" aria-label="January 22, 2026" tabindex="-1">22</span><span class="flatpickr-day" aria-label="January 23, 2026" tabindex="-1">23</span><span class="flatpickr-day" aria-label="January 24, 2026" tabindex="-1">24</span><span class="flatpickr-day" aria-label="January 25, 2026" tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2026" tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2026" tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2026" tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2026" tabindex="-1">29</span><span class="flatpickr-day" aria-label="January 30, 2026" tabindex="-1">30</span><span class="flatpickr-day" aria-label="January 31, 2026" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="February 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="February 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="February 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="February 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="February 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="February 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="February 7, 2026" tabindex="-1">7</span></div></div></div></div></div></div>
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                              </svg>
                            </span>
                      </div>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email
                      </label>
                      <input type="email" placeholder="Enter email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Relationship
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Husband
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Wife
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Father
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Mother
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Son
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Daughter
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Brother
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Sister
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Uncle
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Employer
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
                        Phone
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 4: Preview & Submit -->
          <div x-show="currentStep === 4" x-cloak class="space-y-6">
            <div>
              <!-- New User Information -->
              <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-4 mb-6">

                <!-- New User Information Section -->
                <div class="mb-8">
                  <div class="mb-4 md:mb-0">
                    <h4 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">John Mwangi</h4>
                    <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">ID: </span>
                        27523689
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-semibold text-gray-400 dark:text-gray-400">DoB: </span>
                        27 July 1987
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        Male
                      </p>
                    </div>
                  </div>
                  <div class="flex items-center gap-4">
                    <div>
                      <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">+254785369963</p>
                      </div>
                    </div>
                    <!-- Date & Time -->
                    <div class="w-px bg-gray-200 h-11 dark:bg-gray-800"></div>
                    <!-- Date & Time -->
                    <div>
                      <div class="flex items-center gap-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          john.mwangi@mail.com
                        </p>
                      </div>
                    </div>
                  </div>
                  <hr class="mt-6 border-gray-200 dark:border-gray-700">
                </div>

                <!-- Next of Kin  Details Section -->
                <div class="mb-8">
                  <h3 class="text-normal font-semibold text-gray-500 dark:text-white/90 mb-2">Next of Kin</h3>
                  <div class="mb-4 md:mb-0">
                    <h5 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">Mulunge Tuse</h5>
                    <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">Relationship: </span>
                        Brother
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">ID: </span>
                        27523689
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-semibold text-gray-400 dark:text-gray-400">DoB: </span>
                        27 July 1987
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        Male
                      </p>
                    </div>
                  </div>

                  <div class="flex items-center gap-6">
                    <div>
                      <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">+254785369963</p>
                      </div>
                    </div>
                    <!-- Date & Time -->
                    <div class="w-px bg-gray-200 h-11 dark:bg-gray-800"></div>
                    <!-- Date & Time -->
                    <div>
                      <div class="flex items-center gap-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          john.mwangi@mail.com
                        </p>
                      </div>
                    </div>
                  </div>
                  <hr class="mt-6 border-gray-200 dark:border-gray-700">
                </div>

                <!-- User role Section -->
                <div class="mb-8">
                  <h3 class="text-normal font-semibold text-gray-500 dark:text-white/90 mb-2">User Role</h3>
                  <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                      <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Assign Role
                      </option>
                      <option value="Chairman" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Chairman
                      </option>
                      <option value="Secretary General" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Secretary General
                      </option>
                      <option value="Treasurer" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Treasurer
                      </option>
                      <option value="Stage Manager" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Stage Manager
                      </option>
                      <option value="Secretary" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Secretary
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
          </div>
        </div>

        <!-- Navigation Buttons - FIXED LAYOUT -->
        <div class="flex items-center justify-between px-6 pt-4 pb-6 border-t border-gray-200 dark:border-gray-700">
          <!-- Bottom Left: Previous Button (only visible when not on step 1) -->
          <div>
            <button type="button" x-show="currentStep > 1" @click="previousStep()"
                    class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
              Previous
            </button>
          </div>
          <!-- Bottom Right: Cancel and Action Buttons -->
          <div class="flex items-center gap-3">
            <!-- Cancel Button (always visible) -->
            <button type="button" @click="newLoanTypeModal = false"
                    class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
              Cancel
            </button>

            <!-- Next Button (for steps 1-2) -->
            <button type="button" x-show="currentStep < 4" @click="nextStep()"
                    class="flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600">
              Next
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>

            <!-- Schedule Appointment Button (for step 3) -->
            <button type="button" x-show="currentStep === 4" onclick="window.location.href='bodaboda.php'"
                    class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-green-600">
              Add User
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Edit user -->
  <div x-show="editLoanTypeModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="editLoanTypeModal = false" class=" relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="editLoanTypeModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
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
          Edit User Details
        </h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
          Update user information
        </p>
      </div>

      <div x-data="appointmentWizard()" class="flex flex-col h-full px-2 pr-14">
        <!-- Progress Bar -->
        <div class="mb-8 px-4 sm:px-6">
          <div class="flex items-center justify-between mb-2">
            <div class="flex-1">
              <div class="h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                <div class="h-full bg-brand-500 transition-all duration-300"
                     :style="`width: ${(currentStep / 4) * 100}%`"></div>
              </div>
            </div>
          </div>
          <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 1}">New User details</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 2}">Addresses</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 3}">Next of Kin</span>
            <span :class="{'text-brand-600 dark:text-brand-400 font-medium': currentStep >= 4}">Preview </span>
          </div>
        </div>

        <!-- Step Indicator -->
        <div class="px-4 pb-4">
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Step <span x-text="currentStep"></span> of 4
          </p>
        </div>

        <div class="custom-scrollbar flex-1 overflow-y-auto px-6">
          <!-- Step 1: User Information -->
          <div x-show="currentStep === 1" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Personal Info
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
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Others
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
                        Date of Birth
                      </label>

                      <div class="relative">
                        <div class="flatpickr-wrapper"><input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input" readonly="readonly"><div class="flatpickr-calendar animate static null" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">January </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="httpwww.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                        </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day today" aria-label="January 7, 2026" aria-current="date" tabindex="-1">7</span><span class="flatpickr-day" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day" aria-label="January 10, 2026" tabindex="-1">10</span><span class="flatpickr-day" aria-label="January 11, 2026" tabindex="-1">11</span><span class="flatpickr-day" aria-label="January 12, 2026" tabindex="-1">12</span><span class="flatpickr-day" aria-label="January 13, 2026" tabindex="-1">13</span><span class="flatpickr-day" aria-label="January 14, 2026" tabindex="-1">14</span><span class="flatpickr-day" aria-label="January 15, 2026" tabindex="-1">15</span><span class="flatpickr-day" aria-label="January 16, 2026" tabindex="-1">16</span><span class="flatpickr-day" aria-label="January 17, 2026" tabindex="-1">17</span><span class="flatpickr-day" aria-label="January 18, 2026" tabindex="-1">18</span><span class="flatpickr-day" aria-label="January 19, 2026" tabindex="-1">19</span><span class="flatpickr-day" aria-label="January 20, 2026" tabindex="-1">20</span><span class="flatpickr-day" aria-label="January 21, 2026" tabindex="-1">21</span><span class="flatpickr-day" aria-label="January 22, 2026" tabindex="-1">22</span><span class="flatpickr-day" aria-label="January 23, 2026" tabindex="-1">23</span><span class="flatpickr-day" aria-label="January 24, 2026" tabindex="-1">24</span><span class="flatpickr-day" aria-label="January 25, 2026" tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2026" tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2026" tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2026" tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2026" tabindex="-1">29</span><span class="flatpickr-day" aria-label="January 30, 2026" tabindex="-1">30</span><span class="flatpickr-day" aria-label="January 31, 2026" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="February 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="February 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="February 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="February 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="February 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="February 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="February 7, 2026" tabindex="-1">7</span></div></div></div></div></div></div>
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                              </svg>
                            </span>
                      </div>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email
                      </label>
                      <input type="email" placeholder="Enter email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        National ID
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Phone
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 2: User Address Details -->
          <div x-show="currentStep === 2" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Address Information
                      </h4>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Street/Residence
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        City/Town
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        County
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 3: User Next of Kin Information -->
          <div x-show="currentStep === 3" x-cloak class="space-y-6">
            <div>
              <!-- User Form -->
              <div class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800">
                <form>
                  <div class="-mx-2.5 flex flex-wrap gap-y-5">
                    <div class="w-full px-2.5">
                      <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
                        Next of Kin Personal Info
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
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Date of Birth
                      </label>

                      <div class="relative">
                        <div class="flatpickr-wrapper"><input type="text" placeholder="Select date" class="dark:bg-dark-900 datepickerTwo shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 flatpickr-input" readonly="readonly"><div class="flatpickr-calendar animate static null" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">January </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="httpwww.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
                            <span class="flatpickr-weekday">
                              Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                            </span>
                        </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="December 28, 2025" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="December 29, 2025" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="December 30, 2025" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="December 31, 2025" tabindex="-1">31</span><span class="flatpickr-day" aria-label="January 1, 2026" tabindex="-1">1</span><span class="flatpickr-day" aria-label="January 2, 2026" tabindex="-1">2</span><span class="flatpickr-day" aria-label="January 3, 2026" tabindex="-1">3</span><span class="flatpickr-day" aria-label="January 4, 2026" tabindex="-1">4</span><span class="flatpickr-day" aria-label="January 5, 2026" tabindex="-1">5</span><span class="flatpickr-day" aria-label="January 6, 2026" tabindex="-1">6</span><span class="flatpickr-day today" aria-label="January 7, 2026" aria-current="date" tabindex="-1">7</span><span class="flatpickr-day" aria-label="January 8, 2026" tabindex="-1">8</span><span class="flatpickr-day" aria-label="January 9, 2026" tabindex="-1">9</span><span class="flatpickr-day" aria-label="January 10, 2026" tabindex="-1">10</span><span class="flatpickr-day" aria-label="January 11, 2026" tabindex="-1">11</span><span class="flatpickr-day" aria-label="January 12, 2026" tabindex="-1">12</span><span class="flatpickr-day" aria-label="January 13, 2026" tabindex="-1">13</span><span class="flatpickr-day" aria-label="January 14, 2026" tabindex="-1">14</span><span class="flatpickr-day" aria-label="January 15, 2026" tabindex="-1">15</span><span class="flatpickr-day" aria-label="January 16, 2026" tabindex="-1">16</span><span class="flatpickr-day" aria-label="January 17, 2026" tabindex="-1">17</span><span class="flatpickr-day" aria-label="January 18, 2026" tabindex="-1">18</span><span class="flatpickr-day" aria-label="January 19, 2026" tabindex="-1">19</span><span class="flatpickr-day" aria-label="January 20, 2026" tabindex="-1">20</span><span class="flatpickr-day" aria-label="January 21, 2026" tabindex="-1">21</span><span class="flatpickr-day" aria-label="January 22, 2026" tabindex="-1">22</span><span class="flatpickr-day" aria-label="January 23, 2026" tabindex="-1">23</span><span class="flatpickr-day" aria-label="January 24, 2026" tabindex="-1">24</span><span class="flatpickr-day" aria-label="January 25, 2026" tabindex="-1">25</span><span class="flatpickr-day" aria-label="January 26, 2026" tabindex="-1">26</span><span class="flatpickr-day" aria-label="January 27, 2026" tabindex="-1">27</span><span class="flatpickr-day" aria-label="January 28, 2026" tabindex="-1">28</span><span class="flatpickr-day" aria-label="January 29, 2026" tabindex="-1">29</span><span class="flatpickr-day" aria-label="January 30, 2026" tabindex="-1">30</span><span class="flatpickr-day" aria-label="January 31, 2026" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="February 1, 2026" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="February 2, 2026" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="February 3, 2026" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="February 4, 2026" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="February 5, 2026" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="February 6, 2026" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="February 7, 2026" tabindex="-1">7</span></div></div></div></div></div></div>
                        <span class="absolute top-1/2 right-3 -translate-y-1/2 text-gray-500 dark:text-gray-400">
                              <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66659 1.5415C7.0808 1.5415 7.41658 1.87729 7.41658 2.2915V2.99984H12.5833V2.2915C12.5833 1.87729 12.919 1.5415 13.3333 1.5415C13.7475 1.5415 14.0833 1.87729 14.0833 2.2915V2.99984L15.4166 2.99984C16.5212 2.99984 17.4166 3.89527 17.4166 4.99984V7.49984V15.8332C17.4166 16.9377 16.5212 17.8332 15.4166 17.8332H4.58325C3.47868 17.8332 2.58325 16.9377 2.58325 15.8332V7.49984V4.99984C2.58325 3.89527 3.47868 2.99984 4.58325 2.99984L5.91659 2.99984V2.2915C5.91659 1.87729 6.25237 1.5415 6.66659 1.5415ZM6.66659 4.49984H4.58325C4.30711 4.49984 4.08325 4.7237 4.08325 4.99984V6.74984H15.9166V4.99984C15.9166 4.7237 15.6927 4.49984 15.4166 4.49984H13.3333H6.66659ZM15.9166 8.24984H4.08325V15.8332C4.08325 16.1093 4.30711 16.3332 4.58325 16.3332H15.4166C15.6927 16.3332 15.9166 16.1093 15.9166 15.8332V8.24984Z" fill=""></path>
                              </svg>
                            </span>
                      </div>
                    </div>

                    <div class="w-full px-2.5">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email
                      </label>
                      <input type="email" placeholder="Enter email address" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>

                    <div class="w-full px-2.5 xl:w-1/2">
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Relationship
                      </label>
                      <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                        <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Husband
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Wife
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Father
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Mother
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Son
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Daughter
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Brother
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Sister
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Uncle
                          </option>
                          <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                            Employer
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
                        Phone
                      </label>
                      <input type="text" class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Step 4: Preview & Submit -->
          <div x-show="currentStep === 4" x-cloak class="space-y-6">
            <div>
              <!-- New User Information -->
              <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-4 mb-6">

                <!-- New User Information Section -->
                <div class="mb-8">
                  <div class="mb-4 md:mb-0">
                    <h4 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">John Mwangi</h4>
                    <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">ID: </span>
                        27523689
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-semibold text-gray-400 dark:text-gray-400">DoB: </span>
                        27 July 1987
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        Male
                      </p>
                    </div>
                  </div>
                  <div class="flex items-center gap-4">
                    <div>
                      <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">+254785369963</p>
                      </div>
                    </div>
                    <!-- Date & Time -->
                    <div class="w-px bg-gray-200 h-11 dark:bg-gray-800"></div>
                    <!-- Date & Time -->
                    <div>
                      <div class="flex items-center gap-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          john.mwangi@mail.com
                        </p>
                      </div>
                    </div>
                  </div>
                  <hr class="mt-6 border-gray-200 dark:border-gray-700">
                </div>

                <!-- Next of Kin  Details Section -->
                <div class="mb-8">
                  <h3 class="text-normal font-semibold text-gray-500 dark:text-white/90 mb-2">Next of Kin</h3>
                  <div class="mb-4 md:mb-0">
                    <h5 class="text-normal font-bold text-gray-600 dark:text-white/90 mb-2">Mulunge Tuse</h5>
                    <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">Relationship: </span>
                        Brother
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400" >
                        <span class="font-semibold text-gray-400 dark:text-gray-400">ID: </span>
                        27523689
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        <span class="font-semibold text-gray-400 dark:text-gray-400">DoB: </span>
                        27 July 1987
                      </p>
                      <div class="hidden h-3.5 w-px bg-gray-300 xl:block dark:bg-gray-700"></div>
                      <p class="text-sm text-gray-500 dark:text-gray-400">
                        Male
                      </p>
                    </div>
                  </div>

                  <div class="flex items-center gap-6">
                    <div>
                      <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">+254785369963</p>
                      </div>
                    </div>
                    <!-- Date & Time -->
                    <div class="w-px bg-gray-200 h-11 dark:bg-gray-800"></div>
                    <!-- Date & Time -->
                    <div>
                      <div class="flex items-center gap-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                          john.mwangi@mail.com
                        </p>
                      </div>
                    </div>
                  </div>
                  <hr class="mt-6 border-gray-200 dark:border-gray-700">
                </div>

                <!-- User role Section -->
                <div class="mb-8">
                  <h3 class="text-normal font-semibold text-gray-500 dark:text-white/90 mb-2">User Role</h3>
                  <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
                    <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-3 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-500 dark:text-gray-400'" @change="isOptionSelected = true">
                      <option value="" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Assign Role
                      </option>
                      <option value="Chairman" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Chairman
                      </option>
                      <option value="Secretary General" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Secretary General
                      </option>
                      <option value="Treasurer" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Treasurer
                      </option>
                      <option value="Stage Manager" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Stage Manager
                      </option>
                      <option value="Secretary" class="text-gray-500 dark:bg-gray-900 dark:text-gray-400">
                        Secretary
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
          </div>
        </div>

        <!-- Navigation Buttons - FIXED LAYOUT -->
        <div class="flex items-center justify-between px-6 pt-4 pb-6 border-t border-gray-200 dark:border-gray-700">
          <!-- Bottom Left: Previous Button (only visible when not on step 1) -->
          <div>
            <button type="button" x-show="currentStep > 1" @click="previousStep()"
                    class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
              Previous
            </button>
          </div>
          <!-- Bottom Right: Cancel and Action Buttons -->
          <div class="flex items-center gap-3">
            <!-- Cancel Button (always visible) -->
            <button type="button" @click="editLoanTypeModal = false"
                    class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
              Cancel
            </button>

            <!-- Next Button (for steps 1-2) -->
            <button type="button" x-show="currentStep < 4" @click="nextStep()"
                    class="flex items-center gap-2 rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-600">
              Next
              <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>

            <!-- Schedule Appointment Button (for step 3) -->
            <button type="button" x-show="currentStep === 4" onclick="window.location.href='users.php'"
                    class="rounded-lg bg-brand-500 px-4 py-2.5 text-sm font-medium text-white hover:bg-green-600">
              Update User
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- New Stage Location -->
  <div x-data="{ newStageModal: false }"
       @open-new-stage-modal.window="newStageModal = true"
       x-show="newStageModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">
    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>
    <div @click.outside="newStageModal = false"
         class="no-scrollbar relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">
      <!-- close btn -->
      <button @click="newStageModal = false"
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
      <!-- Add Stage Location form -->
      <form class="">
        <h4 class="mb-6 text-lg font-medium text-gray-800 dark:text-white/90">
          Add New Stage
        </h4>

        <div class="-mx-2.5 flex flex-wrap gap-y-5">

          <div class="w-full px-2.5">
            <h4 class="border-b border-gray-200 pb-4 text-base font-medium text-gray-800 dark:border-gray-800 dark:text-white/90">
              Stage Location details
            </h4>
          </div>

          <div class="w-full px-2.5 xl:w-3/4">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Stage Location
            </label>
            <input type="text" placeholder="Stage location ..." class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
          </div>

          <div class="w-full px-2.5 xl:w-1/4">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Status
            </label>
            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent">
              <select class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" :class="isOptionSelected &amp;&amp; 'text-gray-800 dark:text-white/90'" @change="isOptionSelected = true">
                <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  Status
                </option>
                <option value="Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  Active
                </option>
                <option value="In-Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  In-Active
                </option>
              </select>
              <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
                          <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
            </div>
          </div>

        </div>

        <div class="flex items-center justify-end w-full gap-3 mt-6">
          <button @click="newStageModal = false" type="button" class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 shadow-theme-xs transition-colors hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 sm:w-auto">
            Cancel
          </button>
          <button type="button"
                  onclick="window.location.href='bodaboda.php'"
                  class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600 sm:w-auto">
            Add Stage Location
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- Edit Stage Location -->
  <div x-data="{ editStageModal: false, currentStage: {} }"
       @open-edit-modal.window="currentStage = $event.detail.stage; editStageModal = true"
       x-show="editStageModal" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto z-99999">

    <div class="modal-close-btn fixed inset-0 h-full w-full bg-gray-400/50 backdrop-blur-[32px]"></div>

    <div @click.outside="editStageModal = false" class=" relative w-full max-w-[700px] overflow-y-auto rounded-3xl bg-white p-4 dark:bg-gray-900 lg:p-11">

      <!-- close btn -->
      <button @click="editStageModal = false" class="transition-color absolute right-5 top-5 z-999 flex h-11 w-11 items-center justify-center rounded-full bg-gray-100 text-gray-400 hover:bg-gray-200 hover:text-gray-600 dark:bg-gray-700 dark:bg-white/[0.05] dark:text-gray-400 dark:hover:bg-white/[0.07] dark:hover:text-gray-300">
        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.04289 16.5418C5.65237 16.9323 5.65237 17.5655 6.04289 17.956C6.43342 18.3465 7.06658 18.3465 7.45711 17.956L11.9987 13.4144L16.5408 17.9565C16.9313 18.347 17.5645 18.347 17.955 17.9565C18.3455 17.566 18.3455 16.9328 17.955 16.5423L13.4129 12.0002L17.955 7.45808C18.3455 7.06756 18.3455 6.43439 17.955 6.04387C17.5645 5.65335 16.9313 5.65335 16.5408 6.04387L11.9987 10.586L7.45711 6.04439C7.06658 5.65386 6.43342 5.65386 6.04289 6.04439C5.65237 6.43491 5.65237 7.06808 6.04289 7.4586L10.5845 12.0002L6.04289 16.5418Z" fill=""/>
        </svg>
      </button>

      <div class="px-2 pr-14">
        <h4 class="mb-2 text-2xl font-semibold text-gray-800 dark:text-white/90">
          Edit # <span class="text-gray-500" x-text="currentStage.stageId"></span>
        </h4>
        <p class="mb-6 text-sm text-gray-500 dark:text-gray-400 lg:mb-7">
          Review and change the stage details
        </p>
      </div>

      <!-- Edit Stage Location form -->
      <form class="">
        <div class="-mx-2.5 flex flex-wrap gap-y-5">

          <div class="w-full px-2.5 xl:w-3/4">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Stage Location
            </label>
            <input type="text" placeholder="Stage location ..." x-model="currentStage.location"
                   class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
          </div>

          <div class="w-full px-2.5 xl:w-1/4">
            <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
              Status
            </label>
            <div x-data="{ isOptionSelected: true }" class="relative z-20 bg-transparent">
              <select x-model="currentStage.status"
                      class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                      @change="isOptionSelected = true">
                <option value="" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  Status
                </option>
                <option value="Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  Active
                </option>
                <option value="In-Active" class="text-gray-700 dark:bg-gray-900 dark:text-gray-400">
                  In-Active
                </option>
              </select>
              <span class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-700 dark:text-gray-400">
              <svg class="stroke-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
            </div>
          </div>

        </div>

        <div class="flex items-center justify-end w-full gap-3 mt-6">
          <button @click="editStageModal = false" type="button" class="flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 shadow-theme-xs transition-colors hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200 sm:w-auto">
            Cancel
          </button>
          <button type="button"
                  @click="updateStage()"
                  class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600 sm:w-auto">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
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


  <!-- END MODALS -->
  <!-- ===== Custom JS ===== -->
  <script defer src="../../../assets/bundle.js"></script>
  <!-- ===== Data Tables ===== -->
  <!-- Tables -->
  <script>
    function memberTableFull() {
      return {
        rows: [
          {
            id: 1,
            memberId: "KBSTS202601",
            member: "John Mwangi",
            memberEmail: "john.mwangi@example.com",
            role: "Rider",
            phone: "+254723456789",
            joined: "07-Jan-2023 16:20",
            lastContribution: "KES 500.00",
            lastContributionDate: "07-Jan-2026",
            lastContributionTime: "16:20",
            status: "Active"
          },
          {
            id: 2,
            memberId: "KBSTS202602",
            member: "Sarah Kamau",
            memberEmail: "sarah.kamau@example.com",
            role: "Rider",
            phone: "+254724567890",
            joined: "15-Feb-2023 10:45",
            lastContribution: "KES 750.00",
            lastContributionDate: "05-Jan-2026",
            lastContributionTime: "14:30",
            status: "Active"
          },
          {
            id: 3,
            memberId: "KBSTS202603",
            member: "David Ochieng",
            memberEmail: "david.ochieng@example.com",
            role: "Rider",
            phone: "+254725678901",
            joined: "22-Mar-2023 09:15",
            lastContribution: "KES 1,000.00",
            lastContributionDate: "03-Jan-2026",
            lastContributionTime: "11:45",
            status: "Active"
          },
          {
            id: 4,
            memberId: "KBSTS202604",
            member: "Grace Akinyi",
            memberEmail: "grace.akinyi@example.com",
            role: "Rider",
            phone: "+254726789012",
            joined: "05-Apr-2023 13:20",
            lastContribution: "KES 500.00",
            lastContributionDate: "01-Jan-2026",
            lastContributionTime: "09:00",
            status: "Suspended"
          },
          {
            id: 5,
            memberId: "KBSTS202605",
            member: "Michael Odhiambo",
            memberEmail: "michael.odhiambo@example.com",
            role: "Rider",
            phone: "+254727890123",
            joined: "18-May-2023 17:30",
            lastContribution: "KES 1,500.00",
            lastContributionDate: "30-Dec-2025",
            lastContributionTime: "15:45",
            status: "Active"
          },
          {
            id: 6,
            memberId: "KBSTS202606",
            member: "Lucy Wanjiku",
            memberEmail: "lucy.wanjiku@example.com",
            role: "Rider",
            phone: "+254728901234",
            joined: "30-Jun-2023 08:00",
            lastContribution: "KES 800.00",
            lastContributionDate: "28-Dec-2025",
            lastContributionTime: "13:20",
            status: "Active"
          },
          {
            id: 7,
            memberId: "KBSTS202607",
            member: "Peter Njoroge",
            memberEmail: "peter.njoroge@example.com",
            role: "Rider",
            phone: "+254729012345",
            joined: "12-Jul-2023 11:10",
            lastContribution: "KES 600.00",
            lastContributionDate: "25-Dec-2025",
            lastContributionTime: "10:15",
            status: "Blacklisted"
          },
          {
            id: 8,
            memberId: "KBSTS202608",
            member: "Esther Atieno",
            memberEmail: "esther.atieno@example.com",
            role: "Rider",
            phone: "+254730123456",
            joined: "25-Aug-2023 14:55",
            lastContribution: "KES 900.00",
            lastContributionDate: "22-Dec-2025",
            lastContributionTime: "17:30",
            status: "Active"
          },
          {
            id: 9,
            memberId: "KBSTS202609",
            member: "James Kariuki",
            memberEmail: "james.kariuki@example.com",
            role: "Rider",
            phone: "+254731234567",
            joined: "07-Sep-2023 12:40",
            lastContribution: "KES 1,200.00",
            lastContributionDate: "20-Dec-2025",
            lastContributionTime: "08:45",
            status: "Active"
          },
          {
            id: 10,
            memberId: "KBSTS202610",
            member: "Mary Wambui",
            memberEmail: "mary.wambui@example.com",
            role: "Rider",
            phone: "+254732345678",
            joined: "19-Oct-2023 15:25",
            lastContribution: "KES 500.00",
            lastContributionDate: "18-Dec-2025",
            lastContributionTime: "14:10",
            status: "Active"
          },
          {
            id: 11,
            memberId: "KBSTS202611",
            member: "Robert Mwenda",
            memberEmail: "robert.mwenda@example.com",
            role: "Rider",
            phone: "+254733456789",
            joined: "01-Nov-2023 10:05",
            lastContribution: "KES 700.00",
            lastContributionDate: "15-Dec-2025",
            lastContributionTime: "16:55",
            status: "Suspended"
          },
          {
            id: 12,
            memberId: "KBSTS202612",
            member: "Susan Chebet",
            memberEmail: "susan.chebet@example.com",
            role: "Rider",
            phone: "+254734567890",
            joined: "14-Dec-2023 09:50",
            lastContribution: "KES 1,000.00",
            lastContributionDate: "12-Dec-2025",
            lastContributionTime: "12:25",
            status: "Active"
          },
          {
            id: 13,
            memberId: "KBSTS202613",
            member: "Brian Onyango",
            memberEmail: "brian.onyango@example.com",
            role: "Rider",
            phone: "+254735678901",
            joined: "27-Dec-2023 18:15",
            lastContribution: "KES 850.00",
            lastContributionDate: "10-Dec-2025",
            lastContributionTime: "11:00",
            status: "Active"
          }
        ],
        selected: [],
        selectAll: false,
        sort: { key: "joined", asc: true },
        page: 1,
        perPage: 10,

        // Search query variable
        searchQuery: "",

        // ADDED: Status filter variable
        statusFilter: "All",

        // Filtered rows based on BOTH search AND status
        get filteredRows() {
          let filtered = this.rows;

          // Apply status filter
          if (this.statusFilter !== "All") {
            filtered = filtered.filter(row => row.status === this.statusFilter);
          }

          // Apply search filter
          if (this.searchQuery.trim()) {
            const query = this.searchQuery.toLowerCase().trim();
            filtered = filtered.filter(row => {
              // Search in memberId
              if (row.memberId.toLowerCase().includes(query)) {
                return true;
              }

              // Search in phone (handle +254, 254, or 07 formats)
              const phoneCleaned = row.phone.replace(/[\s+]/g, '').toLowerCase();
              const queryCleaned = query.replace(/[\s+]/g, '');

              if (phoneCleaned.includes(queryCleaned)) {
                return true;
              }

              return false;
            });
          }

          return filtered;
        },

        get totalPages() {
          return Math.ceil(this.filteredRows.length / this.perPage) || 1;
        },

        get paginatedRows() {
          return this.sortedRows.slice(
                  (this.page - 1) * this.perPage,
                  this.page * this.perPage,
          );
        },

        get sortedRows() {
          return this.filteredRows.slice().sort((a, b) => {
            let valA = a[this.sort.key];
            let valB = b[this.sort.key];
            if (typeof valA === "string") valA = valA.toLowerCase();
            if (typeof valB === "string") valB = valB.toLowerCase();
            if (valA < valB) return this.sort.asc ? -1 : 1;
            if (valA > valB) return this.sort.asc ? 1 : -1;
            return 0;
          });
        },

        // Method to handle search
        performSearch() {
          this.page = 1; // Reset to first page when searching
        },

        // ADDED: Method to handle status filter
        performFilter() {
          this.page = 1; // Reset to first page when filtering
        },

        sortBy(key) {
          if (this.sort.key === key) {
            this.sort.asc = !this.sort.asc;
          } else {
            this.sort.key = key;
            this.sort.asc = true;
          }
          this.page = 1;
        },

        toggleSelectAll() {
          if (this.selectAll) {
            this.selected = this.paginatedRows.map((t) => t.id);
          } else {
            this.selected = [];
          }
        },

        updateSelectAll() {
          this.selectAll = this.paginatedRows.every((row) =>
                  this.selected.includes(row.id),
          );
        },

        get startEntry() {
          return this.filteredRows.length === 0 ? 0 : (this.page - 1) * this.perPage + 1;
        },

        get endEntry() {
          let end = this.page * this.perPage;
          return end > this.filteredRows.length ? this.filteredRows.length : end;
        },

        goToPage(n) {
          if (n >= 1 && n <= this.totalPages) this.page = n;
        },

        dropdown() {
          return {
            open: false,
            toggle() {
              this.open = !this.open;
            }
          };
        },
      };
    }
  </script>

  <script>
    // stages.js - Data binding and pagination functionality
    function stageTable() {
      return {
        // Sample data
        stages: [
          { id: 1, stageId: "STG0001", location: "BAT Makongeni, Thika, Kiambu", established: "07-Jan-20", status: "Active" },
          { id: 2, stageId: "STG0002", location: "Kimathi Street, Nairobi CBD", established: "15-Mar-20", status: "Active" },
          { id: 3, stageId: "STG0003", location: "Kenyatta Avenue, Nakuru", established: "22-Apr-20", status: "In-Active" },
        ],
        currentPage: 1,
        itemsPerPage: 10,

        // Computed properties for pagination
        get totalPages() {
          return Math.ceil(this.stages.length / this.itemsPerPage);
        },

        get currentItems() {
          const start = (this.currentPage - 1) * this.itemsPerPage;
          const end = start + this.itemsPerPage;
          return this.stages.slice(start, end);
        },

        get startIndex() {
          return (this.currentPage - 1) * this.itemsPerPage + 1;
        },

        get endIndex() {
          const end = this.currentPage * this.itemsPerPage;
          return end > this.stages.length ? this.stages.length : end;
        },

        // Pagination methods
        prevPage() {
          if (this.currentPage > 1) {
            this.currentPage--;
          }
        },

        nextPage() {
          if (this.currentPage < this.totalPages) {
            this.currentPage++;
          }
        },

        goToPage(page) {
          this.currentPage = page;
        }
      };
    }

    // Global function for modal (if needed)
    function editStageModal() {
      return {
        editStageModal: false,
        currentStage: {},

        updateStage() {
          // Add your update logic here
          console.log('Updating stage:', this.currentStage);
          this.editStageModal = false;
          alert('Stage updated successfully!');
        }
      };
    }

    // Initialize Alpine components
    document.addEventListener('alpine:init', () => {
      // Register the stageTable component
      Alpine.data('stageTable', stageTable);

      // Register the editStageModal component
      Alpine.data('editStageModal', editStageModal);
    });
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
