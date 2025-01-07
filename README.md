## 🌟 Support Page Website ##
This project is a Support Page Website designed to offer users multiple ways to contact support, including a contact form, live chat integration, and quick call options. The website is built using HTML, CSS, JavaScript, and PHP.

## 🚀 Key Features
Responsive Design: Fully responsive layout using Bootstrap 5.
Contact Form: Users can submit their queries via a Contact Form with PHP backend email handling.
Live Chat Integration: Integrated Tidio Chat for real-time customer support.
Quick Call Option: Direct call initiation via the Call Now button.

## 🛠️ Technologies Used
# Frontend:
HTML5
CSS3
JavaScript
Bootstrap 5

# Backend:
PHP

# Third-Party Tools:
Tidio Chat API
# PHP mail() function for email handling
# 📁 Project Structure
plaintext
``` Copy code
/SupportPage
├── index.html      # Main webpage with contact and chat options
├── style.css       # Styling file for UI design
├── script.php      # Backend script for handling contact form submissions
└── README.md       # Project documentation (this file)

# ⚙️ How to Run the Project Locally
Clone the repository:
bash
Copy code
git clone https://github.com/your-username/support-page.git
Open the project folder and run it using a local server like XAMPP or WAMP.
Start your local server and open the browser:
plaintext
Copy code
http://localhost/support-page

Upload the files to the htdocs directory via File Manager or FTP Client.
Test the website via the provided URL.
📧 Contact Form Email Configuration
Make sure your PHP mail function is enabled on your hosting server.

Update the script.php file with your valid SMTP email configuration:

php
Copy code
$to = "youremail@example.com";
$subject = "New Contact Form Submission";
$headers = "From: $email\r\n";
📝 Usage Instructions
Click on "Contact Us" to open the modal Contact Form.
Click on "Chat Now" to open the Tidio Live Chat window.
Click on "Call Now" to initiate a call via your phone.

Fork the repository.
Create a new branch.
Make your changes and submit a Pull Request.
# 📜 License
This project is licensed under the MIT License.

# 💼 Author
Saurav Jha

✉️ Email: jhasaurav972@gmail.com
💼 LinkedIn: Saurav Jha https://www.linkedin.com/in/jha-saurav97/
