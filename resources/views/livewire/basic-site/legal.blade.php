<div class="mt-20">
    <!-- Breadcrumb/Header -->
    <div class="bg-slate-900 border-b border-white/5 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Legal <span class="text-blue-500">Information</span></h1>
            <nav class="flex text-sm font-bold text-slate-400 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition">Home</a>
                <span class="mx-3">/</span>
                <span class="text-blue-500 uppercase">{{ str_replace('-', ' ', $type) }}</span>
            </nav>
        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto px-6 py-24">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg prose-slate max-w-none">
                    @if($type === 'privacy-policy')
                        <h2 class="text-4xl font-black text-slate-900 mb-8 font-display">Privacy Policy</h2>
                        
                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">General information</h4>
                        <p>Welcome to our Privacy Policy page! When you use our web site services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. When you share information with us, we can make our services even better for you. For instance, we can show you more relevant search results and ads, help you connect with people or to make sharing with others quicker and easier. As you use our services, we want you to be clear how we’re using information and the ways in which you can protect your privacy. This is important; we hope you will take time to read it carefully.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">Right to access, correct and delete data</h4>
                        <p>Our customers have the right to access, correct and delete personal data relating to them, and to object to the processing of such data, by addressing a written request, at any time. The Company makes every effort to put in place suitable precautions to safeguard the security and privacy of personal data, and to prevent it from being altered, corrupted, destroyed or accessed by unauthorized third parties.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">Management of personal data</h4>
                        <p>You can view or edit your personal data online for many of our services. You can also make choices about our collection and use of your data. How you can access or control your personal data will depend on which services you use. You can choose whether you wish to receive promotional communications from our web site by email, SMS, physical mail, and telephone.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">Information We Collect</h4>
                        <p>Our store collects data to operate effectively and provide you the best experiences with our services. You provide some of this data directly, such as when you create a personal account. We get some of it by recording how you interact with our services by, for example, using technologies like cookies, and receiving error reports or usage data from software running on your device.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">How We Use Your Information</h4>
                        <p>Our web site uses the data we collect for three basic purposes: to operate our business and provide (including improving and personalizing) the services we offer, to send communications, including promotional communications, and to display advertising. In carrying out these purposes, we combine data we collect through the various web site services you use to give you a more seamless, consistent and personalized experience.</p>

                        <div class="mt-16 p-8 bg-slate-50 rounded-2xl border border-slate-100 italic font-medium text-slate-600">
                            For any inquiries regarding your data, please contact us at: <a href="mailto:privacy@amjuuniquemfbng.com" class="text-blue-600 font-bold">privacy@amjuuniquemfbng.com</a>
                        </div>
                    @else
                        <h2 class="text-4xl font-black text-slate-900 mb-8 font-display">Terms and Conditions</h2>
                        
                        <p>By accessing and using the services provided by AMJU Unique Microfinance Bank, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">1. Use of Services</h4>
                        <p>You agree to use our services only for lawful purposes and in association with valid banking activities. Unauthorized use of our digital platforms, including but not limited to unauthorized entry into our systems, misuse of passwords, or misuse of any information posted, is strictly prohibited.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">2. Account Security</h4>
                        <p>You are responsible for maintaining the confidentiality of your account credentials, including your USSD PIN, mobile app password, and internet banking tokens. You agree to notify us immediately of any unauthorized use of your account.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">3. Data Privacy</h4>
                        <p>Our collection and use of personal information in connection with the services are governed by our Privacy Policy. By using the services, you consent to such processing and you warrant that all data provided by you is accurate.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">4. Liability</h4>
                        <p>AMJU Unique Microfinance Bank shall not be liable for any direct, indirect, incidental, special, or consequential damages resulting from the use or inability to use our services, or for the cost of procurement of substitute services.</p>

                        <h4 class="text-xl font-black text-slate-900 mt-12 mb-4">5. Modifications</h4>
                        <p>We reserve the right to modify these terms at any time. Your continued use of the services after such modifications shall constitute your consent to such changes.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
