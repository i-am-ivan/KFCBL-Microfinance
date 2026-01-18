<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>KFBCL | CRM Admin</title>

    <link rel="icon" href="assets/favicon.ico">
    <link href="assets/style.css" rel="stylesheet">

</head>

  <body x-data="{ page: 'comingSoon', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">
    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
      <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="relative z-1 bg-white p-6 sm:p-0 dark:bg-gray-900">
      <div class="relative flex h-screen w-full flex-col justify-center sm:p-0 lg:flex-row dark:bg-gray-900">
        <!-- Form -->
        <div class="flex w-full flex-1 flex-col lg:w-1/2">
          <div class="mx-auto w-full max-w-md pt-10">
          </div>
          <div class="mx-auto flex w-full max-w-md flex-1 flex-col justify-center">
            <div>
              <div class="mb-5 sm:mb-8">
                <h1 class="text-title-sm sm:text-title-md mb-2 font-semibold text-gray-800 dark:text-white/90">Sign In</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Enter your email and password to sign in!</p>
              </div>
              <div>
                <!-- Signin Form Start -->
                <form 
                  action="http://localhost/KFCBL-Microfinance/CRM/Admin/Treasurer/" 
                  method="POST"
                  x-data="loginForm()"
                  @submit.prevent="handleSubmit"
                >
                  <div class="space-y-5">
                    <!-- PHP Error Display -->
                    <!-- Display errors if any -->

                    <!-- Email -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Email<span class="text-error-500">*</span>
                      </label>
                      <div class="relative">
                        <span class="absolute top-1/2 left-0 -translate-y-1/2 border-r border-gray-200 px-3.5 py-3 text-gray-500 dark:border-gray-800 dark:text-gray-400">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.04175 7.06206V14.375C3.04175 14.6511 3.26561 14.875 3.54175 14.875H16.4584C16.7346 14.875 16.9584 14.6511 16.9584 14.375V7.06245L11.1443 11.1168C10.457 11.5961 9.54373 11.5961 8.85638 11.1168L3.04175 7.06206ZM16.9584 5.19262C16.9584 5.19341 16.9584 5.1942 16.9584 5.19498V5.20026C16.9572 5.22216 16.946 5.24239 16.9279 5.25501L10.2864 9.88638C10.1145 10.0062 9.8862 10.0062 9.71437 9.88638L3.07255 5.25485C3.05342 5.24151 3.04202 5.21967 3.04202 5.19636C3.042 5.15695 3.07394 5.125 3.11335 5.125H16.8871C16.9253 5.125 16.9564 5.15494 16.9584 5.19262ZM18.4584 5.21428V14.375C18.4584 15.4796 17.563 16.375 16.4584 16.375H3.54175C2.43718 16.375 1.54175 15.4796 1.54175 14.375V5.19498C1.54175 5.1852 1.54194 5.17546 1.54231 5.16577C1.55858 4.31209 2.25571 3.625 3.11335 3.625H16.8871C17.7549 3.625 18.4584 4.32843 18.4585 5.19622C18.4585 5.20225 18.4585 5.20826 18.4584 5.21428Z" fill="#667085"></path>
                          </svg>
                        </span>
                        <input
                          type="email"
                          id="email"
                          name="email"
                          x-model="form.email"
                          @blur="validateEmail"
                          @input="clearError('email')"
                          :class="errors.email ? 'border-error-500 focus:border-error-500 focus:ring-error-500/10' : ''"
                          placeholder="youremail@gmail.com"
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        />
                      </div>
                      <p x-show="errors.email" x-text="errors.email" class="mt-1 text-sm text-error-500"></p>
                    </div>
                    
                    <!-- Password -->
                    <div>
                      <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                        Password<span class="text-error-500">*</span>
                      </label>
                      <div x-data="{ showPassword: false }" class="relative">
                        <input
                          :type="showPassword ? 'text' : 'password'"
                          name="password"
                          x-model="form.password"
                          @blur="validatePassword"
                          @input="clearError('password')"
                          :class="errors.password ? 'border-error-500 focus:border-error-500 focus:ring-error-500/10' : ''"
                          placeholder="Enter your password"
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        />
                        <span
                          @click="showPassword = !showPassword"
                          class="absolute top-1/2 right-4 z-30 -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400"
                        >
                          <svg
                            x-show="!showPassword"
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
                              d="M10.0002 13.8619C7.23361 13.8619 4.86803 12.1372 3.92328 9.70241C4.86804 7.26761 7.23361 5.54297 10.0002 5.54297C12.7667 5.54297 15.1323 7.26762 16.0771 9.70243C15.1323 12.1372 12.7667 13.8619 10.0002 13.8619ZM10.0002 4.04297C6.48191 4.04297 3.49489 6.30917 2.4155 9.4593C2.3615 9.61687 2.3615 9.78794 2.41549 9.94552C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C13.5184 15.3619 16.5055 13.0957 17.5849 9.94555C17.6389 9.78797 17.6389 9.6169 17.5849 9.45932C16.5055 6.30919 13.5184 4.04297 10.0002 4.04297ZM9.99151 7.84413C8.96527 7.84413 8.13333 8.67606 8.13333 9.70231C8.13333 10.7286 8.96527 11.5605 9.99151 11.5605H10.0064C11.0326 11.5605 11.8646 10.7286 11.8646 9.70231C11.8646 8.67606 11.0326 7.84413 10.0064 7.84413H9.99151Z"
                              fill="#98A2B3"
                            />
                          </svg>
                          <svg
                            x-show="showPassword"
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
                              d="M4.63803 3.57709C4.34513 3.2842 3.87026 3.2842 3.57737 3.57709C3.28447 3.86999 3.28447 4.34486 3.57737 4.63775L4.85323 5.91362C3.74609 6.84199 2.89363 8.06395 2.4155 9.45936C2.3615 9.61694 2.3615 9.78801 2.41549 9.94558C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C11.255 15.3619 12.4422 15.0737 13.4994 14.5598L15.3625 16.4229C15.6554 16.7158 16.1302 16.7158 16.4231 16.4229C16.716 16.13 16.716 15.6551 16.4231 15.3622L4.63803 3.57709ZM12.3608 13.4212L10.4475 11.5079C10.3061 11.5423 10.1584 11.5606 10.0064 11.5606H9.99151C8.96527 11.5606 8.13333 10.7286 8.13333 9.70237C8.13333 9.5461 8.15262 9.39434 8.18895 9.24933L5.91885 6.97923C5.03505 7.69015 4.34057 8.62704 3.92328 9.70247C4.86803 12.1373 7.23361 13.8619 10.0002 13.8619C10.8326 13.8619 11.6287 13.7058 12.3608 13.4212ZM16.0771 9.70249C15.7843 10.4569 15.3552 11.1432 14.8199 11.7311L15.8813 12.7925C16.6329 11.9813 17.2187 11.0143 17.5849 9.94561C17.6389 9.78803 17.6389 9.61696 17.5849 9.45938C16.5055 6.30925 13.5184 4.04303 10.0002 4.04303C9.13525 4.04303 8.30244 4.17999 7.52218 4.43338L8.75139 5.66259C9.1556 5.58413 9.57311 5.54303 10.0002 5.54303C12.7667 5.54303 15.1323 7.26768 16.0771 9.70249Z"
                              fill="#98A2B3"
                            />
                          </svg>
                        </span>
                      </div>
                      <p x-show="errors.password" x-text="errors.password" class="mt-1 text-sm text-error-500"></p>
                    </div>
                    
                    <!-- Checkbox -->
                    <div class="flex items-center justify-between">
                      <div x-data="{ checkboxToggle: false }">
                        <label
                          for="checkboxLabelOne"
                          class="flex cursor-pointer items-center text-sm font-normal text-gray-700 select-none dark:text-gray-400"
                        >
                          <div class="relative">
                            <input
                              type="checkbox"
                              id="checkboxLabelOne"
                              name="rememberMe"
                              x-model="form.rememberMe"
                              class="sr-only"
                              @change="checkboxToggle = !checkboxToggle"
                            />
                            <div
                              :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'"
                              class="mr-3 flex h-5 w-5 items-center justify-center rounded-md border-[1.25px]"
                            >
                              <span :class="checkboxToggle ? '' : 'opacity-0'">
                                <svg
                                  width="14"
                                  height="14"
                                  viewBox="0 0 14 14"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M11.6666 3.5L5.24992 9.91667L2.33325 7"
                                    stroke="white"
                                    stroke-width="1.94437"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </div>
                          Keep me logged in
                        </label>
                      </div>

                      <a
                        href="CRM/System/reset-password.php"
                        class="text-brand-500 hover:text-brand-600 dark:text-brand-400 text-sm"
                        >Forgot password?</a
                      >
                    </div>
                    
                    <!-- Button -->
                    <div>
                      <button
                        type="submit"
                        class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 flex w-full items-center justify-center rounded-lg px-4 py-3 text-sm font-medium text-white transition"
                      >
                        Sign In
                      </button>
                    </div>
                  </div>
                </form>

                <div class="relative py-3 sm:py-5">
                  <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200 dark:border-gray-800"></div>
                  </div>
                  <div class="relative flex justify-center text-sm">
                    <span class="bg-white p-2 text-gray-400 sm:px-5 sm:py-2 dark:bg-gray-900">Or</span>
                  </div>
                </div>
                <div class="mt-5">
                  <p class="text-center text-sm font-normal text-gray-700 sm:text-start dark:text-gray-400">Don't have an account? Contact Support for more information.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-brand-950 relative hidden h-full w-full items-center lg:grid lg:w-1/2 dark:bg-white/5">
          <div class="z-1 flex items-center justify-center">
            <!-- ===== Common Grid Shape Start ===== -->
            <div class="absolute right-0 top-0 -z-1 w-full max-w-[250px] xl:max-w-[450px]">
              <img src="assets/src/images/shape/grid-01.svg" alt="grid" />
            </div>
            <div class="absolute bottom-0 left-0 -z-1 w-full max-w-[250px] rotate-180 xl:max-w-[450px]">
              <img src="assets/src/images/shape/grid-01.svg" alt="grid" />
            </div>

            <div class="flex max-w-xs flex-col items-center">
              <a href="../../index.php" class="mb-4 block">
                <img src="assets/src/images/logo/KFCBL-Logo-transparent.png" alt="Logo" />
              </a>
              <p class="text-center text-gray-400 dark:text-white/60">
                A community with unity and growth.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ===== Page Wrapper End ===== -->
  <script defer src="assets/bundle.js"></script>

  <!-- Custom Scripts -->
  <script>
    function loginForm() {
    return {
      form: {
        email: '',
        password: '',
        rememberMe: false
      },
      errors: {
        email: '',
        password: ''
      },
      
      validateEmail() {
        this.errors.email = '';
        
        if (!this.form.email) {
          this.errors.email = 'Email is required';
          return false;
        }
        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(this.form.email)) {
          this.errors.email = 'Please enter a valid email address';
          return false;
        }
        
        return true;
      },
      
      validatePassword() {
        this.errors.password = '';
        
        if (!this.form.password) {
          this.errors.password = 'Password is required';
          return false;
        }
        
        if (this.form.password.length < 8) {
          this.errors.password = 'Password must be at least 8 characters';
          return false;
        }
        
        return true;
      },
      
      validateForm() {
        const isEmailValid = this.validateEmail();
        const isPasswordValid = this.validatePassword();
        
        return isEmailValid && isPasswordValid;
      },
      
      clearError(field) {
        if (this.errors[field]) {
          this.errors[field] = '';
        }
      },
      
      handleSubmit() {
        // Validate the form
        if (this.validateForm()) {
          // If validation passes, submit the form
          this.$el.submit();
        }
        // If validation fails, do nothing (errors will show)
      }
    }
  }
  </script>

</body>
</html>
