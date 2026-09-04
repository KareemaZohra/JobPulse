# JobPulse

A role-based **job board & recruitment platform** built with Laravel 8. Companies post jobs, candidates browse and apply, and admins oversee the whole marketplace — each with a dedicated dashboard.

> 📹 **Demo videos:**
> [Walkthrough](https://www.loom.com/share/7688b244e61e45ba873f68e270d8dc5f) · [More work](https://www.loom.com/share/daf8c06fb71b40ceb7b0cf06a0102e66)

---

## Overview

JobPulse connects three types of users through a single platform. The landing page surfaces top companies, jobs grouped by category, and the most recent postings; from there each user is routed to a role-specific dashboard after logging in.

| Role | What they can do |
|------|------------------|
| **Admin** | View platform stats (active/inactive companies, total jobs), manage companies, jobs, and employees |
| **Company** | Post jobs, view their own postings, review applicants, accept/reject candidates, manage employees |
| **Candidate** | Browse & apply to jobs, track applications, build a professional profile |

---

## Features

- **Authentication** — registration with role selection, login, and password reset (Laravel UI + Sanctum)
- **Job management** — create jobs with title, description, skills/tags, salary, category, and status (`pending` / `active`)
- **Job applications** — one-click apply; applications tracked via a job ↔ candidate mapping with status
- **Applicant review** — companies view applicants per job and take action on each
- **Candidate profiles** — education, work experience, skills, nationality, and LinkedIn
- **Dashboards** — separate admin, company, and candidate dashboards with relevant metrics
- **Dynamic pages (CMS)** — create custom pages with a banner, accessible by URL key
- **Plugins** — plugin registry with company-level mapping
- **Multi-model schema** — users, roles, companies, jobs, profiles, pages, blogs, plugins

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 8.75 |
| Language | PHP 7.3 / 8.0+ |
| Auth | Laravel Sanctum, Laravel UI |
| Frontend | Blade, Bootstrap 5, Vue 2 |
| Build | Laravel Mix (webpack), SASS |
| Database | MySQL |
| HTTP | Guzzle |

---

## Requirements

- PHP **7.3+** or **8.0+**
- Composer
- Node.js & npm
- MySQL

---

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/KareemaZohra/JobPulse.git
cd JobPulse

# 2. Install dependencies
composer install
npm install

# 3. Set up environment
cp .env.example .env
php artisan key:generate

# 4. Configure your database in .env
#    DB_DATABASE=jobpulse
#    DB_USERNAME=root
#    DB_PASSWORD=

# 5. Run migrations
php artisan migrate

# 6. Build front-end assets
npm run dev        # or: npm run watch

# 7. Serve the app
php artisan serve
```

Then visit **http://localhost:8000**.

> **Tip:** Seed the `user_role` table with `admin`, `company`, and `candidate` roles before registering users, since role selection is required at sign-up.

---

## Key Routes

| Method | URI | Purpose |
|--------|-----|---------|
| `GET` | `/` | Home — top companies, jobs by category, recent jobs |
| `GET` | `/jobs/all` | Browse all jobs (paginated) |
| `GET` | `/job/{id}` | Job detail |
| `POST` | `/job/{id}` | Apply to a job |
| `GET` | `/dashboard` | Role-aware dashboard entry |
| `GET` | `/dashboard/admin/*` | Admin dashboard, companies, jobs, employees |
| `GET` | `/dashboard/company/*` | Company dashboard, jobs, employees |
| `GET` | `/dashboard/candidate/*` | Candidate dashboard, applied jobs |
| `GET` | `/job/{id}/applicants` | Applicants for a job |
| `GET` | `/applicant/{id}/{action}` | Accept / reject an applicant |
| `GET/POST` | `/profile/create` | Create candidate profile |
| `GET/POST` | `/page/create` | Create a dynamic page |
| `GET` | `/{key}` | View a dynamic page by key |

---

## Data Model

Core tables and how they relate:

- **users** — includes `role` and `status` (`active` / `inactive`)
- **user_role** — available roles
- **jobs** — postings, linked to a creator (`created_by` → users)
- **job_candidate_mapping** — applications (job ↔ user, with `status`)
- **user_company_mapping** — links employees to companies
- **profiles** — candidate education, experience & skills
- **pages** — dynamic CMS pages
- **plugins** / **plugin_company_mapping** — plugin registry
- **blogs** — blog content

---

## Project Structure

```
app/
├── Http/Controllers/   # Home, Jobs, Dashboard, Profile, Page, User + Auth
├── Models/             # Jobs, Profiles, Pages, Plugins, mappings, etc.
└── Services/           # UserService
database/migrations/    # Schema definitions
resources/views/        # Blade templates (Dashboard, Jobs, Page, Account, auth)
routes/web.php          # Application routes
```

---

see the video here : https://www.loom.com/share/7688b244e61e45ba873f68e270d8dc5f?sid=83454951-e463-448a-a386-913038cbcd13

More works : https://www.loom.com/share/daf8c06fb71b40ceb7b0cf06a0102e66?sid=f0efe65a-a05d-4910-b8c3-d2744d2b2024
