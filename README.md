🚀 Laravel Cloud DevOps Deployment
📌 Project Description

This project demonstrates a full-stack Laravel application deployed to a Ubuntu-based VPS using DevOps best practices.

The application runs inside a Docker container, is automated with CI/CD using GitHub Actions, and is monitored using UptimeRobot to ensure service availability.

This project was built as a Final Cloud & DevOps Deployment Project and also serves as an entry-level DevOps Engineer portfolio.

🛠️ Tech Stack
Application

Laravel

PHP 8.3

Blade Template

SQLite Database

DevOps & Infrastructure

Docker

Dockerfile

GitHub Actions (CI/CD)

Ubuntu VPS (Biznet Gio)

SSH Key Authentication

Monitoring

UptimeRobot (HTTP Monitoring)

🏗️ Deployment Architecture

Source code hosted on GitHub repository

GitHub Actions handles Continuous Integration

Application deployed to VPS via SSH

Application runs inside a Docker container

Web service exposed through port 80

Uptime monitoring enabled for availability tracking

High-level flow:

Developer → GitHub → GitHub Actions → VPS → Docker Container → Live Application

⚙️ CI/CD Pipeline
Continuous Integration (CI)

Triggered on push to main branch

Build Docker image

Validate application build process

Continuous Deployment (CD)

SSH connection to VPS using SSH key stored in GitHub Secrets

Pull latest repository changes

Rebuild Docker image

Restart application container

This pipeline ensures the VPS always runs the latest version of the application.

🚀 Deployment
Manual Deployment (Initial Setup)

Initial manual steps:

VPS Ubuntu setup

Docker installation

Repository cloning

Docker image build

Application container execution

Automated Deployment (CI/CD)

After CI/CD setup:

Deployment runs automatically via GitHub Actions

No manual deployment required

🌐 Live Application

URL: http://103.31.205.98

Environment: Ubuntu VPS (Biznet Gio)

Status: Live & Monitored

📊 Monitoring

Monitoring is implemented using UptimeRobot:

HTTP checks every 5 minutes

Uptime and response time tracking

Automatic downtime detection

Monitoring ensures application availability and reliability.

🔐 Security

Security practices applied:

SSH access using key-based authentication

No secrets committed to the repository

Environment variables managed via .env file

Application isolation using Docker containers

📈 Outcomes & Learnings

Through this project, I learned:

How to deploy applications to a VPS professionally

Docker-based containerization

CI/CD automation using GitHub Actions

Basic service monitoring and uptime tracking

End-to-end DevOps workflow from development to production

👤 About the Author

Galang Agung Munggaran
Vocational High School student majoring in Software Engineering (RPL) with a strong interest in Cloud Computing and DevOps Engineering.

This project is part of a hands-on learning journey to understand real-world DevOps workflows, including containerization, CI/CD pipelines, VPS deployment, and monitoring.

📝 Notes

This project focuses on DevOps fundamentals implementation, not application feature complexity.
The main goal is to build a stable, automated, and monitored deployment pipeline.

❤️ Closing

This project marks my first serious step into DevOps Engineering.
While there is still much to learn, this deployment serves as a strong foundation for future projects.
