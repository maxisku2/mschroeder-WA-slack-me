# Slack Reminder - CI/CD Pipeline and Docker Instructions

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

### Securely set the SLACK_SECRET variable ###

1. In your current working directory, create a **.env** file with the following entry: 

```bash
SLACK_SECRET=your-secret-value
```

2. Export all variables found within **.env** into shell Environment variables

```bash
set -o allexport
source .env
set +o allexport
```

### Local ###

```bash
# from the mschroeder-WA-slack-me directory
docker build -t mschroeder-wa-slack-me .
docker run -e SLACK_SECRET=$SLACK_SECRET mschroeder-wa-slack-me
```

### Docker Hub ###

```bash
docker run -e SLACK_SECRET=$SLACK_SECRET metaldev/mschroeder-wa-slack-me:latest
```

--- 

## Testing ##
- [Github Repo](https://github.com/maxisku2/mschroeder-WA-slack-me)
- [CI/CD pipelines](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/workflows/cicd.yml)
  - [Manual pipeline run](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/runs/14562739312)
  - [Pipeline triggered via tags](https://github.com/maxisku2/mschroeder-WA-slack-me/actions/runs/14562806824)
- [Max Schroeder's DockerHub](https://hub.docker.com/repositories/metaldev)
  - [Final image link](https://hub.docker.com/repository/docker/metaldev/mschroeder-wa-slack-me/tags/latest/sha256-deb44cc5d843ea1d3719a093758b8436ad85aaecf5af857d1a0d58a800b9198d)
---

## Change Log ##
- 4/20/25 - Initial documentation built
- 4/21/25 - Finished product