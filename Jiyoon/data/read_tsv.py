import random

import pandas as pd
import numpy as np

reviews = pd.read_csv('/home/glabi/Desktop/BigDataApplicationProject/Jiyoon/data/Restaurant_Reviews.tsv', sep='\t')
# reviews['stars'] = pd.Series(np.random.uniform(low=0, high=5, size=(1000,)))
#pd.Series(np.random.randn(reviews.count()), index=reviews.index)
# print(reviews)

# STAR RATING
for name in reviews.columns:
    for row in reviews.index:
        if reviews.loc[row,name] == 1:
            reviews.loc[row,name] = np.random.uniform(low=3, high=5)
        else:
            reviews.loc[row, name] = np.random.uniform(low=0, high=3)

print(reviews)
data = pd.read_csv('/home/glabi/Desktop/BigDataApplicationProject/Jiyoon/data/data.csv')
# print(data)

print(np.random.randn(10))