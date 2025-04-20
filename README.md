# Laravel Slack Reminder - CI/CD Pipeline Instructions

## 📁 Project Structure

All Laravel app files are inside `Slack-Me/`. The CI/CD pipeline and Docker build process are scoped accordingly.

## 🛠 Prerequisites

- Docker installed locally
- GitHub repo from https://github.com/rickshawhobo/rz-sl-me
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

### Running the Docker Image ###
- To test this Docker Image locally, set SLACK_SECRET as a secret Environmental Variable.

```bash
export SLACK_SECRET=iamasecretvalue
docker build -t mschroeder-wa-slack-me .
docker run -e SLACK_SECRET mschroeder-wa-slack-me
```

- Once published, run the production image from DockerHub:
```bash
docker run -e SLACK_SECRET metaldev/mschroeder-wa-slack-me:latest
```