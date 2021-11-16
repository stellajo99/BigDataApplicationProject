import csv
import os

os.chdir("data/")

def read_file(filename):
    with open(filename+".txt", "r") as f:
        content = f.readlines()
    content = [x.strip().lower() for x in content]
    return content

import random


def make_id2(name, length=2):
    result = [(random.choice('1234567890')) for x in range(length)]
    for i in result:
        name+=str(i)
    list_form = []
    list_form.append(name)
    return name

names= read_file('girl_names')
ids = [make_id2(name) for name in names]

# pwds = []
passwords = read_file('password')
# for pwd in passwords:
#     listp = []
#     listp.append(pwd)
#     pwds.append(listp)
#     listp=[]
age = read_file('age')
gender = read_file('gender')
nulls = read_file('null')
# field names
fields = ['personid','username', 'password', 'age', 'gender']
print(ids)

zipped = zip(nulls, ids, passwords, age, gender)

len_zipped = list(zipped)[:201]
with open('ids.csv', 'w', newline='') as f:
    # using csv.writer method from CSV package
    write = csv.writer(f)

    write.writerow(fields)
    write.writerows(len_zipped)
