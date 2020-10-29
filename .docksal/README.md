#Site Setup

##Steps to setup

1. clone repo -- will default SOE-develop-mc branch.
2. Checkout new branch, e.g., `git checkout -b SOE-jiraticket-shortdescription`
3. Edit the following files, which are located ./docksal
    1. Add branch name to line six in Gruntfile.js.
    2. Edit soe.aliases.drushrc.php, making sure the slugs path to build/html is correct.
    3. Optional: edit settings.local.php, updating the `base_url` var. Note that the `base_url` is set based on the directory name of this repository, e.g., `grunt-drupal-tasks.docksal`.
4. If you use a key other than `id_rsa` to connect to Acquia, run `fin ssh-key add <keyname>` (e.g., `fin ssh-key add id_rsa_acquia_4096`)
5. Run `fin init`


Building Notes:
`npm install` failed. Trying to downgrade. Downgrading success. Using node -v 10.22.x

Grunt failed when I configured Gruntconfig.json file for drush in /vendor folder. To find correct location, had to use `whereis` command.

Be sure to add path to src. Refer to the following:

```
"srcPaths": {
           "make": "src/engineering.make",
           "drupal": "src"
         },
```

Need aliases from Acquia

Running `grunt settings` results in an error that the same files are already in the folder. Skipping step.

##Links
https://github.com/SU-SOE/grunt-drupal-tasks/blob/SOE-develop-mc/docs/soe_build_notes.md
https://stackoverflow.com/questions/47008159/how-to-downgrade-node-version
https://www.npmjs.com/package/n
https://phase2.github.io/grunt-drupal-tasks/10_BUILD/
https://www.drupal.org/node/1401522


####Commands
#####Install n with node
`fin exec npm install -g n`

#####Running commands with older node version
`fin exec n exec 10.16.0 npm install`

#####Finding drush
`fin exec whereis drush`
