<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Seller — {{ config('app.name', 'Campus Market') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-red-600 via-white to-red-600 min-h-screen p-6 relative">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-rose-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-2xl mx-auto relative z-10">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-red-900 text-3xl font-semibold mb-2">REGISTER AS SELLER</h1>
            <p class="text-sm text-red-700 mt-2">Fill in the form below to register your store</p>
        </div>

        <div class="p-6 sm:p-8 rounded-2xl bg-white border border-red-100 shadow-xl shadow-red-100/50 backdrop-blur-sm">
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Data Toko -->
                <div class="space-y-4">
                    <h2 class="text-red-900 text-lg font-semibold border-b border-red-300 pb-2 mb-4">Store Information</h2>
                    
                    <div>
                        <label for="nama_toko" class="text-red-900 text-sm font-medium mb-2 block">
                            Store Name<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_toko" 
                            name="nama_toko"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter store name"
                            required
                        >
                    </div>

                    <div>
                        <label for="deskripsi_singkat" class="text-red-900 text-sm font-medium mb-2 block">
                            Short Description
                        </label>
                        <input 
                            type="text" 
                            id="deskripsi_singkat" 
                            name="deskripsi_singkat"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Brief description of your store"
                        >
                    </div>
                </div>

                <!-- Data PIC -->
                <div class="space-y-4">
                    <h2 class="text-red-900 text-lg font-semibold border-b border-red-300 pb-2 mb-4">Person In Charge (PIC)</h2>
                    
                    <div>
                        <label for="nama_pic" class="text-red-900 text-sm font-medium mb-2 block">
                            PIC Name<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama_pic" 
                            name="nama_pic"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter PIC name"
                            required
                        >
                    </div>

                    <div>
                        <label for="no_hp_pic" class="text-red-900 text-sm font-medium mb-2 block">
                            Phone Number<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="no_hp_pic" 
                            name="no_hp_pic"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter phone number"
                            required
                        >
                    </div>

                    <div>
                        <label for="email_pic" class="text-red-900 text-sm font-medium mb-2 block">
                            Email<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email_pic" 
                            name="email_pic"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter email address"
                            required
                        >
                    </div>
                </div>

                <!-- Alamat PIC -->
                <div class="space-y-4">
                    <h2 class="text-red-900 text-lg font-semibold border-b border-red-300 pb-2 mb-4">Address</h2>
                    
                    <div>
                        <label for="jalan" class="text-red-900 text-sm font-medium mb-2 block">
                            Street<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="jalan" 
                            name="jalan"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter street address"
                            required
                        >
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="rt" class="text-red-900 text-sm font-medium mb-2 block">
                                RT<span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="rt" 
                                name="rt"
                                class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                                placeholder="RT"
                                required
                            >
                        </div>

                        <div>
                            <label for="rw" class="text-red-900 text-sm font-medium mb-2 block">
                                RW<span class="text-red-600">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="rw" 
                                name="rw"
                                class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                                placeholder="RW"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="kelurahan" class="text-red-900 text-sm font-medium mb-2 block">
                            Kelurahan<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kelurahan" 
                            name="kelurahan"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter kelurahan"
                            required
                        >
                    </div>

                    <div>
                        <label for="kab_kota" class="text-red-900 text-sm font-medium mb-2 block">
                            City/Regency<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="kab_kota" 
                            name="kab_kota"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter city/regency"
                            required
                        >
                    </div>

                    <div>
                        <label for="provinsi" class="text-red-900 text-sm font-medium mb-2 block">
                            Province<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="provinsi" 
                            name="provinsi"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter province"
                            required
                        >
                    </div>
                </div>

                <!-- Dokumen Identitas PIC -->
                <div class="space-y-4">
                    <h2 class="text-red-900 text-lg font-semibold border-b border-red-300 pb-2 mb-4">Identity Documents</h2>
                    
                    <div>
                        <label for="no_ktp_pic" class="text-red-900 text-sm font-medium mb-2 block">
                            ID Card Number<span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="no_ktp_pic" 
                            name="no_ktp_pic"
                            class="w-full text-slate-900 text-sm border border-red-200 px-4 py-3 rounded-md outline-red-500 focus:border-red-400 transition-colors"
                            placeholder="Enter ID card number"
                            required
                        >
                    </div>

                    <div>
                        <label for="foto_pic" class="text-red-900 text-sm font-medium mb-2 block">
                            Photo (jpg/png, ≤2MB)
                        </label>
                        <input 
                            type="file" 
                            id="foto_pic" 
                            name="foto_pic"
                            accept="image/jpeg,image/png"
                            class="w-full text-sm text-slate-900 border border-red-200 rounded-md file:mr-4 file:py-3 file:px-4 file:border-0 file:text-sm file:font-medium file:bg-red-50 file:text-red-900 hover:file:bg-red-100 transition-colors"
                        >
                        <p class="mt-1 text-xs text-red-600">Format: JPG/PNG, Max: 2MB</p>
                    </div>

                    <div>
                        <label for="file_ktp" class="text-red-900 text-sm font-medium mb-2 block">
                            ID Card File (jpg/png/pdf, ≤5MB)
                        </label>
                        <input 
                            type="file" 
                            id="file_ktp" 
                            name="file_ktp"
                            accept="image/jpeg,image/png,application/pdf"
                            class="w-full text-sm text-slate-900 border border-red-200 rounded-md file:mr-4 file:py-3 file:px-4 file:border-0 file:text-sm file:font-medium file:bg-red-50 file:text-red-900 hover:file:bg-red-100 transition-colors"
                        >
                        <p class="mt-1 text-xs text-red-600">Format: JPG/PNG/PDF, Max: 5MB</p>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="!mt-8">
                    <button 
                        type="submit"
                        class="w-full py-3 px-4 text-[15px] font-medium tracking-wide rounded-md text-white bg-gradient-to-r from-red-600 to-rose-600 hover:from-red-700 hover:to-rose-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 cursor-pointer transition-all shadow-lg shadow-red-500/30"
                    >
                        Register as Seller
                    </button>
                </div>

                <p class="text-red-900 text-sm !mt-6 text-center">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-red-600 hover:text-red-700 hover:underline ml-1 whitespace-nowrap font-semibold transition-colors">Login here</a>
                </p>
            </form>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="/" class="text-sm text-red-700 hover:text-red-900 hover:underline transition-colors">← Back to Home</a>
        </div>
    </div>
</body>
</html>
