import csv
import os
def read_names(gender = "girl"):
    names_list = []
    dir = os.getcwd()
    os.chdir("data/")
    file = open(gender+"_names.txt", "r")

    with open(gender+"_names.txt", "r") as f:
        content = f.readlines()
    # you may also want to remove whitespace characters like `\n` at the end of each line
    content = [x.strip().lower() for x in content]
    # print(content)
    return content


import random
import string


def specific_string(length):
    sample_string = 'pqrstuvwxy'  # define the specific string
    # define the condition for random string
    result = ''.join((random.choice(sample_string)) for x in range(length))
    # print(" Randomly generated string is: ", result)

def make_id(name, length=6):
    result = ''.join((random.choice(name)) for x in range(length))
    list_form = []
    list_form.append(result)
    return list_form

def make_id2(name, length=2):
    result = [(random.choice('1234567890')) for x in range(length)]
    for i in result:
        name+=str(i)
    list_form = []
    list_form.append(name)
    return list_form

names= read_names()
ids = []
for name in names:
    ids.append(make_id2(name))

# field names
fields = ['id']
print(ids)
with open('ids.csv', 'w', newline='') as f:
    # using csv.writer method from CSV package
    write = csv.writer(f)

    write.writerow(fields)
    write.writerows(ids)