import csv
import random

import pandas as pd

reviews = pd.read_csv('Restaurant_Reviews.tsv', sep='\t', encoding="utf-8")

temp_list = []
total_list = []
for index, row in reviews.iterrows():
    temp_list.append(row['Review'])
    if row['Liked'] == 1:
        temp_list.append(round(random.uniform(3.5, 5), 1))
    else:
        temp_list.append(round(random.uniform(0, 3.5), 1))
    total_list.append(temp_list)
    temp_list = []
print(total_list)

# field names
fields = ['Review', 'Stars']

with open('data/reviews.csv', 'w', newline='') as f:
    # using csv.writer method from CSV package
    write = csv.writer(f)

    write.writerow(fields)
    write.writerows(total_list)