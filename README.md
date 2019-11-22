# desafiovhsys2
Create and generate and be notified to download on background

This was created on a localhost using Laragon.

It's necesesary to create a CronJob in the server every 1 minute pointing to the 'runCron.php' script.

When the user ask to download the huge file, recieve a notification on the browser that will recieve an email when the .zip is ready.

Every minute the runCron.php send emails acording to '/cron/' subjobs generated.

After the mail is sent the subjob is eliminated and the .zip files keeps on the server.