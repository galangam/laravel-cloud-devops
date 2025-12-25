# 🚀 Laravel Cloud DevOps Deployment

## 📌 Project Overview
This repository demonstrates a **full-stack Laravel application** deployed on an **Ubuntu-based VPS** using **DevOps best practices**.

The application is containerized with **Docker**, deployed automatically using **GitHub Actions (CI/CD)**, and monitored using **UptimeRobot** to ensure service availability and reliability.

This project was built as a **Final Cloud & DevOps Deployment Project** and also serves as an **entry-level DevOps Engineer portfolio**.

---

## 🛠️ Tech Stack

### Application
- Laravel
- PHP 8.3
- Blade Template
- SQLite Database

### DevOps & Infrastructure
- Docker
- Dockerfile
- GitHub Actions (CI/CD)
- Ubuntu VPS (Biznet Gio)
- SSH Key Authentication

### Monitoring
- UptimeRobot (HTTP Monitoring)

---

## 🏗️ Deployment Architecture
- Source code hosted on GitHub
- CI/CD pipeline handled by GitHub Actions
- Application built and run inside Docker containers
- Deployed to Ubuntu VPS via SSH
- Service health monitored using UptimeRobot

---

## 🚀 Deployment Flow

### Initial Manual Setup
- Ubuntu VPS provisioning
- Docker installation
- Repository cloning
- Docker image build
- Application container execution

### Automated Deployment (CI/CD)
- Deployment runs automatically on push to `main`
- No manual deployment required after CI/CD setup

---

## 🌐 Live Application
- **URL:** http://103.31.205.98  
- **Environment:** Ubuntu VPS (Biznet Gio)  
- **Status:** Live & Monitored

---

## 📊 Monitoring
Monitoring is implemented using **UptimeRobot**:
- HTTP checks every 5 minutes
- Uptime & response time tracking
- Automatic downtime detection

This ensures application availability and reliability.

---

## 🔐 Security Practices
- No secrets committed to the repository
- Environment variables managed via `.env`
- Application isolation using Docker containers
- SSH key-based authentication for VPS access

---

## 📈 Outcomes & Learnings
Through this project, I learned:
- Professional VPS deployment workflows
- Docker-based containerization
- CI/CD automation using GitHub Actions
- Basic service monitoring and uptime tracking
- End-to-end DevOps workflow from development to production

---

## 👤 About the Author
**Galang Agung Munggaran**  
Vocational High School student majoring in Software Engineering (RPL) with a strong interest in **Cloud Computing and DevOps Engineering**.

This project is part of a hands-on learning journey to understand real-world DevOps workflows, including containerization, CI/CD pipelines, VPS deployment, and monitoring.

---

## 📝 Notes
This project focuses on **DevOps fundamentals implementation**, not application feature complexity.  
The main goal is to build a **stable, automated, and monitored deployment pipeline**.

---

## ❤️ Closing
This project marks my **first serious step into DevOps Engineering**.  
While there is still much to learn, this deployment provides a strong foundation for future projects.
