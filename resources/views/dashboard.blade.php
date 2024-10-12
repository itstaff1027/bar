<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                
            </div>
        </div>
    </div>
    <div class="bg-white p-6 rounded shadow-md text-center">
        <h1 class="text-xl font-semibold mb-4">Generate QR Code</h1>
        <input type="text" id="qrText" class="border rounded p-2 mb-4" placeholder="Enter text or URL" />
        <button id="generate" class="bg-blue-600 text-white rounded px-4 py-2">Generate QR Code</button>
        <div id="qrcode" class="mt-4"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#generate').click(function() {
                const text = $('#qrText').val();
                $('#qrcode').empty(); // Clear previous QR code
                if (text) {
                    $('#qrcode').qrcode({
                        text: text,
                        width: 128,
                        height: 128
                    });
                } else {
                    alert("Please enter a valid text or URL.");
                }
            });
        });
    </script>
</x-app-layout>
