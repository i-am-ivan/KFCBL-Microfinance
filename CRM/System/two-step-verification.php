<?php
  // Include authentication functions
  require_once dirname(__DIR__) . '/Config/Backend/Components/auth.php';
  require_once dirname(__DIR__) . '/Config/Backend/Components/error_handler.php';

  // Check if 2FA session exists
  if (!isset($_SESSION['2fa_user_id'])) {
      header('Location: ' . LOGIN_URL);
      exit;
  }

  // Process 2FA verification if form submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (process2FA()) {
          redirectByRole();
      }
  }
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>KFBCL | 2FA Verification</title>

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
      <div
        class="relative flex h-screen w-full flex-col justify-center sm:p-0 lg:flex-row dark:bg-gray-900"
      >
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
              <h1 class="text-title-sm sm:text-title-md mb-2 font-semibold text-gray-800 dark:text-white/90">
                Two Step Verification
              </h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">
                A verification code has been sent to your mobile. Please enter
                it in the field below.
              </p>
            </div>
            <div>
              <!-- 2FA Verification Form -->
              <form 
                action="" 
                method="POST"
                x-data="verificationForm()"
                @submit.prevent="handleSubmit"
              >
                <div class="space-y-5">

                  <!-- Display errors if any -->
                  <?php displayErrors(); ?>  

                  <!-- 2FA Code verification -->
                  <div>
                    <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Type your 6 digits security code</label>
                    <div class="flex gap-2 sm:gap-4" id="otp-container">
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit1"
                        @input="handleInput(1, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit2"
                        @input="handleInput(2, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit3"
                        @input="handleInput(3, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit4"
                        @input="handleInput(4, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit5"
                        @input="handleInput(5, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                      <input
                        type="text"
                        maxlength="1"
                        x-model="code.digit6"
                        @input="handleInput(6, $event)"
                        class="dark:bg-dark-900 otp-input shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-center text-xl font-semibold text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
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
                      Verify Code
                    </button>
                  </div>
                </div>
              </form>

              <div class="mt-5">
                <p
                  class="text-center text-sm font-normal text-gray-700 sm:text-start dark:text-gray-400"
                >
                  Didn’t get the code?
                  <a href="#" class="text-brand-500 hover:text-brand-600 dark:text-brand-400">Resend</a>
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

  <!-- ===== 2FA Verification Form Script Start ===== -->
  <script>
    function verificationForm() {
    return {
      code: {
        digit1: '',
        digit2: '',
        digit3: '',
        digit4: '',
        digit5: '',
        digit6: ''
      },
      error: '',
      
      handleInput(digitNumber, event) {
        // Clear any previous error
        this.error = '';
        
        const input = event.target;
        const value = input.value;
        
        // Only allow numeric input
        if (value && !/^\d$/.test(value)) {
          input.value = '';
          this.code[`digit${digitNumber}`] = '';
          return;
        }
        
        // Auto-focus next input if a digit is entered
        if (value && digitNumber < 6) {
          const nextInput = this.$el.querySelector(`[x-model="code.digit${digitNumber + 1}"]`);
          if (nextInput) {
            nextInput.focus();
          }
        }
      },
      
      validateForm() {
        // Check if all digits are filled
        const allFilled = Object.values(this.code).every(digit => digit !== '');
        
        if (!allFilled) {
          this.error = 'Please enter complete 6-digit code';
          return false;
        }
        
        return true;
      },
      
      handleSubmit() {
        // Validate the form
        if (this.validateForm()) {
          // Create hidden input with full code
          const fullCode = Object.values(this.code).join('');
          const hiddenInput = document.createElement('input');
          hiddenInput.type = 'hidden';
          hiddenInput.name = 'verification_code';
          hiddenInput.value = fullCode;
          this.$el.appendChild(hiddenInput);
          
          // Submit the form
          this.$el.submit();
        }
      }
    }
  }
  </script>

</body>
</html>
