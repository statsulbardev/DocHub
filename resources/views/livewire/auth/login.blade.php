<div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
    <a href="https://flowbite-admin-dashboard.vercel.app/"
        class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
        <img src="https://flowbite-admin-dashboard.vercel.app/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>Dokumentasi & KMS BPS Sulbar</span>
    </a>
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Masuk ke dalam portal
        </h2>
        <form class="mt-8 space-y-6" data-bitwarden-watching="1" wire:submit="login">
            <x-forms.inputs.text model="form.username" label="Username" type="text" />

            <x-forms.inputs.text model="form.password" label="Password" type="password" />

            <button
                type="submit"
                class="w-full px-5 py-3 text-base font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Masuk menggunakan akun anda
            </button>
        </form>
    </div>
    <div class="text-center">
        <p class="mt-12 text-sm text-gray-500">&copy; {{ date('Y') }} - BPS Provinsi Sulawesi Barat.</p>
    </div>
</div>
