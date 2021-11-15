import pandas as pd
import numpy as np
reviews = pd.read_csv('data.csv', sep=',', encoding = 'unicode_escape')
reviews = reviews.drop(reviews.index[reviews['Top Dishes'] == 'Invalid'])
reviews = reviews.drop(reviews.index[reviews['Dining Rating'] == 'None'])
reviews = reviews.drop(reviews.index[reviews['Delivery Rating'] == 'None'])
reviews = reviews.drop(reviews.index[reviews['Delivery Rating Count'] == 'Not enough Delivery Reviews'])
reviews.to_csv('rest.csv')