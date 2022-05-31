## Family Tree

### Requirements:
- [Docker](https://www.docker.com/)

We assume that you work on either mac os or linux. **Windows is not supported**

### Run locally

Run docker compose:
```bash
docker-compose up
```

`If this is the first time you run the app, then open brower on http://localhost:7474/browser/`

Use `neo4j/neo4j` as username and password and then update password to whatever you wish.
On the official page it's mentioned that for development purpose the authentication can be disabled by passing environment variables, but it didn't work.

Management UI:
- neo4j: http://localhost:7474/browser/
- zookeeper: http://localhost:9000/
  
  Read this [tutorial](https://zoonavigator.elkozmon.com/en/docs-pre-v1/quickstart.html) to get more details.

