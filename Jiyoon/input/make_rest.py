import pandas as pd
import numpy as np
reviews = pd.read_csv('rest.csv', sep=',', encoding = 'unicode_escape')


# print(reviews.loc[:,['Name', 'Cuisine']])
import secrets

foo = ['Korean', 'Japanese', 'Chinese']
# print(secrets.choice(foo))

reviews['country'] = np.array([secrets.choice(foo) for x in range(reviews.shape[0])])
reviews.to_csv('rest_country.csv')
