<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>KFBCL | Reset Password</title>

  <link rel="icon" href="../../assets/favicon.ico">
  <link href="../../assets/style.css" rel="stylesheet">

</head>

  <body x-data="{ page: 'comingSoon', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">
    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
      class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
      <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="z-1 bg-white p-6 sm:p-0 dark:bg-gray-900">
      <div class="relative flex h-screen w-full flex-col justify-center sm:p-0 lg:flex-row dark:bg-gray-900">
        <!-- Form -->
        <div class="flex w-full flex-1 flex-col lg:w-1/2">
          <div class="mx-auto w-full max-w-md pt-10">
            <a href="../../index.php" class="inline-flex items-center text-sm text-gray-500 transition-colors hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
              <svg
                class="stroke-current"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
              >
                <path
                  d="M12.7083 5L7.5 10.2083L12.7083 15.4167"
                  stroke=""
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Back to Sign in
            </a>
          </div>
          <div class="mx-auto flex w-full max-w-md flex-1 flex-col justify-center">
            <div class="mb-5 sm:mb-8">
              <h1 class="text-title-sm sm:text-title-md mb-2 font-semibold text-gray-800 dark:text-white/90">Forgot Your Password?
              </h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">
                Enter the email address linked to your account, and we’ll send
                you a link to reset your password.
              </p>
            </div>
            <div>
              <!-- Forgot Password Form -->     
              <form 
                action="../../index.php" 
                method="POST"
                x-data="resetPasswordForm()"
                @submit.prevent="handleSubmit"
              >
                <div class="space-y-5">
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
                          placeholder="Enter your email" 
                          x-model="email"
                          @input="clearError"
                          @blur="validateEmailOnBlur"
                          :class="error ? 'border-error-500 focus:border-error-500 focus:ring-error-500/10' : ''"
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 pl-[62px] text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        />
                    </div>
                  </div>

                  <!-- Error Message -->
                  <div class="rounded-xl border border-error-500 bg-error-50 p-4 dark:border-error-500/30 dark:bg-error-500/15" x-show="error">
                    <div class="flex items-start gap-3">
                      <div class="-mt-0.5 text-error-500">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3499 12.0004C20.3499 16.612 16.6115 20.3504 11.9999 20.3504C7.38832 20.3504 3.6499 16.612 3.6499 12.0004C3.6499 7.38881 7.38833 3.65039 11.9999 3.65039C16.6115 3.65039 20.3499 7.38881 20.3499 12.0004ZM11.9999 22.1504C17.6056 22.1504 22.1499 17.6061 22.1499 12.0004C22.1499 6.3947 17.6056 1.85039 11.9999 1.85039C6.39421 1.85039 1.8499 6.3947 1.8499 12.0004C1.8499 17.6061 6.39421 22.1504 11.9999 22.1504ZM13.0008 16.4753C13.0008 15.923 12.5531 15.4753 12.0008 15.4753L11.9998 15.4753C11.4475 15.4753 10.9998 15.923 10.9998 16.4753C10.9998 17.0276 11.4475 17.4753 11.9998 17.4753L12.0008 17.4753C12.5531 17.4753 13.0008 17.0276 13.0008 16.4753ZM11.9998 6.62898C12.414 6.62898 12.7498 6.96476 12.7498 7.37898L12.7498 13.0555C12.7498 13.4697 12.414 13.8055 11.9998 13.8055C11.5856 13.8055 11.2498 13.4697 11.2498 13.0555L11.2498 7.37898C11.2498 6.96476 11.5856 6.62898 11.9998 6.62898Z" fill="#F04438"></path>
                        </svg>
                      </div>

                      <div>
                        <h4 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white/90">
                          Error Message
                        </h4>

                        <p class="text-sm text-gray-500 dark:text-gray-400" x-text="error">
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- Button -->
                  <div>
                    <button
                      type="submit"
                      class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 flex w-full items-center justify-center rounded-lg px-4 py-3 text-sm font-medium text-white transition"
                    >
                      Reset Password
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
                <p class="text-center text-sm font-normal text-gray-700 sm:text-start dark:text-gray-400">Wait, I remember my password!
                  <a href="../../index.php" class="text-brand-500 hover:text-brand-600 dark:text-brand-400">Sign in Here ...</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-brand-950 relative hidden h-full w-full items-center lg:grid lg:w-1/2 dark:bg-white/5">
          <div class="z-1 flex items-center justify-center">
            <!-- ===== Common Grid Shape Start ===== -->
            <div class="absolute right-0 top-0 -z-1 w-full max-w-[250px] xl:max-w-[450px]">
              <img src="../../assets/src/images/shape/grid-01.svg" alt="grid" />
            </div>
            <div class="absolute bottom-0 left-0 -z-1 w-full max-w-[250px] rotate-180 xl:max-w-[450px]">
              <img src="../../assets/src/images/shape/grid-01.svg" alt="grid" />
            </div>

            <div class="flex max-w-xs flex-col items-center">
              <a href="../../index.php" class="mb-4 block">
                <img src="../../assets/src/images/logo/KFCBL-Logo-transparent.png" alt="Logo" />
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
    <script defer src="../../assets/bundle.js"></script>

    <!-- Custom Script for Reset Password Form -->
    <script>
      function resetPasswordForm() {
        return {
          email: '',
          error: '',
          isTouched: false,
          
          init() {
            // Add event listener for click outside the email input
            document.addEventListener('click', (e) => {
              const emailInput = this.$el.querySelector('#email');
              if (emailInput && !emailInput.contains(e.target)) {
                this.validateEmailOnBlur();
              }
            });
          },
          
          clearError() {
            if (this.error) {
              this.error = '';
            }
          },
          
          validateEmail() {
            if (!this.email) {
              this.error = 'Email is required';
              return false;
            }
            
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(this.email)) {
              this.error = 'Please enter a valid email address';
              return false;
            }
            
            return true;
          },
          
          validateEmailOnBlur() {
            // Only validate on blur if user has typed something
            if (this.email.trim() !== '') {
              this.validateEmail();
            }
          },
          
          handleSubmit() {
            if (this.validateEmail()) {
              this.$el.submit();
            }
          }
        }
      }
    </script>

</body>
</html>
