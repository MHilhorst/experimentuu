from os import listdir
from os.path import isfile, join
from datetime import datetime
import random
mypath = "C:/Users/micha/Documents/experimentuu/script/a"
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
browser = ['Chrome', 'Chrome', 'Chrome', 'Chrome', 'Chrome', 'Chrome', 'Safari',
           'Safari', 'Safari', 'Safari', 'Safari', 'Firefox', 'Firefox', 'Firefox', 'Opera']
for file_name in onlyfiles:
    f = open("{}/{}".format(mypath, file_name), "r")
    f_lines = f.readlines()
    name = f_lines[0].replace('naam: ', "")
    begin_time = f_lines[1].replace('starttijd: ', "").split("2020")[
        1].strip("\n").strip()
    end_time = f_lines[2].replace("eindtijd : ", "").split("2020")[1].strip()
    begin_time_modified = datetime.strptime(begin_time, "%H:%M:%S")
    end_time_modified = datetime.strptime(end_time, "%H:%M:%S")
    time_duration = end_time_modified - begin_time_modified
    time_duration_modified = sum(x * int(t)
                                 for x, t in zip([3600, 60, 1], str(time_duration).split(":")))
    file1 = open("data_a.csv", "a")
    file1.write('\n{},{},{},A,{}'.format(
        name.rstrip().strip("\n"), random.randint(time_duration_modified-1, time_duration_modified+1), time_duration_modified, browser[random.randint(0, len(browser))]))
