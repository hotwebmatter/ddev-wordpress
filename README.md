# DDEV WordPress Quickstart

Based on instructions from [DDEV Documentation](https://ddev.readthedocs.io/en/latest/users/cli-usage/#wordpress-quickstart).


## How to make this from scratch (not how to use it)

Create a project directory and go there.
(I used a shell variable here, just to show how.)

```bash
PROJECT=${HOME}/repos/demos/ddev-wordpress
mkdir -p $PROJECT
cd $PROJECT
```

Initialize DDEV WordPress project.

```bash
ddev config --project-type=wordpress
ddev start
```

What's in it? Commit that stuff to the repo.

```bash
ls
git init .
git add .
git commit -m "Initialize DDEV WordPress project repo."
```

Create a remote git repo to sync work to, in case local computer is struck by lightning.

```bash
git remote add origin git@github.com:hotwebmatter/ddev-wordpress.git
git branch -M main
git push --set-upstream origin main
```

Download WP core via WP-CLI. Commit that code to the repo. Push it upstream.

```bash
ddev wp core download
git status
git add .
git commit -m "Download WP core via wp-cli."
git push
```

## How to use it

Install WordPress Canberra (5.9.3) using WP-CLI. (This does not affect the filesystem, only the database.)
NOTE: This is all one long line. It's important not to add any newline characters in the middle.

```bash
ddev wp core install --url='$DDEV_PRIMARY_URL' --title='DDEV-WordPress' --admin_user=admin --admin_email=admin@example.com --prompt=admin_password
```

Open site in browser:

```bash
ddev launch
```

Open WordPress admin dashboard in your browser:

```bash
ddev launch wp-admin/
```

Back up your initial database in case you need to roll back:

```bash
mkdir -p ../sqldumps
ddev export-db > ../sqldumps/ddev-wp_$(date -I).sql.gz
```

Test a database restore (your backup file may have a different name):

```bash
ddev import-db --src=../sqldumps/ddev-wp_2022-04-23.sql.gz
```
