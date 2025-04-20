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
export SLACK_SECRET=iamasecretvalue
docker build -t mschroeder-wa-slack-me .
docker run -e SLACK_SECRET mschroeder-wa-slack-me
```

### Docker Hub ###
```bash
export SLACK_SECRET=iamasecretvalue
docker run -e SLACK_SECRET metaldev/mschroeder-wa-slack-me:latest
```

--- 

## Testing ##

- [Github Repo](https://github.com/maxisku2/mschroeder-WA-slack-me)
- [CI/CD pipeline](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/workflows/cicd.yml)

---

## Change Log ##

- 4/20/25 - Initial documentation built