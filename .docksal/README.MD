#Site Setup

##Steps to setup

1. clone repo -- will default SOE-develop-mc branch.
2. Checkout branch, e.g., `git checkout -b SOE-jiraticket-shortdescription`
3. Edit the following files, which are located ./dp
    3. Add branch name to line six in Gruntfile.js.
    4. Edit soe.aliases.drushrc.php, making sure the slugs path to build/html is correct.
    5. Edit settings.local.php, updating the `base_url` var. 
6. Run `fin init`
    

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