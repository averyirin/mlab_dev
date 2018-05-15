#!/bin/sh
sudo git pull
sudo rm app/cache/prod -rf
sudo app/console --env=prod assetic:dump
sudo chown apache:apache app -R
