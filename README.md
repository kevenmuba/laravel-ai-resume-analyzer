
# AI Resume Analyzer

AI Resume Analyzer is a modern web application that leverages AI to analyze and optimize resumes against job descriptions. Built with Laravel and OpenAI, it provides instant, actionable feedback to help job seekers improve their chances of landing their dream job.

---

## 🚀 Features

- **AI-Powered Resume Analysis:** Instantly compare your resume to any job description using advanced AI (OpenAI GPT-4o).
- **Match Scoring:** Get a clear match score (0-100) showing how well your resume fits the job.
- **Missing Keywords:** Identify missing skills and keywords required by the job.
- **Actionable Suggestions:** Receive specific, AI-generated tips to improve your resume.
- **Modern UI:** Responsive, user-friendly interface with real-time feedback and beautiful design.
- **Privacy First:** No resumes or job descriptions are stored—analysis is secure and private.
- **Free & No Sign-up:** 100% free to use, no registration required.

---

## 🖥️ Demo

> Paste your resume and a job description, then get instant analysis and improvement suggestions.

---

## 🛠️ Tech Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Blade, Tailwind CSS, Alpine.js, Vite
- **AI Integration:** OpenAI GPT-4o API
- **Database:** SQLite (default, can be changed)
- **Testing:** PHPUnit

---

## 📦 Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Node.js & npm
- [OpenAI API Key](https://platform.openai.com/)

### Installation

1. **Clone the repository:**
	```bash
	git clone https://github.com/your-username/resume-analyzer.git
	cd resume-analyzer
	```
2. **Install PHP dependencies:**
	```bash
	composer install
	```
3. **Install Node dependencies:**
	```bash
	npm install
	```
4. **Copy and configure environment:**
	```bash
	cp .env.example .env
	# Set your OPENAI_API_KEY in the .env file
	```
5. **Generate app key:**
	```bash
	php artisan key:generate
	```
6. **Run migrations:**
	```bash
	php artisan migrate
	```
7. **Build frontend assets:**
	```bash
	npm run build
	```
8. **Start the development server:**
	```bash
	php artisan serve
	```

---

## ⚡ Usage

1. Open [http://localhost:8000](http://localhost:8000) in your browser.
2. Paste your resume and the job description.
3. Click **Analyze Match** to get your score, missing keywords, and improvement suggestions instantly.

---

## 🧩 Project Structure

- `app/Services/AiService.php` — Handles AI integration and validation.
- `app/Http/Controllers/AiMatchController.php` — API endpoint for analysis.
- `resources/views/` — Blade templates for UI.
- `routes/api.php` — Defines `/api/analyze` endpoint.
- `public/` — Entry point and static assets.
- `database/` — Migrations, factories, and seeders.

---

## 🧪 Running Tests

```bash
php artisan test
```

---

## 🤝 Contributing

Contributions are welcome! Please open issues or submit pull requests for improvements and new features.

---

## 🛡️ License

This project is open-sourced under the [MIT license](LICENSE).
