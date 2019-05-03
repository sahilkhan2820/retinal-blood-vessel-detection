#!/usr/bin/env python

import os
import tt_2
import subprocess
print("this is printed from 2 python file")
subprocess.call(['gnome-terminal', '-x', './tt_2.py'])
os.system("./tt_2.py")
