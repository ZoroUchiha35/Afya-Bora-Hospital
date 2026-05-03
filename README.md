# WellSpring Hospital Management System

<div align="center">

**A Complete Web-Based Healthcare Management Solution**

[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.0-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-Proprietary-red?style=flat-square)](LICENSE)

*"Your Health, Our Priority"*

</div>

---

## 📋 Overview

WellSpring Hospital Management System is a robust, web-based healthcare administration platform designed to digitize and streamline hospital operations. Founded in 2022, WellSpring Hospital serves the growing healthcare needs of Nairobi, Kenya, and surrounding regions.

### Mission Statement
To provide accessible, high-quality healthcare services through innovative technology solutions that enhance patient care and operational efficiency.

### Key Objectives
- **Patient-Centric Care**: Streamline patient registration and record management
- **Operational Excellence**: Digitize department and service management
- **Research Advancement**: Support malaria research initiatives through data collection
- **Career Development**: Facilitate recruitment of qualified healthcare professionals
- **Community Health**: Promote health awareness and preventive care

---

## ✨ Features

### Core Modules

| Module | Description | Key Functionalities |
|--------|-------------|---------------------|
| **Patient Registration** | Comprehensive patient intake system | • New patient registration<br>• Diagnosis recording<br>• Prescription tracking<br>• Recent patients dashboard |
| **Department Management** | Dynamic department information pages | • Emergency Medicine<br>• Cardiology<br>• Pediatrics<br>• General Surgery |
| **Services Directory** | Service catalog with pricing | • Dental Care<br>• Maternity Services<br>• Nutrition & Dietetics<br>• Health packages pricing table |
| **Careers Portal** | Job openings management | • Medical Doctor positions<br>• Nursing opportunities<br>• Support staff vacancies<br>• Requirements listing |
| **Malaria Research** | Research participant registration | • Participant enrollment<br>• Information portal<br>• Research education<br>• Data collection |
| **Responsive Navigation** | User-friendly interface | • Dropdown menus<br>• Mobile-responsive design<br>• Consistent header/footer |

### Additional Features

- **Dynamic URL Routing**: Content filtering via GET parameters
- **Database Integration**: MySQL backend with PHP MySQLi
- **Responsive Design**: Bootstrap-powered responsive layouts
- **Visual Consistency**: Unified color scheme and styling
- **Contact Information**: Integrated contact details and visiting hours

---

### Homepage
- Hero section with hospital branding
- Statistics dashboard (15+ years, 50+ doctors, 200+ beds, 10,000+ patients)
- About section with hospital history
- Specialty departments quick links
- Why Choose Us features section

### Key Pages
| Page | Preview Description |
|------|---------------------|
| Departments | Individual department pages with images and descriptions |
| Services | Service listings with availability hours and pricing table |
| Careers | Job openings filtered by position type with requirements |
| Registration | Patient registration form with recent patients table view |
| Malaria Info | Comprehensive research information with registration CTA |

---

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, Bootstrap
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Server**: Apache (XAMPP/WAMP/LAMP recommended)


### Development Environment
- **Recommended Stack**: XAMPP / WAMP / MAMP
- **Database Tool**: phpMyAdmin
- **Browser Support**: Chrome, Firefox, Safari, Edge

---

## SQL CODE

### Create the database<br>
```sql
CREATE DATABASE IF NOT EXISTS PatientData;
USE PatientData;
```
<br>

### Table 1: patients (for Task 1 - Patient Registration) <br>
```sql
CREATE TABLE IF NOT EXISTS patients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    id_number VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    diagnosis TEXT,
    drug VARCHAR(100),
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
<br>

### Insert sample data for patients table
```sql
INSERT INTO patients (first_name, last_name, id_number, gender, diagnosis, drug)
VALUES  ('John', 'Mwangi', '12345678', 'male', 'Malaria', 'Artemether-Lumefantrine'),
        ('Mary', 'Wanjiku', '87654321', 'female', 'Hypertension', 'Lisinopril'),
        ('Peter', 'Odhiambo', '23456789', 'male', 'Diabetes Type 2', 'Metformin'),
        ('Jane', 'Akinyi', '98765432', 'female', 'Respiratory Infection', 'Amoxicillin'),
        ('David', 'Kipchoge', '34567890', 'male', 'Malaria', 'Artemether-Lumefantrine'),
        ('Michael', 'Omondi', '78901234', 'male', 'Pneumonia', 'Amoxicillin'),
        ('Esther', 'Wambui', '89012345', 'female', 'Diabetes Type 2', 'Metformin');
```
<br><br>

### Table 2: malaria_registration (for Task 2 - Malaria Research) <br>
```sql
CREATE TABLE IF NOT EXISTS malaria_registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    age INT(3) NOT NULL,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
- Insert sample data for malaria_registration table <br>
```sql
INSERT INTO malaria_registration (first_name, second_name, phone_number, gender, age, password) VALUES
('Brian', 'Otieno', '0712345678', 'male', 28, 'password123'),
('Lucy', 'Wanjiru', '0723456789', 'female', 32, 'secure456'),
('Kelvin', 'Kiprono', '0734567890', 'male', 25, 'mypass789'),
('Faith', 'Chepkoech', '0745678901', 'female', 41, 'research123'),
('Rose', 'Akoth', '0789012345', 'female', 23, 'volunteer99'),
('Patrick', 'Njoroge', '0790123456', 'male', 52, 'research567'),
('Catherine', 'Adhiambo', '0701234567', 'female', 31, 'password789');
```



