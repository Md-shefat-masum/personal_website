@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'MD Shefat Masum | privacy policy',
            // "image" => "/dummy/small/img-2.jpg",
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)
@section('contents')
    @include('frontend.layouts.includes.page_banner', [
        'sub_heading' => '',
        'heading' => 'Privacy and Policies',
        'page' => 'privacy-policy',
    ])

    <section>
        <div class="container py-5">
            <h1>Privacy Policy</h1>
            <p><strong>Effective Date:</strong> August 17, 2024</p>

            <h2>1. Introduction</h2>
            <p>Welcome to <strong>shefat.info</strong> (the "Website"). Your privacy is important to us. This Privacy Policy
                explains how we collect, use, and protect your personal information when you visit and interact with our
                Website. By using our Website, you agree to the terms of this Privacy Policy.</p>

            <h2>2. Information We Collect</h2>
            <p><strong>Personal Information:</strong> We may collect personal information such as your name, email address,
                and other contact details when you voluntarily subscribe to our newsletter, sign up for free courses, or
                contact us through the Website.</p>
            <p><strong>Usage Data:</strong> We automatically collect information about your interaction with our Website,
                including your IP address, browser type, pages visited, and the date and time of your visit.</p>
            <p><strong>Cookies:</strong> We use cookies to enhance your browsing experience. Cookies are small files stored
                on your device that help us understand how you use our Website and provide personalized content.</p>

            <h2>3. How We Use Your Information</h2>
            <p><strong>To Provide Services:</strong> We use your personal information to deliver the content, free courses,
                and other resources you request from our Website.</p>
            <p><strong>To Improve Our Website:</strong> Usage data helps us analyze how users interact with our Website,
                allowing us to improve the user experience and content offerings.</p>
            <p><strong>To Communicate with You:</strong> We may use your contact information to send you updates,
                newsletters, and other information that may interest you. You can opt out of these communications at any
                time.</p>

            <h2>4. Sharing Your Information</h2>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties. However, we may
                share your information in the following circumstances:</p>
            <p><strong>With Service Providers:</strong> We may share your information with trusted third-party service
                providers who assist us in operating our Website or conducting our business, as long as those parties agree
                to keep your information confidential.</p>
            <p><strong>Legal Requirements:</strong> We may disclose your information if required by law or in response to
                valid legal processes.</p>

            <h2>5. Data Security</h2>
            <p>We take appropriate security measures to protect your personal information from unauthorized access,
                alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic
                storage is completely secure, and we cannot guarantee absolute security.</p>

            <h2>6. Third-Party Links</h2>
            <p>Our Website may contain links to third-party websites. We are not responsible for the privacy practices or
                content of those websites. We encourage you to read the privacy policies of any third-party sites you visit.
            </p>

            <h2>7. Your Rights</h2>
            <p>You have the right to:</p>
            <ul>
                <li>Access the personal information we hold about you.</li>
                <li>Request the correction of any inaccurate information.</li>
                <li>Request the deletion of your personal information.</li>
                <li>Opt out of receiving communications from us.</li>
            </ul>
            <p>To exercise any of these rights, please contact us at <a href="mailto:[Your Email Address]">[Your Email
                    Address]</a>.</p>

            <h2>8. Children's Privacy</h2>
            <p>Our Website is not intended for children under the age of 13. We do not knowingly collect personal
                information from children under 13. If you believe we have collected such information, please contact us,
                and we will take steps to delete it.</p>

            <h2>9. Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with the updated
                effective date. We encourage you to review this Privacy Policy periodically to stay informed about how we
                are protecting your information.</p>

            <h2>10. Contact Us</h2>
            <p>If you have any questions or concerns about this Privacy Policy, please contact us at <a
                    href="mailto:mshefat924@gmail.com">mshefat924@gmail.com</a>.
            </p>

            <p><strong>Shefat Ullah Masum</strong></p>
        </div>
    </section>
@endsection
