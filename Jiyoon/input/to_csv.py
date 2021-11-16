import random

import csv

# field names
fields = ['Age']

# input rows of csv file
age_row = []
gender_row = []


for x in range(200):
    age = random.randint(10, 78)
    age_row.append([age])

    gender = random.randint(10, 78)
    if gender%2 == 0:
        gender = 'F'
    else:
        gender = 'M'
    gender_row.append([gender])

print(age_row)
zipped = zip(age_row, gender_row)
null_row = [['NULL'] for x in range(300)]

with open('data/null.txt', 'w', newline='') as f:
    # using csv.writer method from CSV package
    write = csv.writer(f)

    write.writerow(fields)
    write.writerows(null_row)
