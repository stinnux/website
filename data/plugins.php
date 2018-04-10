<?php

return [
    'beanstalk' => [
        'title' => 'Beanstalk',
        'version' => '1.0.0',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use Beanstalkd to process background jobs.',
        'homepage' => 'https://github.com/kanboard/plugin-beanstalk',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-beanstalk/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-beanstalk/releases/download/v1.0.0/Beanstalk-1.0.0.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.32',
    ],
    's3' => [
        'title' => 'Amazon S3 Storage',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'This plugin stores uploaded files to Amazon S3 instead of storing files on the local file system.',
        'homepage' => 'https://github.com/kanboard/plugin-s3',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-s3/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-s3/releases/download/v1.0.4/S3-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'bitbucket-webhook' => [
        'title' => 'Bitbucket Webhook',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Bind Bitbucket webhook events to Kanboard automatic actions.',
        'homepage' => 'https://github.com/kanboard/plugin-bitbucket-webhook',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-bitbucket-webhook/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-bitbucket-webhook/releases/download/v1.0.4/BitbucketWebhook-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'budget' => [
        'title' => 'Budget Planning',
        'version' => '1.0.9',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => '
Budget planning based on sub-task time tracking:

- Create budget lines
- See the expenses based on sub-task time tracking
- Manage user hourly rates
        ',
        'homepage' => 'https://github.com/kanboard/plugin-budget',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-budget/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-budget/releases/download/v1.0.9/Budget-1.0.9.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'client-certificate' => [
        'title' => 'Client SSL Certificate Authentication',
        'version' => '1.0.0',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use SSL client certificate for Kanboard authentication.',
        'homepage' => 'https://github.com/kanboard/plugin-client-certificate',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-client-certificate/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-client-certificate/releases/download/v1.0.0/ClientCertificate-1.0.0.zip',
        'remote_install' => false,
        'compatible_version' => '>=1.0.32',
    ],
    'database-storage' => [
        'title' => 'Database Storage',
        'version' => '1.0.0',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'This plugin stores uploaded files into the database instead of using the local filesystem.',
        'homepage' => 'https://github.com/kanboard/plugin-database-storage',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-database-storage/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-database-storage/releases/download/v1.0.0/DatabaseStorage-1.0.0.zip',
        'remote_install' => false,
        'compatible_version' => '>=1.0.32',
    ],
    'coverimage' => [
         'title' => 'Coverimage',
         'version' => '1.0.38.0',
         'author' => 'BlueTeck',
         'license' => 'MIT',
         'description' => 'This plugin adds a coverimage function to the board.',
         'homepage' => 'https://github.com/BlueTeck/kanboard_plugin_coverimage',
         'readme' => 'https://raw.githubusercontent.com/BlueTeck/kanboard_plugin_coverimage/master/README.md',
         'download' => 'https://github.com/BlueTeck/kanboard_plugin_coverimage/releases/download/1.0.38.0/Coverimage.zip',
         'remote_install' => true,
         'compatible_version' => '1.0.38',
    ],
    'github-auth' => [
        'title' => 'Github Authentication',
        'version' => '1.0.3',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use Github as authentication provider.',
        'homepage' => 'https://github.com/kanboard/plugin-github-auth',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-github-auth/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-github-auth/releases/download/v1.0.3/GithubAuth-1.0.3.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'github-frontend' => [
        'title' => 'Github Frontend',
        'version' => '1.0.1',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use Kanboard to manage Github Issues.',
        'homepage' => 'https://github.com/kanboard/plugin-github-frontend',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-github-frontend/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-github-frontend/releases/download/v1.0.1/GithubFrontend-1.0.1.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'github-webhook' => [
        'title' => 'Github Webhook',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Connect Github webhook events to Kanboard automatic actions.',
        'homepage' => 'https://github.com/kanboard/plugin-github-webhook',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-github-webhook/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-github-webhook/releases/download/v1.0.4/GithubWebhook-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'gitlab-auth' => [
        'title' => 'Gitlab Authentication',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use Gitlab as authentication provider.',
        'homepage' => 'https://github.com/kanboard/plugin-gitlab-auth',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-gitlab-auth/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-gitlab-auth/releases/download/v1.0.4/GitlabAuth-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'gitlab-webhook' => [
        'title' => 'Gitlab Webhook',
        'version' => '1.0.5',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Connect Gitlab webhook events to Kanboard automatic actions.',
        'homepage' => 'https://github.com/kanboard/plugin-gitlab-webhook',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-gitlab-webhook/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-gitlab-webhook/releases/download/v1.0.5/GitlabWebhook-1.0.5.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'gogs-webhook' => [
        'title' => 'Gogs Webhook',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Connect Gogs webhook events to Kanboard automatic actions.',
        'homepage' => 'https://github.com/kanboard/plugin-gogs-webhook',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-gogs-webhook/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-gogs-webhook/releases/download/v1.0.4/GogsWebhook-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'google-auth' => [
        'title' => 'Google Authentication',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use Google as authentication provider.',
        'homepage' => 'https://github.com/kanboard/plugin-google-auth',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-google-auth/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-google-auth/releases/download/v1.0.4/GoogleAuth-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'hipchat' => [
        'title' => 'Hipchat',
        'version' => '1.0.6',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Receive individual or project notifications on Hipchat.',
        'homepage' => 'https://github.com/kanboard/plugin-hipchat',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-hipchat/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-hipchat/releases/download/v1.0.6/Hipchat-1.0.6.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'jabber' => [
        'title' => 'Jabber',
        'version' => '1.0.6',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Receive individual or project notifications on Jabber.',
        'homepage' => 'https://github.com/kanboard/plugin-jabber',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-jabber/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-jabber/releases/download/v1.0.6/Jabber-1.0.6.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'mailgun' => [
        'title' => 'Mailgun',
        'version' => '1.0.7',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use the Mailgun API to send emails and create tasks from emails.',
        'homepage' => 'https://github.com/kanboard/plugin-mailgun',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-mailgun/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-mailgun/releases/download/v1.0.7/Mailgun-1.0.7.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.39',
    ],
    'mattermost' => [
        'title' => 'Mattermost',
        'version' => '1.0.4',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Send Kanboard notifications to Mattermost (self-hosted Slack clone).',
        'homepage' => 'https://github.com/kanboard/plugin-mattermost',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-mattermost/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-mattermost/releases/download/v1.0.4/Mattermost-1.0.4.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'metadata' => [
         'title' => 'Metadata Manager',
         'version' => '1.0.33.1',
         'author' => 'BlueTeck',
         'license' => 'MIT',
         'description' => 'This plugin adds a GUI to manage custom metadata for task, projects and user.',
         'homepage' => 'https://github.com/BlueTeck/kanboard_plugin_metadata',
         'readme' => 'https://raw.githubusercontent.com/BlueTeck/kanboard_plugin_metadata/master/README.md',
         'download' => 'https://github.com/BlueTeck/kanboard_plugin_metadata/releases/download/1.0.33.1/Metadata.zip',
         'remote_install' => true,
         'compatible_version' => '1.0.33',
    ],
    'milestone' => [
         'title' => 'Milestone',
         'version' => '1.0.38-1',
         'author' => 'Olivier Maridat',
         'license' => 'MIT',
         'description' => 'Add a section for milestones to show their related tasks.',
         'homepage' => 'https://github.com/oliviermaridat/kanboard-milestone-plugin',
         'readme' => 'https://raw.githubusercontent.com/oliviermaridat/kanboard-milestone-plugin/master/README.md',
         'download' => 'https://github.com/oliviermaridat/kanboard-milestone-plugin/releases/download/1.0.38/Milestone-1.0.38-1.zip',
         'remote_install' => true,
         'compatible_version' => '>=1.0.37',
    ],
    'oauth2' => [
        'title' => 'OAuth2',
        'version' => '1.0.1',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Generic OAuth2 plugin.',
        'homepage' => 'https://github.com/kanboard/plugin-oauth2',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-oauth2/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-oauth2/releases/download/v1.0.1/OAuth2-1.0.1.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'overwrite_translation' => [
         'title' => 'Overwrite Translation',
         'version' => '1.0.33.0',
         'author' => 'BlueTeck',
         'license' => 'MIT',
         'description' => 'Overwrite default translations without touching kanboard files.',
         'homepage' => 'https://github.com/BlueTeck/kanboard_plugin_overwrite_translation',
         'readme' => 'https://raw.githubusercontent.com/BlueTeck/kanboard_plugin_overwrite_translation/master/README.md',
         'download' => 'https://github.com/BlueTeck/kanboard_plugin_overwrite_translation/releases/download/1.0.33.0/Overwrite_translation.zip',
         'remote_install' => true,
         'compatible_version' => '1.0.33',
    ],
    'postmark' => [
        'title' => 'Postmark',
        'version' => '1.0.7',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use the Postmark API to send emails and create tasks from emails.',
        'homepage' => 'https://github.com/kanboard/plugin-postmark',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-postmark/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-postmark/releases/download/v1.0.7/Postmark-1.0.7.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.39',
    ],
    'rabbitmq' => [
        'title' => 'RabbitMQ',
        'version' => '1.0.0',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'This plugin use RabbitMQ to process background jobs for Kanboard.',
        'homepage' => 'https://github.com/kanboard/plugin-rabbitmq',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-rabbitmq/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-rabbitmq/releases/download/v1.0.0/RabbitMQ-1.0.0.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.32',
    ],
    'registration' => [
        'title' => 'Self-Registration',
        'version' => '1.0.6',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Self-registration plugin to allow people to sign up on Kanboard.',
        'homepage' => 'https://github.com/kanboard/plugin-registration',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-registration/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-registration/releases/download/v1.0.6/Registration-1.0.6.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'relationgraph' => [
        'title' => 'Relationgraph',
        'version' => '0.1.3',
        'author' => 'Xavier Vidal',
        'license' => 'MIT',
        'description' => 'Show relations between tasks using a graph library',
        'homepage' => 'https://github.com/xavividal/kanboard-plugin-relationgraph',
        'readme' => 'https://raw.githubusercontent.com/xavividal/kanboard-plugin-relationgraph/master/README.md',
        'download' => 'https://github.com/xavividal/kanboard-plugin-relationgraph/releases/download/0.1.3/0.1.3.zip',
        'remote_install' => false,
        'compatible_version' => '1.0.30',
    ],
    'reverse-proxy-ldap' => [
        'title' => 'Reverse-Proxy Authentication with LDAP user provider',
        'version' => '1.0.2',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Authenticate users with Reverse-Proxy method but populate user information from the LDAP directory.',
        'homepage' => 'https://github.com/kanboard/plugin-reverse-proxy-ldap',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-reverse-proxy-ldap/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-reverse-proxy-ldap/releases/download/v1.0.2/ReverseProxyLdap-1.0.2.zip',
        'remote_install' => false,
        'compatible_version' => '>=1.0.32',
    ],
    'rocketchat' => [
        'title' => 'RocketChat',
        'version' => '1.0.5',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Receive individual or project notifications on RocketChat.',
        'homepage' => 'https://github.com/kanboard/plugin-rocketchat',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-rocketchat/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-rocketchat/releases/download/v1.0.5/RocketChat-1.0.5.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'sendgrid' => [
        'title' => 'Sendgrid',
        'version' => '1.0.6',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use the Sendgrid API to send emails and create tasks from emails.',
        'homepage' => 'https://github.com/kanboard/plugin-sendgrid',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-sendgrid/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-sendgrid/releases/download/v1.0.6/Sendgrid-1.0.6.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.39',
    ],
    'slack' => [
        'title' => 'Slack',
        'version' => '1.0.6',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Receive individual or project notifications on Slack.',
        'homepage' => 'https://github.com/kanboard/plugin-slack',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-slack/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-slack/releases/download/v1.0.6/Slack-1.0.6.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'sms-2fa' => [
        'title' => 'SMS Two-Factor Authentication',
        'version' => '1.0.3',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Use SMS text messages for two-factor authentication.',
        'homepage' => 'https://github.com/kanboard/plugin-sms-2fa',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-sms-2fa/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-sms-2fa/releases/download/v1.0.3/SmsTwoFactor-1.0.3.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'subtask-forecast' => [
        'title' => 'Subtask Forecast',
        'version' => '1.0.3',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'This plugin display estimates of subtasks in the user calendar. The user timetable must be filled to see time slots in the calendar.',
        'homepage' => 'https://github.com/kanboard/plugin-subtask-forecast',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-subtask-forecast/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-subtask-forecast/releases/download/v1.0.3/SubtaskForecast-1.0.3.zip',
        'remote_install' => true,
        'compatible_version' => '<=1.0.37',
    ],
    'task-board-date' => [
        'title' => 'Task Board Date',
        'version' => '1.0.1',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => 'Add a new date field for tasks to define the visibility on the board and dashboard.',
        'homepage' => 'https://github.com/kanboard/plugin-task-board-date',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-task-board-date/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-task-board-date/releases/download/v1.0.1/TaskBoardDate-1.0.1.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.37',
    ],
    'timetable' => [
        'title' => 'Timetable',
        'version' => '1.0.9',
        'author' => 'Frédéric Guillot',
        'license' => 'MIT',
        'description' => '
- Timetable / schedule for users
- Display in the calendar intersects between sub-task time tracking and user schedule
- Timetable management: weekly, daily, overtime, days off
- The timetable is configurable for each user
- Subtask time tracking is calculated according to the timetable
        ',
        'homepage' => 'https://github.com/kanboard/plugin-timetable',
        'readme' => 'https://raw.githubusercontent.com/kanboard/plugin-timetable/master/README.md',
        'download' => 'https://github.com/kanboard/plugin-timetable/releases/download/v1.0.9/Timetable-1.0.9.zip',
        'remote_install' => true,
        'compatible_version' => '<=1.0.37',
    ],
    'wunderlist' => [
        'title' => 'Wunderlist',
        'version' => '1.0.1',
        'author' => 'Maxime (Epoc)',
        'license' => 'MIT',
        'description' => 'This plugin allows you to import Wunderlist tasks and lists directly from the user interface of Kanboard by uploading a Wunderlist export file.',
        'homepage' => 'https://github.com/EpocDotFr/kanboard-wunderlist',
        'readme' => 'https://raw.githubusercontent.com/EpocDotFr/kanboard-wunderlist/master/README.md',
        'download' => 'https://github.com/EpocDotFr/kanboard-wunderlist/releases/tag/v1.0.1',
        'remote_install' => false,
        'compatible_version' => '1.0.23',
    ],
    'timetrackingeditor' => [
      'title' => 'Time Tracking Editor',
      'version' => '1.0.17',
      'author' => 'Stinnux',
      'license' => 'MIT',
      'description' => 'Manually Add and Edit Time Tracking entries, add comments and select billable/not billable to time tracking entries. Export Time Tracking Entries as HTML',
      'homepage' => 'https://github.com/stinnux/kanboard-Timetrackingeditor',
      'readme' => 'https://raw.githubusercontent.com/stinnux/kanboard-Timetrackingeditor/master/README.md',
      'download' => 'https://github.com/stinnux/kanboard-Timetrackingeditor/releases/download/1.0.17/Timetrackingeditor-1.0.17.zip',
      'remote_install' => true,
      'compatible_version' => '1.1.22',
    ],
    'subtaskdate' => [
        'title' => 'Subtask Due Date',
        'version' => '1.0.0',
        'author' => 'Manuel Raposo',
        'license' => 'MIT',
        'description' => 'This plugin adds a Due Date to subtasks.',
        'homepage' => 'https://github.com/eSkiSo/Subtaskdate',
        'readme' => 'https://raw.githubusercontent.com/eSkiSo/Subtaskdate/master/README.md',
        'download' => 'https://github.com/eSkiSo/Subtaskdate/releases/download/v1.0.0/Subtaskdate-1.0.0.zip',
        'remote_install' => true,
        'compatible_version' => '>=1.0.34',
    ],
    'bigboard' => [
        'title' => 'Bigboard',
        'version' => '1.0.2',
        'author' => 'Stinnux',
        'license' => 'MIT',
        'description' => 'A Kanboard that can display multiple projects.',
        'homepage' => 'https://github.com/stinnux/kanboard-bigboard',
        'readme' => 'https://raw.githubusercontent.com/stinnux/kanboard-bigboard/master/README.md',
        'download' => 'https://github.com/stinnux/kanboard-bigboard/releases/download/1.0.2/Bigboard-1.0.2.zip',
        'remote_install' => true,
        'compatible_version' => '1.1.22',
      ],
];
