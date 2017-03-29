#!/usr/bin/python

# activate virtualenv
# activate_this = '/home/breakingbytes/.virtualenvs/theLyst/bin/activate_this.py'
# execfile(activate_this, dict(__file__=activate_this))

import os, sys

_PROJECT_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
sys.path.insert(0, _PROJECT_DIR)

_PROJECT_NAME = os.path.basename(_PROJECT_DIR)
os.environ['DJANGO_SETTINGS_MODULE'] = "%s.settings" % _PROJECT_NAME

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
