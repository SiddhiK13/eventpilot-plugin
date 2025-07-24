# 🎫 EventPilot – Custom WordPress Plugin for Event & Speaker Management

**EventPilot** is a lightweight, modular WordPress plugin built for managing tech events, guest speakers, and registrations through the WordPress dashboard and front-end UI.

It demonstrates the use of:
- PHP (OOP)
- WordPress Plugin APIs
- Custom Post Types (CPT)
- Shortcodes
- Secure form handling
- CSV export from admin

> ✅ Ideal for showcasing hands-on plugin development skills for roles involving PHP, WordPress, and full-stack development.

---

## 📌 Features

- 📅 Create and manage **Events** via Custom Post Type
- 🎤 Add and manage **Speakers**
- 📥 Display a front-end **event registration form**
- 🗃️ Store registrations in the database
- 📊 Export all submissions to CSV via Admin Panel
- ✨ Clean modular folder structure for easy maintenance

---

## 🛠️ Technologies Used

- PHP
- WordPress Core APIs
- HTML/CSS
- JavaScript (basic)
- WP Admin, Hooks & Actions
- WP Nonce for form security

---

## 🧩 Folder Structure

eventpilot-plugin/
├── assets/
│ ├── css/
│ └── js/
├── includes/
│ ├── enqueue.php
│ ├── shortcodes.php
│ ├── event-form-handler.php
│ └── admin-export.php
├── post-types/
│ ├── register-events.php
│ └── register-speakers.php
├── templates/
│ ├── event-list.php
│ └── event-registration.php
├── eventpilot.php
└── README.md


---

## 🔧 Installation & Setup

1. Clone or download this repository into your WordPress project under:



2. Go to your WordPress Dashboard → **Plugins**  
Find **EventPilot** and click **Activate**

3. You’ll now see:
- **Events** and **Speakers** in the admin sidebar
- Export option under Tools → Export Event Registrations

---

## 💻 Usage

### 👉 Shortcodes

Use these shortcodes on any post/page:

- `[event_list]` – shows a list of all events
- `[event_register_form]` – displays the registration form

### 👉 Admin CSV Export

Go to:  
**Tools → Export Event Registrations**  
It will download all registered user data as a `.csv` file.

---

## 🖼️ Screenshots

| Event Listing Page | Registration Form |
|--------------------|-------------------|
| ![Event List](screenshots/event-list.png) | ![Form](screenshots/event-register.png) |

---

## ✅ Purpose

This project was created for showcasing real-world WordPress plugin development during job/internship applications (e.g., **rtCamp**) that require:

- Custom Plugin Development
- PHP + MySQL + WP Skills
- Understanding of CPT, Shortcodes, Actions, Security

---

## 🙋‍♀️ Author

**Siddhi Kshirsagar**  
📧 siddhikshirsagar1306@gmail.com  
🔗 [GitHub – SiddhiK13](https://github.com/SiddhiK13)  
🔗 [LinkedIn – siddhi-kshirsagar04](https://www.linkedin.com/in/siddhi-kshirsagar04)

---



