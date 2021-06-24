# Installation steps

1- Clone the project.

```shell script
git clone https://github.com/moosabukhamsin/sensor
```
# create the required docker containers and install all dependencies
2- run ./vendor/bin/sail up

# run the scheduled tasks in the defined in the kernel
3- run ./vendor/bin/sail artisan short-schedule:run



