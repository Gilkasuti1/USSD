USSD Application in PHP – M-Pesa Style Menu
This project is a USSD application built using PHP, simulating an M-Pesa-like experience, with menu options like:

🔹 Check Balance

🔹 Send Money

🔹 Lipa na M-Pesa (Pay Bill, Till Number, Pochi la Biashara)

🔹 My Account

It can be integrated with Africa's Talking, Safaricom Daraja API, or other gateways to simulate or handle real USSD transactions.

🚀 Features
Multi-step USSD navigation

Session-based input handling

Menu options with submenus

Simulated M-Pesa functionality

Ready for integration with:

Africa’s Talking USSD gateway

Ngrok for local testing

Optional MySQL for storing user interactions

📂 Project Structure
graphql
Copy
Edit
USSD/
├── index.php           # Entry point for USSD
├── ussd_logic.php      # Main USSD logic (menus, responses)
├── README.md
🛠 Requirements
PHP (>= 7.2)

Web server (e.g., XAMPP, Laragon, or built-in PHP server)

Ngrok (for exposing localhost)

Git (for version control)

(Optional) Africa’s Talking account for USSD testing

▶️ How to Run Locally
Clone the repo:

bash
Copy
Edit
git clone https://github.com/Gilkasuti1/USSD.git
cd USSD
Start local PHP server:

bash
Copy
Edit
php -S localhost:8000
Expose it with Ngrok:

bash
Copy
Edit
ngrok http 8000
Set the Ngrok URL in your Africa’s Talking sandbox USSD callback URL.

📲 Example USSD Flow
markdown
Copy
Edit
1. Check Balance
2. Send Money
3. Lipa na M-Pesa
   1. Pay Bill
   2. Till Number
   3. Pochi la Biashara
4. My Account
📬 Contact
Author: @Gilkasuti1

For integration help or extensions, feel free to reach out!
