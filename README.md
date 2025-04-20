# Laravel Slack Reminder - CI/CD Pipeline Instructions

## 📁 Project Structure

All Laravel app files are inside `Slack-Me/`. The CI/CD pipeline and Docker build process are scoped accordingly.

## 🛠 Prerequisites

- Docker installed locally
- GitHub repo from https://github.com/maxisku2/mschroeder-WA-slack-me
- DockerHub account

---

## 🔐 Required GitHub Secrets

| Name              | Description                     |
|------------------|---------------------------------|
| `SLACK_SECRET`     | Arbitrary value, e.g. "test"     |
| `DOCKER_USERNAME` | Your DockerHub username         |
| `DOCKER_PASSWORD` | Your DockerHub password/token   |

---

## 🧪 Run the Pipeline

### 🔄 Manual Trigger (Build + Test only)
- Go to **Actions tab** on GitHub
- Click **"Run workflow"**

### 🏷 Tag Push (Full CI/CD)
```bash
git tag v1.0.0
git push origin v1.0.0
```

---

## Running the Docker Image ###

### Local ###
```bash
export SLACK_SECRET=<secret_value>
docker build -t mschroeder-wa-slack-me .
docker run -e SLACK_SECRET mschroeder-wa-slack-me
```

### Docker Hub ###
```bash
export SLACK_SECRET=<secret_value>
docker run -e SLACK_SECRET metaldev/mschroeder-wa-slack-me:latest
```

--- 

## Testing ##

- [Github Repo](https://github.com/maxisku2/mschroeder-WA-slack-me)
- [CI/CD pipelines](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/workflows/cicd.yml)
  - [Manual pipeline run](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/runs/14562739312)
  - [Pipeline triggered via tags](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/runs/14562806824)
- [Max Schroeder's DockerHub](https://hub.docker.com/repositories/metaldev)
  - [Final image link](https://hub.docker.com/repository/docker/metaldev/mschroeder-wa-slack-me/tags/latest/sha256-e50bcc14000165a8ec637177e56e6304b239ab76928f858f739b89b960d9c3a8)
---

## Change Log ##

- 4/20/25 - Initial documentation built