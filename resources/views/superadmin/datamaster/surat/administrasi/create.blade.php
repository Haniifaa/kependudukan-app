<x-layout>
    <div class="p-4 mt-14">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Buat Surat Administrasi</h1>

        <form method="POST" action="{{ route('superadmin.surat.administrasi.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- NIK -->
                <div>
                    <label for="nikSelect" class="block text-sm font-medium text-gray-700">NIK <span class="text-red-500">*</span></label>
                    <select id="nikSelect" name="nik" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih NIK</option>
                    </select>
                </div>

                <!-- Nama Lengkap -->
                <div>
                    <label for="fullNameSelect" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                    <select id="fullNameSelect" name="full_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Nama Lengkap</option>
                    </select>
                </div>

                <!-- Tempat Lahir -->
                <div>
                    <label for="birth_place" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                    <input type="text" id="birth_place" name="birth_place" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label for="birth_date" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                    <input type="date" id="birth_date" name="birth_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin <span class="text-red-500">*</span></label>
                    <select id="gender" name="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>

                <!-- Pekerjaan -->
                <div>
                    <label for="job_type_id" class="block text-sm font-medium text-gray-700">Pekerjaan <span class="text-red-500">*</span></label>
                    <select id="job_type_id" name="job_type_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Pekerjaan</option>
                        @forelse($jobs as $job)
                            <option value="{{ $job['id'] }}">{{ $job['name'] }}</option>
                        @empty
                            <option value="">Tidak ada data pekerjaan</option>
                        @endforelse
                    </select>
                </div>

                <!-- Agama -->
                <div>
                    <label for="religion" class="block text-sm font-medium text-gray-700">Agama <span class="text-red-500">*</span></label>
                    <select id="religion" name="religion" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Katholik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Buddha</option>
                        <option value="6">Kong Hu Cu</option>
                        <option value="7">Lainnya</option>
                    </select>
                </div>

                <!-- Kewarganegaraan -->
                <div>
                    <label for="citizen_status" class="block text-sm font-medium text-gray-700">Kewarganegaraan <span class="text-red-500">*</span></label>
                    <select id="citizen_status" name="citizen_status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Kewarganegaraan</option>
                        <option value="1">WNA</option>
                        <option value="2">WNI</option>
                    </select>
                </div>

                <!-- Alamat -->
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                    <textarea id="address" name="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required></textarea>
                </div>

                <!-- RT - Changed to textarea to match longText type -->
                <div>
                    <label for="rt" class="block text-sm font-medium text-gray-700">RT <span class="text-red-500">*</span></label>
                    <textarea id="rt" name="rt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required></textarea>
                </div>

                <!-- Nomor Surat -->
                <div>
                    <label for="letter_number" class="block text-sm font-medium text-gray-700">Nomor Surat</label>
                    <input type="number" id="letter_number" name="letter_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2">
                </div>

                <!-- Tanggal Surat -->
                <div>
                    <label for="letter_date" class="block text-sm font-medium text-gray-700">Tanggal Surat <span class="text-red-500">*</span></label>
                    <input type="date" id="letter_date" name="letter_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                </div>

                <!-- Penandatangan -->
                <div>
                    <label for="signing" class="block text-sm font-medium text-gray-700">Penandatangan</label>
                    <input type="text" id="signing" name="signing" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2">
                </div>

                <!-- Isi Pernyataan -->
                <div class="md:col-span-2">
                    <label for="statement_content" class="block text-sm font-medium text-gray-700">Isi Pernyataan <span class="text-red-500">*</span></label>
                    <textarea id="statement_content" name="statement_content" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required></textarea>
                </div>

                <!-- Tujuan -->
                <div class="md:col-span-2">
                    <label for="purpose" class="block text-sm font-medium text-gray-700">Tujuan <span class="text-red-500">*</span></label>
                    <textarea id="purpose" name="purpose" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required></textarea>
                </div>

                <!-- Provinsi section -->
                <div>
                    <label for="province_code" class="block text-sm font-medium text-gray-700">Provinsi <span class="text-red-500">*</span></label>
                    <select id="province_code" name="province_code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Provinsi</option>
                        @foreach($provinces as $province)
                            <option value="{{ $province['code'] }}" data-id="{{ $province['id'] }}">{{ $province['name'] }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" id="province_id" name="province_id" value="">
                </div>

                <!-- Kabupaten -->
                <div>
                    <label for="district_code" class="block text-sm font-medium text-gray-700">Kabupaten <span class="text-red-500">*</span></label>
                    <select id="district_code" name="district_code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Kabupaten</option>
                    </select>
                    <input type="hidden" id="district_id" name="district_id" value="">
                </div>

                <!-- Kecamatan -->
                <div>
                    <label for="subdistrict_code" class="block text-sm font-medium text-gray-700">Kecamatan <span class="text-red-500">*</span></label>
                    <select id="subdistrict_code" name="subdistrict_code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Kecamatan</option>
                    </select>
                    <input type="hidden" id="subdistrict_id" name="subdistrict_id" value="">
                </div>

                <!-- Desa -->
                <div>
                    <label for="village_code" class="block text-sm font-medium text-gray-700">Desa <span class="text-red-500">*</span></label>
                    <select id="village_code" name="village_code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg p-2" required>
                        <option value="">Pilih Desa</option>
                    </select>
                    <input type="hidden" id="village_id" name="village_id" value="">
                </div>
            </div>

            <div class="mt-6 flex justify-end space-x-4">
                <button type="button" onclick="window.history.back()" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-lg">
                    Batal
                </button>
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#7886C7] text-base font-medium text-white hover:bg-[#2D336B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ session('error') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            // Define isUpdating in the global scope so all handlers can access it
            let isUpdating = false;

            // Store the loaded citizens for reuse
            let allCitizens = [];

            // Load all citizens first before initializing Select2
            $.ajax({
                url: '{{ route("citizens.administrasi") }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    limit: 10000 // Increase limit to load more citizens at once
                },
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function(data) {
                    // Transform the response to match what we expect
                    let processedData = data;
                    if (data && data.data && Array.isArray(data.data)) {
                        processedData = data.data;
                    } else if (data && Array.isArray(data)) {
                        processedData = data;
                    }

                    // Make sure we have valid data
                    if (!Array.isArray(processedData)) {
                        return;
                    }

                    allCitizens = processedData;

                    // Now initialize Select2 with the pre-loaded data
                    initializeSelect2WithData();
                },
                error: function(error) {
                    // Initialize Select2 anyway, but it will use AJAX for searching
                    initializeSelect2WithData();
                }
            });

            function initializeSelect2WithData() {
                // Create NIK options array
                const nikOptions = [];
                const nameOptions = [];

                // Process citizen data for Select2
                for (let i = 0; i < allCitizens.length; i++) {
                    const citizen = allCitizens[i];

                    // Handle cases where NIK might be coming from various fields
                    let nikValue = null;

                    if (typeof citizen.nik !== 'undefined' && citizen.nik !== null) {
                        nikValue = citizen.nik;
                    } else if (typeof citizen.id !== 'undefined' && citizen.id !== null && !isNaN(citizen.id)) {
                        // If id is numeric (not a name), it might be the NIK
                        nikValue = citizen.id;
                    }

                    if (nikValue !== null) {
                        const nikString = nikValue.toString();
                        nikOptions.push({
                            id: nikString,
                            text: nikString,
                            citizen: citizen
                        });
                    }

                    // Only add if full_name is available
                    if (citizen.full_name) {
                        nameOptions.push({
                            id: citizen.full_name,
                            text: citizen.full_name,
                            citizen: citizen
                        });
                    }
                }

                // Initialize NIK Select2
                $('#nikSelect').select2({
                    placeholder: 'Pilih NIK',
                    width: '100%',
                    data: nikOptions,
                    language: {
                        noResults: function() {
                            return 'Tidak ada data yang ditemukan';
                        },
                        searching: function() {
                            return 'Mencari...';
                        }
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    },
                    templateResult: function(data) {
                        if (data.loading) return data.text;
                        return '<div>' + data.text + '</div>';
                    }
                }).on("select2:open", function() {
                    // This ensures all options are visible when dropdown opens
                    $('.select2-results__options').css('max-height', '400px');
                });

                // Initialize Full Name Select2
                $('#fullNameSelect').select2({
                    placeholder: 'Pilih Nama Lengkap',
                    width: '100%',
                    data: nameOptions,
                    language: {
                        noResults: function() {
                            return 'Tidak ada data yang ditemukan';
                        },
                        searching: function() {
                            return 'Mencari...';
                        }
                    }
                }).on("select2:open", function() {
                    // This ensures all options are visible when dropdown opens
                    $('.select2-results__options').css('max-height', '400px');
                });

                // Helper function to populate location dropdowns
                async function populateLocationDropdowns(provinceId, districtId, subDistrictId, villageId) {
                    try {
                        // Set the hidden inputs
                        $('#province_id').val(provinceId || '');
                        $('#district_id').val(districtId || '');
                        $('#subdistrict_id').val(subDistrictId || '');
                        $('#village_id').val(villageId || '');

                        // If we have a province ID, fetch its data
                        if (provinceId) {
                            // Get province data from API
                            const provinceResponse = await fetch('{{ url('/location/provinces') }}');
                            const provinceData = await provinceResponse.json();

                            // Find province by ID
                            let province = null;
                            if (provinceData && Array.isArray(provinceData)) {
                                province = provinceData.find(p => p.id == provinceId);
                            } else if (provinceData && provinceData.data && Array.isArray(provinceData.data)) {
                                province = provinceData.data.find(p => p.id == provinceId);
                            }

                            if (province) {
                                // Set province dropdown value
                                $('#province_code').val(province.code);

                                // If we have a district ID, fetch district data
                                if (districtId) {
                                    // Fetch districts for this province
                                    const districtResponse = await fetch(`{{ url('/location/districts') }}/${province.code}`);
                                    const districtData = await districtResponse.json();

                                    // Make sure we have valid district data
                                    let districts = districtData;
                                    if (districtData && districtData.data && Array.isArray(districtData.data)) {
                                        districts = districtData.data;
                                    }

                                    if (Array.isArray(districts) && districts.length > 0) {
                                        // Clear and populate district select
                                        const districtSelect = document.getElementById('district_code');
                                        districtSelect.innerHTML = '<option value="">Pilih Kabupaten</option>';

                                        // Add district options
                                        districts.forEach(district => {
                                            const option = document.createElement('option');
                                            option.value = district.code;
                                            option.textContent = district.name;
                                            option.setAttribute('data-id', district.id);
                                            districtSelect.appendChild(option);
                                        });

                                        // Find and select the matching district
                                        const selectedDistrict = districts.find(d => d.id == districtId);
                                        if (selectedDistrict) {
                                            $('#district_code').val(selectedDistrict.code);

                                            // If we have a subdistrict ID, fetch subdistrict data
                                            if (subDistrictId) {
                                                // Fetch subdistricts for this district
                                                const subDistrictResponse = await fetch(`{{ url('/location/sub-districts') }}/${selectedDistrict.code}`);
                                                const subDistrictData = await subDistrictResponse.json();

                                                // Make sure we have valid subdistrict data
                                                let subDistricts = subDistrictData;
                                                if (subDistrictData && subDistrictData.data && Array.isArray(subDistrictData.data)) {
                                                    subDistricts = subDistrictData.data;
                                                }

                                                if (Array.isArray(subDistricts) && subDistricts.length > 0) {
                                                    // Clear and populate subdistrict select
                                                    const subDistrictSelect = document.getElementById('subdistrict_code');
                                                    subDistrictSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';

                                                    // Add subdistrict options
                                                    subDistricts.forEach(subDistrict => {
                                                        const option = document.createElement('option');
                                                        option.value = subDistrict.code;
                                                        option.textContent = subDistrict.name;
                                                        option.setAttribute('data-id', subDistrict.id);
                                                        subDistrictSelect.appendChild(option);
                                                    });

                                                    // Find and select the matching subdistrict
                                                    const selectedSubDistrict = subDistricts.find(sd => sd.id == subDistrictId);
                                                    if (selectedSubDistrict) {
                                                        $('#subdistrict_code').val(selectedSubDistrict.code);

                                                        // If we have a village ID, fetch village data
                                                        if (villageId) {
                                                            // Fetch villages for this subdistrict
                                                            const villageResponse = await fetch(`{{ url('/location/villages') }}/${selectedSubDistrict.code}`);
                                                            const villageData = await villageResponse.json();

                                                            // Make sure we have valid village data
                                                            let villages = villageData;
                                                            if (villageData && villageData.data && Array.isArray(villageData.data)) {
                                                                villages = villageData.data;
                                                            }

                                                            if (Array.isArray(villages) && villages.length > 0) {
                                                                // Clear and populate village select
                                                                const villageSelect = document.getElementById('village_code');
                                                                villageSelect.innerHTML = '<option value="">Pilih Desa</option>';

                                                                // Add village options
                                                                villages.forEach(village => {
                                                                    const option = document.createElement('option');
                                                                    option.value = village.code;
                                                                    option.textContent = village.name;
                                                                    option.setAttribute('data-id', village.id);
                                                                    villageSelect.appendChild(option);
                                                                });

                                                                // Find and select the matching village
                                                                const selectedVillage = villages.find(v => v.id == villageId);
                                                                if (selectedVillage) {
                                                                    $('#village_code').val(selectedVillage.code);
                                                                }

                                                                // Enable the village select
                                                                $('#village_code').prop('disabled', false);
                                                            }
                                                        }
                                                    }

                                                    // Enable the subdistrict select
                                                    $('#subdistrict_code').prop('disabled', false);
                                                }
                                            }
                                        }

                                        // Enable the district select
                                        $('#district_code').prop('disabled', false);
                                    }
                                }
                            }
                        }
                    } catch (error) {
                        console.error('Error populating location dropdowns:', error);
                    }
                }

                // When NIK is selected, fill in other fields
                $('#nikSelect').on('select2:select', function (e) {
                    if (isUpdating) return; // Prevent recursion
                    isUpdating = true;

                    // Get the selected citizen data
                    const citizen = e.params.data.citizen;

                    if (citizen) {
                        // Set Full Name in dropdown
                        $('#fullNameSelect').val(citizen.full_name).trigger('change.select2'); // Just update UI, not trigger full change

                        // Fill other form fields - PERSONAL INFO ONLY
                        $('#birth_place').val(citizen.birth_place || '');

                        // Handle birth_date - reformatting if needed
                        if (citizen.birth_date) {
                            // Check if birth_date is in DD/MM/YYYY format and convert it
                            if (citizen.birth_date.includes('/')) {
                                const [day, month, year] = citizen.birth_date.split('/');
                                $('#birth_date').val(`${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`);
                            } else {
                                $('#birth_date').val(citizen.birth_date);
                            }
                        } else {
                            $('#birth_date').val('');
                        }

                        // Set address field
                        $('#address').val(citizen.address || '');

                        // Handle gender selection - convert string to numeric value
                        let gender = citizen.gender;
                        if (typeof gender === 'string') {
                            // Convert string gender values to numeric
                            if (gender.toLowerCase() === 'laki-laki') {
                                gender = 1;
                            } else if (gender.toLowerCase() === 'perempuan') {
                                gender = 2;
                            }
                        }
                        $('#gender').val(gender).trigger('change');

                        // Handle religion selection - convert string to numeric value
                        let religion = citizen.religion;
                        if (typeof religion === 'string') {
                            const religionMap = {
                                'islam': 1,
                                'kristen': 2,
                                'katholik': 3,
                                'hindu': 4,
                                'buddha': 5,
                                'kong hu cu': 6,
                                'lainnya': 7
                            };
                            religion = religionMap[religion.toLowerCase()] || '';
                        }
                        $('#religion').val(religion).trigger('change');

                        // Ensure job_type_id is numeric
                        const jobTypeId = parseInt(citizen.job_type_id) || '';
                        $('#job_type_id').val(jobTypeId).trigger('change');

                        // Handle citizen status conversion properly
                        let citizenStatus = citizen.citizen_status;
                        if (typeof citizenStatus === 'string') {
                            if (citizenStatus.toLowerCase() === 'wna') {
                                citizenStatus = 1;
                            } else if (citizenStatus.toLowerCase() === 'wni') {
                                citizenStatus = 2;
                            }
                        }
                        $('#citizen_status').val(citizenStatus).trigger('change');

                        // Convert rt to text if it's a number
                        const rt = citizen.rt ? citizen.rt.toString() : '';
                        $('#rt').val(rt);

                        // Auto-populate location dropdowns based on citizen's location IDs
                        populateLocationDropdowns(
                            citizen.province_id,
                            citizen.district_id,
                            citizen.subdistrict_id || citizen.sub_district_id,
                            citizen.village_id
                        );
                    }

                    isUpdating = false;
                });

                // When Full Name is selected, fill in other fields
                $('#fullNameSelect').on('select2:select', function (e) {
                    if (isUpdating) return; // Prevent recursion
                    isUpdating = true;

                    const citizen = e.params.data.citizen;

                    if (citizen) {
                        // Set NIK in dropdown without triggering the full change event
                        const nikValue = citizen.nik ? citizen.nik.toString() : '';
                        $('#nikSelect').val(nikValue).trigger('change.select2');  // Just update the UI

                        // Directly populate form fields - PERSONAL INFO ONLY
                        $('#birth_place').val(citizen.birth_place || '');

                        // Handle birth_date - reformatting if needed
                        if (citizen.birth_date) {
                            // Check if birth_date is in DD/MM/YYYY format and convert it
                            if (citizen.birth_date.includes('/')) {
                                const [day, month, year] = citizen.birth_date.split('/');
                                $('#birth_date').val(`${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`);
                            } else {
                                $('#birth_date').val(citizen.birth_date);
                            }
                        } else {
                            $('#birth_date').val('');
                        }

                        // Set address field
                        $('#address').val(citizen.address || '');

                        // Handle gender selection - convert string to numeric value
                        let gender = citizen.gender;
                        if (typeof gender === 'string') {
                            if (gender.toLowerCase() === 'laki-laki') {
                                gender = 1;
                            } else if (gender.toLowerCase() === 'perempuan') {
                                gender = 2;
                            }
                        }
                        $('#gender').val(gender).trigger('change');

                        // Handle religion selection - convert string to numeric value
                        let religion = citizen.religion;
                        if (typeof religion === 'string') {
                            const religionMap = {
                                'islam': 1,
                                'kristen': 2,
                                'katholik': 3,
                                'hindu': 4,
                                'buddha': 5,
                                'kong hu cu': 6,
                                'lainnya': 7
                            };
                            religion = religionMap[religion.toLowerCase()] || '';
                        }
                        $('#religion').val(religion).trigger('change');

                        // Handle job selection
                        const jobTypeId = parseInt(citizen.job_type_id) || '';
                        $('#job_type_id').val(jobTypeId).trigger('change');

                        // Handle citizen status
                        let citizenStatus = citizen.citizen_status;
                        if (typeof citizenStatus === 'string') {
                            if (citizenStatus.toLowerCase() === 'wna') {
                                citizenStatus = 1;
                            } else if (citizenStatus.toLowerCase() === 'wni') {
                                citizenStatus = 2;
                            }
                        }
                        $('#citizen_status').val(citizenStatus).trigger('change');

                        // Set RT field
                        const rt = citizen.rt ? citizen.rt.toString() : '';
                        $('#rt').val(rt);

                        // Auto-populate location dropdowns based on citizen's location IDs
                        populateLocationDropdowns(
                            citizen.province_id,
                            citizen.district_id,
                            citizen.subdistrict_id || citizen.sub_district_id,
                            citizen.village_id
                        );
                    }

                    isUpdating = false;
                });
            }

            // Keep original code for province/district/subdistrict/village cascading selects
            const provinceSelect = document.getElementById('province_code');
            const districtSelect = document.getElementById('district_code');
            const subDistrictSelect = document.getElementById('subdistrict_code');
            const villageSelect = document.getElementById('village_code');

            // Hidden inputs for IDs
            const provinceIdInput = document.getElementById('province_id');
            const districtIdInput = document.getElementById('district_id');
            const subDistrictIdInput = document.getElementById('subdistrict_id');
            const villageIdInput = document.getElementById('village_id');

            // Helper function to reset select options
            function resetSelect(select, defaultText = 'Pilih', hiddenInput = null) {
                select.innerHTML = `<option value="">${defaultText}</option>`;
                select.disabled = true;
                if (hiddenInput) hiddenInput.value = '';
            }

            // Helper function to populate select options with code as value and id as data attribute
            function populateSelect(select, data, defaultText, hiddenInput = null) {
                try {
                    select.innerHTML = `<option value="">${defaultText}</option>`;

                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.code;
                        option.textContent = item.name;
                        option.setAttribute('data-id', item.id);
                        select.appendChild(option);
                    });

                    select.disabled = false;

                    if (hiddenInput) hiddenInput.value = '';
                } catch (error) {
                    select.innerHTML = `<option value="">Error loading data</option>`;
                    select.disabled = true;
                    if (hiddenInput) hiddenInput.value = '';
                }
            }

            // Update hidden input when selection changes
            function updateHiddenInput(select, hiddenInput) {
                const selectedOption = select.options[select.selectedIndex];
                if (selectedOption && selectedOption.hasAttribute('data-id')) {
                    hiddenInput.value = selectedOption.getAttribute('data-id');
                } else {
                    hiddenInput.value = '';
                }
            }

            // Province change handler
            provinceSelect.addEventListener('change', function() {
                const provinceCode = this.value;

                // Update the hidden input with the ID
                updateHiddenInput(this, provinceIdInput);

                resetSelect(districtSelect, 'Loading...', districtIdInput);
                resetSelect(subDistrictSelect, 'Pilih Kecamatan', subDistrictIdInput);
                resetSelect(villageSelect, 'Pilih Desa', villageIdInput);

                if (provinceCode) {
                    fetch(`{{ url('/location/districts') }}/${provinceCode}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.length > 0) {
                                populateSelect(districtSelect, data, 'Pilih Kabupaten', districtIdInput);
                                districtSelect.disabled = false;
                            } else {
                                resetSelect(districtSelect, 'No data available', districtIdInput);
                            }
                        })
                        .catch(error => {
                            resetSelect(districtSelect, 'Error loading data', districtIdInput);
                        });
                }
            });

            // District change handler
            districtSelect.addEventListener('change', function() {
                const districtCode = this.value;
                // Update hidden input with ID
                updateHiddenInput(this, districtIdInput);

                resetSelect(subDistrictSelect, 'Loading...', subDistrictIdInput);
                resetSelect(villageSelect, 'Pilih Desa', villageIdInput);

                if (districtCode) {
                    fetch(`{{ url('/location/sub-districts') }}/${districtCode}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.length > 0) {
                                populateSelect(subDistrictSelect, data, 'Pilih Kecamatan', subDistrictIdInput);
                                subDistrictSelect.disabled = false;
                            } else {
                                resetSelect(subDistrictSelect, 'No data available', subDistrictIdInput);
                            }
                        })
                        .catch(error => {
                            resetSelect(subDistrictSelect, 'Error loading data', subDistrictIdInput);
                        });
                }
            });

            // Sub-district change handler
            subDistrictSelect.addEventListener('change', function() {
                const subDistrictCode = this.value;
                // Update hidden input with ID
                updateHiddenInput(this, subDistrictIdInput);

                resetSelect(villageSelect, 'Loading...', villageIdInput);

                if (subDistrictCode) {
                    fetch(`{{ url('/location/villages') }}/${subDistrictCode}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.length > 0) {
                                populateSelect(villageSelect, data, 'Pilih Desa', villageIdInput);
                                villageSelect.disabled = false;
                            } else {
                                resetSelect(villageSelect, 'No data available', villageIdInput);
                            }
                        })
                        .catch(error => {
                            resetSelect(villageSelect, 'Error loading data', villageIdInput);
                        });
                }
            });

            // Village change handler
            villageSelect.addEventListener('change', function() {
                // Update hidden input with ID
                updateHiddenInput(this, villageIdInput);
            });

            // Form validation to check if both IDs and codes are set
            document.querySelector('form').addEventListener('submit', function(e) {
                const provinceId = document.getElementById('province_id').value;
                const districtId = document.getElementById('district_id').value;
                const subDistrictId = document.getElementById('subdistrict_id').value;
                const villageId = document.getElementById('village_id').value;

                if (!provinceId || !districtId || !subDistrictId || !villageId) {
                    e.preventDefault();
                    alert('Silakan pilih Provinsi, Kabupaten, Kecamatan, dan Desa');
                    return false;
                }
            });
        });
    </script>
</x-layout>
