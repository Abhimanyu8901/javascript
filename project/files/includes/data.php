<?php
$siteName = 'Blood Saathi';
$siteTagline = 'Companion in Time of Need';
$primaryPhone = '+977-1-4001020';
$emergencyPhone = '+977-9800000102';
$supportEmail = 'support@bloodsaathi.org';
$address = 'New Delhi, India';

$partners = [
    ['name' => 'National Red Cross Center', 'label' => 'Verified blood banking partner'],
    ['name' => 'Delhi Government Hospitals', 'label' => '24/7 emergency coordination partner'],
    ['name' => 'Metro Lifeline Clinic', 'label' => 'Donor screening and triage support'],
];

$impactStats = [
    ['value' => '12,480+', 'label' => 'registered donors', 'note' => 'Onboarded through community drives and partner hospitals'],
    ['value' => '3,260+', 'label' => 'urgent matches completed', 'note' => 'Successful donor-requester connections in the last 18 months'],
    ['value' => '48', 'label' => 'verified hospital partners', 'note' => 'Organizations reviewed by the Blood Saathi operations team'],
    ['value' => '17 min', 'label' => 'average first response', 'note' => 'For high-priority requests in supported cities'],
];

$bloodGroups = [
    ['type' => 'A+', 'canDonateTo' => 'A+, AB+', 'canReceiveFrom' => 'A+, A-, O+, O-'],
    ['type' => 'A-', 'canDonateTo' => 'A+, A-, AB+, AB-', 'canReceiveFrom' => 'A-, O-'],
    ['type' => 'B+', 'canDonateTo' => 'B+, AB+', 'canReceiveFrom' => 'B+, B-, O+, O-'],
    ['type' => 'B-', 'canDonateTo' => 'B+, B-, AB+, AB-', 'canReceiveFrom' => 'B-, O-'],
    ['type' => 'AB+', 'canDonateTo' => 'AB+', 'canReceiveFrom' => 'All groups'],
    ['type' => 'AB-', 'canDonateTo' => 'AB+, AB-', 'canReceiveFrom' => 'A-, B-, AB-, O-'],
    ['type' => 'O+', 'canDonateTo' => 'O+, A+, B+, AB+', 'canReceiveFrom' => 'O+, O-'],
    ['type' => 'O-', 'canDonateTo' => 'All groups', 'canReceiveFrom' => 'O-'],
];

$donors = [
    ['name' => 'Aarav Shrestha', 'group' => 'O+', 'city' => 'Kathmandu', 'availability' => 'Available today', 'contact' => 'Phone only', 'lastDonation' => '78 days ago'],
    ['name' => 'Sneha Koirala', 'group' => 'A-', 'city' => 'Lalitpur', 'availability' => 'Available in 4 hours', 'contact' => 'WhatsApp preferred', 'lastDonation' => '110 days ago'],
    ['name' => 'Ritesh Gurung', 'group' => 'B+', 'city' => 'Bhaktapur', 'availability' => 'Available today', 'contact' => 'SMS preferred', 'lastDonation' => '64 days ago'],
    ['name' => 'Nima Lama', 'group' => 'AB+', 'city' => 'Kathmandu', 'availability' => 'On standby', 'contact' => 'Phone or WhatsApp', 'lastDonation' => '95 days ago'],
    ['name' => 'Sangita Rana', 'group' => 'O-', 'city' => 'Pokhara', 'availability' => 'Available tomorrow', 'contact' => 'Phone only', 'lastDonation' => '121 days ago'],
    ['name' => 'Prakash Thapa', 'group' => 'A+', 'city' => 'Biratnagar', 'availability' => 'Available today', 'contact' => 'SMS preferred', 'lastDonation' => '89 days ago'],
];

$testimonials = [
    ['quote' => 'The platform helped us find an O-negative donor in under thirty minutes. The coordination felt calm, human, and trustworthy.', 'name' => 'Sushma KC', 'role' => 'Family caregiver'],
    ['quote' => 'As a donor, I like that I can control my availability and contact preference without getting overwhelmed by random calls.', 'name' => 'Nabin Adhikari', 'role' => 'Repeat donor'],
    ['quote' => 'The request form captures the details our staff actually needs, which reduces confusion during emergencies.', 'name' => 'Dr. Reema Basnet', 'role' => 'Emergency physician'],
];

$faqs = [
    ['question' => 'How do I request blood?', 'answer' => 'Open the request form, fill in blood group, hospital, urgency, units required, and contact details. The frontend flow is ready; backend delivery can be connected later.'],
    ['question' => 'Can donors update availability?', 'answer' => 'Yes. The dashboard UI includes a profile and availability panel so donors can manage their current status.'],
    ['question' => 'How are hospitals shown as verified?', 'answer' => 'Verified partners are displayed as trust signals with clear labels. In a production build, this should be backed by an admin approval workflow.'],
    ['question' => 'Are notifications already live?', 'answer' => 'The frontend includes email, SMS, and WhatsApp notification preferences and preview cards. Actual message delivery would be connected in the backend phase.'],
];

$quickLinks = [
    ['label' => 'Home', 'href' => 'index.php'],
    ['label' => 'Find Donor / Request Blood', 'href' => 'find-donor.php'],
    ['label' => 'Become a Donor', 'href' => 'become-donor.php'],
    ['label' => 'Blood Groups', 'href' => 'blood-groups.php'],
    ['label' => 'How It Works', 'href' => 'how-it-works.php'],
    ['label' => 'Emergency Help', 'href' => 'emergency-help.php'],
    ['label' => 'FAQs', 'href' => 'faqs.php'],
    ['label' => 'Dashboard', 'href' => 'dashboard.php'],
];
