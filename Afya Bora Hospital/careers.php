<?php include "header.php";
// Get position from URL, In this if no position is specified, it shows all jobs
$position = $_GET['position'] ?? 'all';

// Created an array to store all job openings to switch easily using the URL parameter
$job_openings = [
    'doctor' => [
        'title' => 'Medical Doctors (Specialists)',
        'description' => 'We are looking for specialist doctors in Cardiology, Pediatrics, Surgery, and Internal Medicine to join our growing team.',
        'requirements' => [
            'MBChB or equivalent degree',
            'Master\'s degree in relevant specialty',
            'Valid practicing license',
            'Minimum 3 years experience',
            'Registration with Medical Board'
        ]
    ],

    'nurse' => [
        'title' => 'Registered Nurses',
        'description' => 'Seeking compassionate and skilled nurses for our inpatient wards, ICU, and emergency department.',
        'requirements' => [
            'Diploma or Degree in Nursing',
            'Valid nursing license',
            'BLS/ACLS certification',
            'Minimum 2 years experience',
            'Good communication skills'
        ]
    ],

    'support' => [
        'title' => 'Support Staff',
        'description' => 'Positions available in housekeeping, security, kitchen, and patient transport services.',
        'requirements' => [
            'KCSE certificate',
            'Physical fitness',
            'Team player',
            'Reliability',
            'Basic literacy'
        ]
    ]
];
// Filter logic: If user selects a specific position (like doctor) AND that position exists
if ($position != 'all' && isset($job_openings[$position])) {
    $jobs = [$position => $job_openings[$position]];
} else {
    $jobs = $job_openings;
}
?>

<div style="background: #f8f9fa; padding: 40px 20px;">
    <div style=" margin: 0 auto; background: white;">
        <div style="margin-bottom: 30px;">
            <h1 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 20px; margin: 0;">
                Current Openings at Afya Bora Hospital
            </h1>
        </div>

        <div>
            <?php foreach ($jobs as $job): ?>
            <div style="border: 1px solid #ff9f1c;; border-radius: 10px; padding: 20px; margin-bottom: 30px;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <h2 style="color: #333; margin: 0;"><?php echo $job['title']; ?></h2>
                </div><br>
                <p style="color: #666;"><?php echo $job['description']; ?></p>
                
                <!-- Requirements Section -->
                <div style="margin-top: 20px;">
                    <h3 style="color: #006d77; font-size: 18px;">Requirements:</h3>
                    <ul style="list-style-type: none; padding: 0;">
                        <?php foreach ($job['requirements'] as $requirement): ?>
                        <li style="padding: 8px 0; border-bottom: 1px solid #eee;">
                            ● <?php echo $requirement; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>