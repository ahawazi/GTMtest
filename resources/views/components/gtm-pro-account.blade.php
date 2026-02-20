<div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto p-6">
    <!-- Demo Account Card -->
    {{-- <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 cursor-pointer account-card" data-type="demo">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Demo Account</h3>

        <div class="space-y-3 mb-6">
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Type:</span>
                <span class="font-semibold text-gray-800">Demo</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Name:</span>
                <span class="font-semibold text-gray-800">Standard</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Platform:</span>
                <span class="font-semibold text-gray-800">MT5</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Min Deposit:</span>
                <span class="font-semibold text-gray-800">$100</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Leverage Ratio:</span>
                <span class="font-semibold text-gray-800">1:100</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Initial Deposit:</span>
                <span class="font-semibold text-gray-800">$1000</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Leverage:</span>
                <span class="font-semibold text-gray-800">1:500</span>
            </div>
        </div>

        <button type="button" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition-colors create-account-btn">
            Create Account
        </button>
    </div> --}}

    <!-- pro Account Card -->
    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 cursor-pointer account-card" data-type="pro">
        <h3 class="text-xl font-bold text-gray-800 mb-4">pro Account</h3>

        <div class="space-y-3 mb-6">
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Type:</span>
                <span class="font-semibold text-gray-800">pro</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Name:</span>
                <span class="font-semibold text-gray-800">Premium</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Platform:</span>
                <span class="font-semibold text-gray-800">MT5</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Min Deposit:</span>
                <span class="font-semibold text-gray-800">$500</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Leverage Ratio:</span>
                <span class="font-semibold text-gray-800">1:200</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Initial Deposit:</span>
                <span class="font-semibold text-gray-800">$5000</span>
            </div>
            <div class="flex justify-between">
                <span class="text-sm text-gray-600">Account Leverage:</span>
                <span class="font-semibold text-gray-800">1:500</span>
            </div>
        </div>

        <button type="button" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition-colors create-account-btn">
            Create Account
        </button>
    </div>
</div>

<script>
    window.dataLayer = window.dataLayer || [];

    document.querySelectorAll('.create-account-btn').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.account-card');
            const type = card.getAttribute('data-type');

            const formData = {
                event: "account_created",
                account_type: type === 'demo' ? 'demo' : 'pro',
                account_name: type === 'demo' ? 'standard' : 'premium',
                account_platform: 'mt5',
                minimum_deposit: type === 'demo' ? 100 : 500,
                leverage_ratio: type === 'demo' ? '1:100' : '1:200',
                initial_deposit: type === 'demo' ? 1000 : 5000,
                account_leverage: '1:500'
            };

            window.dataLayer.push(formData);

            console.log('DataLayer pushed:', formData);
            alert(`${type.charAt(0).toUpperCase() + type.slice(1)} Account created! Data sent to dataLayer.`);
        });
    });
</script>
