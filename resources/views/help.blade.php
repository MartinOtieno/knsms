@extends('layouts.layout')

@section('content')

<style>
.help-container {
    padding: 20px;
    margin-top: 100px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
}
</style>
<div class="help-container">
    <h1>Help Center: KNSMS</h1>
    <h2>Frequently Asked Questions (FAQs)</h2>
    <ol>
        <li>
            <strong>What is KNSMS?</strong>
            <p>KNSMS is a messaging service that allows users to send and receive text messages across various platforms and devices.</p>
        </li>
        <li>
            <strong>How do I get started with KNSMS?</strong>
            <p>To get started with KNSMS, simply sign up for an account on our website or download the KNSMS app from your device's app store. Once you've created an account, you can start sending messages to your contacts.</p>
        </li>
        <li>
            <strong>Can I use KNSMS to send multimedia messages (MMS)?</strong>
            <p>Yes, KNSMS supports sending multimedia messages, including images, videos, and audio files, in addition to text messages.</p>
        </li>
        <li>
            <strong>Is KNSMS secure?</strong>
            <p>We take the security and privacy of our users seriously. KNSMS employs industry-standard encryption protocols to ensure that your messages and personal information remain secure.</p>
        </li>
        <li>
            <strong>How can I contact KNSMS support?</strong>
            <p>If you have any questions, concerns, or encounter any issues while using KNSMS, please don't hesitate to contact our support team at <a href="mailto:support@knms.com">support@knms.com</a>. We're here to help!</p>
        </li>
    </ol>

    <h2>Troubleshooting Tips</h2>
    <ul>
        <li>
            <strong>Messages not sending/receiving</strong>
            <ul>
                <li>Check your internet connection: Ensure that you have a stable internet connection to send and receive messages.</li>
                <li>Verify recipient's number: Make sure you've entered the correct phone number or contact information of the recipient.</li>
                <li>Restart the app: Sometimes, simply restarting the KNSMS app can resolve connectivity issues.</li>
            </ul>
        </li>
        <li>
            <strong>Multimedia messages not loading</strong>
            <ul>
                <li>Check your data connection: Ensure that you have a strong data connection to download multimedia messages.</li>
                <li>Clear app cache: Clearing the app cache can help resolve issues with loading multimedia content.</li>
                <li>Update the app: Make sure you're using the latest version of the KNSMS app, as updates may include bug fixes and performance improvements.</li>
            </ul>
        </li>
    </ul>

    <h2>Contact Us</h2>
    <p>If you couldn't find the answer to your question or need further assistance, feel free to reach out to us at <a href="mailto:support@knms.com">support@knms.com</a>. Our support team is available to help you with any issues or concerns you may have.</p>

</div>
@endsection
