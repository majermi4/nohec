# Nohec App

> Personal app project to manage expenses related to a sports club

## Personal notes:

### Deployment

Project hosted on [Heroku.com](heroku.com), deploy is triggered with a push to `main` branch.

Environment is configured via the [heroku CLI](https://devcenter.heroku.com/articles/using-the-cli) tools

```
heroku config:set APP_ENV=prod --app=nohec
```

Database credentials are parsed from as `DATABASE_URL` env variable. In prod, heroku automatically does this. Set the value in `.env` file for dev env.